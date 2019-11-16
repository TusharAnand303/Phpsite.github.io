<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		

<h2 class="text-center text-primary">Welcome <?php echo "$_SESSION['username']";?></h2>
<a href="logout.php">LOGOUT</a>
	</div>
</body>
</html>