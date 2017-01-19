<?php

   if ($_POST)  { // isset($_POST['submit'])
     var_dump($_POST);
     // NOTE: add basic email validation
    //  if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //   //  header("Location: localhost/peak/dev?return=emailerror");
    //   // header("Location: " . $_SERVER['PHP_SELF'] . "?return=emailerror");
    //   // exit;
    //   echo 'email empty or not email';
    //  }
    //  NOTE: temporarily disabled email functionality
      // Set up message
      $send_to = "david@peakwebsites.ca";
      $send_from = htmlspecialchars($_POST['email']);
      $subject  = $_POST['service_reference'];
      $redirect  = $_POST['redirect_value'];
      // Set up the header
      $header  = "From: " . $send_from . "\r\n";
      $header .= "X-Mailer: PHP/" . phpversion();
      // set up unique identifier for Google filtering
      $_POST['id'] = 'Peak Website Services';
      // Build the message
      $message="";

      // foreach ($_POST as $key=>$value) {
      //   if ($key != "g-recaptcha-response") {
      //     $message .= $key . ": " . htmlspecialchars($value) . "\r\n";
      //   }
      // }

      // Send the email
      // The '@' surpresses errors.
      // @mail($send_to, $subject, $message, $header);
      // header("Location: " . $redirect . "?return=thank_you");

   } else {
    //  header("Location: " . $redirect . "?return=error");
    echo 'no else';
   }


?>
