<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/check.css">
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
                <p><a href="./checkbox.php">KOR</a></p>
                <p>|</p>
                <p><a href="./en/checkbox.php">ENG</a></p>
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
                                        <a href="./introducekim.html#sub1_4">창업스토리</a>
                                    </li>
                                </ul>
                            </div> -->
                            </a>
                        </li>
                        <li class="menul menul2">
                            <a href="./index.html">
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
    </nav>
    </header>
    <main id="main_wrap">
        <section id="main">
            <div class="check_wrap">
                <fieldset>
                    <legend>선택한 장소가 낙상위험이 높다고 생각한 이유는 무엇인가요?
                    </legend>

                    <div>
                        <input type="checkbox" id="scales" name="scales"   />
                        <label for="scales">바닥이 미끄러워 보여서
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">바닥이 깨져 있거나 울퉁불퉁해서
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="scales" />
                        <label for="scales">바닥 높이 변화(단차)가 심해서
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">계단이 있어서
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="scales"  />
                        <label for="scales">경사가 심해 보여서
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">걷는데 방해가 되는 물건(쓰레기, 화분, 주차차량 등)이 있어서
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="scales" name="scales"  />
                        <label for="scales">보도가 없거나 좁아서
                        </label>
                    </div>

                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">유동인구가 많아 보여서
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">차량 통행이 많아 보여서
                        </label>
                    </div>
                    <div>
                        <input type="checkbox" id="horns" name="horns" />
                        <label for="horns">밤길이 어두울 것 같아서
                        </label>
                    </div>
                    <div class="input_text">
                        <label  for="submit">기타 (위 선택지에서 해당사항이 없을 시 작성해주십시오)</label><br>
                        <input type="text" id="submit" name="submit">
                    </div>
                </fieldset>
            </div>
            <div class="AB_btn">
                <button class="yellow ">제출 및 다음설문
                </button>
            </div>
        </section>
        <div class="btm_text">
            <div>
                <p>본 설문조사 관련하여 궁금한 사항은 아래 이메일로 문의주시기 바랍니다.</p>
                <p>helpfallscore@gmail.com</p>
            </div>
            <div class="btm_btn">
                <button>|| 설문 일시정지</button>
            </div>
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