<?php
  session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>food</title>
<link href="/css/full.css" rel="stylesheet">
<link href="/css/notice.css" rel="stylesheet">
</head>
<?php
  $page=$_GET['page'];
  $scale=10;
  
  $connect=mysql_connect("localhost","study421","rlago421");
	mysql_select_db("study421",$connect);
  mysql_query("SET NAMES utf8");
    
  $search_text=$_GET['search_text'];
  $find=$_GET['find'];

  if($find=="s"){
  $sql="select * from notice where subject like '%{$search_text}%'";
  }
  else if($find=="t"){
  $sql="select *from notice where content like '%{$search_text}%'";
  }
  else if($find=="i"){
  $sql="select *from notice where name like '%{$search_text}%'";
  }
  else {
  $sql="select *from notice order by num desc";
  }
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
    <h2>고객센터</h2>
<? include "../lib/admin_side_menu.php";?>
  </div><!--side-->
  <div id="notice_main">
    <div id="notice_main_title">공지사항</div>
    <table>
      <tr>
        <th class="notice">번호</th>
        <th class="notice_title">제목</th>
        <th class="notice">날짜</th>
        <th class="notice">작성자</th>
        <th class="notice">조회</th>
      </tr>
      <?php
      for($i=$start;$i<$total_recored&&$i<$scale+$start;$i++){
        mysql_data_seek($result,$i);
        $row=mysql_fetch_array($result);
        $notice_num=$row[num];
        $notice_subject=$row[subject];
        $notice_regist_day=$row[regist_day];
        $notice_regist_day=substr($notice_regist_day,0,9);
        $notice_name=$row[name];
        $notice_hit=$row[hit];
      ?>
      <tr>
        <td class="notice"><?=$number?></th>
        <td class="notice_title"><a href="write_in.php?num=<?=$notice_num?>&page=<?=$page?>"><?=$notice_subject?></a></td>
        <td class="notice"><?=$notice_regist_day?></th>
        <td class="notice"><?=$notice_name?></th>
        <td class="notice"><?=$notice_hit?></th>
      </tr>
      <?php
			$number--;
			}
		?>
    </table>
    <div class="number_page_center">
    <ul>
    <?php
      for($i=1;$i<=$total_page;$i++)
      {
    ?>
      <li id="number_page"><a href="notice.php?page=<?=$i?>"><?=$i?></a></li>
    <?
      }
    ?>
    </ul>
    </div>
    <a href="write.php"><div class="write_button">글쓰기</div></a>
    <form method="get">
    <div id="search">
      <select id="search_select" name="find">
        <option value="">전체</option>
        <option value="s">제목</option>
        <option value="t">내용</option>
        <option value="i">작성자</option>
      </select>
      <input type="text" id="search_text" name="search_text">
      <input type="submit" id="search_button" value="검색" >
    </div><!--search-->
    </form>
  </div>
</div><!--main_main-->
<? include "../lib/footer.php";?>
</body>
</html>