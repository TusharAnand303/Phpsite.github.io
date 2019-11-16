<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="logincss.css">
</head>
<body>
<div class="box">
	<h2 style="font-size: 30px">Sign<span style="color: #33cc33;">IN</span></h2>
	<form action="login2valid.php" method="post" onsubmit=" return valid()">
		<div class="inputbox">
			<input type="text" name="user" required="" id="user">
			<label>Username</label>
		</div>
		<div class="inputbox">
			<input type="password" name="pass" required="" id="pass">
			<label>Password</label>
		</div>
		<input type="submit" name="" value="submit">
	</form>
</div>
<script type="text/javascript">
	function valid()
	{
    var us=document.getElementById('user').value;
    if(us.trim()=="")
    {
      alert("bhosdike nam dal");
      return false;
    }
		var str=document.getElementById('pass').value;
  if(str.length<8 || str.length>16)
    {
      
  alert("Password length must be greater than 8 digits..");
      return false;
    }
    else if(str.search(/[-1-9]/)==-1)
    {
      alert("Password must contain one digit..");
  
      return false;
    }
    else if(str.search(/[a-z]/)==-1)
    {
      alert("Password must contain one small alphabet..");
  
      return false;
    }
    else if(str.search(/[A-Z]/)==-1)
    {
      alert("Password must contain one big alphabet..");
      
  
      return false;
    }
    else if(str.search(/[!\@\$\%\^\&\*\(\)\-\+]/)==-1)
    {
      alert("Password must contain one  special character..")
      
  
      return false;
    }
    else if(str!=str2)
    {
       alert("please check the password :)");
       return false;
    }
		
		else
		{
			return true;
		}
	}

	
</script>
</body>
</html>