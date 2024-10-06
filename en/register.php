<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="../css/register.css">
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src="../js/m_nav.js"></script>
    <script src="../js/login.js"></script>
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
                    <p><a href="../register.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./register.php">ENG</a></p>
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
                <form method="post" name="join" id="join" action="register_r.php">
                    <!-- 회원가입 타이틀부분 -->
                    <h1 class="h_loho">
                        Sign up the membership
                    </h1>

                    <div id="container">
                        <div class="row_group">
                            <div class="userInput">
                                <!-- 아이디 입력 -->
                                <h3 class="list">ID<span id="idError"></span></h3>
                                <div class="input_row colunm_btn">
                                    <span class="box int_id span3"><input type="text" id="id" class="int check"
                                            placeholder="5~10 characters,upper and lower case letters, numbers" maxlength="20"></span>
                                    <span class="box int_id span1"> <input type="submit" value="Check" id="btnsame"
                                            class="btn_type btn_primary btn_style"></span>
                                </div>
                            </div>
                            <div class="userInput">
                                <!-- 비밀번호 입력 -->
                                <h3 class="list">Password<span id="pwError"></span></h3>
                                <span class="box int_id"><input type="password" id="pw" class="int check"
                                        placeholder="6 to 8 characters, upper and lower caseletters, numbers" maxlength="20"></span>
                            </div>
                            <!-- 비밀번호 재확인 입력 -->
                            <div class="userInput">
                                <h3 class="list">Password Confirmation<span id="pwCheckError"></span></h3>
                                <span class="box int_id"><input type="password" id="pwCheck" class="int check"
                                        placeholder="6 to 8 characters, upper and lower case letters, numbers" maxlength="20"></span>
                            </div>
                        </div>
                        <div class="row_group">
                            <!-- 성명 입력 -->
                            <div class="userInput">
                                <h3 class="list">name<span id="nameError"></span></h3>
                                <span class="box int_id"><input type="text" id="name" class="int check"
                                        placeholder="Enter your name" maxlength="20"></span>
                            </div>
                                 <!-- 이메일 입력 -->
                                 <div class="userInput">
                                    <h3 class="list">이메일</h3>
                                    <span class="box int_id"><input type="text" id="email" class="int check" placeholder=""
                                            maxlength="40"></span>
                                    <span id="EmailError" class="ErrorMsg"></span>
                                </div>
                            <!-- 생년월일 입력 -->
                            <div class="userInput">
                                <h3 class="list">Date of birth<span class="yearError"></span></h3>
                                <span class="box int_id"><input type="date" id="year" class="int check" placeholder="년도"
                                        maxlength="4"></span>
                            </div>
                            <!-- 성별입력 -->
                            <div class="userInput">
                                <h3 class="list">Gender<span class="genderError"></span></h3>
                                <span class="box int_id">
                                    <label class="select"><input type="radio" id="boy" name="check" value="Male"> Male</label>
                                    <label class="select"><input type="radio" id="girl" name="check" value="Female">
                                        Female</label></span>
                            </div>
                            <!-- 학력입력 -->
                            <div class="userInput">
                                <h3 class="list">Education<span id="emailError"></span></h3>
                                <span class="emailInt" id="emailBox">
                                    <!-- 이메일 택일 -->
                                    <select id="mail_School">
                                        <option>Select</option>
                                        <option>고졸</option>
                                        <option>대졸</option>
                                        <option>대학원졸</option>
                                    </select>
                                </span>
                            </div>
                            <!-- 전화번호 입력 -->
                            <div class="userInput">
                                <h3 class="list">Ophone<span id="phoneNumError"></span></h3>
                                <div class="phone_col input_row">

                                    <span class="box int_id"><input type="number" id="firstNum" class="int check"
                                            maxlength="3"></span> -
                                    <span class="box int_id"><input type="number" id="secondNum" class="int check"
                                            maxlength="4"></span> -
                                    <span class="box int_id"><input type="number" id="thirdNum" class="int check"
                                            maxlength="4"></span>
                                </div>
                            </div>
                            <!-- 주소 입력 -->
                            <div class="userInput">
                                <h3 class="list">
                                    Address
                                </h3>
                                <div id="address" class="int_id">
                                    <div class="input_row colunm_btn">
                                        <span class="box int_id span3">
                                            <input style="margin-bottom: 3vh;" type="text" id="sample4_postcode"
                                                class="d_form mini int line addressCheck" placeholder="우편번호" readonly>

                                        </span>
                                        <span class="box int_id">
                                            <input type="button" id="addressButton" class="d_form mini btn_style"
                                                value="Zip code" readonly>
                                        </span>

                                    </div>
                                    <span class="box int_id">
                                    <input type="text" id="address" placeholder="상세주소"
                                        maxlength="999" class="int check">
                                    </span>
                                    <!-- 밑부분을 p태그 or <br?> -->

                                    <span id="addressError"></span>
                                </div>
                            </div>
                            <!-- 회원약관 -->
                            <div class="userInput">
                                <h3 class="list">Membership Terms and Conditions<span id="emailError"></span></h3>
                                <span class="rule" id="rule"> <input type="text" id="rule" placeholder="Membership Terms and Conditions"
                                        maxlength="999" class="int check">
                                    <!-- 이메일 택일 -->

                                </span>
                            </div>
                            <!-- 개인정보 수집 동의 -->
                            <div class="userInput agreeInput">

                                <label class="select"><input type="radio" id="check" name="check" value="Agree"> Agree</label>

                            </div>
                            <div class="btn_area" id="OnPop">
                                <input type="button" value="join the membership" id="btnJoin" class="btn_type btn_primary btn_style">
                            </div>
                        </div>
                    </div>
                </form>



                <div class="Pop_alert">
                    <p class="bold">Complete membership
                        registration</p>
                    <p class="normal">Membership registration has been
                        completed and surveys are available</p>
                    <div class="Pop_btn  AB_btn">
                        <button class="btn_style grey"><a href="./register.php">Check</a></button>
                        <button class="btn_style blue"><a href="./subpage.php">Go to Surbey</a></button>
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