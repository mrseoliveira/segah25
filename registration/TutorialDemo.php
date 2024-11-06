<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

session_start();
$_SESSION['registration_option'] = 0;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

require 'ConfEditionVariables.php';

// Prices before and after early bird
$pay_value_1 = "1000";
$pay_value_2 = "1000";

$errorMessage = "";

$name = "";
$gender = "";
$email = "";
$phone = "";
$personal_id = "";
$address = "";
$city = "";
$zipcode = "";
$country = "";
$vat = "";
$ieee_number = "";
$pay_status = "unpaid";
$pay_value = "";
$easypay_ref = "";
$university = "";
$degree = "";
$student_number = "";
$institution = "";
$article_one = "";
$article_one_title = "";
$article_two = "";
$article_two_title = "";
$article_three = "";
$article_three_title = "";
$extra_one = "TutorialDemo";
$extra_two = "";
$extra_three = "";
$extra_four = "";
$extra_five = "";
$date_time = date('Y-m-d H:i:s');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (empty($_POST["str_name"]))
     $errorMessage = "1";
   else
     $name = test_input($_POST["str_name"]);
   
   if (empty($_POST["str_gender"]))
     $errorMessage = "2";
   else
     $gender = test_input($_POST["str_gender"]);

   if (empty($_POST["str_email"]))
     $errorMessage = "3";
   else
     $email = test_input($_POST["str_email"]);

   if (empty($_POST["str_phone"]))
     $errorMessage = "4";
   else
     $phone = test_input($_POST["str_phone"]);
     
   if (empty($_POST["str_address"]))
     $errorMessage = "5";
   else
     $address = test_input($_POST["str_address"]);

   if (empty($_POST["str_city"]))
     $errorMessage = "6";
   else
     $city = test_input($_POST["str_city"]);

   if (empty($_POST["str_zipcode"]))
     $errorMessage = "7";
   else
     $zipcode = test_input($_POST["str_zipcode"]);

   if (empty($_POST["str_country"]))
     $errorMessage = "8";
   else
     $country = test_input($_POST["str_country"]);
     
   if (empty($_POST["str_institution"]))
     $errorMessage = "9";
   else
     $institution = test_input($_POST["str_institution"]);
     
   if (empty($_POST["str_title"]))
     $errorMessage = "10";
   else
     $extra_two = test_input($_POST["str_title"]);
     
     
     
     
   //if (empty($_POST["str_article_one"]))
   //  $errorMessage = "10";
   //else
   //  $article_one = test_input($_POST["str_article_one"]);
     
   $personal_id   = test_input($_POST["str_personal_id"]);
   $vatnumber     = test_input($_POST["str_vatnumber"]);
   $article_two   = test_input($_POST["str_article_two"]);
   $article_three = test_input($_POST["str_article_three"]);
     
    $extra_five = "S18" . round(10*microtime(true)) . "ATUT";
    
    if(strtotime($date_time) < strtotime($date_price_limit)) {
        $pay_value = $pay_value_1;
    }
    else {
        $pay_value = $pay_value_2;
    }

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);		
	return 0;
   }

   // Add new record
$sql = "INSERT INTO " . $tableName . "(name,gender,email,phone,personal_id,address,city,zipcode,country,vat,ieee_number,pay_status,pay_value,easypay_ref,university,degree,student_number,institution,article_one,article_one_title,article_two,article_two_title,article_three,article_three_title,extra_one,extra_two,extra_three,extra_four,extra_five,date_time) VALUES('$name','$gender','$email','$phone','$personal_id','$address','$city','$zipcode','$country','$vatnumber','$ieee_number','$pay_status','$pay_value','$easypay_ref','$university','$degree','$student_number','$institution','$article_one','$article_one_title','$article_two','$article_two_title','$article_three','$article_three_title','$extra_one','$extra_two','$extra_three','$extra_four','$extra_five','$date_time')";


	if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    /*
    setcookie("cookie_name", $name, time() + 3600, "/");
    setcookie("cookie_email", $email, time() + 3600, "/");
    setcookie("cookie_datetime", $date_time, time() + 3600, "/");
    setcookie("cookie_country", $country, time() + 3600, "/");
    setcookie("cookie_city", $city, time() + 3600, "/");
    setcookie("cookie_address", $address, time() + 3600, "/");
    setcookie("cookie_type", $extra_one, time() + 3600, "/");   
    */
        
