<?php
include("11.php");
?>
<?php
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pass'];
if(strlen($password)<6)
header("location:reg.php?msg=PASSWORD IS WRONG!");
else{
$sql="INSERT INTO signin
   (username ,email,password)
   VALUES('$name', '$email', '$password')";
   mysqli_query($connection,$sql);
   header("location:index.php?msg=WELCOME MR $name");
}
?>