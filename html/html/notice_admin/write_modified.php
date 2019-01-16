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
<?php
  $connect=mysql_connect('localhost','study421','rlago421');
  mysql_select_db('study421',$connect);
  mysql_query('SET NAMES utf8');
  
  $mod=$_GET['mod'];
  $num=$_GET['num'];

if($mod=="faq"){
  $sql="select *from faq where num='$num'";
  $main_subject="자주 묻는 질문";
  $page_site="FAQ.php";

}else{
  $sql="select *from notice where num='$num'";
  $main_subject="공지사항";
  $page_site="notice.php";
}
  $result=mysql_query($sql,$connect);

  $row=mysql_fetch_array($result);

  $modified_subject=$row[subject];
  $modified_content=$row[content];
  $modified_name=$row[name];
  $modified_regist_day=$row[regist_day];
  $file=$row[file_name];
  $content=$row[content];

?>
</head>
<body>
<?php
if($_SESSION['userid']==" "){
  echo("
    <script>
      window.alert('로그인하고 이용해 주세요');
      location.href='http://study421.dothome.co.kr/html/login/login.php';
    </script>
    ");
    exit;
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
    <form method="post" enctype="multipart/form-data" action="write_insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>
    &mod=<?=$mod?>">
    <div id="write_box">
      <div id="title">제목</div>
      <div id="write_text_box">
        <input type="text" id="write_input" name="subject" value="<?=$modified_subject?>">
      </div>
    <hr>
    </div>
    <div id="write_box">
      <div id="title">첨부파일1</div>
      <div id="write_text_box">
        <input type="file" name="file" title="<?=$file?>">
      </div>
    <hr>
    </div>
    <div id="write_box">
      <div id="title_textarea">내용</div>
      <div id="write_text_box">
        <textarea rows="10" cols="75" id="write_textarea" name="content"><?=$content?></textarea>
      </div>
    <hr>
    </div>
    <div id="write_button_box">
      <button class="write_button">목록</button>
      <a href="<?=$page_site?>?page=<?=$page?>"><input type="submit" class="write_button" value="수정">
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