<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
    $mailFrom = $_POST['emailAddress'];
    $subject = $_POST['subjectLine'];
    $message = $_POST['message'];
 
    if (empty($mailFrom)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }

    if (empty($subject)) {
        $errors[] = 'Subject line is empty';
    }
 
    if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    if (empty($errors)) {
        $mailTo = 'amanda@mangiarelli.net';
        $headers = "From: " .$mailFrom;
        $txt = "New Message: " .$message;

        if (mail($mailTo, $subject, $txt, $headers)) {
            header('Location: thankyou.php');
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
        }
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
}

?>