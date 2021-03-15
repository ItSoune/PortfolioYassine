<?php
use PHPMailer\PHPMailer\PHPMailer;

    $messageenvoye = false;
    foreach($_POST as $k => $val){
		$$k=$val;
    }

    session_start();
   

    if(isset($captcha)) {
        if($captcha == $_SESSION['captcha']) {

            session_destroy();
            unset($_SESSION['captcha']);
            if( isset($_POST['name']) && isset($_POST['email']) && $_POST['email'] != '' ){
                if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                
                    $name  = $_POST['nom'];
                    $email = $_POST['email'];
                    $subject  = $_POST['sujet'];
                    $body  = $_POST['description'];
                
                    require_once "PHPMailer/PHPMailer.php";
                    require_once "PHPMailer/SMTP.php";
                    require_once "PHPMailer/Exception.php";

                    $mail = new PHPMailer();

                    //smtp settings
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = true;
                    $mail->Username = "bouchdiyassine@gmail.com";
                    $mail->Password = '382001Yassine@gmail';
                    $mail->Port = 465;
                    $mail->SMTPSecure = "ssl";
                    //email settings
                    $mail->isHTML(true);
                    $mail->setFrom($email, $name);
                    $mail->addAddress("bouchdiyassine@gmail.com");
                    $mail->Subject = ("$email ($subject)");
                    $mail->Body = $body;

                    if($mail->send()){
                        $status = "success";
                        $response = "Email is sent!";
                    }
                    else
                    {
                        $status = "failed";
                        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
                    }

                    exit(json_encode(array("status" => $status, "response" => $response)));
                }

            } 
        }
        else {
            $messageenvoye = captcha;    
        }
    }
   
    
    

?>
    







