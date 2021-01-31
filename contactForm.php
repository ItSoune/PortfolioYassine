<?php 
    $messageenvoye = false;
    if( isset($_POST['email']) && $_POST['email'] != '' ){
        if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        
        $utilisateur = $_POST['nom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $description = $_POST['description'];
    
        $monMail = "xevem64785@poetred.com";
        $body = "";
        $body.= "De : ".$utilisateur."\r\n";
        $body.= "Email : ".$email."\r\n";
        $body.= "Message : ".$description."\r\n";
    
        mail($monMail,$sujet,$body);
        $messageenvoye = true;
        }

    }

?>




