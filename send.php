<?php
$countPeople = htmlspecialchars(strip_tags($_POST['count-people']));
$firstName = htmlspecialchars(strip_tags($_POST['first-name']));
$lastName = htmlspecialchars(strip_tags($_POST['last-name']));
$email = htmlspecialchars(strip_tags($_POST['email']));
$phone = htmlspecialchars(strip_tags($_POST['phone']));
$city = htmlspecialchars(strip_tags($_POST['city']));

$message = $firstName . " :את השם"  . "\r\n" . $lastName . " :שם משפחה" . "\r\n" . $email . "email: " . "\r\n" . $phone . " :הטלפון" . $city . " :העיר" . "\r\n" . $countPeople . " :מספר אנשים" . "\r\n";

$message = wordwrap($message, 100, "\r\n");

mail('fesenkoe2018@gmail.com', '!סדר', $message);

echo ' <script language="JavaScript"> window.location.href = "app/index.html"</script> ';
?>
