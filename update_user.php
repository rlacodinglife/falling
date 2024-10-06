<?php
include 'db_config.php';

// SQL 필터 함수
function sqlfilter($data) {
    global $gconnet;
    return mysqli_real_escape_string($gconnet, $data);
}

// 응답 배열 초기화
$response = array();

if (isset($_POST['update_user'])) {
    $user_id = trim(sqlfilter($_POST['member_id']));
    $user_pwd = trim(sqlfilter($_POST['member_password']));
    $phone = trim(sqlfilter($_POST['phone']));
    $email = trim(sqlfilter($_POST['member_email']));

    // 비밀번호 해시화
    if ($user_pwd) {
        $user_pwd = md5($user_pwd);
    }

    // 사용자 정보 업데이트 쿼리 실행
    $query = "UPDATE register SET phone = ?, email = ?, mdate = NOW()";
    if ($user_pwd) {
        $query .= ", password = ?";
    }
    $query .= " WHERE user_id = ? AND del_yn = 'N'";

    $stmt = $gconnet->prepare($query);

    if ($user_pwd) {
        $stmt->bind_param("ssss", $phone, $email, $user_pwd, $user_id);
    } else {
        $stmt->bind_param("sss", $phone, $email, $user_id);
    }

    if ($stmt->execute()) {
        $response['status'] = 'success';
        $response['message'] = '사용자 정보가 업데이트되었습니다.';
    } else {
        $response['status'] = 'error';
        $response['message'] = '업데이트에 실패했습니다.';
    }

    $stmt->close();
    echo json_encode($response);
    exit();
}

$gconnet->close();
?>
