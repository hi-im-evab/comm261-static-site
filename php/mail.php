<?php
$name = $_POST['name'];
$email = $_POST['email'];
$ssn = $_POST['ssn'];
$meal = $_POST['meal'];
$message = $_POST['message'];

$formcontent=" 
    From: $name \n 
    Email: $email \n
    SSN: $ssn \n
    Meal: $meal \n 
    Message: $message";
$recipient = "evan.eggers@ndsu.edu";
$subject = "Eat, fool";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Oh, cool. Thanks. Okay." . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>