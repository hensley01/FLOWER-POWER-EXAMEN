<?php

if (isset($_POST['submit'])) {
    $name = $_POST['naam'];
    $subject = $_POST['onderwerp'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hensleyhubert084@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Je hebt een e-mail van ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.php?mailsend");
}

?>