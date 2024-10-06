<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>설명</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src="../js/m_nav.js"></script>
</head>

<body>
    <header>
        <nav class="top_nav">
            <h2 class="logo">Fall Risk Assessment Survey</h2>
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
                    <p><a href="../subpage.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./subpage.php">ENG</a></p>
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
    <main class="main_wrap">
        <p class="main_title">Fall Risk Assessment Survey</p>

        <section class="main main_img">
            <div class="main_top_text">
                <h2>What is this survey about?</h2>
                <p>This survey was designed to investigate the level of fall risk among older
                    adults in the outdoor environment. In Korea, over 830,000 older adults ( >65)
                    die from falls each year, making it the second leading cause of older adults’
                    accidental death after traffic accidents. When an older adult is hospitalized
                    due to a fall, rapid muscle loss occurs, and this muscle loss greatly weakens
                    blood vessels, internal organs, and immune cell functions, leading to death. </p>
                <p>The reasons for falls are varied, but environmental factors such as floor
                    surface conditions, stairs, obstructions play a major role.</p>
            </div>
            <img class="main_top_img" src="../images/intro.png" alt="">
        </section>
        <section class="main">
            <div class="main_bottom_text">
                <h2>How to do this survey?</h2>
                <p>In the survey, these environmental factors are taken into consideration. Once you log in, you are shown two images and asked to select one that appears to
                    have a higher overall risk of falling. The survey will be completed when a total of 500 image comparisons have been processed (total estimated time of
                    approximately 20-30 minutes). You can stop and log out during the survey process and proceed again later by logging in with the same user ID and PW. The
                    survey results will be used as valuable research and policy data to create safer urban environments.</p>

                <p>*Please conduct the survey on a desktop computer or tablet due to the large image size.</p>
            </div>
        </section>
        <section class="main">
            <div class="main_bottom_text">
                <h2>Research team and funding information</h2>

                <table style="width: 100%; margin-top: 2vh;">
                    <colgroup>
                        <col style="width: 20%;">
                        <col style="width: 35%;">
                        <col style="width: 45%;">
                    </colgroup>
                    <thead>
                        <tr style="height: 5vh; font-size: 1.25em; padding: .25vw; box-sizing: border-box;">
                            <td colspan="3">Fall Risk Survey Leads</td>
                            <td colspan=""></td>
                            <td colspan=""></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Andy Hong</td>
                            <td>University of Utah </td>
                            <td>Healthy Aging and Resilient Places Lab</td>
                        </tr>
                        <tr>
                            <td>Dong-ah Choi </td>
                            <td>Hanyang University</td>
                            <td>Graduate School of Urban Studies</td>
                        </tr>
                        <tr>
                            <td>Donghwan Ki</td>
                            <td>Ohio State University</td>
                            <td>City and Regional Planning, PhD candidate</td>
                        </tr>
                        <tr>
                            <td>Jaehyun Ha</td>
                            <td>University of Southern California </td>
                            <td>Urban Planning and Development, PhD candidate</td>
                        </tr>
                    </tbody>
                </table>
                <table style="width: 100%; margin-top: 2vh;">
                    <colgroup>
                        <col style="width: 20%;">
                        <col style="width: 30%;">
                        <col style="width: 50%;">
                    </colgroup>
                    <thead>
                        <tr style="height: 5vh; font-size: 1.25em; padding: .25vw; box-sizing: border-box;">
                            <td colspan="3">Full Research Team</td>
                            <td colspan=""></td>
                            <td colspan=""></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Soong-nang Jang</td>
                            <td>Chung-Ang University </td>
                            <td>Red Cross College of Nursing</td>
                        </tr>
                        <tr>
                            <td>Eunhee Choi</td>
                            <td>Chung-Ang University </td>
                            <td>Institute for Community Care and Health Equity</td>
                        </tr>
                        <tr>
                            <td>Minkyoung Kim </td>
                            <td>Chung-Ang University </td>
                            <td>Institute for Community Care and Health Equity</td>
                        </tr>
                        <tr>
                            <td>Seok-gyu Kim</td>
                            <td>Chung-Ang University </td>
                            <td>Institute for Community Care and Health Equity</td>
                        </tr>
                        <tr>
                            <td>Suhyeon Choi</td>
                            <td>Chung-Ang University </td>
                            <td>Red Cross College of Nursing</td>
                        </tr>
                        <tr>
                            <td>Ji-hee Choi </td>
                            <td>Chung-Ang University </td>
                            <td>Institute for Community Care and Health Equity</td>
                        </tr>
                        <tr>
                            <td>Keumhee Han</td>
                            <td>Chung-Ang University </td>
                            <td>Institute for Community Care and Health Equity</td>
                        </tr>
                        <tr>
                            <td>Sun-young Park</td>
                            <td>Chung-Ang University </td>
                            <td>Institute for Community Care and Health Equity</td>
                        </tr>
                        <tr>
                            <td>Susan Park </td>
                            <td>Seoul National University</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Moon Choi </td>
                            <td>Korea Advanced Institute of Science and Technology</td>
                            <td>Graduate School of Science and Technology Policy</td>
                        </tr>
                        <tr>
                            <td>Tae Kyung Kim </td>
                            <td>Korea Advanced Institute of Science and Technology</td>
                            <td>Graduate School of Science and Technology Policy</td>
                        </tr>
                        <tr>
                            <td>Agnes Jihae Kim </td>
                            <td>Korea Advanced Institute of Science and Technology</td>
                            <td>Graduate School of Science and Technology Policy</td>
                        </tr>
                        <tr>
                            <td>Jiwon Park</td>
                            <td>Korea Advanced Institute of Science and Technology</td>
                            <td>Graduate School of Science and Technology Policy</td>
                        </tr>
                        <tr>
                            <td>Haejoo Chung</td>
                            <td>Korea University</td>
                            <td>Division of Health Policy and Management</td>
                        </tr>
                        <tr>
                            <td>Jongnam Hwang </td>
                            <td>Wonkwang University</td>
                            <td>Division of Social Welfare & Health Administration</td>
                        </tr>
                        <tr>
                            <td>Juhee Park</td>
                            <td>Wonkwang University</td>
                            <td>Department of Health Policy and Management</td>
                        </tr>
                        <tr>
                            <td>Jongwoo Kim</td>
                            <td>Wonkwang University</td>
                            <td>Department of Health Policy and Management</td>
                        </tr>
                        <tr>
                            <td>Jane Park</td>
                            <td>ASEM Global Ageing Center</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Suhyun Choi</td>
                            <td>Gyeongsangbuk-do Public Health Policy Institute</td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
                <p>*This survey was supported by the Korea Health Promotion Institute's research project, “Beyond a
                    healthy city to a care city, a sustainable smart integrated care
                    city: Focusing on Jeongeup-si, Jeollabuk-do (research leader: Professor Jang Suk-rang, Chung-Ang
                    University).”</p>
            </div>
        </section>

        <div class="btm_text">
            <div class="btm_btn">
                <a href="./index.php"><button>Start survey</button></a>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <p class="logo">Fall Risk Assessment Survey</p>
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
<style>
    table {
        border-collapse: collapse;
    }

    td {
        padding: .125em;
        box-sizing: border-box;
    }

    tbody>tr>td {
      
        margin-top: .5vh;
        line-height:1em
    }
    tbody>tr>td:nth-child(1){
        text-indent:0.5em
    }
   
</style>

</html>