#        $lastInsertedID = mysqli_insert_id($conn);
        $payment = processPage($pay_value,$extra_five);
        $conn->query("update registo_segah20 set easypay_ref='$payment[id]' where extra_five='$extra_five'");
        sendEmail($extra_five,$pay_value,$payment['method']['url']);
        
        $hash = serialize(array("id"=>$extra_five,"url"=>$payment['method']['url']));


        //header('Location: contact-form-thank-you.php?h=' . base64_encode($hash));
		echo "<script>window.location.href='contact-form-thank-you.php?h=" . base64_encode($hash)."';</script>";
  } 
  else {
    echo "New record error";    
  }

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

function sendEmail($uniqueKey, $value,$url)
{
  $myemail = 'treasure@segah.org';//<-----Put Your email address here.
 # $myemail = 'bruno@codepixel.pt';//<-----Put Your email address here.
  
  $name = test_input($_POST['str_name']); 
  $email_address = test_input($_POST['str_email']); 
  $addr = test_input($_POST["str_address"]);
    $extra = $GLOBALS['extra_one'];
    $article1 = $GLOBALS['article_one'];
    $article2 = $GLOBALS['article_two'];
  $inst = test_input($_POST["str_institution"]);
    $ieee = test_input($_POST["str_ieeenumber"]); 
  $tlm = test_input($_POST["str_phone"]);

  require 'ConfEditionVariables.php';

  $email_subject = $confAcronym . " - Registration - " . $uniqueKey;			
  $email_alt_body = "Dear $name, \n \n" .
					"Thank you for registering for the SeGAH " . $confYear . " conference. This email serves as an acknowledgment of your registration submission. Please note that this email does not confirm the completion of your payment process, which may take some time to be fully processed. You will receive a separate notification once your payment has been successfully processed and your registration is confirmed. \n \n" .
					"Below are the details of your registration for your records: \n" .
					"Name: $name \n" .
					"Address: $addr \n" .
					"Institution: $inst \n" .
					"Value: $value " . " Euro \n" .
					"Registration Code: $uniqueKey \n" .
					"Registration Type: Tutorial or Demo \n \n" .
					"Should there be any discrepancies in the information above or if you have any further questions, please do not hesitate to contact us at secretariat@segah.org. \n \n" . 
					"We appreciate your interest in SeGAH " . $confYear . " and are looking forward to your participation. \n \n" .
					"Best regards, \n \n" .
					"SeGAH " . $confYear . " Treasure\n" .
					"www.segah.org \n" .
					"Email: treasure@segah.org";
     
  sendTreasureEmail($email_address, $name, $email_subject, $email_alt_body);
  
  //redirect to the 'thank you' page
  //header('Location: contact-form-thank-you.html');
}



function processPage($value,$trackingCode){

  $easypayAccount = "37ea84fb-3fbe-420e-bf16-cffa4f1bd179"; // prod
  $easypayAccountId = "f5220ac2-d320-4776-b4e0-1149d7651e4b"; // prod
  $easypayApiKey = "a271e043-a500-476a-9ad5-e6a87b5aa731"; // prod
  
  $easypay_api = "https://prod.easypay.pt/";
  
  # NEW EASYPAY API 2
  $body = [
      "key" => "$trackingCode",
      "method" => "cc",
      "type"  => "sale",
      "lang"  => "en",
      "value" => floatval($value),
      "currency"  => "EUR",
#             "expiration_time" =>"2018-12-31 12:00",
      "capture" => [
          "transaction_key" => "$trackingCode",
          "descriptive" => "$trackingCode",
          "capture_date" => date("Y-m-d"),
          "account" => [
              "id" => $easypayAccount,
          ]
      ]
  ];

  $headers = [
      "AccountId: $easypayAccountId",
      "ApiKey: $easypayApiKey",
      'Content-Type: application/json',
  ];

  $curlOpts = [
      #CURLOPT_URL => "https://api.prod.easypay.pt/2.0/single",
      CURLOPT_URL => "https://api.prod.easypay.pt/2.0/single",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST => 1,
      CURLOPT_TIMEOUT => 60,
      CURLOPT_POSTFIELDS => json_encode($body),
      CURLOPT_HTTPHEADER => $headers,
  ];

  $curl = curl_init();
  curl_setopt_array($curl, $curlOpts);
  $response_body = curl_exec($curl);
  curl_close($curl);
  $response = json_decode($response_body, true);
  if ($response['status']=="ok"){
      $ep_link = $response["method"]["url"];
      $extraPaymentInfo = "<a href='$ep_link' class='omw-payment-btn'><input name='go' class='omw-payment-btn' type='button' border=0 align='absmiddle' style='border:0;width:100%;line-height:50px' value='MAKE PAYMENT'></a>";
  }

  return $response;
}

