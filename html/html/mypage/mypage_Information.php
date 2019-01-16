<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>새벽서점</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/join.css" rel="stylesheet">
</head>
<body>
<? include "../lib/top_menu.php";?>
<div id="main_main">
	<div id="join_top">
		<div id="join_title">
			회원정보수정
		</div>
</div>
	<div id="basic">
		<div id="join_title">
			기본정보
		</div>
		<span id="join_left"><span id="red_color">*</span> 표시는 반드시 입력하셔야 하는 항목입니다.</span>
	</div>
	<div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">*</span> 아이디
		</div>
		<div id="join_box_mini_1">
			홍길동입니다
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">*</span> 비밀번호
		</div>
		<div id="join_box_mini_1">
			<input type="password" id="join_input" placeholder="영문대/소문자,숫자,특수문자 중 2가지 이상 조합하세요">
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">*</span> 비밀번호확인
		</div>
		<div id="join_box_mini_1">
			<input type="password" id="join_input">
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			<span id="red_color">*</span> 이름
		</div>
		<div id="join_box_mini_1">
			홍길동
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini_e">
			<span id="red_color">*</span> 이메일
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="email_input">
      <select id="email_select">
        <option value="">직접입력</option>
        <option value="">네이버</option>
        <option value="">엥?</option>
        <option value="">기타</option>
      </select>
      <div id="agree_box">
      <input type="checkbox" id="agree_checkbox"><span id="agree">정보/이벤트 메일수신에 동의합니다.</span>
      </div>
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini_e">
			<span id="red_color">*</span> 휴대폰번호
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="join_input" placeholder="-없이 입력하세요" >
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
			<input type="text" id="join_input" placeholder="-없이 입력하세요">
		</div>
		<hr>
	</div>
  <div id="join_box">
		<div id="join_box_mini_a">
			<span id="red_color">&nbsp;</span> 주소
		</div>
		<div id="join_box_mini_1">
			<input type="text" id="address"><input type="button" id="address_button" value="우편번호 검색">
      <input type="text" id="address_input">
      <input type="text" id="address_input">
		</div>
		<hr>
	</div>
  <div class="button_box">
   <input type="button" class="button" value="취소">
   <input type="submit" class="button_Check" value="회원수정">
  </div>
  </form>
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>