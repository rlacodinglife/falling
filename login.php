<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="./css/login.css">
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.js'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/m_nav.js"></script>
    <script src="./js/Error.js"></script>
    <script src="./js/login.js"></script>
    <!-- <script src="./js/login.js"></script> -->
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
                    <form action="login.php" method="post">
                        <button class="login_btn_"><a href="./login.php">로그인</a><span class="slash">/</span><a
                                href="./register.php">회원가입</a></button>
                </li>
                <li class="lang">
                    <p><a href="./login.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./en/login.php">ENG</a></p>
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
                <form method="post" name="join" id="join" action="login_l.php">
                    <!-- 회원가입 타이틀부분 -->
                    <h1 class="h_loho">
                        로그인
                    </h1>
                    <div id="container">
                        <div class="row_group">
                            <div class="userInput">
                                <!-- 아이디 입력 -->
                                <h3 class="list">아이디</h3>
                                <span class="box int_id"><input type="text" id="id" class="int check"
                                        placeholder="5~10자,영문 대소문자,숫자" maxlength="20"></span>
                                <span id="idError" class="ErrorMsg"></span>
                            </div>
                            <div class="userInput">
                                <!-- 비밀번호 입력 -->
                                <h3 class="list">비밀번호</h3>
                                <span class="box int_id"><input type="password" id="pw" class="int check"
                                        placeholder="6~8자,영문 대소문자,숫자" maxlength="20"></span>
                                <span id="pwError" class="ErrorMsg"></span>
                            </div>
                            <!-- 비밀번호 재확인 입력 -->
                            <div class="btn_area" id="OnPop">
                                <a href="./subpage.php"><input type="button" value="로그인" id="btnJoin"
                                        class="btn_type btn_primary btn_style"></a>
                            </div>
                            <div class="search_area">
                                <a href="./seacrhID.php">아이디 찾기</a><span>|</span><a href="./seacrhPass.php">비밀번호
                                    찾기</a><span>|</span><a href="./register.php">회원가입</a>
                            </div>
                        </div>

                    </div>

                </form>


                <!--
                <div class="Pop_alert">
                    <p class="bold">회원가입을 완료</p>
                    <p class="normal">회원가입이 완료되었으며 설문조사가 가능합니다.</p>
                    <div class="Pop_btn">
                        <button class="btn_style"><a href="./register.php">확인</a></button>
                        <button class="btn_style"><a href="./subpage.html">설문하기</a></button>
                    </div>
                </div>
                 -->
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
        $(document).ready(function() {
            $('#loginBtn').on('click', function() {
                // 입력값 유효성 검사
                let isValid = true;

                const idInput = $('#id');
                const pwInput = $('#pw');
                const idError = $('#idError');
                const pwError = $('#pwError');

                // 아이디 검사
                if (idInput.val().trim() === '') {
                    idError.text('아이디를 입력해주세요');
                    idError.show();
                    isValid = false;
                } else {
                    idError.text('');
                    idError.hide();
                }

                // 비밀번호 검사
                if (pwInput.val().trim() === '') {
                    pwError.text('비밀번호를 입력해주세요');
                    pwError.show();
                    isValid = false;
                } else {
                    pwError.text('');
                    pwError.hide();
                }

                if (!isValid) {
                    return; // 유효성 검사 실패 시, 함수 종료
                }

                // AJAX 요청
                $.ajax({
                    type: 'POST',
                    url: 'login.php',
                    data: {
                        id: idInput.val(),
                        pw: pwInput.val()
                    },
                    success: function(response) {
                        const result = JSON.parse(response);
                        if (result.status === 'error') {
                            if (result.message.includes('아이디')) {
                                idError.text(result.message);
                                idError.show();
                            } else if (result.message.includes('비밀번호')) {
                                pwError.text(result.message);
                                pwError.show();
                            }
                        } else if (result.status === 'success') {
                            // 로그인 성공 시 리다이렉션
                            window.location.href = 'next_page.php'; // 로그인 성공 후 이동할 페이지
                        }
                    },
                    error: function() {
                        alert('서버 오류가 발생했습니다.');
                    }
                });
            });
        });
    </script>



</body>

</html>