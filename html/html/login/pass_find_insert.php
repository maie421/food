<meta charset="utf-8">
<?php
  $id=$_POST['id'];
  $connect=mysql_connect("localhost","study421","rlago421");
  mysql_select_db("study421",$connect);
  mysql_query("SET NAMES utf8");

  if(!$id){
     echo("
      <script>
        window.alert('아이디가 빈칸입니다.');
        history.go(-1);
      </script>
    ");
  }
  $sql="select *from member where id='{$id}'";
 
  $result=mysql_query($sql,$connect);

  $id_no=mysql_num_rows($result);
  if(!$id_no){
    echo("
      <script>
        window.alert('존재하는 아이디가 아닙니다.');
        history.go(-1);
      </script>
    ");
  }else{
  $row=mysql_fetch_array($result);

  $pass=$row[pass];

  echo $pass;
  exit;
  }
?>