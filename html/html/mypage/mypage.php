<?php 
	session_start();
	$id=$_SESSION['userid'];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/mypage.css" rel="stylesheet">
<link href="/css/notice.css" rel="stylesheet">
<link href="/css/side_menu.css" rel="stylesheet">
</head>
<body>
<? include "../lib/top_menu.php";?>
<div id="main_main">
<? include "../lib/mypage_side_menu.php";?>
  <div id="notice_main">
    <div id="notice_main_title">주문내역</div>
      <table>
        <tr>
          <th id="buy_name">주문일</th>
          <th id="buy_name">주문번호</th>
          <th id="buy_name">수령인</th>
          <th id="buy_book">주문상품</th>
          <th class="notice">취소</th>
        </tr>
				<?php 
					include "../lib/db_name.php";
					$sql="select *from payment where id='$id' order by num desc";
					$result=mysql_query($sql,$connect);
					$total_recored=mysql_num_rows($result);
					

					for($i=0;$i<$total_recored;$i++){
						$row=mysql_fetch_array($result);
				?>
        <tr>
          <td id="buy_name"><?=$row[day]?></td>
          <td id="buy_name"><?=$row[number]?></td>
          <td id="buy_name"><?=$row[Recipient]?></td>
          <td id="buy_book"><?=$row[item_name]?></td>
          <td class="notice">취소</td>
        </tr>
				<?php
					}
				?>
      </table>
    </div><!--notice_main-->
  </div>
</div>
<? include "../lib/footer.php";?>
</body>
</html>