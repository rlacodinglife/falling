<?php
// 세션 시작 (설문 진행 상태 유지)
session_start();

// DB 연결 (필요 시 추가)
include 'db_config.php';

// 설문 회차 확인 (50회차마다 호출)
$currentRound = $_SESSION['currentRound'] ?? 1;

// POST 요청으로 추가 질문 제출 처리
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $additionalAnswer = $_POST['additionalAnswer'] ?? '';

    // DB에 추가 질문 답변 저장 (예시)
    $stmt = $gconnet->prepare("INSERT INTO additional_responses (round, user_id, answer) VALUES (?, ?, ?)");
    $userId = $_SESSION['user_id'] ?? null;
    $stmt->bind_param('iis', $currentRound, $userId, $additionalAnswer);

    if ($stmt->execute()) {
        // 추가 질문 제출 후 다시 설문조사로 돌아가기
        header('Location: survey.php');  // 설문조사 메인 페이지로 리다이렉트
        exit;
    } else {
        echo "추가 질문 저장 중 오류가 발생했습니다: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>추가 질문</title>
</head>
<body>
    <h2>추가 질문</h2>
    <p>설문 회차: <?= $currentRound ?></p>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="additionalAnswer">추가 질문에 대한 답변을 작성해 주세요:</label>
        <textarea id="additionalAnswer" name="additionalAnswer" rows="4" cols="50"></textarea>
        <br>
        <input type="submit" value="제출">
    </form>
</body>
</html>
