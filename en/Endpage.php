<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>설문하기_완료</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/Endpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src="../js/m_nav.js"></script>

</head>


<body>
    <header>
        <nav class="top_nav">
            <h2 class="logo">낙상위험도설문조사</h2>
            <ul class="top_ul">
                <li>
                    <a href="./subpage.php">Introduction</a>
                </li>
                <li>
                    <a href="./index.php">Survey</a>
                </li>
                <li>
                    <a href="./answer.php">Inquiry</a>
                </li>
            </ul>
            <ul class="top_ul login_btn">
                <li>
                    <button class="login_btn_"><a href="./login.php">Log In</a><span class="slash">/</span><a href="./register.php">Register</a></button>
                </li>
                <li class="lang">
                    <p><a href="../Endpage.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./Endpage.php">ENG</a></p>
                </li>

            </ul>
            <div class="bar">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
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
                                    <p><span class="men_num">1.</span>Introduction</p>
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
                                        <span class="men_num">2.</span>Survey
                                    </p>
                                </a>
                            </li>
                            <li class="menul menul3">
                                <a href="./answer.php">
                                    <p><span class="men_num">3.</span>Inquiry</p>
                                </a>
                            </li>
                            <li class="menul menul4">
                                <a href="./register.php">
                                    <p><span class="men_num">4.</span>Register</p>
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
            <nav id="prev_map">
                <ul>
                    <li>
                       </li>
                    <li class="count_page">설문회차 : <span>500</span>/500</li>
                </ul>
            </nav>
            <p><img src="../" alt=""></p>
          <p class="count_title">설문에 참여해 주셔서 감사합니다.</p>
          <p class="count_text">설문 결과는 소중한 연구자료로 활용되어 보다 안전한 도시환경을 만드는 정책자료로 활용됩니다.</p>
          <div class="AB_btn">
            <button class="blue">확인</button>
        </div>
        </section>
        <div class="btm_text">
            <div>
                <p>본 설문조사 관련하여 궁금한 사항은 아래 이메일로 문의주시기 바랍니다.</p>
                <p>helpfallscore@gmail.com</p>
            </div>

            <div class="btm_btn">
                <button>|| 설문 일시정지</button>
                <div class="Pop_alert stop">
                    <p class="bold">설문 일시정지</p>
                    <p class="normal">이제까지의 설문은 모두 저장되며 언제든지 다시 시작할 수 있습니다.</p>
                    <div class="Pop_btn">
                        <button class="btn_style"><a href="./">확인</a></button>
                        <button class="btn_style"><a href="./">계속하기</a></button>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <div>
            <p class="logo">낙상위험도설문조사</p>
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
</body>

</html>