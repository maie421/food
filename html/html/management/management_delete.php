<?php
  session_start();
  
  $num=$_GET['num'];
  $goods=$_GET['goods'];

  $connect=mysql_connect('localhost','study421','rlago421');
  mysql_select_db('study421');
  mysql_query('SET NAMES utf8');
  
  if($goods=="ABC")
    $sql="delete from goods where num='$num'";
  else if($goods=="ABD")
    $sql="delete from side where num='$num'";
  
  mysql_query($sql,$connect);
  mysql_close();

  echo("<script>
  location.href='management.php';
  </script>");

?>