<?php
  session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>food</title>
		<link href="/css/full.css" rel="stylesheet">
		<link href="/css/admin_main.css" rel="stylesheet">
    <link href="/css/notice.css" rel="stylesheet">
    <link href="/css/member_select.css" rel="stylesheet">
	</head>
	<body>
    <? include "../lib/admin_top_menu.php";?>
    <div id="main_main">
      <div id="side">
    <h2>회원관리</h2>
    <ul id="side_menu">
      <li><a href="#">회원관리</a></li>
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
      <div id="notice_main_title">신규회원</div>
    
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
    </div>
      <table id="member_table">
      <tr>
        <th class="notice_ch"><input type="checkbox"></th>
        <th id="new_notice">아이디</th>
        <th id="new_notice">등급</th>
        <th id="new_notice">이름</th>
        <th id="member_email">이메일</th>
        <th id="new_notice">포인트</th>
        <th id="new_notice">접속횟수</th>
        <th id="new_notice">가입날짜</th>
        <th id="new_notice">수정/삭제</th>
      </tr>
      <tr>
        <td class="notice_ch"><input type="checkbox"></td>
        <td id="new_notice">maie421</th>
        <td id="new_notice">gold</td>
        <td id="new_notice">홍길동</th>
        <td id="member_email">maie421@naver.com</th>
        <td id="new_notice">100<input type="text" value="100" id="point_text"></th>
        <td id="new_notice">2</th>
        <td id="new_notice">2018.02.23</th>
        <td id="new_notice">수정 삭제</td>
      </tr>
      </table>
      <div class="number_page_center">
        <ul>
          <li id="number_page"><a href="#">1</a></li>
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