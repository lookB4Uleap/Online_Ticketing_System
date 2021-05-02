<?php

session_start();

	$con=mysqli_connect("localhost","root","","");
	mysqli_select_db($con,'railways'); // database

	$conn=mysqli_connect("localhost","root","","");
	mysqli_select_db($conn,'ticket');

	//mysqli_query($conn,"delete from store_train_no ");

	$pnr=$_POST['pnr'];
	$tr_no=$_POST['trno'];
	$tr_nm=$_POST['trnm'];
	$nop=0;
	$email=$_COOKIE["User"];
	//echo $tr_no . $tr_nm . $nop;
	echo $pnr;

	$q="select * from ticket_detail where PNR='$pnr' ";
	$res=mysqli_query($conn,$q);
	$nop=mysqli_num_rows($res);

	$q="delete from ticket_detail where PNR='$pnr' ";
	mysqli_query($conn,$q);

	$q="update train_details set AVAILABLE_SEATS=AVAILABLE_SEATS + '$nop' where TRAIN_NUMBER='$tr_no' ";
	mysqli_query($con,$q);

	$qu="delete from store_train_no where email='$email' ";
	mysqli_query($conn,$qu);

	mysqli_close($con);
	mysqli_close($conn);

	echo "<script>alert('Cancellation successful.');</script>";

	if ($_COOKIE["User"]=="")
		header("Location: index.html");
	
	else
		header("Location: index2.html");

?>