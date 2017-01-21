<?php
  if ($_POST)  { // isset($_POST['submit'])

    $responseArray = array();
    $responseCode; // 0 = failure, 1 = success
    $responseMessage;

    // basic email validation
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $responseCode = 0;
      $responseMessage = 'Please supply a valid email that you own';
      $responseArray[] = $responseCode;
      $responseArray[] = $responseMessage;
      echo json_encode($responseArray);
      exit;
    }

    // set up email
    $message='';
    $sendTo = "david@peakwebsites.ca";
    $sendFrom = htmlspecialchars($_POST['email']);
    $subject = $_POST['service_reference'];
    $redirect = $_POST['redirect_value'];
    $header = "From: " . $sendFrom . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    // ID for Gmail account filter
    $_POST['id'] = 'Peak Website Services';

    foreach ($_POST as $key=>$value) {
      // exclude captcha response
      if ($key != "g-recaptcha-response") {
        $message .= $key . ": " . htmlspecialchars($value) . "\r\n";
      }
    }

    // Send the email
    // The '@' surpresses errors.
    if (@mail($sendTo, $subject, $message, $header)) {
      // echo 'Thank you for getting in touch. We will respond shortly.';
      // header("Location: " . $redirect . "?return=thank_you");
      $responseCode = 1;
      $responseMessage = 'Thank you for getting in touch. We will respond shortly.';
      $responseArray[] = $responseCode;
      $responseArray[] = $responseMessage;
      echo json_encode($responseArray);
      exit;

    } else {
      // echo 'An unknown error occured and the system was unable to complete your request. Please try again in a while.';
      // return false;
      $responseCode = 0;
      $responseMessage = 'An unknown error occured and the system was unable to complete your request. Please try again in a while.';
      $responseArray[] = $responseCode;
      $responseArray[] = $responseMessage;
      echo json_encode($responseArray);
      exit;
    }

  } else {
     //  header("Location: " . $redirect . "?return=error");
    //  echo 'No form data submitted.';
     $responseCode = 0;
     $responseMessage = 'A system error occured and we could not process your action. We\'re sorry for the inconvenience. Please try to contact us again later.';
     $responseArray[] = $responseCode;
     $responseArray[] = $responseMessage;
     echo json_encode($responseArray);
     exit;
  }
?>
