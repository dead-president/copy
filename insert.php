<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Check connection
if (!$conn){
	die("Connection failed: ". mysqli_connect_error());
}
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);
	$rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
	$email = mysqli_real_escape_string($conn, $_POST['emailid']);
	$department = mysqli_real_escape_string($conn, $_POST['department']);

$sql = " INSERT INTO student(year,name,rollno,email,dep) Values('$year','$name','$rollno','$email','$department')"
		;
if(mysqli_query($conn,$sql) === TRUE) {
	echo "<script>alert('Details Added');window.location.href='index.php';</script>";
}else{
	echo "Error: " . $sql2 . "<br>" . mysqli_error($conn); 
}
mysqli_close($conn);

?>