<meta charset utf-8>
<?php
session_start();  
$todayview=$_COOKIE['todayview'];
$subject1=$_POST['subject'];
$item_name=$_POST['number'];//상품번호 배열
$num=$_POST['num'];
$N=$_POST['N'];
$result_name=$_POST['result_name'];
$size=5;
$id=$_SESSION['userid'];
$paymentname=date("ymdHis");
$regist_day=date("y-m-d");
    for($i=0; $i < $N; $i++)
    {
       include "../lib/db_name.php";
      if($id){
      $sql="select *from basket where id='$id' and number='$item_name[$i]'";
      $result=mysql_query($sql,$connect);
      $row=mysql_fetch_array($result);
      $number=$row[number];//상품번호
      $subject=$row[subject];
      }else{
        $temp = explode(",",$_COOKIE['todayview']);
        $number=$item_name[$i];
        $subject=$subject1[$i];
      for($r=0;$r<=sizeof($temp);$r+=$size){
         if($item_name[$i]==$temp[$r]){//같은 상품번호가 나오면
          array_splice($temp,$r, $r+$size);//배열 자르기
          $_COOKIE['todayview']=implode (",", $temp);//배열 자른거 붙이기
          setcookie('todayview',$_COOKIE['todayview'],time()+86400,"/");//다시 쿠키 생성
        }
      }
				$id="id_{$paymentname}";
      }
    $sql="insert into payment(day,number,name,item_name,id,num,Recipient)";
    $sql.="values ('$regist_day','$paymentname','$number','$subject','$id','$num[$i]','$result_name')";
    mysql_query($sql,$connect);
    $sql="delete from basket where id='$id' and number='$item_name[$i]'";
    mysql_query($sql,$connect);
    mysql_close();
    }
    echo ("
    <script>
      location.href='http://study421.dothome.co.kr/';
    </script>
  ");
  
?>