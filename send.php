<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gaurav.s.driveitdigital@gmail.com';                     //SMTP username
    $mail->Password   = 'wumrqvhasiyhglyt';                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('admin@gmail.com');
    $mail->addAddress('grvsrma0@gmail.com', 'Gaurav Sharma');     //Add a recipient
    $mail->addReplyTo('admin@gmail.com', 'Information');
    $mail->addCC('gaurav.s.driveitdigital@gmail.com');
    // $mail->addBCC('bcc@example.com');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form Inquiry';
    $mail->Body    = '<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Full Name </th>
      <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["f_name"].'</td>
    </tr>
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Email Address </th>
      <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["email"].'</td>
    </tr> 
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Mobile Number</th>
      <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["mobile_number"].'</td>
    </tr>
 
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Country  Name </th>
      <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["country_name"].'</td>
    </tr>
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Messages </th>
      <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["message"].'</td>
    </tr>
  </table>';    

    if ($mail->send()) {
        echo 'Mail has been sent';
       
    }
    else{
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }


?>