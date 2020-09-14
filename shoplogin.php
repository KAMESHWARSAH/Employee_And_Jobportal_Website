<?php
include ('dataconnect.php')
$uname = $_POST['uname'];
$pass = $conn['pass'];
$sql="SELECT * FROM shop where SMOBILENO='$uname' and PASSWORD='$pass'";
$run=mysql_query($sql);
if(!$run== true){
	header("Location:error.php");
}
else{
}
header("Location:index.php");
?>