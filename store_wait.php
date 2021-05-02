<?php

	session_start();

	$con=mysqli_connect("localhost","root","","");
	mysqli_select_db($con,'railways'); // database

	$conn=mysqli_connect("localhost","root","","");
	mysqli_select_db($conn,'ticket');

	//mysqli_query($conn,"delete from store_train_no ");

	$tr_no=$_POST['tr_no'];
	$tr_nm=$_POST['tr_nm'];
	$nop=$_POST['nop'];
	$email=$_COOKIE["User"];
	//echo $tr_no . $tr_nm . $nop;

	$q="update train_details set WAITING_LIST=WAITING_LIST + '$nop' where TRAIN_NUMBER='$tr_no' ";
	mysqli_query($con,$q);

	$qu="insert into store_train_no values ('$tr_no','$email') ";
	mysqli_query($conn,$qu);

	mysqli_close($con);
	mysqli_close($conn);

	header("Location: passenger_info.html");
?>