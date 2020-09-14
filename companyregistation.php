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
$post2=$_POST['post1'];

$sql = "INSERT INTO `company`(`CNAME`,`CADDRESS`,`COFFICE`,`CIMAGE`,`CMOBILENO`,`CEMAIL`,`CWEBSITE`,`POST`,`NEEDEMP`,`EDUCATION`,`POSTDATE`) VALUES ('$name2','$add2','$state2','$image2','$mob2','$email2','$web2','$emp2','$edu2','$psdate2','$post2')";
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