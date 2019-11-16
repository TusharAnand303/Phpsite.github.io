<?php

session_start();

$conn=mysqli_connect('localhost','root');

if($conn)
{
	echo "connection established";
}
else
{
	echo "no connection established";
}

mysqli_select_db($conn,'sessionpractically');

$name=$_POST['user'];
$pass=$_POST['password']; 

$q="select * from signinn where name ='$name' && password='$pass' ";
$result=mysqli_query($conn,$q);


$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$name;
	header('location:home.php');
}
else
{
	header('location:login.php');
}

?>