<?php
  session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>food</title>
		<link href="css/full.css" rel="stylesheet">
		<link href="/css/admin_main.css" rel="stylesheet">
	</head>
	<body>
    <? include "html/lib/admin_top_menu.php";?>
    <div id="main_main">
      <div id="side">
        <h4>월별 현황 분석</h4>
        <ul id="side_menu">
          <li>주문 0</li>
          <li>게시글 0</li>
          <li>회원가입 0</li>
          <li>매출액 0</li>
        </ul>
      </div><!--side-->
    <div id="notice_main">
      <div id="title_box">오늘의 주문 리스트<span id="more">today 0 / total 0 &nbsp;&nbsp;더보기</span></div>
      <div id="table_box">
      <table>
      <tr>
        <th id="notice">주문번호</th>
        <th id="notice">주문자</th>
        <th id="notice">전화번호</th>
        <th id="notice">결제방법</th>
        <th id="notice">결제금액</th>
        <th id="notice">결제상태</th>
        <th id="notice">주문날짜</th>
      </tr>
      <tr>
        <td id="notice">0</th>
        <td id="notice"><a href="#">nodb</a></td>
        <td id="notice">2018.03.22</th>
        <td id="notice">윤영미</th>
        <td id="notice">0</th>
        <td id="notice">윤영미</th>
        <td id="notice">0</th>
      </tr>
      </table>
      </div>
      <div id="title_box">신규회원가입리스트<span id="more">today 0 / total 0 &nbsp;&nbsp;더보기</span></div>
      <div id="table_box">
      <table>
      <tr>
        <th id="new_notice">아이디</th>
        <th id="new_notice">등급</th>
        <th id="new_notice">이름</th>
        <th id="notice_title">이메일</th>
        <th id="new_notice">포인트</th>
        <th id="new_notice">접속횟수</th>
        <th id="new_notice">가입날짜</th>
      </tr>
      <tr>
        <td id="new_notice">maie421</th>
        <td id="new_notice">gold</td>
        <td id="new_notice">홍길동</th>
        <td id="notice_title">maie421@naver.com</th>
        <td id="new_notice">100</th>
        <td id="new_notice">2</th>
        <td id="new_notice">2018.02.23</th>
      </tr>
      </table>
      </div>
    </div><!--notice_main-->
    </div><!--main_main-->
    <? include "html/lib/footer.php";?>
	</body>
</html>