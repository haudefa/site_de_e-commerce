<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    $mailTo = "sledgelozon@gmail.com";
    $headers = "From: " .$mailFrom;
    $txt = "You have received an e-mail from " .$name.".\n\n" .$message;

    mail($mailTo, $sujet, $txt, $headers);
    header("location:Contact.php?mailsend");
}

