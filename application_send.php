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
   $mail->SMTPAuth   =  true;                                   //Enable SMTP authentication
   $mail->Username   = 'drnk.cse@gmail.com';                     //SMTP username
   $mail->Password   = 'nhbutjnxgkweumsk';                               //SMTP password
   $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
   $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   //Recipients
   $mail->setFrom('admin@gmail.com');
   $mail->addAddress('drnk.cse@gmail.com', 'Contact Form Inquiry');     //Add a recipient
   $mail->addReplyTo('admin@gmail.com', 'Information');
   for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
    $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
  }
   // $mail->addCC('gaurav.s.driveitdigital@gmail.com');
   // $mail->addBCC('bcc@example.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'SERF Global Application Forms';
    $mail->Body    = '<table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
    <tr>
    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> First Name </th>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["name_title"].' '.$_POST["f_name"].'</td>
  </tr>
   
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Email Address </th>
      <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["email"].'</td>
    </tr> 
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Name of collge/ university</th>
      <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["college_university"].'</td>
    </tr>
    <tr>
    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Permentent Address</th>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["p_address"].'</td>
  </tr>
  <tr>
  <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Communication Address</th>
  <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["c_address"].'</td>
</tr>
    <tr>
      <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Fellowship / National Awards </th>
      <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["f_n_award"].'</td>
    </tr>
    <tr>
    <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;"> Fellowship / Global Awards </th>
    <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">'.$_POST["f_g_award"].'</td>
  </tr>
   
  </table>';
    

    // if ($mail->send()) {
    //     echo 'Mail has been sent';     
    // }
    // else{
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
    if ($mail->send()) {
      // echo 'Mail has been sent';
      $newURL = 'application.php?status=true';
      header('Location: '.$newURL);
  }
  else{
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

?>