<?php
// 세션 시작
session_start();
$errors = [];

// 오류 메시지가 있을 경우 세션에서 오류 가져오기
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="./css/register.css">
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src="./js/m_nav.js"></script>
    <script src="./js/login.js"></script>
    <script src="./js/Error.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>



</head>
<?php
/*
    include 'db_config.php';
    $sql = " SELECT * FROM register where 1 limit 1";
    $result = mysqli_query($gconnet, $sql);
    $row = mysqli_fetch_assoc($result);
    print_r($row);
    */
?>
<body>
    <header>
        <nav class="top_nav">
            <h2 class="logo">낙상위험환경 설문조사</h2>
            <ul class="top_ul">
                <li><a href="./subpage.php">설문소개/방법</a></li>
                <li><a href="./index.php">설문하기</a></li>
                <li><a href="./answer.php">문의하기</a></li>
            </ul>
            <ul class="top_ul login_btn">
                <li>
                    <button class="login_btn_"><a href="./login.php">로그인</a><span class="slash">/</span><a
                            href="./register.php">회원가입</a></button>
                </li>
                <li class="lang">
                    <p><a href="./register.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./en/register.php">ENG</a></p>
                </li>
            </ul>
            <div class="bar">
                <!-- <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div> -->
                <img src="./icon/menu_bar.svg" alt="">
            </div>
            <!-- 모바일 메뉴 -->
            <div class="m_menu">
                <div class="bar">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <div class="m_menuw">
                    <div class="mmenu">
                        <ul data-aos="fade_out">
                            <li class="menul menul1">
                                <a href="./subpage.php">
                                    <p><span class="men_num">1.</span>설문소개/방법</p>
                                </a>
                            </li>
                            <li class="menul menul2">
                                <a href="./index.php">
                                    <p><span class="men_num">2.</span>설문하기</p>
                                </a>
                            </li>
                            <li class="menul menul3">
                                <a href="./answer.php">
                                    <p><span class="men_num">3.</span>문의하기</p>
                                </a>
                            </li>
                            <li class="menul menul4">
                                <a href="./register.php">
                                    <p><span class="men_num">4.</span>회원가입</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main id="main_wrap">
    <section id="main">
        <div id="wrap" class="wrapper">
            <form method="POST" action="register_r.php" name="join" id="join">
                <!-- 회원가입 타이틀부분 -->
                <h1 class="h_loho">회원가입</h1>
                <div id="container">
                    <div class="row_group">
                        <!-- 아이디 입력 -->
                        <div class="userInput">
                            <h3 class="list">아이디</h3>
                            <div class="input_row colunm_btn">
                                <span class="box int_id span3"><input type="text" name="id" id="id" class="int check" placeholder="5~10자,영문 대소문자,숫자" maxlength="20"></span>
                                <span class="box int_id span1"> <input type="button" value="중복확인" id="btnsame" class="btn_type btn_primary btn_style" onclick="checkIdBtn()"></span>  <!--onclick="checkIdBtn()" -->
                                <span id="checkIdMessage" class="ErrorMsg" style="display: none;"></span>
                            </div>
                            <span id="idError" class="ErrorMsg"></span>
                        </div>

                        <!-- 비밀번호 입력 -->
                        <div class="userInput">
                            <h3 class="list">비밀번호</h3>
                            <span class="box int_id"><input type="password" name="pw" id="pw" class="int check" placeholder="6~8자,영문 대소문자,숫자" minlength="6" maxlength="8"></span>
                            <span id="pwError" class="ErrorMsg"></span>
                        </div>

                        <!-- 비밀번호 재확인 입력 -->
                        <div class="userInput">
                            <h3 class="list">비밀번호 확인</h3>
                            <span class="box int_id"><input type="password" name="pwCheck" id="pwCheck" class="int check" placeholder="6~8자,영문 대소문자,숫자" maxlength="20"></span>
                            <span id="pwCheckError" class="ErrorMsg"></span>
                        </div>
                    </div>
                    <div class="row_group">
                        <!-- 성명 입력 -->
                        <div class="userInput">
                            <h3 class="list">이름</h3>
                            <span class="box int_id"><input type="text" name="name" id="name" class="int check" placeholder="이름 입력" maxlength="20"></span>
                            <span id="nameError" class="ErrorMsg"></span>
                        </div>
                        <!-- 이메일 입력 -->
                        <div class="userInput">
                            <h3 class="list">이메일</h3>
                            <span class="box int_id"><input type="text" name="email" id="email" class="int check" placeholder="" maxlength="40"></span>
                            <span id="EmailError" class="ErrorMsg"></span>
                        </div>
                        <!-- 생년월일 입력 -->
                        <div class="userInput">
                            <h3 class="list">생년월일</h3>
                            <span class="box int_id birth">
                                <select class="int" name="birth-year" id="birth-year">
                                    <option disabled selected>년도</option>
                                    <!-- 추가 년도 옵션 -->
                                </select>
                                <select class="int" name="birth-month" id="birth-month">
                                    <option disabled selected>월</option>
                                    <!-- 추가 월 옵션 -->
                                </select>
                                <select class="int" name="birth-day" id="birth-day">
                                    <option disabled selected>일</option>
                                    <!-- 추가 일 옵션 -->
                                </select>
                            </span>
                            <span id="yearError" class="ErrorMsg"></span>
                        </div>
                        <!-- 성별입력 -->
                        <div class="userInput">
                            <h3 class="list">성별</h3>
                            <span class="box int_id genderlist">
                                <label class="select"><input type="radio" name="gender" id="boy" value="남자"> 남자</label>
                                <label class="select"><input type="radio" name="gender" id="girl" value="여자"> 여자</label>
                            </span>
                            <span id="genderError" class="ErrorMsg"></span>
                        </div>
                        <!-- 학력입력 -->
                        <div class="userInput">
                            <h3 class="list">학력</h3>
                            <span class="schoolInt box int_id" id="schoolBox">
                                <select name="education" id="mail_School">
                                    <option>선택</option>
                                    <option>고졸</option>
                                    <option>대졸</option>
                                    <option>대학원졸</option>
                                </select>
                            </span>
                            <span id="schoolError" class="ErrorMsg"></span>
                        </div>
                        <!-- 전화번호 입력 -->
                        <div class="userInput">
                            <h3 class="list">연락처</h3>
                            <div class="phone_col input_row">
                                <span class="box int_id"><input type="number" name="firstNum" id="firstNum" class="int check" maxlength="3"></span> -
                                <span class="box int_id"><input type="number" name="secondNum" id="secondNum" class="int check" maxlength="4"></span> -
                                <span class="box int_id"><input type="number" name="thirdNum" id="thirdNum" class="int check" maxlength="4"></span>
                            </div>
                            <span id="phoneNumError" class="ErrorMsg"></span>
                        </div>
                        <!-- 주소 입력 -->
                        <div class="userInput">
                            <h3 class="list">주소</h3>
                            <div id="address" class="int_id">
                                <div class="input_row colunm_btn">
                                    <span class="box int_id span3">
                                        <input type="text" name="postcode" id="sample4_postcode" class="d_form mini int line addressCheck" placeholder="우편번호">
                                    </span>
                                    <span class="box int_id span1">
                                        <input type="button" id="addressButton" class="d_form mini btn_style" value="우편번호 검색" onclick="sample4_execDaumPostcode()">
                                    </span>
                                    <span class="box int_id span4">
                                        <input type="text" name="address" id="address" placeholder="상세주소" maxlength="999" class="d_form int check">
                                    </span>
                                </div>
                                <span id="addressError" class="ErrorMsg"></span>
                            </div>
                        </div>
                        </div>

                        <!-- 회원약관 -->
                        <div class="userInput">
                            <h3 class="list">회원약관</h3>
                            <span class="rule" id="rule"> <input type="text" name="terms" id="rule" placeholder="회원약관" maxlength="999" class="int check">
                            </span>
                        </div>
                        <!-- 개인정보 수집 동의 -->
                        <div class="userInput agreeInput">
                            <label class="select"><input type="radio" name="terms_agreed" id="check" value="동의" required> 회원약관에 동의합니다.</label>
                        </div>
                        <div class="btn_area" id="OnPop">
                            <input type="submit" value="회원가입" id="btnJoin" class="btn_type btn_primary btn_style">
                        </div>
                        <div class="search_area">
                            <a href="./login.php">로그인</a> <span> | </span> <a href="./seacrhID.php">아이디 찾기</a>
                            <span> | </span> <a id="registerBtn" href="#">회원가입</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- 회원가입 이후의 팝업창 -->
            <div id="PopAlert" class="Pop_alert" style="display: none;">
                <p class="bold">회원가입을 완료</p>
                <p class="normal">회원가입이 완료되었으며 설문조사가 가능합니다.</p>
                <div class="Pop_btn AB_btn">
                        <button class="btn_style grey"><a href="./register.php">확인</a></button>
                        <button class="btn_style blue"><a href="./subpage.php">설문하기</a></button>
                    </div>
            </div>

    </section>
