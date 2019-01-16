		<div id="admin_login_menu">
			<div id="admin_login_menu_1" >
				<ul>
          <?php
          if($_SESSION['userid']==""){
          ?>
					<li><a href="/html/login/login.php">로그인</a></li>
          <li>|</li>
					<li><a href="/html/join/join.php">회원가입</a></li>
          <?php
          }else{
          ?>
          <li><a href="/html/login/login_out.php">로그아웃</a></li>
          <?php
          }
          ?>
				</ul>
			</div>
		</div>
    <div id="top_logo_back">
      <div id="top_logo1">
        <a href="http://study421.dothome.co.kr/html/notice_admin/notice.php"><img src="/img/main/top_logo.png" id="top_logo"></a>
      </div>
    </div>
    <div id="center_menu">
      <div id="center_menu_1">
        <ul>
					<li><a href="/html/notice_admin/notice.php">게시판관리</a></li>
					<li>|</li>
					<li><a href="/html/delivery/delivery.php">주문관리</a></li>
					<li>|</li>
					<li><a href="/html/management/management.php">제품관리</a></li>
          <!--
					<li>|</li>
					<li><a href="/html/member_admin/member.php">회원관리</a></li>-->
        </ul>
      </div>
    </div>