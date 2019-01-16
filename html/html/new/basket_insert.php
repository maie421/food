<meta charset="utf-8">
<?php
  session_start();

  $num=$_GET['num'];
  $goods_name=$_GET['goods_name'];
  $quantity=$_POST['quantity'];
  $id=$_SESSION['userid'];
  $goods=$_GET['goods'];
  
  $connect=mysql_connect("localhost","study421","rlago421");
  mysql_select_db("study421",$connect);
  mysql_query("SET NAMES utf8");
  
  if($goods=="ABC"){
    $sql="select *from goods where goods_name='$goods_name' "; //장바구니 db에 넣을꺼 불로오기
  }else if($goods=="ABD"){
    $sql="select *from side where goods_name='$goods_name' "; //장바구니 db에 넣을꺼 불로오기
  }

  $result=mysql_query($sql,$connect);

  $row=mysql_fetch_array($result);
  
  $goods_name=$row['goods_name']; 
  $price_result=$row['price_result'];
  $subject=$row['subject'];
  $file_name=$row['file_name'];
  $date_now=date("Y-m-d H:i:s");
  
  //존재하는지 확인,아이디와 상품번호 체크
  $sql="select *from basket where number='$goods_name' and id='$id'"; 
  $result=mysql_query($sql,$connect);
  $number=mysql_num_rows($result);
  
	

  if(!$number){//없으면 추가
  $num=$quantity;
  $sql="insert into basket(subject,num,price,number,id,file_name)";
  $sql.="values('$subject','$num','$price_result','$goods_name','$id','$file_name')";

  }else{//있으면 수량 증가
  $row=mysql_fetch_array($result);
  $num=$row['num'];
  $num+=$quantity;
  $sql="update basket set num='$num' where number='$goods_name' and id='$id'";
  }
  mysql_query($sql,$connect);

  echo ("
    <script>
      location.href='/html/basket/basket.php';
    </script>
  ");
?>