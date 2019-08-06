<?php
include("connection.php");
$rowscountquery="SELECT * from participants;";
$noofrows=mysqli_query($conn,$rowscountquery);
$rowsres=mysqli_num_rows($noofrows);
// echo $rowsres;
if(isset($_POST['submit'])){
	if(strlen($_POST['first_name'])>0)
	{
		$Regid='19eac'.($rowsres+1);
		$Name=$_POST['first_name'];
		$Phone=$_POST['phone'];
		$College=$_POST['college'];
		$email=$_POST['Email'];
		$queryforexternals="INSERT INTO participants(Reg_id,Type,Name,Phone,Email,College) values('$Regid','External','$Name','$Phone','$email','$College');";
		if ($conn->query($queryforexternals) === TRUE) {
			echo "New record created successfully";
			header("location:register.html");
		} else {
			echo "Error: " .$conn. "<br>" . $conn->error;
			header("location:index.html");
		}

	}
	if(strlen($_POST['firstName'])>0)
	{
		$Regid='19eac'.($rowsres+1);
		$Name=$_POST['firstName'];
		$Phone=$_POST['phone_'];
		$Regno=$_POST['regNo'];
		$email=$_POST['email'];
		$queryforinternals="INSERT INTO participants(Reg_id,Type,Name,Phone,Email,Reg_no,College) values('$Regid','Internal','$Name','$Phone','$email','$Regno','VIT Vellore');";
		if ($conn->query($queryforinternals) === TRUE) {
			// echo "New record created successfully";
			header("location:register.html");
		} else {
			// echo "Error: " .$conn. "<br>" . $conn->error;
			header("location:index.html");
		
		}

	}
}
	?>