<?
  session_start();

  $subject=$_POST['subject'];
  $content=$_POST['content'];
  $file=$_POST['file'];
  $import=$_POST['import'];
  $mode=$_GET['mode'];
  $mod=$_GET['mod'];
  $num=$_GET['num'];
  
  $connect=mysql_connect("localhost","study421","rlago421");
  mysql_select_db("study421",$connect);
  mysql_query("SET NAMES utf8");

  $name=$_SESSION['userid'];
  if($mod=="faq"){
    $page_site="FAQ.php";
  }else{
    $page_site="notice.php";
  }
  if($name=="admin")//session id가 admin 일경우 관리자로 표시
     $name="관리자";

  $path = "./img/menu";//?????

 // $file_name = date("YmdHis").".jpg";
	$file_name = $_FILES['file_name']['name'];
   move_uploaded_file($_FILES['file_name']['tmp_name'],$file_name);

  $regist_day=date("y-m-d (H:i)");//날짜

  if($mode=="modify" && $mod=="faq"){
    $sql="update faq set subject='$subject',content='$content' where num='$num'";
  }
  else if($mode=="modify"){
  $sql="update notice set subject='$subject',content='$content' where num='$num'";
  }
  else if($mod=="faq"){//내용 db에 넣기
  $sql="insert into faq(subject,content,name,path,file_name,regist_day,import)";
  $sql.="values ('$subject','$content','$name','$path','$file_name','$regist_day','$import')";
  }
  else{
  $sql="insert into notice(subject,content,name,path,file_name,regist_day,import)";
  $sql.="values ('$subject','$content','$name','$path','$file_name','$regist_day','$import')";
  }
  
  mysql_query($sql,$connect);//연결

  mysql_close();//mysql 끊기
  if($mod=="faq"){
  echo "(
    <script>
      location.href='http://study421.dothome.co.kr/html/notice_admin/FAQ.php';
    </script>
  )";
  }else{
    echo "(
    <script>
      location.href='http://study421.dothome.co.kr/html/notice_admin/notice.php';
    </script>
  )";
  }

?>