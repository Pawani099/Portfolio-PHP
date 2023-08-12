<?php
session_start();

$validUsername = "user123";
$validPassword = "password123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $validUsername && $password === $validPassword) {
      
        $_SESSION["authenticated"] = true;

    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];


        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Subject: $subject<br>";
        echo "Message: $message<br>";
    } else {
   
        echo "Authentication failed. Please check your username and password.";
    }
} else {

    header("Location: index.html");
    exit();
}
?>
