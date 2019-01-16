 <?php 
  session_start();
  $timestamp = strtotime("+3 days");
	$date=date("Y-m-d", $timestamp);
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>food</title>
		<link href="/css/full.css" rel="stylesheet">
    <link href="/css/basket.css" rel="stylesheet">
		<link href="/css/ord.css" rel="stylesheet">
    <script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
    <script src="../join/daum.js"></script>
</head>
<script>/*
function check1() { 
  if (!document.payment.name.value) { 
    alert("이름 입력해주세요"); 
    document.payment.name.focus(); 
    return false; 
  }
  if (!document.payment.phone.value) { 
    alert("휴대폰 번호를 입력해주세요"); 
    document.payment.phone.focus(); 
    return false; 
  } 
  if (!document.payment.email.value) { 
    alert("이메일 입력해주세요"); 
    document.payment.email.focus(); 
    return false; 
  }
  if (!document.payment.result_name.value) { 
    alert("주문자 이름을 입력해주세요"); 
    document.payment.result_name.focus(); 
    return false; 
  }
    if (!document.payment.result_phone.value) { 
    alert("주문자 휴대폰을 입력해주세요"); 
    document.payment.result_phone.focus(); 
    return false; 
  }
  if (!document.payment.result_address.value) { 
    alert("주소지를 입력해주세요"); 
    document.payment.result_address.focus(); 
    return false; 
  }
}*/
</script>
<body>
   <? include "../lib/top_menu.php";?>
<div id="main_main">
  <div id="join_main_top_basket">
		<div id="ord_title">
			주문상품확인
		</div>
		<span id="join_left">01장바구니 > <span id="red_color1">02주문서작성/결제 > </span>03주문완료</span>
	</div>
    <table>
    <tr>
      <th class="notice_title">상품/옵션 정보</th>
      <th class="notice">수량</th>
      <th class="notice">상품금액</th>
      <th class="notice">합계금액</th>
      <th class="notice">배송일정</th>
    </tr>
    <form method="post" action="payment_insert.php" name="payment" >
    <?php 
    if(!$_SESSION['userid'])
      include "ord_insert.php";
    else
      include "db_insert.php";
    ?>
  </table>
	<!--구매정보-->
	<div id="OrdBox">
	<div id="join_top_basket">
		<div id="ord_title">
			구매자정보
		</div>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			이름
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" name="name">
		</div>
	</div>
	<div id="join_box">
		<div id="join_box_mini">
			연락처
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" placeholder="-없이 입력해 주세요" name="phone">
		</div>
	</div>
  <div id="join_box">
		<div id="join_box_mini">
			이메일
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" name="email">
		</div>
	</div>
	</div>
	<div id="OrdBox">
	<div id="join_top_basket">
		<div id="ord_title">
			배송지 정보 지정
		</div>
	</div>
	<div id="join_box">
		<div id="join_box_mini">
			이름
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" name="result_name">
		</div>
	</div>
	<div id="join_box">
		<div id="join_box_mini">
			연락처
		</div>
		<div id="join_box_mini">
			<input type="text" id="join_input" placeholder="-없이 입력해 주세요" name="result_phone">
		</div>
	</div>
	<div id="join_box">
  <div id="join_box_mini">
			주소
	</div>
	<div id="ord_box_mini">
			<input type="text" id="address"  placeholder="우편번호"> &nbsp;<input type="button" id="address_button" onclick="sample4_execDaumPostcode()" id="address_button" value="우편번호 검색" ><br><br>
      <input type="text" id="address_input" id="sample4_roadAddress" placeholder="도로명주소">
      <input type="text" id="address_input" id="sample6_address2" placeholder="상세주소" name="result_address">
	</div>
	</div>
	</div>
  <div id="result">
    총 <span id="red_color1">0</span>개의 상품금액 <b>0</b>원 <img src="/img/basket/pluse.JPG" id="result_img"> 배송비 <b>0</b>원 <img src="/img/basket/result.JPG" id="result_img"><span id="red_color1"> 0원</span>
  </div>
  <div id="basket_buy">
    <input type="submit" id="basket_select_buy" onclick="check1()" value="결제하기">
  </form>
		<a href="basket.php">
    <div id="basket_full_buy">
      이전페이지
    </div>
		</a>
  </div>
</div>
    <? include "../lib/footer.php";?>
	</body>
</html>