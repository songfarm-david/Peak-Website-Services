<?php

   if ($_POST)  { // isset($_POST['submit'])

     // basic email validation
     if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo 'Please supply a valid email that you own';
        exit;
     }

     // Set up message
      $send_to = "david@peakwebsites.ca";
      $send_from = htmlspecialchars($_POST['email']);
      // this will describe more of what the visitor is looking for
      $subject  = $_POST['service_reference'];
      $redirect  = $_POST['redirect_value'];
      // Set up the header
      $header  = "From: " . $send_from . "\r\n";
      $header .= "X-Mailer: PHP/" . phpversion();
      // set up unique identifier for Google filtering
      $_POST['id'] = 'Peak Website Services';
      // Build the message
      $message="";

      foreach ($_POST as $key=>$value) {
        if ($key != "g-recaptcha-response") {
          $message .= $key . ": " . htmlspecialchars($value) . "\r\n";
        }
      }

     // Send the email
     // The '@' surpresses errors.
     if (!@mail($send_to, $subject, $message, $header)) {
       echo 'Thank you for getting in touch. We will respond shortly.';
       // header("Location: " . $redirect . "?return=thank_you");
     } else {
       echo 'An unknown error occured and the system was unable to complete your request. Please try again in a while.';
       // return false;
     }


    } else {
       //  header("Location: " . $redirect . "?return=error");
       echo 'No form data submitted.';
    }


?>
