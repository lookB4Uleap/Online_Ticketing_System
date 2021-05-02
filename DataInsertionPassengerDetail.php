<?php


	
	session_start();

	$con=mysqli_connect('localhost','root','','');
	mysqli_select_db($con,'railways'); //databse name
	//mysqli_query($con,"delete from passenger_information");

	class Passenger
	{
		private $title,$fname,$lname,$gender,$national,$age;
		
		
		function __construct($title, $fname, $lname, $gender, $national, $age)
		{
			$this->title=$title;
			$this->fname=$fname;
			$this->lname=$lname;
			$this->gender=$gender;
			$this->national=$national;
			$this->age=$age;
		}

		function not_null()
		{
			if ($this->fname==null and $this->lname==null and $this->age==null)
				return false;
			else
				return true;
		}

		function get_details()
		{
			//session_start();
			$con=mysqli_connect('localhost','root','','');
			mysqli_select_db($con,'railways'); //databse name
			$email=$_COOKIE["User"];
			$q="insert into passenger_information values('$this->title','$this->fname','$this->lname','$this->gender','$this->national','$this->age','$email')";
			mysqli_query($con,$q);
		}
	}


	$passenger_details= array();
	for ($i=1;$i<=6;$i++)
	{
		if ($_POST['First'.(string)$i]!=null or $_POST['Last'.(string)$i]!=null) {
		$title=$_POST['Title'.(string)$i];
		$fname=$_POST['First'.(string)$i];
		$lname=$_POST['Last'.(string)$i];
		$gender=$_POST['Gender'.(string)$i];
		$national=$_POST['Nationality'.(string)$i];
		$age=$_POST['Age'.(string)$i];
		
		echo $title.$fname.$lname.$gender;

		$passenger=new Passenger($title, $fname, $lname, $gender, $national, $age);
		if ($passenger->not_null()){
			$passenger_details[$i-1]=$passenger;
			$passenger_details[$i-1]->get_details();
		}
		else
			header("Location: passenger_info2.html");
		}
		else 
			header("Location: passenger_info2.html");
	}
	
?>