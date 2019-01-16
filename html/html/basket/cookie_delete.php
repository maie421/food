<meta charset utf-8>
<?
  session_start();
	$aDoor = $_POST['formDoor'];
  $todayview=$_COOKIE['todayview'];
	$temp = explode(",",$_COOKIE['todayview']);
  $size=5;

	if(empty($aDoor)) //체크가 없을 경우
	{
		echo("You didn't select any buildings.");
	}
	else
	{
		$N = count($aDoor);
    for($i=0; $i < $N; $i++)
    {
      //sizeof($temp)크기로 찾다가 $aDoor[$i] 값이 나오면 그 뒤로 -size
      for($r=0;$r<=sizeof($temp);$r+=$size){
        if($aDoor[$i]==$temp[$r]){//같은 상품번호가 나오면
          array_splice($temp,$r, $r+$size);//배열 자르기
          $_COOKIE['todayview']=implode (",", $temp);//배열 자른거 붙이기
          setcookie('todayview',$_COOKIE['todayview'],time()+86400,"/");//다시 쿠키 생성
        }
      }
    }
  echo ("
    <script>
      location.href='basket.php'
    </script>
  ");

  }
 
?>