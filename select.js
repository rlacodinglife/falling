// 페이지 로딩 시 실행
window.onload = function() {
  checkForAdditionalQuestion();
};

// 변수 초기화
let currentQuestionNumber = 1; // 현재 질문 번호 (1부터 시작)
let additionalQuestionCount = 0; // 추가 질문 카운트
const maxAdditionalQuestions = 10; // 최대 추가 질문 수

// 매 50번째 질문마다 추가 질문 표시 여부를 체크하는 함수
function checkForAdditionalQuestion() {
  if (currentQuestionNumber % 50 === 0 && additionalQuestionCount < maxAdditionalQuestions) {
      document.querySelector('.select_wrap').style.display = 'block'; // 추가 질문 섹션을 보이게 함
      additionalQuestionCount++; // 추가 질문 카운트 증가
  } else {
      document.querySelector('.select_wrap').style.display = 'none'; // 추가 질문 섹션을 숨김
  }
}

// 다음 질문으로 넘어가는 함수 (버튼 클릭 시 호출)
function goToNextQuestion() {
  // 선택된 값을 서버로 전송
  saveUserChoice();

  // 다음 질문으로 이동
  currentQuestionNumber++;

  // 추가 질문 표시 여부를 다시 확인
  checkForAdditionalQuestion();
}

// 선택한 값 저장
function saveUserChoice() {
  // 'select' name을 가진 모든 라디오 버튼을 가져옴
  let selectedOptions = document.querySelectorAll('input[name="select"]');
  let selectedValue = '';

  // 라디오 버튼들 중에서 체크된 값 찾기
  for (let i = 0; i < selectedOptions.length; i++) {
      if (selectedOptions[i].checked) {
          selectedValue = selectedOptions[i].value;
          break;
      }
  }

  // 텍스트 입력 값 가져오기
  let textValue = document.getElementById('select_text').value;

  // 아무 값도 선택되지 않은 경우
  if (!selectedValue && !textValue) {
      alert('선택 사항을 입력해주세요.');
      return;
  }

  // 선택된 값을 Ajax로 서버에 전송
  const data = {
      userId: '사용자ID', // 실제 로그인된 사용자 ID를 세션에서 가져오도록 수정
      selectedValue: selectedValue,
      textValue: textValue
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
          console.log('사용자 선택이 저장되었습니다.');
          // 다음 질문으로 이동 (goToNextQuestion() 함수 호출)
          goToNextQuestion();
      } else {
          console.error('저장 실패:', result.error);
      }
  })
  .catch(error => {
      console.error('에러 발생:', error);
  });
}

// 이미지 선택 후 저장하는 함수
function saveSelectedImage(imageName) {
  const data = {
      userId: '사용자ID', // 실제 로그인된 사용자 ID를 세션에서 가져오도록 수정
      imageName: imageName // 선택한 이미지 파일 이름
  };

  fetch('save_image.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: new URLSearchParams(data)
  })
  .then(response => response.json())
  .then(result => {
      if (result.success) {
          console.log('이미지 선택이 저장되었습니다.');
      } else {
          console.error('저장 실패:', result.error);
      }
  })
  .catch(error => {
      console.error('에러 발생:', error);
  });
}
