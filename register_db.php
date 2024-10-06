<?php
include 'db_config.php';

// SQL 필터 함수
function sqlfilter($data) {
    global $gconnet;
    return mysqli_real_escape_string($gconnet, $data);
}

// 응답 배열 초기화
$response = array();

if (isset($_POST['register'])) {
    $user_id = trim(sqlfilter($_POST['id']));
    $user_pwd = trim(sqlfilter($_POST['pw']));
    $user_pwd_check = trim(sqlfilter($_POST['pwCheck']));
    $user_name = trim(sqlfilter($_POST['name']));
    $email = trim(sqlfilter($_POST['email']));
    $birth_year = sqlfilter($_POST['birth-year']);
    $birth_month = sqlfilter($_POST['birth-month']);
    $birth_day = sqlfilter($_POST['birth-day']);
    $birthday = "$birth_year-$birth_month-$birth_day";
    $gender = isset($_POST['gender']) ? sqlfilter($_POST['gender']) : '';
    $education = sqlfilter($_POST['education']);
    $phone = sqlfilter($_POST['firstNum']) . '-' . sqlfilter($_POST['secondNum']) . '-' . sqlfilter($_POST['thirdNum']);
    $zipcode = sqlfilter($_POST['sample4_postcode']);
    $address = sqlfilter($_POST['address']);
    $terms_agreed = isset($_POST['terms_agreed']) ? 1 : 0;

    // 비밀번호 일치 확인
    if ($user_pwd !== $user_pwd_check) {
        $response['status'] = 'error';
        $response['message'] = '비밀번호가 일치하지 않습니다.';
        echo json_encode($response);
        exit();
    }

    // 아이디 중복 확인
    $sql_pre1 = "SELECT id FROM register WHERE user_id = ? AND del_yn='N'";
    $stmt = $gconnet->prepare($sql_pre1);
    $stmt->bind_param("s", $user_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $response['status'] = 'error';
        $response['message'] = '이미 가입된 아이디입니다.';
    } else {
        // 비밀번호 해시화
        $user_pwd = md5($user_pwd);

        // 회원가입 쿼리 실행
        $query = "INSERT INTO register (user_id, password, phone, email, name, birthday, gender, education, address, zipcode, terms_agreed, regdate, del_yn)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), 'N')";
        $stmt = $gconnet->prepare($query);
        $stmt->bind_param("sssssssssss", $user_id, $user_pwd, $phone, $email, $user_name, $birthday, $gender, $education, $address, $zipcode, $terms_agreed);

        if ($stmt->execute()) {
            $response['status'] = 'success';
            $response['message'] = '회원가입이 완료되었습니다.';
        } else {
            $response['status'] = 'error';
            $response['message'] = '회원가입에 실패했습니다.';
        }
    }

    $stmt->close();
    echo json_encode($response);
    exit();
}

$gconnet->close();
?>
