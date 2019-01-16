<?php
  session_start();
  $select=$_GET['select'];
  $page=$_GET['page'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/menu.css" rel="stylesheet">
</head>
<body>
<? include "../lib/top_menu.php";?>
  <div id="select">
  홈 > 
  <select id="select_option">
    <option>신상품</option>
    <option>전체보기</option>
    <option>음식장보기</option>
  </select>
  </div>
  <div class="menu_banner"><img src="/img/menu/banner5.JPG" id="menu_banner"></div>
<div id="main_main">
<!--
<div id="line" style="border:none; margin:0px;padding:0px;">
  <ul id="line_list">
    <li><a href="new.php?select=ma">판매인기순</a></li>
    <li><a href="new.php?select=low">낮은가격순</a></li>
    <li><a href="new.php?select=High">높은가격순</a></li>
    <li><a href="new.php?select=day">등록일순</li>
  </ul>
</div>
  -->
<?php
  $connect=mysql_connect('localhost','study421','rlago421');
  mysql_select_db("study421",$connect);

  mysql_query("SET NAMES utf8");
  
  $scale=10;
  /*
  if($select=='ma')
    $sql="select *from goods  UNION select *from side order by hit desc";
	else if($select=='low')
    $sql="select *from goods  UNION select *from side order by price_result";
	else if($select=='High')
    $sql="select *from goods  UNION select *from side order by price_result desc";
  else
  */
  $sql="select *from goods  UNION select *from side order by hit";

  $result=mysql_query($sql,$connect);

  $total_recored=mysql_num_rows($result);

?>
<?php
for($i=0;$i<$total_recored;$i++){
  $row=mysql_fetch_array($result);
  $num=$row[num];
  $subject=$row[subject];
  $side_subject=$row[side_subject];
  $price_result=$row[price_result];
  $file_name=$row[file_name];
  $goods=$row[goods];
  $sale=$row[sale];
?>
<div id="list_box">
<?php
  if($sale>0){
  echo ("
  <span id='item_cell_item_discount'>
  sale<br>
  $sale%
  </span>");
}
?>
<a href="/html/new/menu.php?num=<?=$num?>&goods=<?=$goods?>"><img src="/html/management/<?=$file_name?>" id="img_size"></a>
<div id="menu_name">
   <?=$subject?>
   </div>
   <?=$side_subject?>
   <div id="color">
   <?=$price_result?>
   </div>
</div>
<?php
}
?>
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>