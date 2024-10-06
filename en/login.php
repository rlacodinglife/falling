<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="../css/login.css">
    <!-- <link rel="stylesheet" href="../css/reset.css"> -->
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.js'></script>
    <script src="../js/m_nav.js"></script>
    <!-- <script src="./js/login.js"></script> -->
</head>
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
                    <p><a href="../login.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./login.php">ENG</a></p>
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
            <div id="wrap" class="wrapper">
                <form method="post" name="join" id="join">
                    <!-- 회원가입 타이틀부분 -->
                    <h1 class="h_loho">
                        Log in
                    </h1>

                    <div id="container">
                        <div class="row_group">
                            <div class="userInput">
                                <!-- 아이디 입력 -->
                                <h3 class="list">ID<span id="idError"></span></h3>
                                <span class="box int_id"><input type="text" id="id" class="int check"
                                        placeholder="" maxlength="20"></span>

                            </div>
                            <div class="userInput">
                                <!-- 비밀번호 입력 -->
                                <h3 class="list">Pass<span id="pwError"></span></h3>
                                <span class="box int_id"><input type="password" id="pw" class="int check"
                                        placeholder="" maxlength="20"></span>
                            </div>
                            <!-- 비밀번호 재확인 입력 -->
                            <div class="btn_area" id="OnPop">
                                <a href="./subpage.php"><input type="button" value="Log in
                                    " id="btnJoin" class="btn_type btn_primary btn_style"></a>
                            </div>
                            <div class="search_area">
                                <a href="./seacrhID.php">Login</a><span>|</span><a href="./seacrhPass.php">Fine password</a><span>|</span><a href="./register.php">Sign up</a>
                            </div>
                        </div>

                    </div>

                </form>

            </section>
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