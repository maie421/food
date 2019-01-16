<?php
  session_start();
  $page=$_GET[page];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/management.css" rel="stylesheet">
</head>
<?php
  $scale=10;

  $connect=mysql_connect("localhost","study421","rlago421");
	mysql_select_db("study421",$connect);
  mysql_query("SET NAMES utf8");
  
  $pos=$_GET['pos'];

  if($pos=="ABC")
    $sql="select *from goods order by num desc";
  else if($pos=="ABD")
    $sql="select *from side order by num desc";
  else
    $sql="select *from goods  UNION select *from side";
  $result=mysql_query($sql,$connect);
  
  $total_recored=mysql_num_rows($result);

  if($total_recored%$scale==0)
    $total_page=floor($total_recored/$scale);
  else
    $total_page=floor($total_recored/$scale)+1;
  if(!$page)
    $page=1;
  $start=($page-1)*$scale;

  $number=$total_recored-$start;
?>
<body>
<? include "../lib/admin_top_menu.php";?>
<div id="main_main">
  <div id="side">
    <h2>제품관리</h2>
<? include "../lib/management_admin_side_menu.php";?>
  </div><!--side-->
  <div id="notice_main">
    <div id="notice_main_title">제품목록</div>
    <select id="email_select" name="goods" onchange="location.href=this.value">
      <option hidden>전체보기</option>
      <option value="management.php?pos=ABE">전체보기</option>
      <option value="management.php?pos=ABC">돼지고기</option>
      <option value="management.php?pos=ABD">반찬</option>
    </select>
    <table>
    <tr>
      <th class="notice_title">상품/옵션 정보</th>
      <th class="notice">수량</th>
      <th class="notice">상품금액</th>
      <th class="notice">상품번호</th>
      <th class="notice">수정/삭제</th>
    </tr>
    <?php
      for($i=0;$i<$total_recored&&$i<$scale+$start;$i++){
        $row=mysql_fetch_array($result);
        $goods=$row[goods];
        $num=$row[num];
        $subject=$row[subject];
        $price=$row[price];
        $price_result=$row[price_result];
        $quantity=$row[quantity];
        $file_name=$row[file_name];
        $goods=$row[goods];
        $goods_name=$row[goods_name];
    ?>
    <tr>
      <td class="notice_title"><a href="#"><img src="<?=$file_name?>" id="basket_img"></a><div id="basket_img_name">
      <?=$subject?></div></td>
      <td class="notice"><?=$quantity?></a></td>
      <td class="notice"><?=$price_result?></td>
      <td class="notice"><?=$goods_name?></td>
      <td class="notice"><a href="registration_modified.php">수정</a> <a href="management_delete.php?num=<?=$num?>&goods=<?=$goods?>">삭제</a></td>
    </tr>
  <?php
  }
  ?>
  </table>
    <div class="number_page_center">  
    <ul>
    <?php
      for($i=1;$i<=$total_page;$i++)
      {
    ?>
      <li id="number_page"><a href="management.php?page=<?=$i?>"><?=$i?></a></li>
    <?
      }
    ?>
    </ul>
    </div>
    <div id="search">
      <select id="search_select">
        <option>제목</option>
        <option>내용</option>
        <option>작성자</option>
      </select>
      <input type="text" id="search_text">
      <button id="search_button">검색</button>
    </div>
  </div>
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>