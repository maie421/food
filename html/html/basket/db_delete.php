<?
  session_start();
	$aDoor = $_POST['formDoor'];
  $id=$_SESSION['userid'];
	if(empty($aDoor))
	{
		echo("You didn't select any buildings.");
	}
	else
	{
		$N = count($aDoor);
    for($i=0; $i < $N; $i++)
    {
     include "../lib/db_name.php";
     $sql="delete from basket where id='$id' and number='$aDoor[$i]'";
     mysql_query($sql,$connect);
    }
  }
  echo("<script>
  location.href='basket.php'
  </script>
  ");
?>