<?php
session_start();
?>
<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
    $number = $_POST['number'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','kisanunnati');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(username, email, number, password) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $username, $email, $number, $password);
		$execval = $stmt->execute();

		echo $execval;
		echo "Registration successfully...";
		header('location:register.php');
		$stmt->close();
		$conn->close();
	}
?>