<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mr Watch</title>

<link rel="stylesheet" type="text/css" href="lostyle.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>

<div class="login">
	<a href="index.php"><img src="log3.jpg" class="logo"></a>
	<div class="form">
		<div class="buttons">
		
			<a href="login.php"><button type="button" class="butt">Login</button></a>
				
</div>
 <div class="col">
             <form  class="input-text" method="post" action="action11.php">
             <input type="text" class="text-field" name="username" placeholder="enter user name" required>
             <input type="email" class="text-field" name="email" placeholder="enter your email" required>
             <input type="text" class="text-field" name="pass" placeholder="enter password" required>
             <input type="checkbox" class="check"><span>Agree to term of service and polices</span>
             <b><button type="submit" class="submita" >Sign Up</button></b> </div>
             <div align="center">
			<?php
			 echo "<font color='red' size='5' >".$_GET['msg']."</font>";
			 ?>
            </div>
</form>

           



</div>
</div>



</body>
</html>