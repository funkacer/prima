<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require_once "./vendor/autoload.php";

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.seznam.cz';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cerny.home@seznam.cz';                     //SMTP username
    $mail->Password   = '*****';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('cerny.home@seznam.cz', 'Táta');
    $mail->addAddress('cerny.home@seznam.cz', 'Jirka');     //Add a recipient
    $mail->addAddress('parkanylka@gmail.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/Applications/MAMP/htdocs/jirka/2022-12-01/tmp/image.jpg', 'Obrázek.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ahoj z PHP!';
    
    /*
    $mail->Body    = 'Posílám maila z PHP.<br />
    <b>Už i česky a <u>s obrázkem</u>!</b></br />
    <div style = "width: 100px; background-color: aquamarine; border-radius: 15px; text-align: center; margin: 10px;">Papík</div>
    <p>Emoji: <span style="font-size: 48px">😂 🦄 💥 📤 📧</span></p>';
    */
    //$mail->Body = file_get_contents("test.html");

    $mail->msgHTML(file_get_contents('email.html'), __DIR__);
    //$mail->addAttachment('tmp/image.png');
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->CharSet = 'UTF-8';

    /*
    $baseImage = "./tmp/image.png";
    $img = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $baseImage)); $mail->AddAttachement($img, "Filename.png");
    */

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
    
</body>
</html>