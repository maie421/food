<meta charset="utf-8">
<?php
  session_start();

  $id=$_POST['id'];
  $pass=$_POST['pass'];
  
  if($id==""){
        echo("
      <script>
        window.alert('아이디 빈칸입니다.');
        history.go(-1);
      </script>
    ");
  }

  else if($pass==""){
        echo("
      <script>
        window.alert('비밀번호가 빈칸입니다.');
        history.go(-1);
      </script>
    ");
  }
  $connect=mysql_connect("localhost","study421","rlago421");
  mysql_select_db("study421",$connect);
  mysql_query("SET NAMES utf8");

  $sql="select *from member where id='{$id}'";
  $result=mysql_query($sql,$connect);
  $id_no=mysql_num_rows($result);//id 존재 확인
  
  if($pass!=""&&$id!=""){//아이디 패스워드 입력칸 입력
  if(!$id_no){//id가 존재 하지 않는다면 출력
    echo("
      <script>
        window.alert('아이디와비밀번호가 틀렸습니다.');
        history.go(-1);
      </script>
    ");
  }else{
      $row=mysql_fetch_array($result);//id를 기준으로
      $db_pass=$row[pass];//로그인 페이지에 입력된 비밀번호
      
      if($pass!=$db_pass){//db에 저장된 비밀번호와 로그인 페이지에 저장된 비밀번호가 다른경우
        echo("
      <script>
        window.alert('아이디와비밀번호가 틀렸습니다.');
        history.go(-1);
      </script>
        ");
      }else{
        $userid=$row[id];
        $username=$row[name];

        $_SESSION['userid']=$userid;//센션 유지

				//setcookie('logintime',123,time()+86400,"/");

        if($_SESSION['userid']=="admin"){//아이디가 admin이면 관리자 페이지로 이동
          echo("
          <script>
            location.href='http://study421.dothome.co.kr/html/notice_admin/notice.php';
          </script>
        ");
        }else{
        echo("
          <script>
            location.href='http://study421.dothome.co.kr/';
          </script>
        ");
        }
      }
  }
  }
?>