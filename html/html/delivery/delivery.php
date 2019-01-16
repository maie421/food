<?php
  session_start();
	  $page=$_GET['page'];
  $scale=10;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>food</title>
		<link href="/css/full.css" rel="stylesheet">
    <link href="/css/mypage.css" rel="stylesheet">
		<link href="/css/admin_main.css" rel="stylesheet">
    <link href="/css/notice.css" rel="stylesheet">
    <link href="/css/member_select.css" rel="stylesheet">
	</head>
	<body>
    <? include "../lib/admin_top_menu.php";?>
    <div id="main_main">
      <div id="side">
    <h2>주문관리</h2>
    <ul id="side_menu">
      <li><a href="#">주문관리</a></li>
    </ul>
    <h5>고객상담센터</h5>
    <div id="center_line"></div>
    <h3>1899-4797</h3>
    <div id="time">
      점심시간 12:00~13:00<br>
      평일 10:00~17:00<br>
      토요일 09:00~12:00<br>
      일요일/공휴일 휴무
    </div>
  </div><!--side-->
    <div id="member_main">
    <div id="notice_main_title">주문관리</div>
    <!--
    <div class="search_requirement">검색조건</div>
    <div class="requirement">
      <input type="radio" value="1"  name="drone" id="radio" checked>오늘주문 
      <input type="radio"  value="2" name="drone" id="radio">최근1주간 
      <input type="radio" value="3"  name="drone" id="radio">최근한달간 
      <input type="radio" value="4"  name="drone" id="radio">최근1년간 
      <input type="radio" value="5"  name="drone" id="radio">상세검색
      <select id="email_select">
        <option>아이디</option>
        <option>이메일</option>
        <option>이름</option>
      </select>
      <input type="text" id="member_text">
    </div>
    <div class="search_requirement">기간지정</div>
    <div class="requirement">
      <select id="email_select">
				<option value="0">선택</option>
				<option value="2018"> 2018 </option>
				<option value="2019"> 2019 </option>
			</select>년 
			<select id="email_select">
				<option value="0">선택</option>
				<option value="01"> 01 </option>
				<option value="02"> 02 </option>
				<option value="03"> 03 </option>
				<option value="04"> 04 </option>
				<option value="05"> 05 </option>
				<option value="06"> 06 </option>
				<option value="07"> 07 </option>
				<option value="08"> 08 </option>
				<option value="09"> 09 </option>
				<option value="10"> 10 </option>
				<option value="11"> 11 </option>
				<option value="12"> 12 </option>
			</select>월 
			<select id="email_select">
			  <option value="0">선택</option>
				<option value="01"> 01 </option>
				<option value="02"> 02 </option>
				<option value="03"> 03 </option>
				<option value="04"> 04 </option>
				<option value="05"> 05 </option>
				<option value="06"> 06 </option>
				<option value="07"> 07 </option>
				<option value="08"> 08 </option>
				<option value="09"> 09 </option>
				<option value="10"> 10 </option>
				<option value="11"> 11 </option>
				<option value="12"> 12 </option>
				<option value="13"> 13 </option>
				<option value="14"> 14 </option>
				<option value="15"> 15 </option>
				<option value="16"> 16 </option>
				<option value="17"> 17 </option>
				<option value="18"> 18 </option>
				<option value="19"> 19 </option>
				<option value="20"> 20 </option>
				<option value="21"> 21 </option>
				<option value="22"> 22 </option>
				<option value="23"> 23 </option>
				<option value="24"> 24 </option>
				<option value="25"> 25 </option>
				<option value="26"> 26 </option>
				<option value="27"> 27 </option>
				<option value="28"> 28 </option>
				<option value="29"> 29 </option>
				<option value="30"> 30 </option>
				<option value="31"> 31 </option>
			</select>일 부터 
			<select id="email_select">
				<option value="0">선택</option>
				<option value="2018"> 2018 </option>
				<option value="2019"> 2019 </option>
			</select>년
		<select id="email_select">
				<option value="0">선택</option>
				<option value="01"> 01 </option>
				<option value="02"> 02 </option>
				<option value="03"> 03 </option>
				<option value="04"> 04 </option>
				<option value="05"> 05 </option>
				<option value="06"> 06 </option>
				<option value="07"> 07 </option>
				<option value="08"> 08 </option>
				<option value="09"> 09 </option>
				<option value="10"> 10 </option>
				<option value="11"> 11 </option>
				<option value="12"> 12 </option>
			</select>월 
			<select id="email_select">
				<option value="0">선택</option>
				<option value="01"> 01 </option>
				<option value="02"> 02 </option>
				<option value="03"> 03 </option>
				<option value="04"> 04 </option>
				<option value="05"> 05 </option>
				<option value="06"> 06 </option>
				<option value="07"> 07 </option>
				<option value="08"> 08 </option>
				<option value="09"> 09 </option>
				<option value="10"> 10 </option>
				<option value="11"> 11 </option>
				<option value="12"> 12 </option>
				<option value="13"> 13 </option>
				<option value="14"> 14 </option>
				<option value="15"> 15 </option>
				<option value="16"> 16 </option>
				<option value="17"> 17 </option>
				<option value="18"> 18 </option>
				<option value="19"> 19 </option>
				<option value="20"> 20 </option>
				<option value="21"> 21 </option>
				<option value="22"> 22 </option>
				<option value="23"> 23 </option>
				<option value="24"> 24 </option>
				<option value="25"> 25 </option>
				<option value="26"> 26 </option>
				<option value="27"> 27 </option>
				<option value="28"> 28 </option>
				<option value="29"> 29 </option>
				<option value="30"> 30 </option>
				<option value="31"> 31 </option>								
			</select>일 까지
      <input type="button" style="background-color:white; border:1px solid #a3a3a3; padding:3px;margin-left:12px;" value="확인">
    </div>-->
      <table>
        <tr>
          <th id="buy_name">주문일</th>
          <th id="buy_name">주문번호</th>
          <th id="buy_name">수령인</th>
          <th id="buy_book">주문상품</th>
          <th id="buy_name">결제방법</th>
          <th class="notice">취소</th>
        </tr>
				<?php
				include "../lib/db_name.php";
					$sql="select *from payment order by num desc";
					$result=mysql_query($sql,$connect);
					$total_recored=mysql_num_rows($result);
					
					 if($total_recored%$scale==0)
						$total_page=floor($total_recored/$scale);
					else
						$total_page=floor($total_recored/$scale)+1;
					if(!$page)
						$page=1;
					$start=($page-1)*$scale;

					for($i=$start; $i<$start+$scale && $i < $total_recored; $i++){
						$row=mysql_fetch_array($result);
						?>
        <tr>
          <td id="buy_name"><?=$row[day]?></td>
          <td id="buy_name"><?=$row[number]?></td>
          <td id="buy_name"><?=$row[Recipient]?></td>
          <td id="buy_book"><?=$row[item_name]?></td>
					<td id="buy_name">무통장입금</td>
          <td class="notice">취소</td>
        </tr>
					<?php } ?>
      </table>
      <div class="number_page_center">
      <ul>
    <?php
      for($i=1;$i<=$total_page;$i++)
      {
    ?>
      <li id="number_page"><a href="delivery.php?page=<?=$i?>"><?=$i?></a></li>
    <?
      }
    ?>
    </ul>
      </div>
      <a href="#"><div class="write_button">삭제</div></a>
      <div id="search">
      <select id="search_select" name="find">
        <option value="name">제목</option>
        <option value="text">내용</option>
        <option value="id">작성자</option>
      </select>
      <input type="text" id="search_text" name="search_text">
      <input type="submit" id="search_button" value="검색">
    </div><!--search-->
    </div><!--notice_main-->
    </div><!--main_main-->
    <? include "../lib/footer.php";?>
	</body>
</html>