</main>


    <footer>
        <div>
            <p class="logo">낙상위험환경 설문조사</p>
            <p>
                <span>이용약관</span>
                <span>개인정보처리방침</span>
            </p>
        </div>
        <p style="width: 100%; height: 1px; background-color: #949494;"></p>
        <div>
            <p>Copyright 2018 chung-Ang All Rights Reserved.</p>
        </div>
    </footer>
    

    <script>
        function populateYearOptions() {
            const yearSelect = document.getElementById('birth-year');
            const currentYear = new Date().getFullYear();
            const startYear = 1920; // Adjust as needed

            for (let year = startYear; year <= currentYear; year++) {
                const option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                yearSelect.appendChild(option);
            }
        }

        function populateMonthOptions() {
            const monthSelect = document.getElementById('birth-month');

            for (let month = 1; month <= 12; month++) {
                const option = document.createElement('option');
                option.value = month;
                option.textContent = month < 10 ? '0' + month : month;
                monthSelect.appendChild(option);
            }
        }

        function populateDayOptions() {
            const daySelect = document.getElementById('birth-day');

            for (let day = 1; day <= 31; day++) {
                const option = document.createElement('option');
                option.value = day;
                option.textContent = day < 10 ? '0' + day : day;
                daySelect.appendChild(option);
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            populateYearOptions();
            populateMonthOptions();
            populateDayOptions();
        });
    </script>



    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
        function sample4_execDaumPostcode() {
            new daum.Postcode({
                oncomplete: function(data) {
                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('sample4_postcode').value = data.zonecode; // 우편번호

                    var extraRoadAddr = ''; // 참고 항목 변수
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)) {
                        extraRoadAddr += data.bname;
                    }
                    if(data.buildingName !== '' && data.apartment === 'Y') {
                    extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    if(extraRoadAddr !== '') {
                        extraRoadAddr = ' (' + extraRoadAddr + ')';
                    }

                    document.getElementById("sample4_extraAddress").value = extraRoadAddr;

                    var guideTextBox = document.getElementById("guide");
                    // 예상 주소 안내
                    if(data.autoRoadAddress) {
                        var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                        guideTextBox.innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';
                        guideTextBox.style.display = 'block';
                    } else if(data.autoJibunAddress) {
                        var expJibunAddr = data.autoJibunAddress;
                        guideTextBox.innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';
                        guideTextBox.style.display = 'block';
                    } else {
                        guideTextBox.innerHTML = '';
                        guideTextBox.style.display = 'none';
                    }
                }
            }).open();
        }
    </script>
    <script>
        // 자바스크립트를 이용해 팝업을 조작하는 부분을 추가합니다.
        <?php if (isset($_SESSION['success'])): ?>
            document.getElementById('PopAlert').style.display = 'block';
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>
    </script>
    <script>
        document.getElementById('join').addEventListener('submit', function(event) {
            event.preventDefault(); // 기본 제출 방지

            // 입력 필드 값 가져오기
            var id = document.getElementById('id').value;
            var pw = document.getElementById('pw').value;
            var pwCheck = document.getElementById('pwcheck').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var birthYear = document.getElementById('birth-year').value;
            var birthMonth = document.getElementById('birth-month').value;
            var birthDay = document.getElementById('birth-day').value;
            var gender = document.querySelector('input[name="gender"]:checked');
            var education = document.getElementById('education').value;
            var phone = document.getElementById('phone').value;
            var postcode = document.getElementById('postcode').value;
            var address = document.getElementById('address').value;
            var termsAgreed = document.getElementById('terms_agreed').checked;

            // 필수 필드 검증
            var errors = [];
            if (!id) errors.push('아이디를 입력해 주세요.');
            if (!pw) errors.push('비밀번호를 입력해주세요.');
            if (!pwCheck) errors.push('비밀번호 확인을 입력해주세요.');
            if (pw !== pwCheck) errors.push('비밀번호가 일치하지 않습니다.');
            if (!name) errors.push('이름을 입력해주세요.');
            if (!email) errors.push('이메일을 입력해주세요.');
            if (!birthYear || !birthMonth || !birthDay) errors.push('생년월일을 입력해주세요.');
            if (!gender) errors.push('성별을 선택해주세요.');
            if (!education) errors.push('학력을 선택해주세요.');
            if (!phone) errors.push('연락처를 입력해주세요.');
            if (!postcode) errors.push('우편번호를 입력해주세요.');
            if (!address) errors.push('주소를 입력해주세요.');
            if (!termsAgreed) errors.push('회원약관에 동의해주세요.');

            // 오류가 있을 경우
            if (errors.length > 0) {
                alert(errors.join('\n')); // 에러 메시지를 알림으로 표시
                return; // 폼 제출 방지
            }

            // 모든 필드가 올바르게 입력되었을 경우에만 제출
            this.submit(); // 폼 제출
        });
    </script>
    <!-- register.php 내에 아래와 같은 스크립트 추가 -->
    <script>
        window.onload = function() {
            // 세션에 저장된 오류 메시지 및 성공 메시지 표시
            const errors = <?php echo json_encode($_SESSION['errors'] ?? []); ?>;
            const success = '<?php echo $_SESSION['success'] ?? ''; ?>';

            if (success) {
                alert(success); // 성공 메시지 알림
                <?php unset($_SESSION['success']); ?> // 세션 초기화
            }

            if (Object.keys(errors).length > 0) {
                let errorMessage = '다음 오류가 발생했습니다:\n';
                for (const [key, value] of Object.entries(errors)) {
                    errorMessage += `${value}\n`;
                }
                alert(errorMessage); // 오류 메시지 알림
                <?php unset($_SESSION['errors']); ?> // 세션 초기화
            }
        };
    </script>





</body>
</html>



</body>
</html>