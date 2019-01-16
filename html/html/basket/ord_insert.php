<meta charset utf-8>
<?
  session_start();
	$aDoor = $_POST['formDoor'];
  $todayview=$_COOKIE['todayview'];
	$temp = explode(",",$_COOKIE['todayview']);
  $size=5;
  $j=0;
	if(empty($aDoor))
	{
    echo("
		<script>
      alert('상품이 없습니다');
      history.go(-1);
    </script>");
	}
	else
	{ 
		$N = count($aDoor);
    for($i=0; $i < $N; $i++)
    {
       for($r=0;$r<=sizeof($temp);$r+=$size){
        if($aDoor[$i]==$temp[$r]){
          $temp1=array_splice($temp,$r, $r+$size);
        }
      }
      ?>
      <tr>
      <td class='notice_title'><img src='../management/<?=$temp1[1]?>' id='basket_img'>
      <div id='basket_img_name'><?=$temp1[2]?></div></td>
      <td class='notice'><?=$temp1[3]?></td><!--수량-->
			<?php $full=$temp1[3]*$temp1[4]?><!--합계-->
      <td class='notice'><?=$temp1[4]?></td>
      <!--<td class="notice">윤영미</td>-->
      <td class='notice'><?=$full?></td>
      <td class='notice'><?=$date?></td>
    </tr>
    <input type="hidden" name="subject[<?=$i?>]" value="<?=$temp1[2]?>">
    <input type="hidden" name="num[<?=$i?>]" value="<?=$temp1[3]?>">
    <input type="hidden" name="N" value="<?=$N?>" >
    <input type="hidden" name="number[<?=$i?>]" value="<?=$temp1[0]?>" >
    <?
    }
  }
?>