<?php
include("connection.php");
$name=$_POST['name'];
$city=$_POST['city'];
$zipcode=$_POST['zipcode'];
$state=$_POST['state'];
$country=$_POST['country'];
$number=$_POST['number'];
$email=$_POST['email'];
$inquiry=$_POST['inquiry'];

$query="insert into inquiry(name,city,zipcode,state,country,number,email,inquiry)values('$name','$city','$zipcode','$state','$country','$number','$email','$inquiry')";

$r=mysql_query($query);
if($r)
{
	header('Location:../alert_inq.html');
}
else
{
	header('Location:../alert.html');
}
?>