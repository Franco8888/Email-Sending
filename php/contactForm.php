<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $service = $_POST['service'];

    $mailTo = "info@sleekwebdesign.org";
    $headers = array("From: ".$mailFrom,
    "Reply-To: replyto@example.com",
    "X-Mailer: PHP/" . PHP_VERSION
    );
    $headers = implode("\r\n", $headers);
    $message = "You have received an e-mail from ".$name.".\n\nService requested: ".$service.".\n\n".$message;

    if( mail($mailTo, $subject, $message, $headers) ) {
        echo '<p>Your message has been sent!</p>';
//        header('Location: EmailSending.php?mailsend');
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
    
    
}

