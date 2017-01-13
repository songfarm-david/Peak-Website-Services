<?php

   if (isset($_POST['redirect_value']))  {

     // NOTE: testing captcha
    //  var_dump($_POST);

    //  if (isset($_POST['g-recaptcha-response'])) {
    //    $googleAPI = 'https://www.google.com/recaptcha/api/siteverify';
    //    $secretKey = '6LcoshEUAAAAAL0RM10KHlcxemmtjwBOyKo3nCRs';
    //    $captcha = $_POST['g-recaptcha-response'];
    //    $rawQueryString = $googleAPI . '?secret=' . $secretKey . ' &response=' . $captcha;
    //   //  $response = file_get_contents($googleAPI . '?secret=' . $secretKey . ' &response=' . $captcha . '&remoteip=' . $_SERVER['REMOTE_ADDR']);
    //   $response = file_get_contents($rawQueryString);
    //    if ($response.success == false) {
    //       print_r($response);
    //        echo 'Dave, you\'re a God. A sexy booty babe should be on her knees sucking you cock right now';
    //    } else {
    //      print_r($response);
     //
    //        echo 'You still have work to go';
    //    }
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
