<?php
    //composer require phpmailer/phpmailer

    //https://github.com/PHPMailer/PHPMailer

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //ručně napíšu autoload (je i v prezentaci)
    require_once "./vendor/autoload.php";

    //napřed zpracujeme formulář
    if (array_key_exists("email-submit", $_POST)) {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        //tady je try výjímka - nelze vždy zaručit funkci mail serveru
        try {
            //Server settings
            //vyplní se podle hostingu!!!
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'primakurzy.cz.smtp.primawebhosting.cz';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'student@primakurzy.cz';                     //SMTP username
            $mail->Password   = 'kurzyjsouprima';                               //SMTP password
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        
            //Recipients
            //$mail->setFrom('from@example.com', 'Mailer');
            $mail->setFrom($_POST["odesilatel"]);
            //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            $mail->addAddress($_POST["adresat"]);
            /*
            $mail->addAddress('ellen@example.com');               //Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');
            */

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            $mail->addAttachment('./priloha.txt');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $_POST["predmet"];
            $mail->Body    = "<h1>Prima Kurzy</h1> <div>{$_POST["zprava"]}</div>";
            $mail->AltBody = $_POST["zprava"];;
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP mailer</title>
</head>
<body>
    <h1>PHP mailer</h1>

    <form action="" method="post">
        <label for="aaa">Odesilatel</label>
        <input type="text" name="odesilatel" id="aaa">
        <hr>
        <label for="bbb">Adresat</label>
        <input type="text" name="adresat" id="bbb">
        <hr>
        <label for="ccc">Predmet</label>
        <input type="text" name="predmet" id="ccc">
        <hr>
        <label for="ddd">Zprava</label>
        <textarea name="zprava" id="ddd" cols="30" rows="10"></textarea>
        <hr>
        <input type="submit" name="email-submit" value="Odeslat">
    </form>

    
</body>
</html>