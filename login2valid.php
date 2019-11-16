<?php
session_start();

$con=mysqli_connect('localhost','root');
if($con)
{
  echo "connection established";
}
else
{
echo "connection not established";
}

mysqli_select_db($con,'tushar');

$name=$_POST['user'];
$pass=$_POST['pass'];

$query="insert into login(username , password) values ('$name','$pass')";
mysqli_query($con,$query);

header('location:message.php');

?>