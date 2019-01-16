<?php
  session_start();
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
<? include "../lib/admin_top_menu.php";?>
<div id="main_main">
  <div id="side">
    <h2>고객센터</h2>
<? include "../lib/management_admin_side_menu.php";?>
  </div><!--side-->
  <div id="notice_main">
    <div id="notice_main_title">제품등록</div>
    <form method="post" enctype="multipart/form-data" action="goods_insert.php"> 
    <select id="email_select" name="goods">
      <option value="ABC">돼지고기</option>
      <option value="ABD">반찬</option>
    </select>
    <div id="write_box">
      <div id="title">제목</div>
      <div id="write_text_box">
        <input type="text" id="write_input" name="subject">
      </div>
    <hr>
    </div>
    <div id="write_box">
      <div id="title">사이드 제목</div>
      <div id="write_text_box">
        <input type="text" id="write_input" name="side_subject">
      </div>
    <hr>
    </div>
    <div id="write_box">
      <div id="title">소비자가</div>
      <div id="write_text_box">
        <input type="text" id="write_input" name="price">
      </div>
    <hr>
    </div>
    <div id="write_box">
      <div id="title">판매가</div>
      <div id="write_text_box">
        <input type="text" id="write_input" name="price_result">
      </div>
    <hr>
    </div>
    <div id="write_box">
      <div id="title">제고</div>
      <div id="write_text_box">
        <input type="text" id="write_input" name="quantity">
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
    <div id="write_button_box">
      <button class="write_button">목록</button>
      <a href="goods_insert.php"><input type="submit" class="write_button" value="확인"></a>
    </div>
    </form> 
  </div><!--notice_main-->
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>