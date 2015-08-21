<?php
    $inputName = $_POST['inputName'];
    $inputEmail = $_POST['inputEmail'];
    $inputMessage = $_POST['inputMessage'];
    $from = 'From: Peronal Website'; 
    $to = 'contactsina@mit.edu'; 
    $subject = '[PWS] New Message';
    $inputHuman = $_POST['inputHuman'];
			
    $body = "From: $inputName\n E-Mail: $inputEmail\n Message:\n $inputMessage";
				
if ($_POST['submit']) {
    if ($inputName != '' && $inputEmail != '') {
        if ($inputHuman == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	} else if ($_POST['submit'] && $inputHuman != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>