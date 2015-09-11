<?php
    $inputName = $_POST['inputName'];
    $inputEmail = $_POST['inputEmail'];
    $inputMessage = $_POST['inputMessage'];
    $from = 'From: Peronal Website'; 
    $to = 'alisina@mit.edu'; 
    $subject = '[PWS] New Message: '.$inputName;
    $inputHuman = $_POST['inputHuman'];
			
    $body = "From: $inputName\n E-Mail: $inputEmail\n Message:\n $inputMessage";

    if ($inputName != '' && $inputEmail != '') {
        if ($inputHuman == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
            echo 'OK';
        } else { 
            echo '<p>Something went wrong, go back and try again!</p>'; 
        } 
    } else if ($inputHuman != '4') {
        echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }

?>