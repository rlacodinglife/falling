<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>낙상위험환경 설문조사</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src="./js/m_nav.js"></script>
    <script src="./js/label.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const pause = document.getElementById('Pause')
            const Alert = document.querySelector('div.Pop_alert')

            pause.addEventListener('click', () => {
                gsap.set(Alert, {
                    display: 'block',
                    opacity: 1
                })
            })


        })
    </script>
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
                    <button class="login_btn_"><a href="./login.php">로그인</a><span class="slash">/</span><a
                            href="./register.php">회원가입</a></button>
                </li>
                <li class="lang">
                    <p><a href="./index.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./en/index.php">ENG</a></p>
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
            <nav id="prev_map">
                <ul>
                    <li>
                        < 이전 질문으로</li> <li class="count_page">설문회차 : <span>1</span>/500
                    </li>
                </ul>
            </nav>

            <div class="img_wrap">
                <p class="title">Q . 어떤 장소에서 낙상위험이 더욱 높아 보이나요?</p>
                <ul class="img_sel">
                    <li><img src="../images/image_0001.png" alt="이미지A">
                        <p>A</p>
                        <div class="AB_btn">
                            <button class="blue">A. 선택하기 </button>
                        </div>
                    </li>

                    <div class="AB_btn"><button class="grey nodiff">차이없음</button></div>

                    <li><img src="../images/image_0002.png" alt="이미지B">
                        <p>B</p>
                        <div class="AB_btn">
                            <button class="blue">B. 선택하기 </button>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="select_wrap">

                <p class="select_q">선택한 장소가 낙상위험이 가장 높다고 생각한 이유는 무엇인가요?</p>
                <ul>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">바닥이 미끄러워
                            보여서
                        </label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            바닥이 깨져있거나 울퉁불퉁해서</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            바닥 높이 변화(단차)가 심해서</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            계단이 있어서</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            경사가 심해 보여서</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            걷는데 방해가 되는 물건(쓰레기, 화분, 주차차량 등)이 있어서</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            보도가 없거나 좁아서</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            유동인구가 많아 보여서</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            차량 통행이 많아 보여서</label>
                    </li>
                    <li class="select_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            밤길이 어두울 것 같아서</label>
                    </li>

                    <li class="select_box select_big_box">
                        <label class="select"><input type="radio" id="select_list" name="select" value="select">
                            기타 (위 선택지에서 해당사항이 없을 시 작성해주십시오.)</label>
                    </li>
                    <li class="select_box select_big_box select_text_box">
                        <label class="select"><input type="text" id="select_text"
                                placeholder="위 선택지에서 해당사항이 없을 시 작성해주십시오">
                        </label>
                    </li>
                    <li class="submitNext"><a href="./"><input type="submit" value="제출 및 다음설문" id="btnsame"
                                class="btn_type btn_primary btn_style"></a> </li>
                </ul>
            </div>


        </section>
        <div class="btm_text">
            <div>
                <p>본 설문조사 관련하여 궁금한 사항은 아래 이메일로 문의주시기 바랍니다.</p>
                <p>helpfallscore@gmail.com</p>
            </div>
            <div class="btm_btn">
                <button id="Pause">|| 설문 일시정지</button>
                <div class="Pop_alert stop">
                    <p class="bold">설문 일시정지</p>
                    <p class="normal">이제까지의 설문은 모두 저장되며 언제든지 다시 시작할 수 있습니다.</p>
                    <div class="Pop_btn AB_btn">
                        <button class="btn_style backwhite continue"><a href="./">취소</a></button>
                        <button class="btn_style backblack confirm"><a href="./restart.php">확인</a></button>
                    </div>
                </div>

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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const pauseButton = document.getElementById('Pause');
            const alertPopup = document.querySelector('.Pop_alert');
            const continueButton = document.querySelector('.Pop_btn .btn_style.backwhite'); // 수정 필요
            const confirmButton = document.querySelector('.Pop_btn .btn_style.backblack'); // 수정 필요

            if (pauseButton && alertPopup && continueButton && confirmButton) {
                pauseButton.addEventListener('click', () => {
                    alertPopup.style.display = 'block';
                });

                continueButton.addEventListener('click', () => {
                    alertPopup.style.display = 'none';
                });

                confirmButton.addEventListener('click', () => {
                    // Store the survey state and redirect to the main page
                    fetch('pause_survey.php').then(() => {
                        window.location.href = './main_page.php';
                    });
                });
            } else {
                console.error('필요한 요소를 찾을 수 없습니다.');
            }
        });
    </script>
    <script>
        // 현재 질문 번호를 저장할 변수 (실제로는 서버에서 받아오거나 세션 저장소에서 가져옴)
        let currentQuestionNumber = 1; // 예시로 1부터 시작

        // 총 질문 개수 및 추가 질문을 표시할 타이밍 설정
        const totalQuestions = 500; // 총 500개
        const maxAdditionalQuestions = 10; // 최대 10회 추가 질문 가능
        let additionalQuestionCount = 0; // 추가 질문이 몇 번 나왔는지 추적

        // 페이지 로딩 시 실행
        window.onload = function() {
            checkForAdditionalQuestion();
        };

        // 매 50번째 질문마다 추가 질문 표시 여부를 체크하는 함수
        function checkForAdditionalQuestion() {
            if (currentQuestionNumber % 50 === 0 && additionalQuestionCount < maxAdditionalQuestions) {
                // 추가 질문을 표시해야 할 경우
                document.querySelector('.select_wrap').style.display = 'block'; // 추가 질문 섹션을 보이게 함
                additionalQuestionCount++; // 추가 질문 카운트 증가
            } else {
                // 추가 질문이 없는 경우
                document.querySelector('.select_wrap').style.display = 'none'; // 추가 질문 섹션을 숨김
            }
        }

        // 다음 질문으로 넘어가는 함수 (버튼 클릭 시 호출)
        function goToNextQuestion() {
            // 선택된 값을 서버로 전송 (Ajax로 서버에 저장)
            saveUserChoice();

            // 다음 질문으로 이동 (여기서는 질문 번호만 증가시킴, 실제로는 페이지 이동이 필요)
            currentQuestionNumber++;

            // 추가 질문 표시 여부를 다시 확인
            checkForAdditionalQuestion();
        }

        // 선택한 값 저장
        function saveUserChoice() {
            let selectedValue = document.querySelector('input[name="select"]:checked')?.value || '';
            let textValue = document.getElementById('select_text').value;

            // 값이 없으면 경고
            if (!selectedValue && !textValue) {
                alert('선택 사항을 입력해주세요.');
                return;
            }

            // Ajax를 이용해 선택한 값을 서버에 전송
            const data = {
                questionNumber: currentQuestionNumber,
                selectedValue: selectedValue || textValue // 라디오버튼 값이나 텍스트박스 값을 전송
            };

            fetch('save_choice.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams(data)
            })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    console.log('응답이 성공적으로 저장되었습니다.');
                } else {
                    console.error('저장 실패:', result.error);
                }
            })
            .catch(error => {
                console.error('에러 발생:', error);
            });
        }
    </script>

</body>

</html>