<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/check.css">
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
                    <p><a href="../checkbox.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./checkbox.php">ENG</a></p>
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
            <div class="check_wrap">
                <fieldset>
                    <legend>Why do you think the place you chose had a high risk of falling?</legend>

                    <div>
                        <input type="checkbox" id="scales" name="scales"   />
                        <label for="scales">Slippery pathway
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">Broken or uneven pavement
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="scales" />
                        <label for="scales">Large height difference in footpath
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">Stair
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="scales"  />
                        <label for="scales">Steep slope
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">Obstructed footpath (e.g., Garbage, flowerpot, parked car, etc.)
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="scales"  />
                        <label for="scales">No pedestrian-only path or too narrow
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">Large volume of pedestrians anticipated
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">Large volume of vehicles anticipated
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">Too dark at night
                        </label>
                    </div>
                    <div class="input_text">
                        <label  for="submit">Others (Specify below)
                        </label><br>
                        <input type="text" id="submit" name="submit">
                    </div>
                </fieldset>
            </div>
            <div class="AB_btn">
                <button class="yellow ">submit and proceed
                </button>
            </div>
        </section>
        <div class="btm_text">
            <div>
                <p>* If you have any questions regarding this survey, please contact us at the following email.</p>
                <p>helpfallscore@gmail.com</p>
            </div>
            <div class="btm_btn">
                <button>Pause</button>
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