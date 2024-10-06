<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디찾기</title>
    <link rel="stylesheet" href="../css/login.css">
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
                    <p><a href="../seacrhID.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./seacrhID.php">ENG</a></p>
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
                        Find ID
                    </h1>

                    <div id="container">
                        <div class="row_group">
                            <div class="userInput">
                                <!-- 아이디 입력 -->
                                <h3 class="list">name<span id="idError"></span></h3>
                                <span class="box int_id"><input type="text" id="id" class="int check"
                                        placeholder="" maxlength="20"></span>
                                <!-- <span class="box int_id"> <input type="submit" value="중복확인" id="btnsame"
                                        class="btn_type btn_primary btn_style"><span> -->
                            </div>
                            <div class="userInput">
                                <!-- 비밀번호 입력 -->
                                <h3 class="list">Email</h3>
                                <span class="box int_id email_box"><input type="email" id="email"
                                        class="int check email" placeholder="6 to 8 characters, upper and lower caseletters, numbers" maxlength="2999-99-99">

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
                                <a href="./subpage.php"><input type="button" value="Check" id="btnJoin"
                                        class="btn_type btn_primary btn_style"></a>
                            </div>
                            <div class="search_area">
                                <a href="./seacrhID.php">Login</a><span>|</span><a href="./seacrhPass.php">Fine password</a><span>|</span><a href="./register.php">Sign up</a>
                            </div>
                        </div>

                    </div>

                </form>

                <div class="Pop_alert able">
                    <p class="bold">Find ID</p>
                    <p class="normal">Your ID is
                        <br><span></span><br>.</p>
                    <div class="Pop_btn">
                        <button class="btn_style"><a href="./login.php">Go to log in
                        </a></button>
                        <button class="btn_style"><a href="./seacrhPass.php">Cancel</a></button>
                    </div>
                </div>

                <div class="Pop_alert unable">
                    <p class="bold">Find ID</p>
                    <p class="normal">Membership information does
                        not exist.</p>
                    <div class="Pop_btn">
                        <button class="btn_style"><a href="./register.php">Go to sign up
                        </a></button>
                        <button class="btn_style"><a href="./seacrhPass.php">Cancel</a></button>
                    </div>
                </div>

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