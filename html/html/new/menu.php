<!DOCTYPE HTML>
<?php
  session_start();

  $num=$_GET['num'];
  $goods=$_GET['goods'];
  $num=$_GET['num'];
  $goods=$_GET['goods'];
  $connect=mysql_connect('localhost','study421','rlago421');
  mysql_select_db('study421',$connect);
  
  mysql_query('SET NAMES utf8');

  if($goods=="ABC"){
  $sql="select *from goods where num='$num'";
  }else if($goods=="ABD"){
  $sql="select *from side where num='$num'";
  }
  $result=mysql_query($sql,$connect);
  $row=mysql_fetch_array($result);
  $goods_name=$row[goods_name];
  $file_name=$row[file_name];
  $title=$row[subject];
  $side_subject=$row[side_subject];
  $goods=$row[goods];
  $price=$row[price];
  $write_hit=$row[hit];
  $price_result=$row[price_result];
  $sale=$row[sale];
  
  $write_hit++;
  
  if($goods=="ABC")
    $sql="update goods set hit=$write_hit where num='$num'";
  else if($goods=="ABD")
    $sql="update side set hit=$write_hit where num='$num'";
    if(!$_SESSION['userid']){
      echo("
      <script>
    function button_event(){
    if (confirm('장바구니에 추가하시겠습니까?') == true){    //확인
        location.href='../basket/basket_cookie.php?goods=$goods&goods_name=$goods_name&number=1';
    }else{ 
      return;
    }
    }
    </script>");
    }else{
    echo("
    <script>
    function button_event(){
    if (confirm('장바구니에 추가하시겠습니까?') == true){    //확인
        document.form2.submit();
    }else{ 
      return;
    }
    }
    </script>
    ");
    }
  mysql_query($sql,$connect);
?>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
    
<link href="/css/full.css" rel="stylesheet">
<link href="/css/menu_in.css" rel="stylesheet">
</head>
<body>
<? include "../lib/top_menu.php";?>
<div id="main_main">
<?php
  if($sale>0){
  echo ("
  <span id='item_cell_item_discount'>
  sale<br>
  $sale%
  </span>");
}
?>
  <img src="../management/<?=$file_name?>" id="img_size">
  <div id="maine_side">
    <div id="menu_name">
     <?=$title?>
    </div>
    <?=$side_subject?>
    <hr>
    <ul id="purchase">
      <li><b>소비자가</b> <del> &nbsp;<?=$price?></del></li>
      <li><b>판매가 &nbsp;	<span id="red"><?=$price_result?></span></b>원</li>
      <li><b>구매제한</b> &nbsp;최소 1개</li>
      <li><b>배송비</b> &nbsp;	조건부무료(50,000원 미만 구입시 3,000원)</li>
      <li><b>가능배송</b> &nbsp;우체국 택배 / 모닝 배송</li>
    </ul>
    <div id="result">
      <?=$title?>
      <form method="post" name="form2" action="basket_insert.php?goods=<?=$goods?>&goods_name=<?=$goods_name?>">
      <span id="number_box">
        <input type="text" id="number" value="1" name="quantity">
        <div id="number_button_box">
          <div id="number_button">∧</div>
          <div id="number_button">∨</div>
        </div>
      </span>
    </div><!--result-->
    <div id="full_result">
    </div>
		<input type='button' id='shoppingbasket' value='장바구니에 담기' onclick='button_event()'>
    </form>
  </div><!--maine_side-->
  </div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>