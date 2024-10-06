<?php
include 'db_config.php'; // Your database connection
include 'register_r.php';

header('Content-Type: application/json');

$response = array();

// 폼 데이터 수신
$id = $_POST['id'] ?? '';
$pw = $_POST['pw'] ?? '';

// 데이터 유효성 검사
if (empty($id)) {
    $response['status'] = 'error';
    $response['message'] = '아이디를 입력해주세요';
    echo json_encode($response);
    exit;
}

if (empty($pw)) {
    $response['status'] = 'error';
    $response['message'] = '비밀번호를 입력해주세요';
    echo json_encode($response);
    exit;
}

// 비밀번호 해싱
$hashed_pw = md5($pw);

// 아이디와 비밀번호 확인
$stmt = $conn->prepare('SELECT * FROM register WHERE id = ? AND password = ?');
$stmt->bind_param('ss', $id, $hashed_pw);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $response['status'] = 'error';
    $response['message'] = '아이디 또는 비밀번호를 확인해 주세요';
} else {
    $response['status'] = 'success';
    $response['message'] = '로그인 성공';
}

echo json_encode($response);

$stmt->close();
$conn->close();
?>
