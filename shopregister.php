<?php
include ('dataconnect.php');

$name2=$_POST['namee1'];
$add2=$_POST['add1'];
$state2=$_POST['state1'];
$image2=$_POST['image1'];
$mob2=$_POST['mob1'];
$emil2=$_POST['email1'];
$web2=$_POST['web1'];

$emp2=$_POST['emp1'];
$edu2=$_POST['edu1'];
$psdate2=$_POST['psdate1'];
$time2=$_POST['time1'];

$sql = "INSERT INTO `shop`(`SNAME`,`SADDRESS`,`STATE`,`SIMAGE`,`SMOBILENO`,`SEMAIL`,`SWEBSITE`,`NEEDEMP`,`EDUCATION`,`POSTDATE`,`TIME`) VALUES ('$name2','$add2','$state2','$image2','$mob2','$emil2','$web2','$emp2','$edu2','$psdate2','$time2')";
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