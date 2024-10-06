<? include $_SERVER["DOCUMENT_ROOT"]."/pro_inc/include_default.php"; // 공통함수 인클루드 ?>
<? include $_SERVER["DOCUMENT_ROOT"]."/pro_inc/include_htmlheader_admin.php"; // 관리자페이지 헤더?>
<? include $_SERVER["DOCUMENT_ROOT"]."/master/include/check_login_frame.php"; // 관리자 로그인여부 확인?>
<?
	$idx = trim(sqlfilter($_REQUEST['idx']));
	$total_param = trim(sqlfilter($_REQUEST['total_param']));
	$member_gubun = trim(sqlfilter($_REQUEST['member_gubun']));

	$user_id = trim(sqlfilter($_REQUEST['member_id']));
	if($_REQUEST['member_password']){
		$user_pwd = trim(sqlfilter($_REQUEST['member_password']));
		$user_pwd = md5($user_pwd);
	}
	$user_name_first = trim(sqlfilter($_REQUEST['member_name']));
	$gender = trim(sqlfilter($_REQUEST['gender']));
	$tel1 = trim(sqlfilter($_REQUEST['tel1']));
	$tel2 = trim(sqlfilter($_REQUEST['tel2']));
	$tel3 = trim(sqlfilter($_REQUEST['tel3']));
	$tel = $tel1;
	if($tel2){
		$tel .= "-".$tel2;
	}
	if($tel3){
		$tel .= "-".$tel3;
	}
	$cell1 = trim(sqlfilter($_REQUEST['cell1']));
	$cell2 = trim(sqlfilter($_REQUEST['cell2']));
	$cell3 = trim(sqlfilter($_REQUEST['cell3']));
	$cell = $cell1;
	if($cell2){
		$cell .= "-".$cell2;
	}
	if($cell3){
		$cell .= "-".$cell3;
	}
	$email = trim(sqlfilter($_REQUEST['member_email']));
	$m_channel = trim(sqlfilter($_REQUEST['m_channel']));
	$counsel_week_arr = json_encode($_REQUEST['counsel_week'], JSON_UNESCAPED_UNICODE);
	$counsel_stime = trim(sqlfilter($_REQUEST['counsel_stime']));
	$counsel_etime = trim(sqlfilter($_REQUEST['counsel_etime']));
	$admin_memo = trim(sqlfilter($_REQUEST['admin_memo']));

	$sql_pre1 = "select idx from member_info where user_id = '".$user_id."' and idx != '".$idx."' and del_yn='N'"; // 회원테이블 아이디 중복여부 체크
	$result_pre1  = mysqli_query($gconnet,$sql_pre1);
	if(mysqli_num_rows($result_pre1) > 0) {
		error_frame("입력하신 아이디는 이미 사용중입니다.");
	}

	$query = "update member_info set";
	$query .= " user_id = '".$user_id."', ";
	if($_REQUEST['member_password']){
		$query .= " user_pwd = '".$user_pwd."', ";
	}
	$query .= " user_name_first = '".$user_name_first."', ";
	$query .= " gender = '".$gender."', ";
	$query .= " tel = '".$tel."', ";
	$query .= " cell = '".$cell."', ";
	$query .= " email = '".$email."', ";
	$query .= " m_channel = '".$m_channel."', ";
	$query .= " admin_memo = '".$admin_memo."', ";
	$query .= " mdate = now() ";
	$query .= " where idx = '".$idx."' ";
	//echo $query;
	$result = mysqli_query($gconnet,$query);

	$member_idx = $idx;

  if($result){
    ?>
    <script type="text/javascript">
    <!--
      alert('수정이 정상적으로 완료 되었습니다.');
      parent.location.href =  "adminm_view.php?idx=<?=$member_idx?>&<?=$total_param?>";
    //-->
    </script>
    <?}else{?>
    <script type="text/javascript">
    <!--
    alert('오류가 발생했습니다.');
    //-->
    </script>
    <?}?>
