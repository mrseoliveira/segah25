<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'ConfEditionVariables.php';

if (!function_exists('getallheaders')) 
{ 
    function getallheaders() 
    { 
           $headers = []; 
       foreach ($_SERVER as $name => $value) 
       { 
           if (substr($name, 0, 5) == 'HTTP_') 
           { 
               $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value; 
           } 
       } 
       return $headers; 
    } 
} 

$headers = getallheaders();
$payload = @file_get_contents("php://input");
$payload = json_decode($payload,true);


if ($payload['status']=="failed"){
    sendEmailNOTOK($payload['key'],$payload['id']);
}
else{
    sendEmailOK($payload['key'],$payload['id']);
}



function sendTreasureEmail($email, $recipient_name, $subject, $message='') {
	require '../../PHPMailer-master/src/PHPMailer.php';
	require '../../PHPMailer-master/src/SMTP.php';

	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		$mail->Host = 'smtp.segah.org';
		$mail->SMTPAuth = true;
		$mail->Username = 'treasure@segah.org'; // Your email address
		$mail->Password = '4dxyot9kci5w'; //email box password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
		$mail->Port = 465;                             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('treasure@segah.org', 'SeGAH Treasure');
		$mail->addAddress($email, $recipient_name);     //Add a recipient
		$mail->addReplyTo('treasure@segah.org', 'SeGAH Treasure');
		$mail->addBCC("treasure@segah.org", "SeGAH Treasure");
		
		
		//Content
		$mail->isHTML(false);                                  //Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body = $message;
		//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}


function sendEmailNOTOK($uniqueKey,$id)
{
  require 'ConfEditionVariables.php';
	
  $myemail = 'treasure@segah.org';//<-----Put Your email address here.

   $conn = new mysqli($servername, $username, $password, $dbname);
   $r = $conn->query("select name,email from " . $tableName . " where easypay_ref='$id'");
   $info = mysqli_fetch_assoc($r);

    $email_subject = $confAcronym . " - Payment Confirmation Failed - " . $uniqueKey;    
    
    $email_body = "Dear " . $info['name'] . ", \n \n" .
                  "Unfortunately, it appears that there was an issue with processing your registration payment. \n \n" .
                  "To ensure your participation in the conference, we kindly ask you to perform the registration process again. Please verify that all information related to your credit card is correct and up to date. If possible, you may also attempt to use a different credit card to complete the registration.\n \n" .
				  "Should you encounter any further difficulties or if your payment continues to be unsuccessful, please do not hesitate to contact our treasure department directly at treasure@segah.org for assistance.\n \n" .
				  "We apologize for any inconvenience this may have caused and thank you for your understanding and prompt attention to this matter. We are looking forward to your participation in SeGAH 2025 and are here to assist you in completing your registration successfully.\n \n" .
				  "Thank you for your interest in SeGAH 2025, and we appreciate your prompt action to rectify this issue.\n \n" .
				  "Best regards, \n \n" .
				  "SeGAH " . $confYear . " Treasure\n" .
				  "www.segah.org \n" .
				  "Email: treasure@segah.org";
    
    sendTreasureEmail($info['email'], $info['name'], $email_subject, $email_body);
    
    //redirect to the 'thank you' page
    //header('Location: contact-form-thank-you.html');
}

function sendEmailOK($uniqueKey,$id)
{
	require 'ConfEditionVariables.php';
	
    $myemail = 'treasure@segah.org';//<-----Put Your email address here.

   $conn = new mysqli($servername, $username, $password, $dbname);
   $conn->query("update " . $tableName . " set pay_status='paid' where easypay_ref='$id'");

   $r = $conn->query("select name, email from " . $tableName . " where easypay_ref='$id'");
   $info = mysqli_fetch_assoc($r);

    $email_subject = $confAcronym . " - Payment Confirmation - " . $uniqueKey;
    
    
    $email_body = "Dear " . $info['name'] . ", \n \n" .
                  "We are pleased to inform you that your registration payment for SeGAH 2025 has been successfully received, and your registration process is now complete. \n \n" .
                  "We are delighted to have you join us for SeGAH 2025 and look forward to your participation. The conference promises to be an engaging and insightful event, offering a rich program of presentations, workshops, and networking opportunities.\n \n" .
				  "Should you require any further assistance or have any questions as you prepare for the conference, please feel free to contact us at secretariat@segah.org.\n \n" .
				  "Best regards, \n \n" .
				  "SeGAH " . $confYear . " Treasure\n" .
				  "www.segah.org \n" .
				  "Email: treasure@segah.org";
    
    sendTreasureEmail($info['email'], $info['name'], $email_subject, $email_body);
    
    //redirect to the 'thank you' page
    //header('Location: contact-form-thank-you.html');
}
?>