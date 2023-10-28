<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','collegewebsite');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect-error);
}else{
    $stmt = $conn->prepare("insert into contact us(name, emai, subject, message) 
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssss, $name, $email, $subjet, $message");
    $stmt->execute();
    echo "Thankyou";
    $stmt->close();
    $conn->close();
}
?>