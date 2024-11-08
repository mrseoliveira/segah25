<?php
require 'ConfEditionVariables.php';
?>

<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
<h2><span class="card-title cinza-text">Registration procedure</span></h2>

<p class="negrito"><!--?php echo htmlspecialchars($thankyou); ?--></p>

<p>Thank you for registering for SeGAH <?php echo $confYear; ?>!</p>
<?php
$values = unserialize(base64_decode($_GET['h']));
?>

<p>Your registration number is <b><?=$values['id']?></b><br><br>
Please click the button bellow to complete your payment.&nbsp;</p>

<br>
<button class="btn btn_callToAction waves-effect waves-light" id="eCF_submit" onclick="location.href='<?=$values['url']?>'" type="submit" name="action">PAY WITH CREDIT CARD
                    							                            <i class="material-icons right"></i>
                    							                      </button>
<br><br><br>
<p><b>IMPORTANT:</b> Photo ID will be required to pick up your registration packet.</p>
</div>
</div>
</div>


</div>
<!--fecha linha fees--></div>
<!--fecha container--></main>
</div>


<div id="footer"></div>

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
</body>
</html>