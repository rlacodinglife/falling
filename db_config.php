<?php
$servername = "52.78.27.204";
$username = "root";
$password = "bn@5188##";
$dbname = "wrew";

// 데이터베이스 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Character set 설정 (optional)
$conn->set_charset("utf8mb4"); // UTF-8로 설정
?>
