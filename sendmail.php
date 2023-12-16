<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Enter your email address
    $to = 'your-email@example.com';
    $subject = "New Message from Website";
    $body = "Name: ".$name."\r\n"."Email: ".$email."\r\n"."Message: ".$message;

    if(mail($to, $subject, $body)){
        echo "Email Sent Successfully";
    }else{
        echo "Email Sending Failed";
    }
}
?>