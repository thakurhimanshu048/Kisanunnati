<?php
// Database connection
$conn = new mysqli('localhost','root','','kisanunnati')or die($conn->connect_error);

if(isset($_POST['submit'])){

    $name = $_POST['name'];
	$email = $_POST['email'];
	$massage=$_POST['massage'];

   
  
    // $mysqli_query($conn,$insertquery); 

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		
        $insertquery = " insert into massage('name', 'email', 'massage') values('$name', '$email', '$massage')";

        $conn->query($insertquery)or die($conn->connect_error);
		if ($conn) {
			echo "Registration successfully...";
			header('location:contact.php');
		}else {
			echo "Failed";
		}
        
		
	}


}

	
?>