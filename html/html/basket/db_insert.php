<?
	$aDoor = $_POST['formDoor'];
  $id=$_SESSION['userid'];
	if(empty($aDoor))
	{
		echo("You didn't select any buildings.");
	}
	else
	{
		$N = count($aDoor);
    for($i=0; $i < $N; $i++)
    {
     include "../lib/db_name.php";
     $sql="select *from basket where id='$id' and number='$aDoor[$i]'";
      $result=mysql_query($sql,$connect);
      $row=mysql_fetch_array($result);
    $number=$row[number];
    $num=$row[num];
    $subject=$row[subject];
    $file_name=$row[file_name];
    $price=$row[price];?>
    <tr>
      <td class="notice_title"><img src="../management/<?=$file_name?>" id="basket_img">
      <div id="basket_img_name"><?=$subject?></div></td>
      <td class="notice"><?=$num?></td>
      <td class="notice"><?=$price?></td>
      <?php $basket_full_result=$num*$price;?>
      <!--<td class="notice">윤영미</td>-->
      <td class="notice"><?=$basket_full_result?></td>
      <td class="notice"><?=$date?></td>
    </tr>
    <input type="hidden" name="num[<?=$i?>]" value="<?=$num?>">
    <input type="hidden" name="N" value="<?=$N?>" >
    <input type="hidden" name="number[<?=$i?>]" value="<?=$number?>" >
    <?
    }
  }

?>
    
