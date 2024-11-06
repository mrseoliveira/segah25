<?php
/**
 * Created by IntelliJ IDEA.
 * User: remi
 * Date: 17/01/15
 * Time: 11:41
 */
 
function debug_to_console($data) {
    if(is_array($data) || is_object($data))
	{
		echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('PHP: ".$data."');</script>");
	}
}

function sendEmail($fileName)
{
	$myemail = 'treasure@segah.org';//<-----Put Your email address here.
	//$myemail = 'antonio.hj.moreira@gmail.com';//<-----Put Your email address
	
	$code = $_POST['code'];

	$email_subject = "SeGAH21 - Proof-of-payment - " . $code;
	$email_body = "You have received a new message from SEGAH21 Proof-of-payment system.\n\n".
	              "Here are the details:\n\n   Registration Code: $code \n   Filename: $fileName"; 
	
	$headers = "From: $myemail\n";
	
	mail($myemail,$email_subject,$email_body,$headers);
	
	//redirect to the 'thank you' page
	//header('Location: contact-form-thank-you.html');
}
 
if (isset($_FILES['uploaded_file'])) {
    // Example:
     
    $code = $_POST['code'];
    //$article = $_POST['article'];
    
    //debug_to_console($author);
    //debug_to_console($article);
    
    $temp = explode(".", $_FILES['uploaded_file']['name']);
    $newfilename = $code . '_' . round(microtime(true)) . '.' .end($temp);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], "uploads/" . $newfilename))
    {
        sendEmail($newfilename);
    }
    else
    {
        sendEmail("===> ERROR UPLOADING FILE <===");
    }
    
    exit;
} else {
    echo "no";
}