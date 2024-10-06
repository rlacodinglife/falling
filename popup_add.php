<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <li>찾고자 하시는 동명/도로명을 입력 후 검색 버튼을 눌러주세요.<br>
          *도로명 주소란? 도로명과 건물번호로 이루어진 새로운 주소체계입니다.
      </li>
      <hr>




<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
    new daum.Postcode({
        oncomplete: function(data) {
        }
    }).open();
</script>
</body>
</html>