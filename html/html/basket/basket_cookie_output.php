<?php
$r=0;
$j=0;

	$timestamp = strtotime("+3 days");
	$date=date("Y-m-d", $timestamp);
  
	for($i=0;$i<$num;$i++){
    		$r+=1;
?>
		<tr>
			<td class="notice_check"><input type="checkbox" name="formDoor[]" value="<?=$temp[$j]?>" class="ab"></td>
      <td class="notice_title" ><a href="#"><img src="../management/<?=$temp[$r++]?>" id="basket_img"></a>
      <div id="basket_img_name"><?=$temp[$r++]?></div></td>
      <td class="notice"><input type="text" id="basket_input" value="<?=$temp[$r]?>">
      </td><!--수량-->
			<?php $full=$temp[$r]*$temp[++$r]//합계?>
      <td class="notice"><?=$temp[$r++]?></td>
      <!--<td class="notice">윤영미</td>-->
      <td class="notice"><?=$full?></td>
      <td class="notice"><?=$date?></td>
    </tr>
		<?
		$j+=$size;
}
?>
		