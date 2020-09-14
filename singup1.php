<?php
include ('dataconnect.php');

$name11=$_POST['namee'];
$mob1=$_POST['mobile'];
$coll1=$_POST['college'];
$email1=$_POST['email'];
$enroll1=$_POST['enroll'];
$dob1=$_POST['dob'];
$pass1=$_POST['psw'];

$sql = "INSERT INTO `student`(`SNAME`,`SROLLNO`,`SEMAIL`,`SMOBILE`,`SCOLLEGE`,`SDOB`,`PASSWORD`) VALUES ('$name11','$enroll1','$email1','$mob1','$coll1','$dob1','$pass1')";
echo $sql;
$run=mysql_query($sql);

if($run == true)
{
	echo "Data Inserted " ;
	header('location:student.php');
}

else{
	echo " Error !";
}
?>