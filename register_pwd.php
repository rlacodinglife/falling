<?php
include 'db_config.php';
// 요청된 데이터 값을 SQL 필터를 적용하여 받아옵니다.
$user_id = trim(sqlfilter($_REQUEST['member_id']));
$user_pwd = trim(sqlfilter($_REQUEST['member_password']));
$user_pwd = md5($user_pwd); // 비밀번호를 MD5 해시로 변환
$phone = trim(sqlfilter($_REQUEST['phone'])); // 핸드폰 번호
$email = trim(sqlfilter($_REQUEST['member_email'])); // 이메일 주소

$check_cnt = 0;

// 사용자 ID 중복 여부 확인
if ($user_id) {
    $sql_pre1 = "SELECT id FROM register WHERE user_id = '".$user_id."' AND del_yn='N'"; // 회원테이블 아이디 중복 여부 체크
    $result_pre1 = mysqli_query($gconnet, $sql_pre1);
    if (mysqli_num_rows($result_pre1) > 0) {
        $check_cnt++;
    }
}



$resJSON = array();

if ($check_cnt == 0) { // 중복 체크 통과했을 때 시작
    if ($user_id) { // 아이디가 있을 때 시작
        $query = "UPDATE register SET";
        if (trim($_REQUEST['member_password'])) {
            $query .= " password = '".$user_pwd."', "; // 비밀번호 업데이트
        }
        $query .= " mdate = now() "; // 수정일자 업데이트
        $query .= " WHERE user_id='".$user_id."'"; // 특정 사용자 ID를 기준으로 업데이트
        //echo $query;
        $result = mysqli_query($gconnet, $query);

        // 결과를 JSON으로 반환
        $resJSON['member_idx'] = $user_id;
        echo json_encode($resJSON);
    } else {
        $resJSON['member_idx'] = "";
        echo json_encode($resJSON);
    }
} else { // 중복 체크 통과하지 못했을 때 시작
    $resJSON['member_idx'] = "";
    echo json_encode($resJSON);
} // 중복 체크 통과하지 못했을 때 종료
?>