?>


<!-- ####################################################################################################################################### -->



<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <title><?php echo $confYear; ?> IEEE SeGAH</title>
     <meta name="name" content="content" charset="utf-8">
     <link type="text/css" rel="stylesheet" href="<?php echo $css_materialize; ?>"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="<?php echo $css_segah; ?>"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   
	<style>
		.error {color: #FF0000;}
	</style>
   
   <body>
      <div id="header"></div>
      <div class="animsition">
					<main class="readable-background">


  <div class="container">
      <div class="row">
          <div class="col s12 m12 l12">
            <h2 class="registration_platform">SeGAH Online registration platform</h2>
            <p id="demo"></p>
      	  </div>
      </div>
  
  

  <div class="row">
        <div class="col s12 m12 l8">
                  <div class="card">
                    <div class="card-content cinza-text">
                              <span class="card-title cinza-text"><h2>Registration Info</h2></span>
                              
	                              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                             			<table>
		                                 <tbody>
		                                   <tr>
		                                     <td>Name<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_name" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>Gender<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input class="with-gap" name="str_gender" type="radio" id="male" value="male" checked />
		                                     	<label for="male">Male</label>   		                                     	
		                                        &nbsp
		                                        &nbsp
		                                        &nbsp
		                                     	<input class="with-gap" name="str_gender" type="radio" id="female" value="female"/>
		                                     	<label for="female">Female</label>                                  			                                     
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>E-mail<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_email" type="email" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>Phone<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_phone" type="number" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>Passport / National ID</td>
		                                     <td class="center">
		                                     	<input name="str_personal_id" type="text" class="validate">
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>Address<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_address" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>City<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_city" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>Zip Code<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_zipcode" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>Country<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_country" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>VAT Number</td>
		                                     <td class="center">
		                                     	<input name="str_vatnumber" type="text" class="validate">
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>Institution<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_institution" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td>Tutorial/Demo Title<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="str_title" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                                                                
		                                   <tr>
		                                     		                                     			                                     			                                     						                                		                                    		                                     
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td> 
			                             	
		                                     	  <button class="btn waves-effect waves-light" id="next_btn" onclick="funcProcess()" type="submit" name="action">Next
							    <i class="material-icons right"></i>
							  </button></td>
							
		                                   </tr>
		                                   
		                                 </tbody>
		                           	</table>
		                       </form>                                  			                                                          
                     </div>
               </div>
        </div>

 

	    </div><!--fecha linha fees-->
 

	</div><!--fecha container-->
	</main>
</div>
	<div id="footer"></div>
	
		
	
<!-- ####################################################################################################################################### -->
	
	
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
			<script type="text/javascript" src="<?php echo $js_materialize; ?>"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>

			
	<script>
		$(function(){
		  $("#header").load("header.html");
		  $("#footer").load("footer.html");
		});
	</script>

<script>
			$(document).ready(function() {

				$(".animsition").animsition({
				inClass: "fade-in-down-sm",
				outClass: "fade-out-down-sm"
			});
	
				$(".testingFade").hide().fadeIn(1000);
				$(".button-collapse").sideNav();

				$('.slider').slider({
					height: 270,
					indicators: true,
					interval: 6000
				});

			});
			</script>
	<script>
		$(document).ready(function() { $('select').material_select(); });
	</script>
	<script>
		
		function funcProcess() {
						
		
		}

	</script>
   </body>
</html>
