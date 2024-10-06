<?php
session_start();
$errors = [];

// POST 요청일 때 처리
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 데이터베이스 연결
    include 'db_config.php';

    // 폼 데이터 받기
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $pwCheck = $_POST['pwCheck'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birthYear = $_POST['birth-year'];
    $birthMonth = $_POST['birth-month'];
    $birthDay = $_POST['birth-day'];
    $birthDate = $birthYear . '-' . $birthMonth . '-' . $birthDay;
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $firstNum = $_POST['firstNum'];
    $secondNum = $_POST['secondNum'];
    $thirdNum = $_POST['thirdNum'];
    $phone = $firstNum . '-' . $secondNum . '-' . $thirdNum;
    $postcode = $_POST['postcode'];
    $address = $_POST['address'];
    $termsAgreed = isset($_POST['terms_agreed']) ? 1 : 0;

    // 필수 필드 검증
    if (empty($id)) $errors['id'] = '아이디를 입력해 주세요.';
    if (empty($pw)) $errors['pw'] = '비밀번호를 입력해주세요.';
    if (empty($pwCheck)) $errors['pwCheck'] = '비밀번호 확인을 입력해주세요.';
    if ($pw !== $pwCheck) $errors['pwCheck'] = '비밀번호가 일치하지 않습니다.';
    if (empty($name)) $errors['name'] = '이름을 입력해주세요.';
    if (empty($email)) $errors['email'] = '이메일을 입력해주세요.';
    if (empty($birthDate)) $errors['birth'] = '생년월일을 입력해주세요.';
    if (empty($gender)) $errors['gender'] = '성별을 선택해주세요.';
    if (empty($education)) $errors['education'] = '학력을 선택해주세요.';
    if (empty($phone)) $errors['phone'] = '연락처를 입력해주세요.';
    if (empty($postcode)) $errors['postcode'] = '우편번호를 입력해주세요.';
    if (empty($address)) $errors['address'] = '주소를 입력해주세요.';
    if (!$termsAgreed) $errors['terms_agreed'] = '회원약관에 동의해주세요.';

    // 오류가 있는 경우
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header("Location: register.php");
        exit();
    }

    // ID 중복 확인
    $checkIdSql = "SELECT COUNT(*) FROM register WHERE id = ?";
    $stmt = $conn->prepare($checkIdSql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        $_SESSION['errors']['id'] = "사용 불가능한 아이디입니다.";
        $_SESSION['form_data'] = $_POST;
        header("Location: register.php");
        exit();
    }

    // 이메일 중복 확인
    $checkEmailSql = "SELECT COUNT(*) FROM register WHERE email = ?";
    $stmt = $conn->prepare($checkEmailSql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($emailCount);
    $stmt->fetch();
    $stmt->close();

    if ($emailCount > 0) {
        $_SESSION['errors']['email'] = "이미 가입된 이메일입니다.";
        $_SESSION['form_data'] = $_POST;
        header("Location: register.php");
        exit();
    }

    // 데이터베이스에 데이터 삽입
    $sql = "INSERT INTO register (id, pw, name, email, birth, gender, education, phone, postcode, address, terms_agreed)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $hashedPw = password_hash($pw, PASSWORD_DEFAULT); // 비밀번호 해시화
    $stmt->bind_param("sssssssssss", $id, $hashedPw, $name, $email, $birthDate, $gender, $education, $phone, $postcode, $address, $termsAgreed);

    if ($stmt->execute()) {
        $_SESSION['success'] = '회원가입이 완료되었습니다.';
        unset($_SESSION['errors'], $_SESSION['form_data']); // 성공 시 오류 세션 초기화
    } else {
        $_SESSION['errors']['db'] = "회원가입 처리 중 오류가 발생했습니다: " . $stmt->error;
    }

    // 연결 종료
    $stmt->close();
    $conn->close();

    // 성공적으로 회원가입 후
    header("Location: register.php");
    exit();
}
?>
