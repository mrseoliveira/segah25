<?php

/**
 * Connect to Database,
 * you may use your own connection system, this one is just for example purposes
 * you may also want to change your database credentials
 */
 
 
$mysqli = new mysqli( "localhost", "hawsompt", "2xYOrv3u84", "hawsompt_easypay_test" );
if ( $mysqli -> connect_errno ) {
    printf( "Connection failed: %s\n", $mysqli -> connect_error );
    exit();
}

/**
 * First, you need to save the values that are passed by GET on your database
 * @var int(9) ep_cin Your Client Identification Number
 * @var int(9) ep_user Your Client Username
 * @var varchar(50) ep_doc Unique Payment Number
 */
 
 $query = "INSERT INTO `easypay_notifications` ( `ep_cin`, `ep_user`, `ep_doc`)
          VALUES ('1', '2', '3');";
$mysqli -> query( $query );

 
$query = "INSERT INTO `easypay_notifications` ( `ep_cin`, `ep_user`, `ep_doc`)
          VALUES ('" . $_GET['ep_cin'] . "', '" . $_GET['ep_user'] . "', '" . $_GET['ep_doc'] . "');";
$mysqli -> query( $query );

/**
 * Second, you will request the payment info and update the details of the requested payment
 */
function PayInfo($ep_cin = null, $ep_user = null, $ep_doc = null, $s_code = null) {
    $base_link = 'https://www.easypay.pt/_s/api_easypay_03AG.php';
    global $params;

    $params = $base_link;
    $params .= '?ep_cin=' . $ep_user;
    $params .= '&ep_user='. $ep_cin;
    $params .= '&ep_doc=' . $ep_doc;
    $params .= '&s_code=' . $s_code;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt( $ch, CURLOPT_URL, $params );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
    $response = curl_exec($ch);
    $response=simplexml_load_string($response) or die("Error: Cannot create object");
    return $response;
}

$_code = 'your_s_code';
$info = PayInfo($_GET['ep_cin'], $_GET['ep_user'], $_GET['ep_doc'], $s_code);
if ( !$info ){
	$status 	= 'err';
	$message 	= 'Payment info fetch failed';
} else {
	
	$query = "UPDATE `easypay_notifications` SET
	            `ep_status` = '"        . $info['ep_status'] . "',
	            `ep_entity` = '"        . $info['ep_entity'] . "',
	            `ep_reference` = '"     . $info['ep_reference'] . "',
	            `ep_value` = '"         . $info['ep_value'] . "',
	            `ep_date` = '"          . $info['ep_date'] . "',
	            `ep_payment_type` = '"  . $info['ep_payment_type'] . "',
	            `ep_value_fixed` = '"   . $info['ep_value_fixed'] . "',
	            `ep_value_var` = '"     . $info['ep_value_var'] . "',
	            `ep_value_tax` = '"     . $info['ep_value_tax'] . "',
	            `ep_value_transf` = '"  . $info['ep_value_transf'] . "',
	            `ep_date_transf` = '"   . $info['ep_date_transf'] . "',
	            `t_key` = '"            . $info['t_key'] . "'
	          WHERE `ep_doc` = '" . $info['ep_doc'] . "';";
	
	if ( !$mysqli -> query( $query ) ){
		$status 	= 'err';
		$message 	= 'Update failed';
	} else {
		$status 	= 'ok';
		$message 	= 'Generated doc';
	}
}
$mysqli -> close();
header( 'Content-type: text/xml' );
?>
<?= '<?xml version="1.0" encoding="ISO-8859-1" ?>' ?>
<getautoMB_key>
  <ep_status><?= $status ?></ep_status>
  <ep_message><?= $message ?></ep_message>
  <ep_cin><?= $_GET['ep_cin'] ?></ep_cin>
  <ep_user><?= $_GET['ep_user'] ?></ep_user>
  <ep_doc><?= $_GET['ep_doc'] ?></ep_doc>
</getautoMB_key>