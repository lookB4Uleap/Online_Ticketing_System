<?php
	session_start();

	$con=mysqli_connect("localhost","root","","");
	mysqli_select_db($con,'railways'); // database
	$msg=$_POST['msg'];
	// echo " {$msg} ";
	$q=" insert into chat_support values ('$msg') ";
	$p=mysqli_query($con,$q);
	header("Location: index.html");
?>