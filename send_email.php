<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "caoquanghieu2910@gmail.com"; // Replace with your email address
  $headers = "From: $name <$email>\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Error: Message not sent.";
  }
}
?>