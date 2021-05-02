<?php

	session_start();

	$con=mysqli_connect("localhost","root","","");
	mysqli_select_db($con,'logdetail'); // database
	$nm=$_POST['username'];
	$pass=$_POST['password'];

	$q="select name from user_details where email='$nm' && password='$pass' ";

	$p=mysqli_query($con, $q);
	$n=mysqli_num_rows($p);
	$name="";

	while ($row = mysqli_fetch_assoc($p)) {
		$name=$row["name"];
	}


	
	if ($n == 1)
	{
		//echo('Account valid.');
		setcookie("User",time()-(86400),"/");
		$cookie_name="User";
		$cookie_value=$nm;
		setcookie($cookie_name, $cookie_value, time() + (86400), "/");
		setcookie("Name",time()-(86400),"/");
		$cookie_name2="Name";
		$cookie_value2=$name;
		setcookie($cookie_name2, $cookie_value2, time() + (86400), "/");
		header("Location: index2.html");
	}
	else
	{
	 	echo "<script>
	 	alert('Account invalid. Please go back and type a valid email and password');
	 	</script>";
	}

?>