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

/*
if ( $_COOKIE['hit'] ) // 쿠기가 존재할경우     
 {
	$tempe = explode(",",$_COOKIE['hit']); // 배열로 전환
		if ( !in_array($write_subject,$tempe) ) // 배열에 상품번호가 없을경우    
		{ 
			setcookie('hit',$_COOKIE['hit'].','.$list,time()+86400); 
		}
 }else{ //쿠기가 존재하지 않을경우   
	setcookie('hit',$list,time()+86400);
 }
 */
$write_hit++;

if($mod=="faq")
  $sql="update fql set hit=$write_hit where num='$num'";
else
  $sql="update notice set hit=$write_hit where num='$num'";

mysql_query($sql,$connect);
?>
<body>
<?php
  if($_SESSION['userid']=="admin"){
   include "../lib/admin_top_menu.php";
    }else{
     include "../lib/top_menu.php";
    }
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
    <div class="content"><img src="../notice_admin/<?=$file?>" id="file_img"></div>
    <?
    }
    ?>
    <a href=<?=$page_site?>><div class="write_button">목록</div></a>
  </div><!--notice_main-->
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>