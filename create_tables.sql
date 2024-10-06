

create DATABASE wrew
USE wrew;
DROP TABLE IF EXISTS register;

CREATE TABLE register (
  id VARCHAR(10) NOT NULL PRIMARY KEY,  -- 아이디
  password VARCHAR(8) NOT NULL,          -- 비밀번호
  pwcheck VARCHAR(8) NOT NULL,           -- 비밀번호 확인
  name VARCHAR(50) NOT NULL,             -- 이름
  email VARCHAR(100) NOT NULL UNIQUE,    -- 이메일
  birth DATE NOT NULL,                   -- 생년월일
  gender ENUM('남자', '여자') NOT NULL,  -- 성별
  education ENUM('고졸', '대졸', '대학원졸') NOT NULL,  -- 학력
  phone VARCHAR(15) NOT NULL,            -- 전화번호
  address TEXT NOT NULL,                 -- 주소
  zipcode VARCHAR(10) NOT NULL,          -- 우편번호
  tos TEXT NOT NULL,                     -- 회원약관
  terms_agreed BOOLEAN NOT NULL          -- 개인정보 수집 동의
);
-- 기존 테이블 삭제 (테이블이 존재하는 경우)
-- DROP TABLE IF EXISTS register;

-- -- 테이블 생성
-- CREATE TABLE register (
--   id VARCHAR(10) NOT NULL PRIMARY KEY,
--   password VARCHAR(8) NOT NULL,
--   pwdcheck VARCHAR(8) NOT NULL,
--   name VARCHAR(50) NOT NULL,
--   email VARCHAR(100) NOT NULL UNIQUE,
--   birth DATE NOT NULL,
--   gender ENUM('male', 'female') NOT NULL,
--   education ENUM('고졸', '대졸', '대학원졸') NOT NULL,
--   phone VARCHAR(15) NOT NULL,
--   address TEXT NOT NULL,
--   zipcode VARCHAR(10) NOT NULL,
--   terms_agreed BOOLEAN NOT NULL,
--   tos VARCHAR(255) NOT NULL
-- );

