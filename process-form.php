<?php

    /* This script emails whatever is posted to it and
    * requires the form to have a hidden input named "redirect"
    *
    * Alternatively, the $_POST array can be set to $_GET in
    * order to compose a message from variables in the query string.
    */

   // The redirect url is required and prevents non-form-posted processing.
   if (isset($_POST['redirect_value']))
   {
      // Set up message
      $send_to = "david@peakwebsites.ca";
      $send_from = $_POST['email'];
      $subject  = $_POST['service_reference'];
      $redirect  = $_POST['redirect_value'];

      // Set up the header
      $header  = "From: " . $send_from . "\r\n";
      $header .= "X-Mailer: PHP/" . phpversion();

      // Build the message
      foreach ($_POST as $key=>$value)
      {
         $message .= $key . ": " . $value . "\r\n";
      }

      // Send the email
      // The '@' surpresses errors.
      @mail($send_to, $subject, $message, $header);

      header("Location: " . $redirect);
   }


?>
