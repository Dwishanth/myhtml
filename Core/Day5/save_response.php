<?php
// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

// Define the file path
$file = 'responses.txt';

// Format the data
$data = "First Name: $first_name\nLast Name: $last_name\nEmail: $email\nPhone: $phone\nGender: $gender\n\n";

// Append the data to the file
file_put_contents($file, $data, FILE_APPEND);

// Confirmation message
echo "Your response has been saved!";
?>
