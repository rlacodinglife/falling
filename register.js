document.addEventListener('DOMContentLoaded', function() {
  function getDateFromForm() {
      const yearElement = document.getElementById('birth-year');
      const monthElement = document.getElementById('birth-month');
      const dayElement = document.getElementById('birth-day');

      if (yearElement && monthElement && dayElement) {
          const year = yearElement.value;
          const month = monthElement.value;
          const day = dayElement.value;

          // 날짜 포맷이 올바른지 확인 (예: YYYY-MM-DD)
          if (year && month && day) {
              return `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`;
          } else {
              return null; // 날짜가 완전하지 않으면 null 반환
          }
      } else {
          console.error('Date fields are not found in the DOM');
          return null;
      }
  }

  // 사용 예시
  const date = getDateFromForm();
  console.log(date); // 출력: YYYY-MM-DD
});

