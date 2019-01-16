<meta charset utf-8>
<?php
  session_start();
	$goods=$_GET['goods'];
	$goods_name=$_GET['goods_name'];
	$number=$_GET['number'];
  $connect=mysql_connect('localhost','study421','rlago421');
  mysql_select_db('study421',$connect);
  mysql_query('SET NAMES utf8');

	if($goods=="ABC"){
    $sql="select *from goods where goods_name='$goods_name' "; 
  }else if($goods=="ABD"){
    $sql="select *from side where goods_name='$goods_name' "; 
  }
  $result=mysql_query($sql,$connect);
  $row=mysql_fetch_array($result);
  $subject=$row[subject];
  $file_name=$row[file_name];
  $price=$row[price];
  
 
 $no =$goods_name.",".$file_name.",".$subject.",".$number.",".$price; // 상품번호 

 if ( $_COOKIE['todayview'] ) // 쿠기가 존재할경우     
 {
	$temp = explode(",",$_COOKIE['todayview']); // 배열로 전환
		if ( !in_array($goods_name,$temp) ) // 배열에 상품번호가 없을경우    
		{ 
			setcookie('todayview',$_COOKIE['todayview'].','.$no,time()+86400,"/");     
		}
 }else{ //쿠기가 존재하지 않을경우   
	setcookie('todayview',$no,time()+86400,"/");  
 }
  echo ("
    <script>
      location.href='basket.php'
    </script>
  ");
?>