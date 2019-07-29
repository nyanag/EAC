<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="eac2019";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$rowscountquery="SELECT * from participants;";
$noofrows=mysqli_query($conn,$rowscountquery);
$rowsres=mysqli_num_rows($noofrows);
echo $rowsres;
// if(isset($_POST['submit'])){
// 	if(strlen($_POST['first_name'])>0)
// 	{
// 		$Regid='19eac'.($rowsres+1);
// 		$Name=$_POST['first_name'];
// 		$Phone=$_POST['phone'];
// 		$College=$_POST['college'];
// 		$Email=$_POST['email'];
// 		$queryforexternals="INSERT INTO participants(Reg_id,Type,Name,Phone,Email,College) values('$Regid','External','$Name','$Phone','$email','$College');";
// 		if ($conn->query($queryforexternals) === TRUE) {
// 			echo "New record created successfully";
// 		} else {
// 			echo "Error: " . $sql . "<br>" . $conn->error;
// 		}

// 	}
// 	if(strlen($_POST['firstName'])>0)
// 	{
// 		$Regid='19eac'.($rowsres+1);
// 		$Name=$_POST['firstName'];
// 		$Phone=$_POST['phone_'];
// 		$Regno=$_POST['regNo'];
// 		$Email=$_POST['email'];
// 		$queryforexternals="INSERT INTO participants(Reg_id,Type,Name,Phone,Email,Reg_no,College) values('$Regid','Internal','$Name','$Phone','$email','$Regno','VIT Vellore');";
// 		if ($conn->query($queryforexternals) === TRUE) {
// 			echo "New record created successfully";
// 		} else {
// 			echo "Error: " . $sql . "<br>" . $conn->error;
// 		}

// 	}
// }

//asdfasdfasdfa


if(isset($_POST['submit'])){
	$Regid='19eac'.($rowsres+1);
	$Name=$_POST['first_name'];
	$Phone=$_POST['phone'];
	$Email=$_POST['email'];	
	if(strlen($_POST['first_name'])>0)
	{
		$College=$_POST['college'];
		$queryforexternals="INSERT INTO participants(Reg_id,Type,Name,Phone,Email,College) values('$Regid','External','$Name','$Phone','$email','$College');";
		if ($conn->query($queryforexternals) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	else if(strlen($_POST['firstName'])>0)
	{
		$Regno=$_POST['regNo'];
		$queryforinternals="INSERT INTO participants(Reg_id,Type,Name,Phone,Email,Reg_no,College) values('$Regid','Internal','$Name','$Phone','$email','$Regno','VIT Vellore');";
		if ($conn->query($queryforinternals) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
}

	?>