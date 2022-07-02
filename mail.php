<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "De:".$name."<".$email.">\r\n";

$recipient = "bryan.cellier.pro@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

include("includes/header.html");
echo'

<div class="mail__fond">
        <h1>Votre mail a bien été envoyé ✅</h1>
        <img src="assets/img/email-gabcafb1da_1280.png" alt="">
</div>

';
include("includes/footer.html");

?> 





    


