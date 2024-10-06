<?php
// find_password.php
include 'db_config.php';  // 데이터베이스 연결

// POST 요청으로 전달된 데이터를 JSON 형식으로 받음
$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

$name = $data['name'];
$date = $data['date'];

$response = [];

// 빈 값 체크
if (empty($name) || empty($date)) {
    $response['status'] = 'error';
    $response['message'] = '이름과 생년월일을 입력해주세요.';
    echo json_encode($response);
    exit;
}

// 데이터베이스에서 사용자 정보 확인
$query = "SELECT * FROM users WHERE name = ? AND birthdate = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $name, $date);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // 사용자 정보가 존재하는 경우 임시 비밀번호 생성
    $temp_password = bin2hex(random_bytes(4));  // 임시 비밀번호 생성 (8자리)

    // 데이터베이스에 임시 비밀번호 업데이트 (MD5로 암호화)
    $hashed_password = md5($temp_password);
    $update_query = "UPDATE users SET password = ? WHERE name = ? AND birthdate = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("sss", $hashed_password, $name, $date);
    $update_stmt->execute();

    // 성공 메시지 및 임시 비밀번호 반환
    $response['status'] = 'success';
    $response['message'] = '비밀번호 찾기 성공';
    $response['temp_password'] = $temp_password;
} else {
    // 사용자 정보가 존재하지 않는 경우
    $response['status'] = 'error';
    $response['message'] = '회원정보가 존재하지 않습니다.';
}

echo json_encode($response);
?>
