<?php 
    if(isset($_POST['submit'])){
        $userName=$_POST['name'];
        $email=$_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST ['message'];
        $message = wordwrap($message, 70, "\r\n");
        $mailTo = "musea@musea.pl";
        $headers = "From: musea@musea.pl\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();
        $headers .= "X-Priority: 1\n"; // Urgent message!
        $headers .= "Return-Path: musea@musea.pl\n"; // Return path for errors
        $headers .= "MIME-Version: 1.0\r\n";

        $txt = "Masz nową wiadomość od ".$userName.".\n\n".$message.".\n\n Odpowiedz wysyłając wiadomość na: ".$email;

        mb_internal_encoding('UTF-8');
        $encoded_subject = mb_encode_mimeheader($messageSubject, 'UTF-8', 'B', "\r\n", strlen('Subject: '));

        mail($mailTo, $encoded_subject, $txt, $headers);
    }
?>