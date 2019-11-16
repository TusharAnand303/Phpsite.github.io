<!DOCTYPE html>
<html>
<head>
	<title>Tushar Cafe</title>
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="cafecss.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
	<nav>
		<div class="row clearfix">
			<img src="logo3.png" class="logo animated flip">
			<ul class="main-nav animated slideInDown" id="check-class">
				<li><a href="#">CAKE DILEVERY</a></li>
				<li><a href="#">HOW TO ORDER</a></li>
				<li><a href="#">CHECK MORE</a></li>
				<li><a href="#">SIGN-IN</a></li>
			</ul>
			<a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-list-ul"></i></a>
		</div>
	</nav>
	<div class="main-content-header">
	<h1>WELCOME TO <span class="colorchange">TUSHAR's CAFE</span>.<br>
	     HOUSE OF CAKE LOVERS..! </h1>
	     <a href="login2.php" class="btn btn-full animated infinite pulse">click to order</a>
	     <a href="#" class="btn btn-nav">show me more</a>
	 </div>
</header>
<script type="text/javascript">
	function slideshow()
	{
       var x=document.getElementById('check-class');
       if(x.style.display==="none")
       {
       	x.style.display="block";
       }
       else
       {
       	x.style.display="none";
       }
	}
</script>
</body>
</html>
</body>
</html>