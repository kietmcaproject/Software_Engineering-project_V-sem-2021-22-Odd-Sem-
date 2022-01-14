<?php
  $to="akashgaur6400@gmail.com";
  $subject="Test mail";
  $message='Hello! This is a simple email message';
  $from="rohitsengar001@gmail.com";
  $headers="From : $from";
  if(mail($to,$subject,$message,$headers)){
      echo "Mail sent.";
  }else
    echo "Email Failed";
?>