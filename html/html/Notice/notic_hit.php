<?
$mod=$_GET['mod'];
$num=$_GET['num'];
if ( $_COOKIE['hit'] ) // 쿠기가 존재할경우     
 {
	$temp = explode(",",$_COOKIE['hit']); // 배열로 전환
		if ( !in_array($write_subject,$temp) ) // 배열에 상품번호가 없을경우    
		{ 
			setcookie('hit',$_COOKIE['hit'].','.$list,time()+86400); 
		}
 }else{ //쿠기가 존재하지 않을경우   
	setcookie('hit',$list,time()+86400);
 }
   echo ("
    <script>
    var mod = '<?= $mod ?>';
    var num = '<?= $num ?>';
      location.href='write_in.php?num="num"&mod="mod"'
    </script>
  ");
?>