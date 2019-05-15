<?php
  session_start();
  /*
  if(!$_COOKIE[logintime]){
    session_destroy();
  }
  */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>food</title>
		<link href="css/main.css" rel="stylesheet">
    <link href="css/full.css" rel="stylesheet">
    <script>
      function over(){
        document.img.src="#";
        document.img1.src="#";
        document.img2.src="#";
      }
    </script>
	</head>
	<body>
    <? include "html/lib/top_menu.php";?>
      <div class="bxsliderColor">
      <div class="bxslider">
        <img src="/img/main/4e491826287346a6d493377a1f9adcb7_34862.jpg" id="menu_img">
      </div>
      </div>
      <div id="main_main">
        <img src="/img/main/main_title_04.jpg" id="main_title_04">
			<?php
				$connect=mysql_connect('localhost','study421','rlago421');
				mysql_select_db("study421",$connect);
				mysql_query("SET NAMES utf8");

				$sql="select *from goods  UNION select *from side where sale>0"; 
        //sale 0보다 클때 일때 출력 
	
				$result=mysql_query($sql,$connect);
				for($i=0;$i<3;$i++){
					$row=mysql_fetch_array($result);
					if($i%2==0)
						$box_name="box_sale";
					else
						$box_name="box_sale_1";
					?>
				<div id=<?=$box_name?>>
        <a href="/html/new/menu.php?num=<?=$row[num]?>&goods=<?=$row[goods]?>"><img src="/html/management/<?=$row[file_name]?>" id="box_sale_img"></a>
        <?php
        echo ("
        <span id='item_cell_item_discount'>
        sale<br>
        $row[sale]%
        </span>");
        ?>
        <div id="box_sale_name"><!--홀수 짝수 박스 크기 다름-->
        <?=$row[subject]?></br>
        </div>
        <del><?=$row[price]?>원</del></br>
        <div id="color">
        <?=$row[price_result]?>원
        </div>
				</div>
			<?php }?>
			</div><!--bxslider-->
    <div id="main_main_gray">
      <div id="main_main">
        <img src="/img/main/main_title_105.jpg" id="main_title_105">
        <!--
        <div class="pedometer">잇쿡</div>
        <div class="pedometer">고기류</div>
        <div class="pedometer">수제꼬치</div>
        <div class="pedometer">간편식</div>
        <div class="pedometer">바베큐세트</div>-->
        <?php
        $sql="select *from goods  UNION select *from side order by num desc";
        
        $result=mysql_query($sql,$connect);
				for($i=0;$i<3;$i++){
					$row=mysql_fetch_array($result);
					if($i%2==0)
						$box_name="box_sale";
					else
						$box_name="box_sale_1";
					?>
        <div id="<?=$box_name?>"><!--페이지 이동-->
        <a href="/html/new/menu.php?num=<?=$row[num]?>&goods=<?=$row[goods]?>"><img src="/html/management/<?=$row[file_name]?>" id="box_sale_img"></a>
        <?php
        if($row[price]!=$row[price_result]){
        echo ("
        <span id='item_cell_item_discount_b'>
        sale<br>
        $row[sale]%
        </span>");
        }
        ?>
        <div id="box_sale_name">
        <?=$row[subject]?></br>
        </div>
        <br>
        <div id="color">
        <?=$row[price_result]?>원
        </div>
        </div><!--box_sale-->
      <?php } ?>
     </div><!--main_main-->
    </div><!--main_main_gray-->
    <div id="event_full">
      <div id="event">
          <div id="event_title">이벤트 전시관</div>
          <a href="#"><span id="event_title_more">전체보기></span></a>
          <img src="/img/main/event02.jpg" id="event_img">
          <!-- 자바-->
          <img src="/img/main/event01.jpg" id="event_img">
      </div>
      <div id="event_1">
          <!-- 자바-->
          <div id="event_title_1">스테이크 전시관</div>
          <a href="#"><span id="event_title_more">전체보기></span></a>
          <img src="/img/main/event11.jpg" id="event_img_1">
      </div>
    </div>
    <div id="main_main_gray_img">
      <div id="main_main">
        <a href="#"><img src="/img/main/sale.jpg" id="sale_img"></a>
        <a href="#"><img src="/img/main/right_banner01.jpg" id="right_banner"></a>
        <a href="#"><img src="/img/main/right_banner02.jpg" id="right_banner"></a>
      </div>
    </div>
    <? include "html/lib/footer.php";?>
	</body>
</html>