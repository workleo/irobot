<?php
$errorMSG = "";

$name ='';
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

$email ='';
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

$message='';
$errorMSG='';
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

$EmailTo = "antropoid2017@gmail.com";
$Subject = "New Message Received";

$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

$success = sendMail($EmailTo, $email, $Subject, $message);

if ($success && $errorMSG == ""){
    echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

function sendMail($to, $from, $title, $message)
{
    $subject = $title;
    $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
    $headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
    $headers .= "From: ". $from ."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";

    if(!mail($to, $subject, $message, $headers))
        return 'Something went wrong!';
    else
        return true;
}
