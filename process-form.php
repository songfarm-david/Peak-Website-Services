<?php

   if (isset($_POST['redirect_value']))  {
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
      foreach ($_POST as $key=>$value)
      {
         $message .= $key . ": " . htmlspecialchars($value) . "\r\n";
      }

      // Send the email
      // The '@' surpresses errors.
      @mail($send_to, $subject, $message, $header);
      header("Location: " . $redirect . "?return=thank_you");

   } else {
     header("Location: " . $redirect . "?return=error");
   }


?>
