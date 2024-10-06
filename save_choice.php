<?php
// DB 연결 파일 포함 (필요한 경우 경로 조정)
include 'db_config.php';

// 세션 시작
session_start();

// POST로 전송된 데이터를 받음
$id = $_SESSION['user_id']; // 로그인 시 저장된 세션에서 사용자 ID 가져오기
$questionNumber = $_POST['questionNumber']; // 질문 번호
$selectedImage = $_POST['selectedImage']; // 선택한 이미지 (파일명이나 ID)

// 입력 데이터 검증
if (empty($id) || empty($questionNumber) || empty($selectedImage)) {
    echo json_encode(['success' => false, 'error' => '모든 필드를 입력해야 합니다.']);
    exit();
}

// 설문 응답을 DB에 저장
$sql = "INSERT INTO survey_responses (user_id, question_number, selected_image) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $id, $questionNumber, $selectedImage);

if ($stmt->execute()) {
    // 성공적으로 저장되면 JSON 응답
    header('Content-Type: application/json'); // 응답 형식 설정
    echo json_encode(['success' => true]);
} else {
    // 저장 실패 시 에러 메시지 반환
    error_log("DB Error: " . $stmt->error); // 에러 로깅
    echo json_encode(['success' => false, 'error' => '데이터베이스 저장 실패']);
}

$stmt->close();
$conn->close();
?>
