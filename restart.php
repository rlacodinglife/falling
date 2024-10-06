
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>설문하기_다시시작</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/restart.css">
    <link rel="stylesheet" href="./css/Endpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src="./js/m_nav.js"></script>

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
                    <button class="login_btn_"><a href="./login.php">로그인</a><span class="slash">/</span><a href="./register.php">회원가입</a></button>
                </li>
                <li class="lang">
                    <p><a href="./Endpage.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./en/Endpage.php">ENG</a></p>
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
          <p class="all_count">설문회차 : <span class="count_page"></span>/500</ps>
          <p class="count_title">설문을 다시 시작 하시겠습니까?</p>
          <p class="count_text">설문은 이전 회차 이후 진행하게 됩니다.</p>
          <div class="AB_btn">
            <button class="blue"><a href="./index.php">다시시작</a></button>
        </div>
        </section>
        <div class="btm_text">
            <div>
                <p>본 설문조사 관련하여 궁금한 사항은 아래 이메일로 문의주시기 바랍니다.</p>
                <p>helpfallscore@gmail.com</p>
            </div>

            <!-- <div class="btm_btn">
                <button>|| 설문 일시정지</button>
                <div class="Pop_alert stop">
                    <p class="bold">설문 일시정지</p>
                    <p class="normal">이제까지의 설문은 모두 저장되며 언제든지 다시 시작할 수 있습니다.</p>
                    <div class="Pop_btn">
                        <button class="btn_style"><a href="./">확인</a></button>
                        <button class="btn_style"><a href="./">계속하기</a></button>
                    </div>
                </div>

            </div> -->
        </div>
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
</body>

</html>