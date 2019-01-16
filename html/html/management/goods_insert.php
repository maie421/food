<?php
  $connect=mysql_connect('localhost','study421','rlago421');

  mysql_select_db('study421',$connect);
  mysql_query('SET NAMES utf8');

  $subject=$_POST['subject'];
  $side_subject=$_POST['side_subject'];
  $price=$_POST['price'];
  $price_result=$_POST['price_result'];
  $quantity=$_POST['quantity'];
  $file_name=$_POST['file_name'];
  $goods=$_POST['goods'];

  $day=date("YmdHis");

  $goods_result=$goods."-".$day;

  $file_name = $_FILES['file_name']['name'];
  
  $sale=round((($price-$price_result)/$price)*100);

  move_uploaded_file($_FILES['file_name']['tmp_name'], $file_name);

	if($goods=="ABC"){
  $sql="insert into goods(subject,side_subject,price,price_result,quantity,goods,file_name,goods_name,sale)";
  $sql.="values ('$subject','$side_subject','$price','$price_result','$quantity','$goods','$file_name','$goods_result','$sale')";
	}
	else if($goods=="ABD"){
  $sql="insert into side(subject,side_subject,price,price_result,quantity,goods,file_name,goods_name,sale)";
  $sql.="values ('$subject','$side_subject','$price','$price_result','$quantity','$goods','$file_name','$goods_result','$sale')";
	}
  
  mysql_query($sql,$connect);
  
  mysql_close();

  echo "(
    <script>
      location.href='http://study421.dothome.co.kr/html/management/management.php';
    </script>
  )";

?>