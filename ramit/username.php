<?php
$storedUsername = "myusername";
$storedPassword = "mypassword";

$userInputUsername = "myusername"; 
$userInputPassword = "mypassword"; 

if ($userInputUsername === $storedUsername && $userInputPassword === $storedPassword) {
    echo "Login successful";
} else {
    echo "Invalid credentials";
}
?>

