
<?php
$name = htmlspecialchars($_POST['name'], ENT_COMPAT);
$lname = htmlspecialchars($_POST['lname'], ENT_COMPAT);
$email = htmlspecialchars($_POST['email'], ENT_COMPAT);
$phone = htmlspecialchars($_POST['phone'], ENT_COMPAT);
$address = htmlspecialchars($_POST['address'], ENT_COMPAT);
$city = htmlspecialchars($_POST['city'], ENT_COMPAT);
$message = htmlspecialchars($_POST['message'], ENT_COMPAT);
$formcontent = " Name: $name \n  Last Name: $lname \n Email: $email \nPhone: $phone \n Address: $address \n City: $city \n Message: $message";
$recipient = "millersprolandscape@gmail.com";
$subject = "Contact Form Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for contacting us – we will get back to you soon! " . " -" . "<a href='http://millersprolandscape.com' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
