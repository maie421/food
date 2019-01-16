<?php
 session_start();
$id=$_SESSION['userid'];
    $connect=mysql_connect('localhost','study421','rlago421');
  mysql_select_db('study421',$connect);
  mysql_query('SET NAMES utf8');

  $sql="select *from basket where id='$id'";

  $result=mysql_query($sql,$connect);

  $total=mysql_num_rows($result);

  for($i=0;$i<$total;$i++){
    $row=mysql_fetch_array($result);
    $number=$row[number];
    $num=$row[num];
    $subject=$row[subject];
    $file_name=$row[file_name];
    $price=$row[price];
    $timestamp = strtotime("+3 days");
    $date=date("Y-m-d", $timestamp);
    ?>
    <tr>
			<td class="notice_check"><input type="checkbox" name="formDoor[]" value="<?=$number?>"></td>
      <td class="notice_title"><a href="#"><img src="../management/<?=$file_name?>" id="basket_img"></a>
      <div id="basket_img_name"><?=$subject?></div></td>
      <td class="notice"><a href="#"><input type="text" id="basket_input" value="<?=$num?>"></a></td>
      <td class="notice"><?=$price?></td>
      <?php $basket_full_result=$num*$price;?>
      <!--<td class="notice">윤영미</td>-->
      <td class="notice"><?=$basket_full_result?></td>
      <td class="notice"><?=$date?></td>
    </tr>
    <?php
  }
?>