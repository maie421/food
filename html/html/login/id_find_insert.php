<meta charset="utf-8">
<?php
  session_start();

  $toemail=$_POST['toemail'];
  $email=$_POST['email'];
  $name=$_POST['name'];

  /*입력칸 확인*/
  if(!$name){
    echo("
      <script>
        window.alert('이름이 빈칸입니다');
        history.go(-1);
      </script>
    ");
    exit;
  }
  if(!$toemail){
    echo("
      <script>
        window.alert('이메일이 빈칸입니다');
        history.go(-1);
      </script>
    ");
    exit;
  }
  $connect=mysql_connect("localhost","study421","rlago421");
  mysql_select_db("study421",$connect);
  mysql_query("SET NAMES utf8");

  $sql="select *from member where email='{$toemail}'";
  $result=mysql_query($sql,$connect);

  $useremail=mysql_num_rows($result);
  
  if(!$useremail){
    echo("
      <script>
        window.alert('존재하지 않는 이메일');
        history.go(-1);
      </script>
    ");
  }
  else{
    $row=mysql_fetch_array($result);
    $id=$row[id];
    echo $id;
    exit;
  }
?>