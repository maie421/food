<?php
  session_start();//session 을 유지 합니다
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/write.css" rel="stylesheet">
<link href="/css/notice.css" rel="stylesheet">
</head>
<body>
<?php

$mod=$_GET['mod'];//get 방식을 이용하여 제목을 변경하였습니다.
if($mod=="faq"){
  $main_subject="자주 묻는 질문";

}else{
  $main_subject="공지사항";
}
if($_SESSION['userid']==""){//로그인을 하지 않았다면 로그인 화면으로 이동합니다
  echo("
    <script>
      window.alert('로그인하고 이용해 주세요');
      location.href='http://study421.dothome.co.kr/html/login/login.php';
    </script>
    ");
    exit;//탈출
}else{
?>
<? include "../lib/admin_top_menu.php";?>
<div id="main_main">
  <div id="side">
    <h2>고객센터</h2>
<? include "../lib/admin_side_menu.php";?>
  </div><!--side-->
  <div id="notice_main">
    <div id="notice_main_title"><?=$main_subject?></div>
    <form method="post" enctype="multipart/form-data" action="write_insert.php?mod=<?=$mod?>">
    <!--파일 첨부 form-->

    <div id="write_box">
      <div id="title">제목</div>
      <div id="write_text_box">
        <input type="text" id="write_input" name="subject">
      </div>
    <hr>
    </div>
    <div id="write_box">
      <div id="title">첨부파일1</div>
      <div id="write_text_box">
        <input type="file" name="file_name">
      </div>
    <hr>
    </div>
    <div id="write_box">
      <div id="title_textarea">내용</div>
      <div id="write_text_box">
        <textarea rows="10" cols="75" id="write_textarea" name="content"></textarea>
      </div>
    <hr>
    </div>
    <div id="write_button_box">
      <button class="write_button">목록</button>
      <a href="notice.php?page=<?=$page?>"><input type="submit" class="write_button" value="확인">
    </div>
    </form>
  </div><!--notice_main-->
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>
<?
}
?>