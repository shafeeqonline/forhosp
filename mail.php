<?php

  $email = $_REQUEST['mail'] ;
  $message = $_REQUEST['message'] ;
  $contact = $_REQUEST['contact'] ;
  $body = 'Message is ' . ' ' . $message . ' and contact number is ' . $contact ;

  mail( "help@forhosp.com", "Form from forHosp site", $body, "From: $email" );
?>