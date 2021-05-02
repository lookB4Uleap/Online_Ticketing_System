<?php

	session_start();

	$con=mysqli_connect('localhost','root','','');
	mysqli_select_db($con,'logdetail'); //databse name

	$nm=$_POST['username'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$pass=$_POST['password'];
	$pass2=$_POST['password2'];

	//echo "Username : {$nm} <br /> Email : {$email} <br /> Password : {$pass} <br />  {$pass2}";

	
	$q=" select * from  where name='$nm' and phone_no='$phno' and email='$email' ";

	$res=mysqli_query($con, $q);
	$num=mysqli_num_rows($res);

	if ($pass!=$pass2)
		echo "<br />Password Mismatched.Please Re-enter the passwords by going back";

	else
	{

	 	if ( $num==0 )
	 	{
	 		$qu=" insert into user_details(name,email,phone_no,password) 	values('$nm','$email','$phno','$pass') ";
	 		mysqli_query($con, $qu);
			//echo("Welcome $nm ");
			header("Location: Signin.html");
	 	}
	 	else
	 	{
	 		echo('User available.');
	 	}
	}

?>