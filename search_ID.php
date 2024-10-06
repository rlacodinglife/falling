<?php
// db_config.php 포함
include 'db_config.php';

// AJAX 요청인지 확인
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // 입력 필드 확인
    if (empty($name)) {
        echo "<script>alert('이름을 확인해주세요');</script>";
    } elseif (empty($email)) {
        echo "<script>alert('이메일을 확인해주세요');</script>";
    } else {
        // 데이터베이스에서 사용자 정보 찾기
        $query = "SELECT id FROM register WHERE name = ? AND email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $name, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // 사용자가 있으면 아이디 찾기 성공, 없으면 실패
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $userID = $row['id'];

            // 아이디 찾기 성공 팝업
            echo "<script>
                    document.querySelector('.Pop_alert.able').style.display = 'block';
                    document.querySelector('.Pop_alert.able span').textContent = '$userID';
                  </script>";
        } else {
            // 아이디 찾기 실패 팝업
            echo "<script>
                    document.querySelector('.Pop_alert.unable').style.display = 'block';
                  </script>";
        }
    }
}
?>
