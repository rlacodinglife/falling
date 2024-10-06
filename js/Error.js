document.addEventListener('DOMContentLoaded', function () {
    const btnSame = document.getElementById('btnsame');
    const IdInput = document.getElementById('id');
    const IdError = document.getElementById('idError');
    const checkIdMessage = document.getElementById('checkIdMessage');

    const pwInput = document.getElementById('pw');
    const pwError = document.getElementById('pwError');

    const pwcInput = document.getElementById('pwCheck');
    const pwcError = document.getElementById('pwCheckError');

    const nameInput = document.getElementById('name');
    const nameError = document.getElementById('nameError');

    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('EmailError');

    const yearInput = document.getElementById('birth-year');
    const yearError = document.getElementById('yearError');

    const numInput = document.getElementById('firstNum');
    const numError = document.getElementById('phoneNumError');

    const adrInput = document.querySelector('div.input_row > span > input#address');
    const adrError = document.getElementById('addressError');

    // Check if elements exist before adding event listeners
    if (btnSame && IdInput && IdError && pwInput && pwError && pwcInput && pwcError &&
        nameInput && nameError && emailInput && emailError && yearInput && yearError &&
        numInput && numError && adrInput && adrError) {

        function validateInputs() {
            let isValid = true;

            // Validate ID input
            if (IdInput.value.trim() === '') {
                IdError.textContent = '아이디를 확인해주세요.';
                IdError.style.display = 'block';
                isValid = false;
            } else if (IdInput.value.length < 5 || IdInput.value.length > 10) {
                IdError.textContent = '아이디는 5자 이상 10자 이하로 입력해주세요.';
                IdError.style.display = 'block';
                isValid = false;
            } else if (/[^a-zA-Z0-9]/.test(IdInput.value)) {
                IdError.textContent = '아이디는 영문자와 숫자만 입력 가능합니다.';
                IdError.style.display = 'block';
                isValid = false;
            } else {
                IdError.textContent = '';
                IdError.style.display = 'none';
            }

            // Validate password input
            if (pwInput.value.trim() === '') {
                pwError.textContent = '비밀번호를 입력해주세요.';
                pwError.style.display = 'block';
                isValid = false;
            } else if (pwInput.value.length < 6 || pwInput.value.length > 8) {
                pwError.textContent = '비밀번호는 6자 이상 8자 이하로 입력해주세요.';
                pwError.style.display = 'block';
                isValid = false;
            } else {
                pwError.textContent = '';
                pwError.style.display = 'none';
            }

            // Validate password confirmation
            if (pwcInput.value.trim() === '') {
                pwcError.textContent = '비밀번호 확인을 입력해주세요.';
                pwcError.style.display = 'block';
                isValid = false;
            } else if (pwInput.value !== pwcInput.value) {
                pwcError.textContent = '비밀번호 확인이 맞지 않습니다.';
                isValid = false;
            } else {
                pwcError.textContent = '';
            }

            // Validate name input
            if (nameInput.value.trim() === '') {
                nameError.textContent = '이름을 확인해주세요.';
                nameError.style.display = 'block';
                isValid = false;
            } else {
                nameError.textContent = '';
                nameError.style.display = 'none';
            }

            // Validate email input
            if (emailInput.value.trim() === '') {
                emailError.textContent = '이메일을 확인해주세요.';
                emailError.style.display = 'block';
                isValid = false;
            } else {
                emailError.textContent = '';
                emailError.style.display = 'none';
            }

            // Validate birth year input
            if (yearInput.value.trim() === '') {
                yearError.textContent = '생년을 확인해주세요.';
                yearError.style.display = 'block';
                isValid = false;
            } else {
                yearError.textContent = '';
                yearError.style.display = 'none';
            }

            // Validate phone number input
            if (numInput.value.trim() === '') {
                numError.textContent = '전화번호를 확인해주세요.';
                numError.style.display = 'block';
                isValid = false;
            } else {
                numError.textContent = '';
                numError.style.display = 'none';
            }

            // Validate address input
            if (adrInput.value.trim() === '') {
                adrError.textContent = '주소를 확인해주세요.';
                adrError.style.display = 'block';
                isValid = false;
            } else {
                adrError.textContent = '';
                adrError.style.display = 'none';
            }

            return isValid;
        }

        // Validate each input individually and show error messages one by one
        function validateIndividualInput(inputElement, errorElement, validationFn) {
            inputElement.addEventListener('blur', function () {
                const isValid = validationFn(inputElement.value.trim());
                if (!isValid) {
                    errorElement.style.display = 'block';
                } else {
                    errorElement.style.display = 'none';
                }
            });
        }

        // Validation functions for each input field
        function validateId(value) {
            if (value === '') {
                IdError.textContent = '아이디를 확인해주세요.';
                IdError.style.color = 'red'; // 오류 색상 설정
                return false;
            } else if (value.length < 5 || value.length > 10) {
                IdError.textContent = '아이디는 5자 이상 10자 이하로 입력해주세요.';
                IdError.style.color = 'red'; // 오류 색상 설정
                return false;
            } else if (/[^a-zA-Z0-9]/.test(value)) {
                IdError.textContent = '아이디는 영문자와 숫자만 입력 가능합니다.';
                IdError.style.color = 'red'; // 오류 색상 설정
                return false;
            }
            IdError.textContent = '';
            IdError.style.color = 'green'; // 성공 색상 설정
            return true;
        }

        // Duplicate ID check button click event
        btnSame.addEventListener('click', function (event) {
            event.preventDefault(); // 기본 폼 제출 방지
            const username = IdInput.value.trim();

            // Validate username input
            if (username === '') {
                IdError.textContent = '아이디를 입력해 주세요.';
                IdError.style.color = 'red'; // 오류 색상 설정
                IdError.style.display = 'block';
                return;
            } else if (username.length < 5 || username.length > 10) {
                IdError.textContent = '아이디는 5자 이상 10자 이하로 입력해주세요.';
                IdError.style.color = 'red'; // 오류 색상 설정
                IdError.style.display = 'block';
                return;
            } else if (/[^a-zA-Z0-9]/.test(username)) {
                IdError.textContent = '아이디는 영문자와 숫자만 입력 가능합니다.';
                IdError.style.color = 'red'; // 오류 색상 설정
                IdError.style.display = 'block';
                return;
            }

            // Ajax request to check ID availability
            fetch('check_id.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: username }) // JSON 형태로 아이디 전달
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    IdError.textContent = '사용 가능한 아이디입니다.';
                    IdError.style.color = 'green'; // 성공 색상 설정
                    IdError.style.display = 'block';
                } else {
                    IdError.textContent = '이미 가입된 아이디입니다.';
                    IdError.style.color = 'red'; // 오류 색상 설정
                    IdError.style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        function validatePassword(value) {
            if (value === '') {
                pwError.textContent = '비밀번호를 입력해주세요.';
                return false;
            } else if (value.length < 6 || value.length > 8) {
                pwError.textContent = '비밀번호는 6자 이상 8자 이하로 입력해주세요.';
                return false;
            }
            pwError.textContent = '';
            return true;
        }

        function validatePasswordConfirmation(value) {
            if (value === '') {
                pwcError.textContent = '비밀번호 확인을 입력해주세요.';
                return false;
            } else if (pwInput.value !== value) {
                pwcError.textContent = '비밀번호 확인이 맞지 않습니다.';
                return false;
            }
            pwcError.textContent = '';
            return true;
        }

        // Individual input validation
        validateIndividualInput(IdInput, IdError, validateId);
        validateIndividualInput(pwInput, pwError, validatePassword);
        validateIndividualInput(pwcInput, pwcError, validatePasswordConfirmation);
        validateIndividualInput(nameInput, nameError, function (value) {
            return value !== '' ? (nameError.textContent = '', true) : (nameError.textContent = '이름을 확인해주세요.', false);
        });
        validateIndividualInput(emailInput, emailError, function (value) {
            return value !== '' ? (emailError.textContent = '', true) : (emailError.textContent = '이메일을 확인해주세요.', false);
        });
        validateIndividualInput(yearInput, yearError, function (value) {
            return value !== '' ? (yearError.textContent = '', true) : (yearError.textContent = '생년을 확인해주세요.', false);
        });
        validateIndividualInput(numInput, numError, function (value) {
            return value !== '' ? (numError.textContent = '', true) : (numError.textContent = '전화번호를 확인해주세요.', false);
        });
        validateIndividualInput(adrInput, adrError, function (value) {
            return value !== '' ? (adrError.textContent = '', true) : (adrError.textContent = '주소를 확인해주세요.', false);
        });

        // Final form submission validation
        const form = document.getElementById('form'); // Make sure to set the correct ID for your form
        form.addEventListener('submit', function (event) {
            if (!validateInputs()) {
                event.preventDefault(); // Prevent form submission if invalid
            }
        });
    }
});