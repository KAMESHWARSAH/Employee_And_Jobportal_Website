<?php
$conn = mysql_connect('localhost','root','rootwdp');
if(!$conn)
{
	echo "Your Database Not Connected";
}
else{
	mysql_select_db('minorproject2');
	
}

?>
