<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>비밀번호 찾기</title>
    <link rel="stylesheet" href="./css/login.css">
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.js'></script>
    <script src="./js/m_nav.js"></script>
    <script src="./js/Error.js"></script>
    <!-- <script src="./js/login.js"></script> -->
    <script>
        document.getElementById('btnJoin').addEventListener('click', function(event) {
    event.preventDefault();

    const idValue = document.getElementById('id1').value.trim();
    const emailValue = document.getElementById('email').value.trim();

    if (idValue === '' || emailValue === '') {
        alert('아이디와 이메일을 입력해주세요.');
        return;
    }

    fetch('./find_password.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            id: idValue,
            email: emailValue
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            alert('임시 비밀번호: ' + data.temp_password);
            // Optionally, redirect to login page or show a pop-up
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});

    </script>
    <!-- <script>
document.addEventListener('DOMContentLoaded', () => {
    const nameInput = document.getElementById('name');
    const dateInput = document.getElementById('date');
    const nameError = document.getElementById('nameError');
    const pwError = document.getElementById('pwError');

    // 이름과 생년월일 입력 유효성 검사
    nameInput.addEventListener('blur', function () {
        if (nameInput.value.trim() === '') {
            nameError.textContent = '이름을 확인해주세요';
        } else {
            nameError.textContent = '';
        }
    });

    dateInput.addEventListener('blur', function () {
        if (dateInput.value === '') {
            pwError.textContent = '생년월일을 확인해주세요';
        } else {
            pwError.textContent = '';
        }
    });

    // 확인 버튼 클릭 시 처리
    const btnJoin = document.getElementById('btnJoin');
    btnJoin.addEventListener('click', function (event) {
        event.preventDefault();

        const nameValue = nameInput.value.trim();
        const dateValue = dateInput.value;

        if (nameValue === '' || dateValue === '') {
            alert('이름과 생년월일을 입력해주세요.');
            return;
        }

        // AJAX 요청을 통해 PHP로 데이터 전달
        fetch('./find_password.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                name: nameValue,
                date: dateValue
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // 성공 시 임시 비밀번호 팝업 표시
                document.querySelector('.Pop_alert.able').classList.add('show');
                document.querySelector('.Pop_alert.able .Pop_span').textContent = data.temp_password;
            } else {
                // 실패 시 오류 팝업 표시
                document.querySelector('.Pop_alert.unable').classList.add('show');
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
</script> -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const emailInput = document.getElementById('email')
            const emailError = document.getElementById('emailError')
            const emailadr = document.getElementById('email_adr')
            const emailvalue = document.querySelector('input#email_adr>option')

            let ValueText = emailvalue

            emailInput.addEventListener('blur', function () {
                // 입력 필드의 값이 비어있는지 확인합니다.
                if (emailInput.value.trim() === '') {
                    // 입력값이 비어있는 경우 에러 메시지를 설정합니다.
                    emailError.textContent = '이메일을 확인해주세요';
                    emailError.style.display = 'block';
                } else {
                    // 입력값이 있는 경우 에러 메시지를 지웁니다.
                    emailError.textContent = '';
                    emailError.style.display = 'none'
                }
            })


        });
        // $("select[name=sel_email]").on("change", function(){
        // var $addr = $(this).closest(".form").find("input[name=email_addr]");
        // if ($(this).val() == "etc") {
        //     $addr.val('');
        //     $addr.prop("readonly",false);

        // } else {
        //     $addr.val($(this).val());
        //     $addr.prop("readonly",true);
        // }

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
                    <p><a href="./seacrhPass.php">KOR</a></p>
                    <p>|</p>
                    <p><a href="./en/seacrhPass.php">ENG</a></p>
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
            <div id="wrap" class="wrapper">
                <form method="post" name="join" id="join" action="find_password.php">
                    <!-- 회원가입 타이틀부분 -->
                    <h1 class="h_loho">
                        비밀번호 찾기
                    </h1>

                    <div id="container">
                        <div class="row_group">
                            <div class="userInput">
                                <!-- 아이디 입력 -->
                                <h3 class="list">아이디</h3>
                                <span class="box int_id"><input type="text" id="id1" class="int check" placeholder="이름입력"
                                        maxlength="20"></span>
                                <span id="idError" class="ErrorMsg"></span>
                            </div>
                            <div class="userInput">
                                <!-- 비밀번호 입력 -->
                                <h3 class="list">이메일</h3>
                                <span class="box int_id email_box"><input type="email" id="email"
                                        class="int check email" placeholder="6~8자,영문 대소문자,숫자" maxlength="2999-99-99">

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
                                <a href="./subpage.php"><input type="button" value="확인" id="btnJoin"
                                        class="btn_type btn_primary btn_style"></a>
                            </div>
                            <div class="search_area">
                                <a href="./login.php">로그인</a><span>|</span><a href="./seacrhID.php">아이디
                                    찾기</a><span>|</span><a href="./register.php">회원가입</a>
                            </div>
                        </div>

                    </div>

                </form>


                <!-- 비밀번호 찾기 성공 팝업 -->
<div class="Pop_alert able" style="display: none;">
    <p class="bold">비밀번호 찾기</p>
    <p class="normal">회원님의 임시 비밀번호는 <span class="Pop_span"></span> 입니다.<br> 로그인 후 꼭 변경해주세요</p>
    <div class="Pop_btn AB_btn">
        <button class="btn_style cancle grey"><a href="./login.php">취소</a></button>
        <button class="btn_style login blue"><a href="./login.php">로그인</a></button>
    </div>
</div>

<!-- 비밀번호 찾기 실패 팝업 -->
<div class="Pop_alert unable" style="display: none;">
    <p class="bold">비밀번호 찾기</p>
    <p class="normal">회원정보가 존재하지 않습니다</p>
    <div class="Pop_btn">
        <button class="btn_style grey"><a href="./register.php">회원가입 하러가기</a></button>
        <button class="btn_style blue"><a href="./subpage.php">취소</a></button>
    </div>
</div>

        </section>
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
            <p>Copyright 2024 HARP LAB All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const nameInput = document.getElementById('id');
            const nameError = document.getElementById('idError');
            const emailInput = document.getElementById('email');
            const emailError = document.getElementById('emailError');

            nameInput.addEventListener('blur', function () {
                if (nameInput.value.trim() === '') {
                    nameError.textContent = '아이디을 확인해주세요';
                    nameError.style.display = 'block';
                } else {
                    nameError.textContent = '';
                    nameError.style.display = 'none';
                }
            });

            emailInput.addEventListener('blur', function () {
                if (emailInput.value.trim() === '') {
                    emailError.textContent = '이메일을 확인해주세요';
                    emailError.style.display = 'block';
                } else {
                    emailError.textContent = '';
                    emailError.style.display = 'none';
                }
            });
         });
    </script>
</body>

</html>