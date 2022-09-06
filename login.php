<?php
session_start();
?>
<?php

$email = $_POST['email'];
$password = $_POST['password'];
 
   // Database connection here
   $con = new mysqli("localhost","root","","kisanunnati");
   if($con->connect_error) {
       die("failed to connect : ".$con->connect_error);
   } else { 
       $stmt = $con->prepare("select * from registration where email = ?");
       $stmt->bind_param("s",$email);
       $stmt->execute();
       $stmt_result = $stmt->get_result();
       if($stmt_result->num_rows > 0) {
           $data = $stmt_result->fetch_assoc();

           @$_SESSION['username']=$data['username'];
           @$_SESSION['email']=$data['email'];
           @$_SESSION['number']=$data['number'];
           if($data['password'] === $password) {
               echo "<h2>Login Successfully</h2>";
               header('location:index.php');
           } else{
               echo "<h2>Invalid Email or password</h2>";
           }
           

       } 

   }
   
?>