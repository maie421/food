<?php
  session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/login.css" rel="stylesheet">
</head>
<body>
<? include "../lib/top_menu.php";?>
<div id="main_main">
  <div id="main_box">
	  <div id="title">비밀번호찾기</div>
  <div id="login_find_box">
    <div id="tilte_side">아이디 입력</div>
    <form method="post" action="pass_find_insert.php">
    <div id="login_input">
      <input type="text" id="input_id" placeholder="이름">
      <input type="text" id="input_id" name="id" placeholder="아이디">
    </div>
    <input type="submit" id="login_button" value="비밀번호찾기">
    </form>
    <div id="find_button">
      <a href="id_find.php"><button id="button_join_find"><div id="naver_logo_name_find">아이디 찾기</div></button></a>
      <a href="login.php"><button id="button_join_find"><div id="naver_logo_name_find">로그인하기</div></button></a>
    </div>
  </div><!--login_box-->
  </div><!--main_box-->
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>