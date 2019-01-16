<?php
  session_start();
  if(!$_SESSION['userid'])
    $local="cookie_delete.php";
  else
    $local="db_delete.php";
  $N = count($aDoor);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>food</title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script>
    $(function(){
        //전체선택 체크박스 클릭
        $("#check_all").click(function(){
            //전체선택 체크박스가 체크된상태일경우
            if($("#check_all").prop("checked")) {
                //input type 이 checkbox인 경우 전부 선택
                $("input[type=checkbox]").prop("checked",true);
            } else {
                //input type 이 checkbox인 경우 전부 해제
                $("input[type=checkbox]").prop("checked",false);
            }
        })
    })

    </script>
		<link href="/css/full.css" rel="stylesheet">
    <link href="/css/basket.css" rel="stylesheet">
</head>
<body>
<?php
  include "../lib/top_menu.php";
?>
</script>
<div id="main_main">
  <div id="join_top">
		<div id="join_title">
			장바구니
		</div>
		<span id="join_left"><span id="red_color1">01장바구니 > </span>02주문서작성/결제 > 03주문완료</span>
	</div>
  <table>
    <script>
    var local = '<?php echo $local ?>';
  function button_event1(){
    if (confirm("정말 삭제하시겠습니까??") == true){    //확인
        var f=document.form1;
        f.action = local;
    }else{   //취소
    return;
    }
  }
  function button_event2(){
    if (confirm("주문하시겠습니까??") == true){    //확인
        var f=document.form1;
        f.action = 'ord.php';
    }else{   //취소
    return;
    }
  }
</script>
		<form  method="post" name="form1">
    <tr>
			<th class="notice_check"><input type="checkbox" id="check_all"></th>
      <th class="notice_title">상품/옵션 정보</th> 
      <th class="notice">수량</th>
      <th class="notice">상품금액</th>
      <th class="notice">합계금액</th>
      <th class="notice">배송일정</th>
    </tr>
		
  <?php
  if(!$id)
    include "basket_cookie_output.php";
  else if($id)
    include "basket_db.php";
  echo "</table>";
  if($num<=0){
    echo("<div id='NoProduct'>상품이 없습니다.</div>");
  }
  ?>
  <!--
  <div id="result">
    총 <span id="red_color1">0</span>개의 상품금액 <b>0</b>원 <img src="/img/basket/pluse.JPG" id="result_img"> 배송비 <b>0</b>원 <img src="/img/basket/result.JPG" id="result_img"><span id="red_color1"> 0원</span>
  </div>-->
  <input type="submit" id="basket_delete" value="선택 상품 삭제" onclick="button_event1()">
  <div id="basket_buy">
    <input type="submit" id="basket_full_buy" onclick="button_event2()" style="width:200px;" value="선택 상품 주문">
    </form>
  </div>
</div>
    <? include "../lib/footer.php";?>
	</body>

</html>