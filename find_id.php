<?php
include 'db_config.php'; // Include your database connection

// SQL 필터 함수
function sqlfilter($data) {
    global $gconnet;
    return mysqli_real_escape_string($gconnet, $data);
}

// 응답 배열 초기화
$response = array();

// POST로 받은 데이터에 SQL 필터를 적용하여 값 가져오기
$name = isset($_POST['name']) ? sqlfilter($_POST['name']) : '';
$email = isset($_POST['email']) ? sqlfilter($_POST['email']) : '';

// 필수값 체크
if ($name == '' || $email == '') {
    $response['status'] = 'error';
    $response['message'] = '이름과 이메일을 입력해주세요.';
} else {
    // 데이터베이스에서 사용자의 아이디 찾기
    $sql = "SELECT user_id FROM register WHERE name = ? AND email = ? AND del_yn = 'N'";
    $stmt = $gconnet->prepare($sql);

    if ($stmt === false) {
        $response['status'] = 'error';
        $response['message'] = '데이터베이스 쿼리 준비 실패';
    } else {
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id);
            $stmt->fetch();
            $response['status'] = 'success';
            $response['message'] = '회원님의 아이디는: ' . $user_id;
        } else {
            $response['status'] = 'error';
            $response['message'] = '회원정보가 존재하지 않습니다.';
        }

        $stmt->close();
    }
}

// 결과를 JSON으로 반환
echo json_encode($response);
?>
