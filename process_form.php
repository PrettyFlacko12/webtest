<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'samgamezone15@gmail.com';
  $subject = 'New message from contact form';
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo '<p>Message sent successfully!</p>';
  } else {
    echo '<p>Sorry, an error occurred. Please try again later.</p>';
  }
}
?>