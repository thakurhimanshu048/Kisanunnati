<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message=$_POST['message'];

	// Database connection
	$conn = new mysqli('localhost:3307','root','','kisanunnati');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(name, email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Feedback sent successfully...";
		header('location:contactus.php');
		$stmt->close();
		$conn->close();
	}
?>