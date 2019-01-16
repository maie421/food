		<div id="login_menu">
			<div id="login_menu_1">
				<ul>
          <?php
          $id=$_SESSION['userid'];
          if($id==""){
          ?>
					<li><a href="/html/login/login.php">로그인</a></li>
          <li>|</li>
					<li><a href="/html/join/join.php">회원가입</a></li>
					<li>|</li>
          <li><a href="/html/login/login.php">마이페이지</a></li>
          <?php
          }else{
          ?>
          <li><a href="/html/login/login_out.php">로그아웃</a></li>
          <li>|</li>
          <li><a href="/html/mypage/mypage.php">마이페이지</a></li>
          <?php
          }
          if($id){
          $connect=mysql_connect('localhost','study421','rlago421');
          mysql_select_db('study421',$connect);
          mysql_query('SET NAMSE utf8');
          $sql="select *from basket where id='$id'";
          $result=mysql_query($sql,$connect);
          $num=mysql_num_rows($result);
          }else{
            if(!$_COOKIE['todayview'])
              $num=0;
            else{
            $size=5;
            $temp = explode(",",$_COOKIE['todayview']);
            $num=floor(sizeof($temp)/$size);
            }
          }
          ?>
					<li>|</li>
					<li><a href="/html/Notice/notice.php">고객센터</a></li>
					<li>|</li>
					<li><a href="/html/basket/basket.php">
          <?php 
          if($id)
            echo("<img src='/img/main/top_basket.gif' id='top_basket'></a>$num</li>");
          else
            echo("<img src='/img/main/top_basket.gif' id='top_basket'></a>$num</li>");
          ?>
				</ul>
			</div>
		</div>
    <div id="top_logo_back">
      <div id="top_logo1">
        <a href="http://study421.dothome.co.kr/"><img src="/img/main/top_logo.png" id="top_logo"></a>
      </div>
    </div>
    <div id="center_menu">
      <div id="center_menu_1">
        <ul>
        <!--<li id="contents"> <a href="#"><img src="/img/main/contents.PNG" id="contents_img">전체카테고리</a></li>-->
					<li><a href="/html/new/new.php">신상품출시</a></li>
					<li>|</li>
					<li><a href="/html/new/famous.php">인기상품</a></li>
					<li>|</li>
					<li><a href="/html/beef/beef.php">고기제품</a></li>
					<li>|</li>
					<li><a href="/html/side/side.php">반찬류</a></li>
          <li>
          <!--
          <span id="box_found">
          <img src="/img/main/found.PNG" id="text_pound_img"><input type="text" placeholder="스테이크" id="text_pound">
          </span>
          -->
          </li>
        </ul>
      </div>
    </div>