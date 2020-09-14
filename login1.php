<?php
include ('dataconnect.php')
$mob1=$_POST['mobile1'];
$pass1=$_POST['psw1'];
$usql="SELECT * from `student` where `SMOBILE`='$mob1' AND `PASSWORD`='$pass1'";
$ures=mysql_query($usql);
$num=mysql_num_rows($ures);
$urow=mysql_fetch_array($ures);
if ($num) 
{
	
	header('location:student.php');
}
else
{
	echo "wrong user or password ";
}


?>