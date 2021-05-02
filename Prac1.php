<!DOCTYPE html>
<html>
<head>
	<title>Prac1</title>
</head>
<body>
	<?php
		session_start();
		$con=mysqli_connect('localhost','root','','');
		mysqli_select_db($con,'lognsign'); //databse name
		$q1="select * from users";
		$nm="Hello";
		$q2="insert into users(name) values('$nm')";
		$result=mysqli_query($con,$q1);
		mysqli_query($con,$q2);
		$no_of_rows=mysqli_num_rows($result);
		$str="<p><h1>Welcome!!!</h1></p>
		<br />
		<div id = \"count\">Number Of Rows :</div>
		<br />
		<br />
		<button type=\"click\" id=\"count_rows\">Count</button>
		<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
		<script>
			(document).ready(function(){
				(\"#count_rows\").click(function(){
					(\"#count\").after({$no_of_rows});
					});
				});
		</script>
		";
		echo str;
	?>
</body>
</html>