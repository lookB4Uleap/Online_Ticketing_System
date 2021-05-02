<?php
	session_start();

	$con=mysqli_connect("localhost","root","","");
	mysqli_select_db($con,'railways'); // database
	$pnr=$_POST['pnr'];
	$date=$_POST['date'];
	$stnm=$_POST['stations'];
	$acc=$_POST['acc'];
	$occ=$_POST['occupancy'];
	$q=" insert into lounge_booking values ('$pnr','$date','$stnm','$acc','$occ') ";
	mysqli_query($con,$q);
	header("Location: index.html");
?>