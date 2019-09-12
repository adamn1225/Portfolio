<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $name = $_POST['subject'];
  $name = $_POST['mail'];
  $name = $_POST['message'];

  $mailTo = "anoah1225@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}
