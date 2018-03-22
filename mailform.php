<?php
  $url = $_POST["redirect"];
  $errorurl = $_POST["redirecterror"];
  $to = $_POST["recipient"];
  $from = $_POST["from"];
  $replyto = $_POST["email"];
  $subject = $_POST["subject"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $body = '<strong>Client Name:</strong> ' . $name .'<br><br>';
  $body .= '<strong>Client Email:</strong> ' . $email . '<br><br>';
  $body .= include_once("include/tracker.php");

  $headers = 'From: ' . $from . '\r\n';
  $headers .= 'Reply-To: ' . $replyto . '\r\n';
  $headers .= 'MIME-Version: 1.0\r\n';
  $headers .= 'Content-type: text/html;  charset=iso-8859-1' . '\r\n';
  if (mail($to, $subject, $body, $headers)) {
    echo 'Email has been sent';
  } else {
    echo 'There was an error sending the email';
  }
?> 