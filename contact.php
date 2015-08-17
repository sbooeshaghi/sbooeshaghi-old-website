<?php
        $name = $_PAST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Contact Form';
        $to = 'contactsina@mit.edu';
        $subject = '[PWS] New messaage: $name';
        $body = "From: $name\n E-mail: $email\n Message:\n $message";


    if (isset($_POST["submit"])) {

        
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }

        // Check if email valid
        if (!$_POST['email'] || !filter_var($POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        
        // Check if human
        if ($human !== 0) {
            $errHuman = 'Incorrect, please re-try';
        }
    


// If no errors, submit form
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank you! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Try again later!</div>';
    }

}

    }
?>