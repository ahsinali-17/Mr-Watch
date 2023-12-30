<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mr Watch</title>
	<link rel="stylesheet"  href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    
<div class="website">
	<div class="navigation">
		
		<a href="index.php"><img src="log3.jpg" class="logo"></a>

		<ul class="links"><b>
			<li><a href="index.php">Home</a></li>
			<li><a href="buy.html">Buy</a></li>
			<li><a href="reg.php">Sign in</a></li>
			<li><a href="about.html">About US</a></li>
			<li><a href="hdinfo.php">Users</a></li></b>
		</ul>

	</div>
            <div align="center">
			<?php
			 error_reporting(0);
			 echo "<font color='orange' size='5' >" . $_GET['msg'] ."</font>";
			 ?>
            </div>
    <div class="shop"> 
    	<h1>MR WATCH</h1>
    	
    	
    	<div>
    	
    	<a href="buy.html"><button type="button"> Shop Now</button></a>
    	<a href="login.php"><button type="button">login</button></a>	
    		

    	</div>
</div>

</div>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col">
             <h4>COMPANY</h4>
             <ul>
            	
            	<li><a href="about.html">About  Us</a></li>
            	<li><a href="about.html">Privacy  Policy</a></li>
            	<li><a href="about.html">Products</a></li>

              </ul>
             </div>

             	<div class="col">
             <h4>HELP</h4>
             <ul>
            	
            	<li><a href="https://mail.google.com/mail/u/0/#inbox">Contact  Us</a></li>
            	<li><a href="https://mail.google.com/mail/u/0/#inbox">Email  Us</a></li>
            	<li><a href="#">0312-664578</a></li>

              </ul>
             </div>

             

             <div class="col">
             <h4>SOCIAL  MEDIA</h4>
             <div class="socail">
             	<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
             	<a href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
             	<a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
             	<a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
             </div>
             </div>

        </div>
	</div>
</footer>

</body>
</html>