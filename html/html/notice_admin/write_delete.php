<?php
  session_start();
  
  $mod=$_GET['mod'];
  $num=$_GET['num'];
  $file=$_GET['file'];

  $connect=mysql_connect('localhost','study421','rlago421');
  mysql_select_db('study421',$connect);
  
  if($mod=="faq"){
    $sql="delete from faq where num='$num'";
  }
  else{
    $sql="delete from notice where num='$num'";
  }
  
  mysql_query($sql,$connect);

  mysql_close();
  if($mod=="faq"){
  echo ("
    <script>
      location.href='FAQ.php';
    </script>
  ");
  }else{
    echo ("
    <script>
      location.href='notice.php';
    </script>
  ");
  }
?>