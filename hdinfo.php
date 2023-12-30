
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mr WATCH</title>
		<link rel="stylesheet" type="text/css" href="usercss.css">
	</head>
	<body>
		<div class="website">
	<?php
	include('11.php');
	$sql= "SELECT * FROM signin";
	$connection = mysqli_connect('localhost','root','','website');
	$result= mysqli_query($connection,$sql);
?>
<a href="index.php"><img src="log3.jpg" class="logo"></a>
<h3>SIGNIN</h3>
<table class="table" frame="box" rules="rows">
	<tr>
	<th>USER NAME</th>
	<th>EMAIL </th>
	<th>PASSWORD </th>	
    </tr>
    <tr>
	<?php
	while ($rows=mysqli_fetch_array($result)) 
	{
	?>
	<tr>
		<td align="center"><?php echo $rows[0]; ?></td>
		<td align="center"><?php echo $rows[1]; ?></td>
		<td align="center"><?php echo $rows[2]; ?></td>
		</tr>
	<?php
	}
    ?>
</table>
</div>

</body>
</html>