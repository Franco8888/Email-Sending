<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $service = $_POST['service'];

    $mailTo = "info@sleekwebdesign.org";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\nService requested: ".$service.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: EmailSending.html?mailsend");
}

?>