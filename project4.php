<?php
$host = "localhost";
$user = "root";
$password = "";
$con = mysqli_connect($host, $user, $password, "project4");
if(!$con){
    echo '<h1>Not connected</h1>';
} else {
    echo '<h1>Connected!</h1>';
    if (isset($_POST['fullName'])){
    $name = $_POST['fullName'];
    }
    if (isset($_POST['userEmail'])){
    $email = $_POST['userEmail']; 
    }
    if (isset($_POST['message'])){
    $message =  $_POST['message'];
    }
    $sql = "INSERT INTO input_db (fullName, email, comment) VALUES
    ('$name', '$email', '$message') ";
    if(mysqli_query($con, $sql)){
        echo "Message sent successfully";
    }
    else{
        echo mysqli_error($con);
    }
}



if(isset($_POST["submit"])) {
    $name = $_POST["fullName"];
    $email = $_POST["userEmail"];
    $formcontent = "You have received new email via Contact Form:";
    $message = $_POST["message"];

    $toEmail = "ajdin.fazlic@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $formcontent, $message, $mailHeaders, 'FROM: $email')) {
        $message = "Your message has been received successfully! Usual responding time is 24 hours.";
        $type = "success";
    }
}
?>
