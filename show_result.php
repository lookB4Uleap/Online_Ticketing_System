<?php
	session_start();

	$con=mysqli_connect("localhost","root","","");
	mysqli_select_db($con,'railways'); // database

	$conn=mysqli_connect("localhost","root","","");
	mysqli_select_db($conn,'ticket'); // database

	$email=$_COOKIE["User"];

	$q="select tno from store_train_no where email='$email' ";
	$res=mysqli_query($conn,$q);
	$tr_no=0;
	$tr_nm="";

	while($row = mysqli_fetch_assoc($res)) {
		$tr_no=$row["tno"];
	}

	$amt=1000;
	$qu="select * from train_details where TRAIN_NUMBER='$tr_no' ";
	$res2=mysqli_query($con,$qu);
	echo "Train Number : " . $tr_no . "<br />";
	while ($row = mysqli_fetch_assoc($res2)) {
		echo "Train Name : " . $row["TRAIN_NAME"] . "<br />";
		echo "Source Station : " . $row["SOURCE_STATION"] . "<br />";
		echo "Destination Station : " . $row["DESTINATION_STATION"] . "<br />";
		$tr_nm=$row["TRAIN_NAME"];
	}

	echo "<br />";

	$qu2="select * from passenger_information where email='$email' ";
	$res3=mysqli_query($con,$qu2);
	$n=mysqli_num_rows($res3);
	$k=1;
	$i=1;
	$n_o_p=0;
	$count=$_COOKIE["count"];
	$amt=$amt*($n-$count);
	echo "<br />";
	while ($row = mysqli_fetch_assoc($res3)) {
		
		if ($k>$count and $k<=$n) {
		echo "Pasenger : " . $i . "<br/>";
		$i++;
		echo "Name : " . $row["FIRST NAME"] . " " . $row["LAST NAME"] . "<br />";
		echo "Age : " . $row["AGE"] . "<br />";
		$name=$row["FIRST NAME"] . " " . $row["LAST NAME"];
		$q="insert into ticket_detail(Name,Train_no,Train_nm,Email) values('$name','$tr_no','$tr_nm','$email') ";
		mysqli_query($conn,$q);
		$n_o_p++;
		$q4="select PNR from ticket_detail ";
		$res4=mysqli_query($conn,$q4);
		$pnr=0;
		while ( $row2 = mysqli_fetch_assoc($res4)) {
			$pnr=$row2["PNR"];
		}
		echo "PNR number :" .$pnr."<br /><br />";
	}
	$k++;
	}
	
	echo "<br />Amount Paid : " .$amt; 

	mysqli_close($con);
	mysqli_close($conn);

?>