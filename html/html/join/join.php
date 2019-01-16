<?php
  session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/join.css" rel="stylesheet">
<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script src="daum.js"></script>
</head>
<body>
<? include "../lib/top_menu.php";?>
<div id="main_main">
	<div id="join_top">
		<div id="join_title">
			회원가입
		</div>
		<span id="join_left">01약관동의 ><span id="red_color1"> 02정보입력 ></span> 03가입완료</span>
	</div>
	<div id="basic">
		<div id="join_title">
			기본정보
		</div>
		<span id="join_left"><span id="red_color">*</span> 표시는 반드시 입력하셔야 하는 항목입니다.</span>
	</div>
  <form name="member" action="insert.php" method="post" onsubmit="return check();"> 
	<div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">*</span> 아이디
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="join_input" name="id">
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">*</span> 비밀번호
		</div>
		<div id="join_box_mini_1">
			<input type="password" id="join_input" name="pass" placeholder="영문대/소문자,숫자,특수문자 중 2가지 이상 조합하세요">
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">*</span> 비밀번호확인
		</div>
		<div id="join_box_mini_1">
			<input type="password" id="join_input" name="pass1">
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">*</span> 이름
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="join_input" name="name">
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini_e">
			<span id="red_color">*</span> 이메일
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="email_input" name="email">
      <select id="email_select">
        <option value="">직접입력</option>
        <option value="naver.com">네이버</option>
      </select>
      <div id="agree_box">
      <input type="checkbox" value="Y" id="agree_checkbox"><span id="agree">정보/이벤트 메일수신에 동의합니다.</span>
      </div>
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini_e">
			<span id="red_color">*</span> 휴대폰번호
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="join_input" placeholder="-없이 입력하세요" name="phone">
      <div id="agree_box">
      <input type="checkbox" value="Y" id="agree_checkbox"><span id="agree">정보/이벤트 SNS수신에 동의합니다.</span>
      </div>
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">&nbsp;</span> 전화번호
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="join_input" placeholder="-없이 입력하세요" name="home">
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini_a">
			<span id="red_color">&nbsp;</span> 주소
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="address" placeholder="우편번호"><input type="button" onclick="sample4_execDaumPostcode()" id="address_button" value="우편번호 검색">
      <input type="text" id="address_input" id="sample4_roadAddress" placeholder="도로명주소" name="adress2">
      <input type="text" id="address_input" id="sample6_address2" name="address1" placeholder="상세주소">
		</div>
		<hr>
	</div>
  <div class="button_box">
   <input type="button" class="button" value="취소">
   <input type="submit" class="button_Check" value="회원가입">
  </div>
  </form>
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>