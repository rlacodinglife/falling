<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fall Risk Assessment Survey</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src="../js/m_nav.js"></script>
    <script src="../js/label.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const pause = document.getElementById('Pause')
            const Alert = document.querySelector('div.Pop_alert')

            pause.addEventListener('click', () => {
                gsap.set(Alert, { display: 'block', opacity: 1 })
            })


        })
    </script>
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
                    <button class="login_btn_"><a href="./login.php">Log In</a><span class="slash">/</span><a
                            href="./register.php">Register</a></button>
                </li>
                <li class="lang">
                    <p><a href="../index.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./index.php">ENG</a></p>
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
                        < Prev</li>
                    <li class="count_page">Survey Count: <span>1</span>/500</li>
                </ul>
            </nav>
            <div class="img_wrap">
                <p class="title">Which place looks to have a higher risk of falling?</p>
                <ul class="img_sel">
                    <li><img src="../images/image_0001.png" alt="이미지A">
                        <p>A</p>
                        <div class="AB_btn">
                            <button class="blue">A. Select </button>
                        </div>
                    </li>

                    <div class="AB_btn"><button class="grey">No difference</button></div>

                    <li><img src="../images/image_0002.png" alt="이미지B">
                        <p>B</p>
                        <div class="AB_btn">
                            <button class="blue">B. Select </button>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="select_wrap" style="position: relative;">
                <br>
                <hr><br>Why do you think the place you chose had a high risk of falling the most?</p>
                <ul>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">Slippery pathway
                        </label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Broken or uneven pavement</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Large height difference in footpath</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Stair</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Steep slope</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Obstructed footpath (e.g., Garbage, flowerpot, parked car, etc.)</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            No pedestrian-only path or too narrow</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Large volume of pedestrians anticipated</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Large volume of vehicles anticipated</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Too dark at night</label>
                    </li>

                    <li class="select_box select_big_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            Others (Specify below)</label>
                    </li>
                    <li class="select_box select_big_box">
                        <label class="select"><input type="text" id="select_text"
                                placeholder="위 선택지에서 해당사항이 없을 시 작성해주십시오">
                        </label>
                    </li>
                    <li class="submitNext"><a href="./"><input type="submit" value="submit and proceed" id="btnsame"
                        class="btn_type btn_primary btn_style"></a> </li>
                </ul>
            </div>
        </section>
        <div class="btm_text">
            <div>
                <p>*If you have any questions regarding this survey, please contact us at the following email.</p>
                <p>helpfallscore@gmail.com</p>
            </div>
            <div class="btm_btn">
                <button id="Pause">Pause</button>
                <div class="Pop_alert stop">
                    <p class="bold">Pause</p>
                    <p class="normal">이제까지의 설문은 모두 저장되며 언제든지 다시 시작할 수 있습니다.</p>
                    <div class="Pop_btn AB_btn">
                        <button class="btn_style backwhite"><a href="./">Cancle</a></button>
                        <button class="btn_style backblack"><a href="./">Check</a></button>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <div>
            <p class="logo">Fall Risk Assessment Survey</p>
            <p>
                <span>Terms of service</span> |
                <span>Privacy Policy</span>
            </p>
        </div>
        <p style="width: 100%; height: 1px; background-color: #949494;"></p>
        <div>
            <p>Copyright 2024 HARP LAB All Rights Reserved.</p>
        </div>
    </footer>
</body>

</html>