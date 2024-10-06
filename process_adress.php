<?php
include 'db_config.php';
header('Content-Type: application/json');

// POST 요청에서 우편번호와 도로명 주소를 가져옵니다.
$postcode = isset($_POST['postcode']) ? $_POST['postcode'] : '';
$roadAddress = isset($_POST['roadAddress']) ? $_POST['roadAddress'] : '';

// JSON 형식으로 응답을 반환합니다.
echo json_encode([
    'postcode' => $postcode,
    'roadAddress' => $roadAddress
]);
?>
