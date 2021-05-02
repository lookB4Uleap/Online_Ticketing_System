<?php
	//session_start();

	$con=mysqli_connect("localhost","root","","");
	mysqli_select_db($con,'railways'); // database
	$nm=$_POST['name'];
	$cno=$_POST['contactno'];
	$email=$_POST['email-id'];
	$state=$_POST['state'];
	$sub=$_POST['subject'];
	$q= "insert into contact_information values ('$nm','$cno','$email','$state','$sub') ";
	mysqli_query($con,$q);
	header("Location: index.html");
	// echo "Thank you for your feed back<br /><br />";
	// echo "<a hyref='index.html'>Go Back</a>";
?>