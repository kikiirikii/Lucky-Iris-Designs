<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $POST['message'];

    $mailTo = "k.moore2242@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend")

}
?>