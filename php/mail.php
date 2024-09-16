<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if(isset($_POST["email"])){
    require '../vendor/autoload.php';
    require 'config.php';

    if(strcmp($_POST["form"],"contact-english") == 0){
        $msj = "<b>Name: </b>".$_POST["name"]."<br>";
        $msj .= "<b>Email: </b>".$_POST["email"]."<br>";
        $msj .= "<b>Phone: </b>".$_POST["tel"]."<br>";
        $msj .= "<b>Message: </b>".$_POST["message"]."<br><br>";

        $text = "Name: ".$_POST["name"]."\n";
        $text .= "Email: ".$_POST["email"]."\n";
        $text .= "Phone: ".$_POST["tel"]."\n";
        $text .= "Message: ".$_POST["message"]."\n\n";

        $subject = "Contact Form - marketing-standard.com";
        $link = "english";

    }else if(strcmp($_POST["form"],"contact-spanish") == 0){
        $msj = "<b>Nombre: </b>".$_POST["name"]."<br>";
        $msj .= "<b>Correo electrónico: </b>".$_POST["email"]."<br>";
        $msj .= "<b>Teléfono: </b>".$_POST["tel"]."<br>";
        $msj .= "<b>Mensaje: </b>".$_POST["message"]."<br><br>";

        $text = "Nombre: ".$_POST["name"]."\n";
        $text .= "Correo electrónico: ".$_POST["email"]."\n";
        $text .= "Teléfono: ".$_POST["tel"]."\n";
        $text .= "Mensaje: ".$_POST["message"]."\n\n";

        $subject = "Formulario de Contacto - marketing-standard.com";
        $link = "spanish";

    }else if(strcmp($_POST["form"],"request-spanish") == 0){
        $msj = "<b>Tipo de Solicitud: </b>".$_POST["tipodesolicitud"]."<br>";
        $msj .= "<b>Nombre: </b>".$_POST["solicitante"]."<br>";
        $msj .= "<b>Empresa: </b>".$_POST["empresa"]."<br>";
        $msj .= "<b>Teléfono: </b>".$_POST["txtTelefonoSolicitud"]."<br>";
        $msj .= "<b>Correo electrónico: </b>".$_POST["txtCorreoSolicitud"]."<br><br>";

        $text = "Tipo de Solicitud: ".$_POST["tipodesolicitud"]."\n";
        $text .= "Nombre: ".$_POST["solicitante"]."\n";
        $text .= "Empresa: ".$_POST["empresa"]."\n";
        $text .= "Teléfono: ".$_POST["txtTelefonoSolicitud"]."\n";
        $text .= "Correo electrónico: ".$_POST["txtCorreoSolicitud"]."\n\n";

        $subject = "Solicitud de requerimiento - marketing-standard.com";
        $link = "spanish";

    }else if(strcmp($_POST["form"],"request-english") == 0){
        $msj = "<b>Request Type: </b>".$_POST["tipodesolicitud"]."<br>";
        $msj .= "<b>Name: </b>".$_POST["solicitante"]."<br>";
        $msj .= "<b>Company: </b>".$_POST["empresa"]."<br>";
        $msj .= "<b>Phone: </b>".$_POST["txtTelefonoSolicitud"]."<br>";
        $msj .= "<b>Email: </b>".$_POST["txtCorreoSolicitud"]."<br><br>";

        $text = "Request Type: ".$_POST["tipodesolicitud"]."\n";
        $text .= "Name: ".$_POST["solicitante"]."\n";
        $text .= "Company: ".$_POST["empresa"]."\n";
        $text .= "Phone: ".$_POST["txtTelefonoSolicitud"]."\n";
        $text .= "Email: ".$_POST["txtCorreoSolicitud"]."\n\n";

        $subject = "Info Request - marketing-standard.com";
        $link = "english";

    }else if(strcmp($_POST["form"],"recommend-english") == 0){
        $msj = "<b>Name: </b>".$_POST["txtNombreSolicitud"]."<br>";
        $msj .= "<b>Email: </b>".$_POST["txtEmailSolicitud"]."<br>";
        $msj .= "<b>Name of colleague: </b>".$_POST["txtNombreSolicitud"]."<br>";
        $msj .= "<b>Email of colleague: </b>".$_POST["txtEmailAmigoSolicitud"]."<br><br>";

        $text = "Name: ".$_POST["txtNombreSolicitud"]."\n";
        $text .= "Email: ".$_POST["txtEmailSolicitud"]."\n";
        $text .= "Name of colleague: ".$_POST["txtNombreSolicitud"]."\n";
        $text .= "Email of colleague: ".$_POST["txtEmailAmigoSolicitud"]."\n\n";

        $subject = "Recommend us - marketing-standard.com";
        $link = "english";

    }else if(strcmp($_POST["form"],"recommend-spanish") == 0){
        $msj = "<b>Nombre: </b>".$_POST["txtNombreSolicitud"]."<br>";
        $msj .= "<b>Correo: </b>".$_POST["txtEmailSolicitud"]."<br>";
        $msj .= "<b>Nombre del colega: </b>".$_POST["txtNombreSolicitud"]."<br>";
        $msj .= "<b>Correo del colega: </b>".$_POST["txtEmailAmigoSolicitud"]."<br><br>";

        $text = "Nombre: ".$_POST["txtNombreSolicitud"]."\n";
        $text .= "Correo: ".$_POST["txtEmailSolicitud"]."\n";
        $text .= "Nombre del colega: ".$_POST["txtNombreSolicitud"]."\n";
        $text .= "Correo del colega: ".$_POST["txtEmailAmigoSolicitud"]."\n\n";

        $subject = "Recomiendanos - marketing-standard.com";
        $link = "spanish";

    }else if(strcmp($_POST["form"],"contactus-english") == 0){
        $msj = "<b>Name: </b>".$_POST["solicitante"]."<br>";
        $msj .= "<b>Company: </b>".$_POST["empresa"]."<br>";
        $msj .= "<b>Phone: </b>".$_POST["txtTelefonoSolicitud"]."<br>";
        $msj .= "<b>Email: </b>".$_POST["txtCorreoSolicitud"]."<br>";
        $msj .= "<b>Message: </b>".$_POST["message"]."<br><br>";

        $text = "Name: ".$_POST["solicitante"]."\n";
        $text = "Company: ".$_POST["empresa"]."\n";
        $text .= "Phone: ".$_POST["txtTelefonoSolicitud"]."\n";
        $text .= "Email: ".$_POST["txtCorreoSolicitud"]."\n";
        $text .= "Message: ".$_POST["message"]."\n\n";

        $subject = "Contact Form - marketing-standard.com";
        $link = "english";

    }else if(strcmp($_POST["form"],"contactus-spanish") == 0){
        $msj = "<b>Nombre: </b>".$_POST["solicitante"]."<br>";
        $msj .= "<b>Compañía: </b>".$_POST["empresa"]."<br>";
        $msj .= "<b>Teléfono: </b>".$_POST["txtTelefonoSolicitud"]."<br>";
        $msj .= "<b>Correo: </b>".$_POST["txtCorreoSolicitud"]."<br>";
        $msj .= "<b>Mensaje: </b>".$_POST["message"]."<br><br>";

        $text = "Nombre: ".$_POST["solicitante"]."\n";
        $text = "Compañía: ".$_POST["empresa"]."\n";
        $text .= "Teléfono: ".$_POST["txtTelefonoSolicitud"]."\n";
        $text .= "Correo: ".$_POST["txtCorreoSolicitud"]."\n";
        $text .= "Mensaje: ".$_POST["message"]."\n\n";

        $subject = "Contact Form - marketing-standard.com";
        $link = "spanish";
    }

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // SMTP::DEBUG_OFF = off (for production use)
    // SMTP::DEBUG_CLIENT = client messages
    // SMTP::DEBUG_SERVER = client and server messages
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';
    $mail->CharSet = 'UTF-8';
    // use
    // $mail->Host = gethostbyname('smtp.gmail.com');
    // if your network does not support SMTP over IPv6
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
    //Set the encryption mechanism to use - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = USERNAME_EMAIL;
    //Password to use for SMTP authentication
    $mail->Password = PASSWORD_EMAIL;
    //Set who the message is to be sent from
    $mail->setFrom(USERNAME_EMAIL, 'Marketing-Standard.com');
    //Set an alternative reply-to address
    //$mail->addReplyTo();
    //Set who the message is to be sent to
    $mail->addAddress(DESTINATION_EMAIL, 'marketing-standard.com');
    //Set the subject line
    $mail->Subject = $subject;
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($msj);
    //Replace the plain text body with one created manually
    $mail->AltBody = $text;
    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: '. $mail->ErrorInfo;
        header("Location: ../forms-non-active.html");
    } else {
        echo '<br><br>Message sent!';

        if(strcmp($link,"english") == 0){
            header("Location: ../form-sent.html");
        }else {
            header("Location: ../form-enviado.html");
        }

        //Section 2: IMAP
        //Uncomment these to save your message in the 'Sent Mail' folder.
        #if (save_mail($mail)) {
        #    echo "Message saved!";
        #}
    }
}

?>