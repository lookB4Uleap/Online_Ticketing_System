<?php
	
	session_start();

	$con=mysqli_connect("localhost","root","","");
	mysqli_select_db($con,'railways'); // database

	$from=$_POST['From'];
	$to=$_POST['To'];
	$nop=$_POST['adults'];
	$cl=$_POST['class'];

	$arr_no=array();
	$arr_nm=array();
	$arr_seat=array();

	$q="select TRAIN_NUMBER,TRAIN_NAME,AVAILABLE_SEATS from train_details where SOURCE_STATION='$from' and DESTINATION_STATION='$to' ";
	$res=mysqli_query($con,$q);
	$n=mysqli_num_rows($res);

	$c=1;
		
	echo "Option\t\tTrain Name\t\tAvailable Seats <br />";
	while($row = mysqli_fetch_assoc($res)) {
		echo "{$c} " . "\t\t\t\t\t" . $row["TRAIN_NAME"] . "\t\t\t\t\t" . $row["AVAILABLE_SEATS"] . "<br />";
		$arr_no[$c-1]=$row["TRAIN_NUMBER"];
		$arr_nm[$c-1]=$row["TRAIN_NAME"];
		$arr_seat[$c-1]=$row["AVAILABLE_SEATS"];
    	$c=$c+1;
	}

	$email=$_COOKIE["User"];
	$q="select * from passenger_information where email='$email' ";
	$p=mysqli_query($con,$q);
	$count=mysqli_num_rows($p);

	setcookie("count","",time()-(86400),"/");
	$cookie_name="count";
	$cookie_value=$count;
	setcookie($cookie_name, $cookie_value, time() + (86400), "/");


?>


<form action="store_train.php" method="post" id="form1">
	<input type="text" name="tr_no" id="op1" value="" class="opt1" style="width : 0% ; height: 0%" />
	<input type="text" name="tr_nm" id="op2" value="" class="opt1" style="width : 0% ; height: 0%" />
	<input type="text" name="nop" id="op3" value="" class="opt1" style="width : 0% ; height: 0%" />
	<button onclick="option1()" id="button1">Option1</button>
	<button onclick="option2()" id="button2">Option2</button>
</form>

<form action="store_wait.php" method="post" id="form2">
	<input type="text" name="tr_no" id="op1" value="" style="width : 0% ; height: 0%" />
	<input type="text" name="tr_nm" id="op2" value="" style="width : 0% ; height: 0%" />
	<input type="text" name="nop" id="op3" value="" style="width : 0% ; height: 0%" />
	<button onclick="option1()">Option1</button>
	<button onclick="option2()">Option2</button>
</form>


<script>   
// Access the array elements 
var passedArray1 =  
    <?php echo json_encode($arr_no); ?>; 

var passedArray2 =  
    <?php echo json_encode($arr_nm); ?>;

var passedArray3 =  
    <?php echo json_encode($arr_seat); ?>;

var no_per = <?php echo json_encode($nop); ?>;

if (passedArray3[0]<no_per && passedArray3[1]<no_per) {
	alert("No seat found please confirm in waiting list");
	var ele = document.getElementById("form1");
	ele.parentNode.removeChild(ele);
	function option1(){
		document.getElementById("op1").value = passedArray1[0];
		document.getElementById("op2").value = passedArray2[0];
		document.getElementById("op3").value = no_per;
	} 

	function option2(){
		document.getElementById("op1").value = passedArray1[1];
		document.getElementById("op2").value = passedArray2[1];
		document.getElementById("op3").value = no_per;
	}
}

else if (passedArray3[0]<no_per) {
	var ele = document.getElementById("form2");
	ele.parentNode.removeChild(ele);
	var button2 = document.getElementById("button2");
	button2.parentNode.removeChild(button2);
	function option1(){
		document.getElementById("op1").value = passedArray1[1];
		document.getElementById("op2").value = passedArray2[1];
		document.getElementById("op3").value = no_per;
	}
}

else if (passedArray3[1]<no_per) {
	var ele = document.getElementById("form2");
	ele.parentNode.removeChild(ele);
	var button2 = document.getElementById("button2");
	button2.parentNode.removeChild(button2);
	function option1(){
		document.getElementById("op1").value = passedArray1[0];
		document.getElementById("op2").value = passedArray2[0];
		document.getElementById("op3").value = no_per;
	}	
}

else {
	var ele = document.getElementById("form2");
	ele.parentNode.removeChild(ele);

	function option1(){
		document.getElementById("op1").value = passedArray1[0];
		document.getElementById("op2").value = passedArray2[0];
		document.getElementById("op3").value = no_per;
	} 

	function option2(){
		document.getElementById("op1").value = passedArray1[1];
		document.getElementById("op2").value = passedArray2[1];
		document.getElementById("op3").value = no_per;
	}

}      

// Display the array elements 
 for(var i = 0; i < passedArray1.length; i++){ 
     document.write(passedArray1[i]+" ");
     document.write(passedArray2[i]+" ");
     document.write(); 
} 
</script> 