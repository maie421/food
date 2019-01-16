<meta charset="utf-8">
<?php
session_start();

  // 네이버 로그인 접근토큰 요청 예제
  $client_id = "Q6E5SON1_jdIg7l4Sw2h";
  $redirectURI = urlencode("http://study421.dothome.co.kr/naver_callback.php");
  $state = "RAMDOM_STATE";
  $apiURL = "https://nid.naver.com/oauth2.0/authorize?response_type=code&client_id=".$client_id."&redirect_uri=".$redirectURI."&state=".$state;
?><a href="<?php echo $apiURL ?>"><img height="50" src="http://static.nid.naver.com/oauth/small_g_in.PNG"/></a>
