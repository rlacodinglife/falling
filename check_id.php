<?php
// 데이터베이스 연결
include 'db_config.php'; // 이미 설정된 연결 파일

// 요청에서 전달된 ID 확인
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];

// SQL로 ID 중복 확인
$checkIdSql = "SELECT COUNT(*) FROM register WHERE id = ?";
$stmt = $conn->prepare($checkIdSql);
$stmt->bind_param("s", $id);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();

// 중복 여부에 따른 응답 전송
if ($count > 0) {
    // 이미 있는 아이디
    echo json_encode(['status' => 'error', 'message' => '이미 가입된 아이디입니다.']);
} else {
    // 사용 가능한 아이디
    echo json_encode(['status' => 'success', 'message' => '사용 가능한 아이디입니다.']);
}
$conn->close();
?>
