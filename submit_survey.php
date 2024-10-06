<?php
session_start();
include 'db_config.php'; // Include DB connection

$user_id = $_SESSION['user_id'];
$image_id = $_POST['selected_image'];
$reason = $_POST['reason'] ?? ''; // 이유는 선택사항이므로 기본값은 빈 문자열

// Get the current session info
$survey_query = "SELECT * FROM survey_sessions WHERE user_id = $user_id";
$survey_result = $conn->query($survey_query);
$survey_data = $survey_result->fetch_assoc();

$question_round = $survey_data['current_round'];
$survey_round = $survey_data['questions_answered'] + 1;

// Insert the result into survey_results table
$insert_query = "INSERT INTO survey_results (user_id, image_id, preference, reason, question_round, survey_round)
                 VALUES ($user_id, '$image_id', 'A', '$reason', $question_round, $survey_round)";
$conn->query($insert_query);

// Update the user's session
if ($survey_round % 50 == 0) {
    // Handle additional questions every 50 rounds
    // Add logic to present extra questions
} else {
    // Increment the current round
    $update_query = "UPDATE survey_sessions SET questions_answered = $survey_round, current_round = $question_round + 1 WHERE user_id = $user_id";
    $conn->query($update_query);
}

// Redirect to the next question
header("Location: survey.php");
exit;
?>