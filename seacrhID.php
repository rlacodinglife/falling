<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디찾기</title>
    <link rel="stylesheet" href="./css/login.css">
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.js'></script>
    <script src="./js/m_nav.js"></script>
    <script src="./js/Error.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const emailInput = document.getElementById('email')
            const emailError = document.getElementById('emailError')
            const emailadr = document.getElementById('email_adr')
            const emailvalue = document.querySelector('input#email_adr>option')

            let ValueText = emailvalue

            emailInput.addEventListener('blur', function () {
                // 입력 필드의 값이 비어있는지 확인합니다.
                if (emailInput.value.trim() === '') {
                    // 입력값이 비어있는 경우 에러 메시지를 설정합니다.
                    emailError.textContent = '이메일을 확인해주세요';
                    emailError.style.display = 'block';
                } else {
                    // 입력값이 있는 경우 에러 메시지를 지웁니다.
                    emailError.textContent = '';
                    emailError.style.display = 'none'
                }
            })


        });
        // $("select[name=sel_email]").on("change", function(){
        // var $addr = $(this).closest(".form").find("input[name=email_addr]");
        // if ($(this).val() == "etc") {
        //     $addr.val('');
        //     $addr.prop("readonly",false);

        // } else {
        //     $addr.val($(this).val());
        //     $addr.prop("readonly",true);
        // }

    </script>
    <!-- <script src="./js/login.js"></script> -->
</head>
</head>

<body>
    <header>
        <nav class="top_nav">
            <h2 class="logo">낙상위험환경 설문조사</h2>
            <ul class="top_ul">
                <li>
                    <a href="./subpage.php">설문소개/방법</a>
                </li>
                <li>
                    <a href="./index.php">설문하기</a>
                </li>
                <li>
                    <a href="./answer.php">문의하기</a>
                </li>
            </ul>
            <ul class="top_ul login_btn">
                <li>
                    <button class="login_btn_"><a href="./login.php">로그인</a><span class="slash">/</span><a
                            href="./register.php">회원가입</a></button>
                </li>
                <li class="lang">
                    <p><a href="./seacrhID.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./en/seacrhID.php">ENG</a></p>
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
                                    <!-- <div class="depth_men">
                                    <ul>
                                        <li>
                                            <a href=">name</a>
                                        </li>
                                    </ul>
                                </div> -->
                                </a>
                            </li>
                            <li class="menul menul2">
                                <a href="./index.php">
                                    <p>
                                        <span class="men_num">2.</span>설문하기
                                    </p>
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
                <form method="post" name="join" id="join" action="search_ID.php">
                    <!-- 회원가입 타이틀부분 -->
                    <h1 class="h_loho">
                        아이디 찾기
                    </h1>

                    <div id="container">
                        <div class="row_group">
                            <div class="userInput">
                                <!-- 아이디 입력 -->
                                <h3 class="list">이름</h3>
                                <span class="box int_id"><input type="text" id="id" class="int check" placeholder="이름입력"
                                        maxlength="20"></span>
                                <span id="idError" class="ErrorMsg"></span>
                            </div>
                            <div class="userInput">
                                <!-- 비밀번호 입력 -->
                                <h3 class="list">이메일</h3>
                                <span class="box int_id email_box"><input type="email" id="email"
                                        class="int check email" placeholder="6~8자,영문 대소문자,숫자" maxlength="2999-99-99">

                                    @

                                    <input type="text" name="email_address" class="int check email" id="email_adr"
                                        caption="email" maxlength="50" value="">
                                    <select name="sel_email" class="int select_email">
                                        <option value="etc">직접입력</option>
                                        <option value="naver.com">naver.com</option>
                                        <option value="hanmail.net">hanmail.net</option>
                                        <option value="gmail.com">gmail.com</option>
                                        <option value="yahoo.com">yahoo.com</option>
                                        <option value="hotmail.com">hotmail.com</option>
                                        <option value="korea.com">korea.com</option>
                                        <option value="nate.com">nate.com</option>
                                    </select>
                                </span>
                                <span id="emailError" class="ErrorMsg"></span>
                            </div>
                            <!-- 비밀번호 재확인 입력 -->
                            <div class="btn_area" id="OnPop">
                                <a href="./subpage.php"><input type="button" value="확인" id="btnJoin"
                                        class="btn_type btn_primary btn_style"></a>
                            </div>
                            <div class="search_area">
                                <a href="./login.php">로그인</a><span>|</span><a href="./seacrhPass.php">비밀번호
                                    찾기</a><span>|</span><a href="./register.php">회원가입</a>
                            </div>
                        </div>

                    </div>

                </form>


                <!-- 아이디 찾기 성공 -->
<div class="Pop_alert able" style="display:none;">
    <p class="bold">아이디 찾기</p>
    <p class="normal">회원님의 아이디는<br><span></span><br>입니다.</p>
    <div class="Pop_btn AB_btn">
        <button class="btn_style grey"><a href="./login.php">로그인 하러가기 </a></button>
        <button class="btn_style blue"><a href="./seacrhPass.php">취소</a></button>
    </div>
</div>

<!-- 아이디 찾기 실패 -->
<div class="Pop_alert unable" style="display:none;">
    <p class="bold">아이디 찾기</p>
    <p class="normal">회원정보가 존재하지 않습니다</p>
    <div class="Pop_btn">
        <button class="btn_style"><a href="./register.php">회원가입 하러가기</a></button>
        <button class="btn_style"><a href="./seacrhPass.php">취소</a></button>
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
            <p>Copyright 2024 HARP LAB All Rights Reserved.</p>
        </div>
    </footer>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const nameInput = document.getElementById('id');
    const nameError = document.getElementById('idError');
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');

    nameInput.addEventListener('blur', function () {
        if (nameInput.value.trim() === '') {
            nameError.textContent = '이름을 확인해주세요';
            nameError.style.display = 'block';
        } else {
            nameError.textContent = '';
            nameError.style.display = 'none';
        }
    });

    emailInput.addEventListener('blur', function () {
        if (emailInput.value.trim() === '') {
            emailError.textContent = '이메일을 확인해주세요';
            emailError.style.display = 'block';
        } else {
            emailError.textContent = '';
            emailError.style.display = 'none';
        }
    });
});
</script>


</body>

</html>