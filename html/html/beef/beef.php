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
  <div class="menu_banner"><img src="/img/menu/banner4.JPG" id="menu_banner"></div>
<div id="main_main">
<span id="full">상품 0개</span>
<div id="line">
  <ul id="line_list">
    <li><a href="beef.php?select=ma">판매인기순</a></li>
    <li><a href="beef.php?select=low">낮은가격순</a></li>
    <li><a href="beef.php?select=High">높은가격순</a></li>
    <li><a href="beef.php?select=day">등록일순</li>
  </ul>
</div>
<?php
  $connect=mysql_connect('localhost','study421','rlago421');
  mysql_select_db("study421",$connect);

  mysql_query("SET NAMES utf8");
  
  $scale=10;
  if($select=="ma")
    $sql="select *from goods order by hit desc";
	else if($select=="low")
		$sql="select *from goods order by price_result";
	else if($select=="High")
		$sql="select *from goods order by price_result desc";
  else
    $sql="select *from goods order by num desc";

  $result=mysql_query($sql,$connect);

  $total_recored=mysql_num_rows($result);
  if($total_recored%$scale==0)
    $total_page=floor($total_recored/$scale);
  else
    $total_page=floor($total_recored/$scale)+1;
  if(!$page)
    $page=1;
  $start=($page-1)*$scale;

  $number=$total_recored-$start;
?>
<?php
for($i=$start; $i<$start+$scale && $i < $total_record; $i++){
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
<div class="number_page_center">
  <ul>
  <?php for($i=1;$i<=$page;$i++){?>
    <li id="number_page"><a href="beef.php?page=<?=$i?>"><?=$i?></a></li>
  <?}?>
  </ul>
</div>
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>