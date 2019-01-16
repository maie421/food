<?php
  session_start();
?>
<meta charset="utf-8">
<?php
  $id=$_POST['id'];
  $pass=$_POST['pass'];
  $pass1=$_POST['pass1'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $home=$_POST['home'];
  $address1=$_POST['address1'];
	$day=date("H-m-d");

  $connect=mysql_connect("localhost","study421","rlago421");
  mysql_select_db("study421",$connect);
  mysql_query("SET NAMES utf8"); //한글로도 입력이 가능하게 합니다

  $sql="select *from member where id='$id'";//id를 기준으로
  $result=mysql_query($sql,$connect);//연결
  $exist_id=mysql_num_rows($result); //id가 중복 되는 것이 있는 지 없는지확인합니다
  
  if($exist_id){//존제 하면 자바스크립트를 써서 알림창을 나오게 합니다
    echo("
    <script>
      window.alert('해당 아이디가 존재합니다');
      history.go(-1);
      document.member.id.focus(); 
    </script>
    ");
    exit;//탈출
  }
  $sql="select *from member where email='$email'";//해당 이메일이 존재하면 이메일이 존재합니다라고 뜹니다
  $result=mysql_query($sql,$connect);
  $exist_email=mysql_num_rows($result);
  if($exist_email){
    echo("
    <script>
      window.alert('해당 이메일이 존재합니다');
      history.go(-1);
      document.member.email.focus(); 
    </script>
    ");
    exit;//탈출
  }
	
  //만약 둘다 존재하지 않을 경우 member table에 집어 넣습니다.
  $sql="insert into member(id,pass,name,email,phone,address,home,address1,day)";
  $sql.="values('$id','$pass','$name','$email','$phone','$address','$home','$address1','$day')";
  
  mysql_query($sql,$connect);
  mysql_close();

  echo("
  <script>
    location.href='http://study421.dothome.co.kr/';
  </script>
  ");//주소로 이동
?>