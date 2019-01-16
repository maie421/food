<?php
  session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/notice.css" rel="stylesheet">
<link href="/css/write_in.css" rel="stylesheet">
</head>
<?php
$connect=mysql_connect('localhost','study421','rlago421');
mysql_select_db('study421',$connect);
mysql_query("SET NAMES utf8");

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

$write_subject=$row[subject];
$write_content=$row[content];
$write_hit=$row[hit];
$write_name=$row[name];
$write_regist_day=$row[regist_day];
$file=$row[file_name];
$content=$row[content];

$write_hit++;

if($mod=="faq")
  $sql="update faq set hit=$write_hit where num='$num'";
else
  $sql="update notice set hit=$write_hit where num='$num'";

mysql_query($sql,$connect);
?>
<body>
<?php
   include "../lib/admin_top_menu.php";
?>
<div id="main_main">
  <div id="side">
    <h2>고객센터</h2>
<? include "../lib/admin_side_menu.php";?>
  </div><!--side-->
  <div id="notice_main">
    <div id="notice_main_title"><?=$main_subject?></div>
    <div class="in_title"><?=$write_subject?></div>
    <div class="in_side"><span class="admin"><?=$write_name?></span><?=$write_regist_day?> <span class="num"><b>조회수</b> &nbsp;<?=$write_hit?></span></div>
    <?php
    if($mod=="faq"){
    ?>
    <div class="content"><?=$content?></div>
    <?
    }else{
    ?>
    <div class="content"><img src="<?=$file?>" id="file_img"></div>
    <?
    }
    ?>
    
    <a href=<?=$page_site?>><div class="write_button">목록</div></a>
    <a href="write_modified.php?num=<?=$num?>&page=<?=$page?>&mod=<?=$mod?>"><div class="write_button">수정</div></a>
    <a href="write_delete.php?num=<?=$num?>&page=<?=$page?>&mod=<?=$mod?>"><div class="write_button">삭제</div></a>
  </div><!--notice_main-->
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>