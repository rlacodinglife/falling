<?php
// db_config.php 포함 (DB 연결 설정)
include 'db_config.php';

// 세션 시작 (설문 진행 상태 저장)
session_start();

// 설문 회차 초기화
if (!isset($_SESSION['currentRound'])) {
    $_SESSION['currentRound'] = 1;
}

// 총 이미지 개수
$totalImages = 5000;

// 이미지 디렉토리 경로
$imageDir = './images/';

// 중복을 방지한 두 개의 랜덤 이미지 선택 함수
function getRandomImages($totalImages) {
    $firstImage = rand(1, $totalImages);
    $secondImage = rand(1, $totalImages);

    // 두 이미지가 동일할 경우 다시 선택
    while ($firstImage == $secondImage) {
        $secondImage = rand(1, $totalImages);
    }

    // 이미지 파일 이름 생성 (예: image_0001.png)
    $images = [
        'image_' . str_pad($firstImage, 4, '0', STR_PAD_LEFT) . '.png',
        'image_' . str_pad($secondImage, 4, '0', STR_PAD_LEFT) . '.png',
    ];

    return $images;
}

// 이미지 선택
$randomImages = getRandomImages($totalImages);

// 설문 제출 처리 (POST 요청)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 사용자가 선택한 이미지 및 추가 정보
    $selectedImage = $_POST['selectedImage'] ?? null;
    $reason = $_POST['reason'] ?? null;  // 선택 이유
    $noDifference = isset($_POST['noDifference']) ? 1 : 0;  // '차이 없음' 선택 여부

    // 데이터베이스에 선택 내용 저장
    $stmt = $gconnet->prepare("INSERT INTO survey_responses (round, selected_image, no_difference, reason, user_id) VALUES (?, ?, ?, ?, ?)");

    // 사용자 ID는 로그인 기반으로 세션에서 가져올 수 있습니다 (익명 사용자는 NULL)
    $userId = $_SESSION['user_id'] ?? null;

    // 현재 설문 회차
    $currentRound = $_SESSION['currentRound'];

    // SQL 쿼리에 파라미터 바인딩
    $stmt->bind_param('isisi', $currentRound, $selectedImage, $noDifference, $reason, $userId);

    // 쿼리 실행
    if ($stmt->execute()) {
        // 회차 증가
        $_SESSION['currentRound']++;

        // 50회마다 추가 질문 로직
        if ($currentRound % 50 == 0) {
            header('Location: additional_questions.php');  // 추가 질의 페이지로 이동
            exit;
        }

        // 500회차가 끝나면 설문 종료
        if ($currentRound >= 500) {
            echo "<script>alert('설문이 종료되었습니다. 참여해 주셔서 감사합니다.');</script>";
            session_destroy();  // 세션 초기화
            header('Location: index.php');
            exit;
        }

        // 다음 질문으로 이동
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "오류 발생: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>낙상위험환경 설문조사</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/common.css">
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
                    <li>< 이전 질문으로</li>
                    <li class="count_page">설문 회차: <span><?= $_SESSION['currentRound'] ?></span>/500</li>
                </ul>
            </nav>

            <div class="img_wrap">
                <p class="title">Q. 어떤 장소에서 낙상위험이 더 높아 보이나요?</p>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <ul class="img_sel">
                        <li>
                            <img src="<?= $imageDir . $randomImages[0] ?>" alt="이미지 A">
                            <p>A</p>
                            <div class="AB_btn">
                                <button class="blue" type="submit" name="selectedImage" value="<?= $randomImages[0] ?>">A 선택</button>
                            </div>
                        </li>

                        <li class="AB_btn">
                            <button class="grey" type="submit" name="noDifference" value="1">차이 없음</button>
                        </li>

                        <li>
                            <img src="<?= $imageDir . $randomImages[1] ?>" alt="이미지 B">
                            <p>B</p>
                            <div class="AB_btn">
                                <button class="blue" type="submit" name="selectedImage" value="<?= $randomImages[1] ?>">B 선택</button>
                            </div>
                        </li>
                    </ul>

                    <div class="reason_wrap">
                        <label for="reason">선택 이유 (선택 사항):</label>
                        <textarea id="reason" name="reason" rows="4" cols="50"></textarea>
                    </div>
                </form>
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
</body>

</html>
