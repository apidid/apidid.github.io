<?php

	$con = mysqli_connect("localhost",
	"id19216328_gusar",
	"BLADE_London2006",
	"id19216328_signup");

	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];

	$sql = "INSERT INTO users(name,age,gender) VALUES ('$name','$age','$gender')";

	$result = mysqli_query($con,$sql);

	if($result){
		echo "inserted succesfully";
	}else{
		echo"failed";
	}

?>

