<?php
	require 'ConfEditionVariables.php';

    session_start();
    $_SESSION['registration_option'] = 0;
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    $name = "";
    $email = "";
    $article_one = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
       if (empty($_POST["str_name"]))
         $errorMessage = "1";
       else
         $name = test_input($_POST["str_name"]);
    
       if (empty($_POST["str_email"]))
         $errorMessage = "3";
       else
         $email = test_input($_POST["str_email"]);
         
        $article_one = test_input($_POST["str_article_one"]);
        $article_number = $article_one;
    
        //header('Location: contact-form-thank-you.html');

		if($article_one == "37")    $article_one = "3D Body Image Perception and Pain Visualization Tool for Upper Limb Amputees";
		if($article_one == "26")    $article_one = "A Dialogue Intervention Simulation Framework to Facilitate Psychotherapy training";
		if($article_one == "81")    $article_one = "A Game Based Intervention to Promote HPV Vaccination among Adolescents";
		if($article_one == "15")    $article_one = "A Joint International (Colombia-Canada) Graduate Course on Simulation, VR/AR, and Serious Games";
		if($article_one == "20")    $article_one = "A Mixed Reality Direct Ophthalmoscopy Simulator";
		if($article_one == "74")    $article_one = "A new approach of developing games for motor rehabilitation using Microsoft Kinect";
		if($article_one == "31")    $article_one = "A Picture-based Serious Game to Train Non-medical People for Emergency Situations";
		if($article_one == "6")    $article_one = "A Serious Game for Measuring and Displaying Mathematics Competencies of Disabled Students";
		if($article_one == "14")    $article_one = "A Smart Chair Physiotherapy Exergame for Fall Prevention";
		if($article_one == "54")    $article_one = "Adaptive Design and Implementation Of Six-Legged Hexapod in accordance to the field of application";
		if($article_one == "67")    $article_one = "An Empathic Virtual Caregiver for assistance in exer-game-based rehabilitation therapies";
		if($article_one == "16")    $article_one = "An Interactive Game to aid with Anxiety Management";
		if($article_one == "43")    $article_one = "Analisys with a serious game for teaching ICD-10 diagnosis coding to medicine students";
		if($article_one == "42")    $article_one = "Analysis of Inverse Kinematics Solutions for Full-Body Reconstruction in Virtual Reality";
		if($article_one == "75")    $article_one = "Analyzing Player Engagement for Biofeedback Games";
		if($article_one == "83")    $article_one = "Application of Simple Game to Rapid Measurement of Cognitive Function in Maternal Brain";
		if($article_one == "66")    $article_one = "Approaches for increasing patient's engagement and motivation in exer-games-based autonomous telerehabilitation";
		if($article_one == "3")    $article_one = "Arm Exercises for Individuals with Spinal Cord Injury: Exergaming versus Arm Cranking";
		if($article_one == "7")    $article_one = "Assigning Creative Commons Licenses to Accompany The Accessibility";
		if($article_one == "35")    $article_one = "Automated Language Deficit Diagnostics with the Token Test App: Test-Retest Reliability and Practice Effects";
		if($article_one == "19")    $article_one = "Biofabrication VR- The Hospital of the Future: A Serious Game for Patient Education";
		if($article_one == "60")    $article_one = "Body Mass Index Awareness using Game-based Learning in Malaysia: Game Design and Initial User Experiences";
		if($article_one == "79")    $article_one = "BraPolar: an M-Health Application for Remote Monitoring of People with Bipolar Disorder";
		if($article_one == "47")    $article_one = "CalorieKiller: Burning Calories using Mobile Exergame with Wearables";
		if($article_one == "34")    $article_one = "Care 4 Supply";
		if($article_one == "36")    $article_one = "Clothing-integrated RFID-based Interface for Human-Technology Interaction";
		if($article_one == "2")    $article_one = "Competitive Reinforcement: A Rewarding Framework for Multi-Player Serious Games";
		if($article_one == "5")    $article_one = "Design and evaluation of computerized cognitive games to improve cognitive performance in multiple sclerosis: A correlation and validation study";
		if($article_one == "55")    $article_one = "Design Of Cross Platform Augmented Reality Based Virtual Educational Lab Using Unity";
		if($article_one == "27")    $article_one = "Design of the Dance Exercise Game for Order Adults with Wearable Motion Capture Sensing Technology";
		if($article_one == "80")    $article_one = "Design process of an Alternate Reality Game (ARG) as a strategy to foster social support and well-being of mothers of children with ASD";
		if($article_one == "25")    $article_one = "Developing a Patient-Centered Virtual Reality Healthcare System To Prevent the Onset of Delirium in ICU Patients";
		if($article_one == "11")    $article_one = "Development of a Model for Attenuating Radiation in VR for Nuclear Safety Awareness";
		if($article_one == "12")    $article_one = "Development of a Model of Radioactive Plume Path Program for Accident Scenario Response Readiness";
		if($article_one == "82")    $article_one = "Diagnosis of children’s vision problems through video games";
		if($article_one == "59")    $article_one = "Digital Game Devices with Physiological Measurement: Gaming as a Health Management and Measurement Tool";
		if($article_one == "56")    $article_one = "Effects of Angry Birds-like Live Streaming on Working Memory";
		if($article_one == "4")    $article_one = "Engagement Levers for Therapists and Patients in a Context of Cognitive Rehabilitation of Executive Functions With the Serious Game S’TIM";
		if($article_one == "61")    $article_one = "Evaluating A VR-based Box and Blocks Test for Automatic Assessment of Manual Dexterity: A Preliminary Study in Parkinson’s Disease";
		if($article_one == "33")    $article_one = "Exercise Intensity in Exergaming: An approach by GameFit.";
		if($article_one == "18")    $article_one = "Expirience with Mediktor (artifical intelligent) in patient atended in an emergency department in Hospital Universitario San Ignacio in Bogotá (Colombia)";
		if($article_one == "53")    $article_one = "Fostering Social Media Literacy through a Participatory Mixed-Methods Approach: Discussion of Workshop Findings";
		if($article_one == "73")    $article_one = "GameAAL – Gamification applied to ambient assisted living";
		if($article_one == "58")    $article_one = "Game-Design Elements for Evidence-Based Clinical Procedure Libraries";
		if($article_one == "78")    $article_one = "Guidoo – Promoting engagement in health habits through a mobile app";
		if($article_one == "24")    $article_one = "Heart rate and Breathing Variability for Virtual Reality Game Play";
		if($article_one == "62")    $article_one = "Human Voice Emotion Identification Using Prosodic And Spectral Feature Extraction Based On Deep Neural Networks";
		if($article_one == "46")    $article_one = "Immersive Hand Gesture for Virtual Museum using Leap Motion Sensor Based on K-Nearest Neighbor (KNN)";
		if($article_one == "45")    $article_one = "Immersive Interaction on Cultural Heritage Game Controller Design Using Finite-state Transducer";
		if($article_one == "64")    $article_one = "Increasing Working at Heights Safety Awareness with a Virtual Reality Serious Game";
		if($article_one == "30")    $article_one = "Interactive Modular Tile Physiotherapy Exergame Intervention for Fall Prevention in Older Adults";
		if($article_one == "22")    $article_one = "Interactive Rhythm Making System by using Tablet and Large Scale Display";
		if($article_one == "70")    $article_one = "iSVC – Digital Platform for Detection and Prevention of Computer Vision Syndrome";
		if($article_one == "63")    $article_one = "Learning through improvisational play: design strategies for serious games";
		if($article_one == "40")    $article_one = "Modelling and Forecasting the Dengue Hemorrhagic Fever Cases Number Using Hybrid Fuzzy-ARIMA";
		if($article_one == "49")    $article_one = "Moving Beyond Branching: Evaluating Educational Impact of Procedurally-Generated Virtual Patients";
		if($article_one == "9")    $article_one = "MyoBeatz: Using music and rhythm to improve prosthetic control in a mobile game for health";
		if($article_one == "50")    $article_one = "Online Social Network Campaign Game Using Finite State Machine Model";
		if($article_one == "1")    $article_one = "Optimization of Physician Task Scheduling Under Stochastic Processing Times";
		if($article_one == "41")    $article_one = "PDPuzzleTable: A Leap Motion Exergame for Dual-Tasking Rehabilitation in Parkinson’s Disease. Design and Study Protocol";
		if($article_one == "48")    $article_one = "Piloting Multimodal Learning Analytics using Mobile Mixed Reality in Health Education";
		if($article_one == "69")    $article_one = "Procedural constrained story generation based on Propp’s and Fabula models";
		if($article_one == "57")    $article_one = "Promoting emotional well-being withAngry Birds-like Gameplay on Pixel Image Levels";
		if($article_one == "21")    $article_one = "Prosthetic Rehabilitation Training in Virtual Reality";
		if($article_one == "76")    $article_one = "Real-time Motion Detection for Android Smartphones";
		if($article_one == "52")    $article_one = "Refresher training and Assessment tool for Anganwadi Workers";
		if($article_one == "39")    $article_one = "Refresher training and Assessment tool for Anganwadi Workers in India";
		if($article_one == "51")    $article_one = "Refresher training and Assessment tool for Anganwadi Workers in India";
		if($article_one == "8")    $article_one = "Reha@Stroke - A Mobile Application to Support People Suffering from a Stroke Through Their Rehabilitation";
		if($article_one == "85")    $article_one = "Scaling the assessment of emotion regulation effectiveness with a low-cost psychophysiological system";
		if($article_one == "13")    $article_one = "Scenario-based Serious Game to Teach about Healthcare";
		if($article_one == "71")    $article_one = "Serious games for ageing: a pilot interventional study in a cohort of heterogeneous cognitive impairment";
		if($article_one == "68")    $article_one = "Serious Games to Empower Emotional Change For Paediatric Cancer Patient: The state of the art.";
		if($article_one == "65")    $article_one = "Sleepy Style Music through Variational Autoencoder";
		if($article_one == "28")    $article_one = "Solitaire Fitness: Design of an asynchronous exergame for the elderly to enhance cognitive and physical ability";
		if($article_one == "17")    $article_one = "SPR1NG Controller: An Interface for Kinesthetic Spatial Manipulation";
		if($article_one == "84")    $article_one = "Synthetic infant head shapes with deformational plagiocephaly: concept and 3D model parameterization";
		if($article_one == "29")    $article_one = "The adoption of a serious game to foster interaction between the elderly and the youth";
		if($article_one == "32")    $article_one = "To Boldly Play Where No One Has Played Before: Learning Leadership Through Play";
		if($article_one == "44")    $article_one = "Towards A Deep History of Serious Games";
		if($article_one == "38")    $article_one = "Training Players to Analyze Age-Related Macular Degeneration Optical Coherence Tomography Scans using a Human Computation Game";
		if($article_one == "10")    $article_one = "Twelve Ways to Reach for a Star: Player Movement Strategies in a Whole-Body Exergame";
		if($article_one == "77")    $article_one = "Using Design-Based Research to Develop a Virtual Human Interface for Police Nystagmus Training";
		if($article_one == "23")    $article_one = "Virtual Reality Tool for Customizing User Placement in Cardiac Auscultation Training";
		if($article_one == "72")    $article_one = "Web-Based Wireless Monitoring System of Patient’s Vital Sign";


              
        $url = "https://ecopyright.ieee.org/ECTT/IntroPage.jsp"; // The POST URL
        
        // The POST Data
        $postdata  = "PubTitle=2020 IEEE 7th International Conference on Serious Games and Applications for Health (SeGAH)";
        $postdata .= "&ArtTitle=" . urlencode($article_one);
        $postdata .= "&AuthName=" . urlencode($name);
        $postdata .= "&ArtId=" . urlencode($article_number);
        $postdata .= "&ArtSource=57547";
        $postdata .= "&AuthEmail=" . urlencode($email);
        $postdata .= "&rtrnurl=0";
        
        $ch = curl_init($url);
        
        // Set the request type to POST
        curl_setopt($ch, CURLOPT_POST, true);
        // Pass the post parameters as a naked string
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

        // Perform the request, and save content to $result
        $result = curl_exec($ch);
        curl_close($ch);
    }
?>


<!-- ####################################################################################################################################### -->


<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <title><?php echo $confYear ?> IEEE SeGAH</title>
     <meta name="name" content="content" charset="utf-8">
     <link type="text/css" rel="stylesheet" href="<?php echo $css_materialize ?>"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="<?php echo $css_segah ?>"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   
	<style>
		.error {color: #FF0000;}
	</style>
   
   <body>
      <div id="header"></div>
      <div class="imagemPerth-10 valign-wrapper"></div>

  <main>
  <div class="container">
      <div class="row">
          <div class="col s12 m12 l12">
            <h2>SeGAH Online registration platform</h2>
            <p id="demo"></p>
      	  </div>
      </div>
  
  

  <div class="row">
        <div class="col s12 m12 l8">
                  <div class="card">
                    <div class="card-content cinza-text">
                              <span class="card-title cinza-text"><h2>Privacy Policy</h2></span>

We respect your privacy and recognize the trust you place in us. In this Privacy Policy, we explain who we are, for what purposes we may use your data, how we handle it, who we share it with, how long we keep it, and how to contact us and exercise our rights. Data will be treated by BARVITUR A. D. V. E. T. UNIPESSOAL LDA with an office in Largo dos Capuchinhos, 16 4750-128 Barcelos Portugal, registered with VAT 503099406. , herein after "We".<br>This company is responsible for the processing of personal data in compliance with the General Data Protection Regulation.<br><br> For questions related to the processing of your personal data you should contact us through the following email: treasure@segah.org<br><br> Why do we need your information? We handle your personal data for the purposes of customer management and marketing. The information that you provide us is intended only to provide you a better service more suited to your profile and needs. <br><br>As before-mentioned, and for the purposes of delivering orders and customer support contacts, we hereby inform you that your contact information and address will be transmitted to carriers and others subcontracted service providers to fulfill services contracted by our customers. We will send you information about products and services, these communications will be carried out only with your consent, provided at the time of registration. If you agree, you will receive marketing communications via email and SMS (when Phone number available). <br><br>Consent for processing personal data for the purposes can be revoked at any time. Your data will be kept until you wish to delete it.

                                			                                                          
                     </div>
               </div>
        </div>

          

	    </div><!--fecha linha fees-->
 

	</div><!--fecha container-->
	</main>

	<div id="footer"></div>
	
		
	
<!-- ####################################################################################################################################### -->
	
	
	
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $js_materialize ?>"></script>
	<script type="text/javascript" src="<?php echo $js_segah ?>"></script>
	<script>
		$(function(){
		  $("#header").load("header.html");
		  $("#footer").load("footer.html");
		});
	</script>
	<script>
		$(document).ready(function() { $('select').material_select(); });
	</script>
	<script>
		
		function funcProcess() {

		    var article_one = document.getElementById("artid").value;
		    
		    if(article_one == "37")    article_one = "3D Body Image Perception and Pain Visualization Tool for Upper Limb Amputees";
			if(article_one == "26")    article_one = "A Dialogue Intervention Simulation Framework to Facilitate Psychotherapy training";
			if(article_one == "81")    article_one = "A Game Based Intervention to Promote HPV Vaccination among Adolescents";
			if(article_one == "15")    article_one = "A Joint International (Colombia-Canada) Graduate Course on Simulation, VR/AR, and Serious Games";
			if(article_one == "20")    article_one = "A Mixed Reality Direct Ophthalmoscopy Simulator";
			if(article_one == "74")    article_one = "A new approach of developing games for motor rehabilitation using Microsoft Kinect";
			if(article_one == "31")    article_one = "A Picture-based Serious Game to Train Non-medical People for Emergency Situations";
			if(article_one == "6")    article_one = "A Serious Game for Measuring and Displaying Mathematics Competencies of Disabled Students";
			if(article_one == "14")    article_one = "A Smart Chair Physiotherapy Exergame for Fall Prevention";
			if(article_one == "54")    article_one = "Adaptive Design and Implementation Of Six-Legged Hexapod in accordance to the field of application";
			if(article_one == "67")    article_one = "An Empathic Virtual Caregiver for assistance in exer-game-based rehabilitation therapies";
			if(article_one == "16")    article_one = "An Interactive Game to aid with Anxiety Management";
			if(article_one == "43")    article_one = "Analisys with a serious game for teaching ICD-10 diagnosis coding to medicine students";
			if(article_one == "42")    article_one = "Analysis of Inverse Kinematics Solutions for Full-Body Reconstruction in Virtual Reality";
			if(article_one == "75")    article_one = "Analyzing Player Engagement for Biofeedback Games";
			if(article_one == "83")    article_one = "Application of Simple Game to Rapid Measurement of Cognitive Function in Maternal Brain";
			if(article_one == "66")    article_one = "Approaches for increasing patient's engagement and motivation in exer-games-based autonomous telerehabilitation";
			if(article_one == "3")    article_one = "Arm Exercises for Individuals with Spinal Cord Injury: Exergaming versus Arm Cranking";
			if(article_one == "7")    article_one = "Assigning Creative Commons Licenses to Accompany The Accessibility";
			if(article_one == "35")    article_one = "Automated Language Deficit Diagnostics with the Token Test App: Test-Retest Reliability and Practice Effects";
			if(article_one == "19")    article_one = "Biofabrication VR- The Hospital of the Future: A Serious Game for Patient Education";
			if(article_one == "60")    article_one = "Body Mass Index Awareness using Game-based Learning in Malaysia: Game Design and Initial User Experiences";
			if(article_one == "79")    article_one = "BraPolar: an M-Health Application for Remote Monitoring of People with Bipolar Disorder";
			if(article_one == "47")    article_one = "CalorieKiller: Burning Calories using Mobile Exergame with Wearables";
			if(article_one == "34")    article_one = "Care 4 Supply";
			if(article_one == "36")    article_one = "Clothing-integrated RFID-based Interface for Human-Technology Interaction";
			if(article_one == "2")    article_one = "Competitive Reinforcement: A Rewarding Framework for Multi-Player Serious Games";
			if(article_one == "5")    article_one = "Design and evaluation of computerized cognitive games to improve cognitive performance in multiple sclerosis: A correlation and validation study";
			if(article_one == "55")    article_one = "Design Of Cross Platform Augmented Reality Based Virtual Educational Lab Using Unity";
			if(article_one == "27")    article_one = "Design of the Dance Exercise Game for Order Adults with Wearable Motion Capture Sensing Technology";
			if(article_one == "80")    article_one = "Design process of an Alternate Reality Game (ARG) as a strategy to foster social support and well-being of mothers of children with ASD";
			if(article_one == "25")    article_one = "Developing a Patient-Centered Virtual Reality Healthcare System To Prevent the Onset of Delirium in ICU Patients";
			if(article_one == "11")    article_one = "Development of a Model for Attenuating Radiation in VR for Nuclear Safety Awareness";
			if(article_one == "12")    article_one = "Development of a Model of Radioactive Plume Path Program for Accident Scenario Response Readiness";
			if(article_one == "82")    article_one = "Diagnosis of children’s vision problems through video games";
			if(article_one == "59")    article_one = "Digital Game Devices with Physiological Measurement: Gaming as a Health Management and Measurement Tool";
			if(article_one == "56")    article_one = "Effects of Angry Birds-like Live Streaming on Working Memory";
			if(article_one == "4")    article_one = "Engagement Levers for Therapists and Patients in a Context of Cognitive Rehabilitation of Executive Functions With the Serious Game S’TIM";
			if(article_one == "61")    article_one = "Evaluating A VR-based Box and Blocks Test for Automatic Assessment of Manual Dexterity: A Preliminary Study in Parkinson’s Disease";
			if(article_one == "33")    article_one = "Exercise Intensity in Exergaming: An approach by GameFit.";
			if(article_one == "18")    article_one = "Expirience with Mediktor (artifical intelligent) in patient atended in an emergency department in Hospital Universitario San Ignacio in Bogotá (Colombia)";
			if(article_one == "53")    article_one = "Fostering Social Media Literacy through a Participatory Mixed-Methods Approach: Discussion of Workshop Findings";
			if(article_one == "73")    article_one = "GameAAL – Gamification applied to ambient assisted living";
			if(article_one == "58")    article_one = "Game-Design Elements for Evidence-Based Clinical Procedure Libraries";
			if(article_one == "78")    article_one = "Guidoo – Promoting engagement in health habits through a mobile app";
			if(article_one == "24")    article_one = "Heart rate and Breathing Variability for Virtual Reality Game Play";
			if(article_one == "62")    article_one = "Human Voice Emotion Identification Using Prosodic And Spectral Feature Extraction Based On Deep Neural Networks";
			if(article_one == "46")    article_one = "Immersive Hand Gesture for Virtual Museum using Leap Motion Sensor Based on K-Nearest Neighbor (KNN)";
			if(article_one == "45")    article_one = "Immersive Interaction on Cultural Heritage Game Controller Design Using Finite-state Transducer";
			if(article_one == "64")    article_one = "Increasing Working at Heights Safety Awareness with a Virtual Reality Serious Game";
			if(article_one == "30")    article_one = "Interactive Modular Tile Physiotherapy Exergame Intervention for Fall Prevention in Older Adults";
			if(article_one == "22")    article_one = "Interactive Rhythm Making System by using Tablet and Large Scale Display";
			if(article_one == "70")    article_one = "iSVC – Digital Platform for Detection and Prevention of Computer Vision Syndrome";
			if(article_one == "63")    article_one = "Learning through improvisational play: design strategies for serious games";
			if(article_one == "40")    article_one = "Modelling and Forecasting the Dengue Hemorrhagic Fever Cases Number Using Hybrid Fuzzy-ARIMA";
			if(article_one == "49")    article_one = "Moving Beyond Branching: Evaluating Educational Impact of Procedurally-Generated Virtual Patients";
			if(article_one == "9")    article_one = "MyoBeatz: Using music and rhythm to improve prosthetic control in a mobile game for health";
			if(article_one == "50")    article_one = "Online Social Network Campaign Game Using Finite State Machine Model";
			if(article_one == "1")    article_one = "Optimization of Physician Task Scheduling Under Stochastic Processing Times";
			if(article_one == "41")    article_one = "PDPuzzleTable: A Leap Motion Exergame for Dual-Tasking Rehabilitation in Parkinson’s Disease. Design and Study Protocol";
			if(article_one == "48")    article_one = "Piloting Multimodal Learning Analytics using Mobile Mixed Reality in Health Education";
			if(article_one == "69")    article_one = "Procedural constrained story generation based on Propp’s and Fabula models";
			if(article_one == "57")    article_one = "Promoting emotional well-being withAngry Birds-like Gameplay on Pixel Image Levels";
			if(article_one == "21")    article_one = "Prosthetic Rehabilitation Training in Virtual Reality";
			if(article_one == "76")    article_one = "Real-time Motion Detection for Android Smartphones";
			if(article_one == "52")    article_one = "Refresher training and Assessment tool for Anganwadi Workers";
			if(article_one == "39")    article_one = "Refresher training and Assessment tool for Anganwadi Workers in India";
			if(article_one == "51")    article_one = "Refresher training and Assessment tool for Anganwadi Workers in India";
			if(article_one == "8")    article_one = "Reha@Stroke - A Mobile Application to Support People Suffering from a Stroke Through Their Rehabilitation";
			if(article_one == "85")    article_one = "Scaling the assessment of emotion regulation effectiveness with a low-cost psychophysiological system";
			if(article_one == "13")    article_one = "Scenario-based Serious Game to Teach about Healthcare";
			if(article_one == "71")    article_one = "Serious games for ageing: a pilot interventional study in a cohort of heterogeneous cognitive impairment";
			if(article_one == "68")    article_one = "Serious Games to Empower Emotional Change For Paediatric Cancer Patient: The state of the art.";
			if(article_one == "65")    article_one = "Sleepy Style Music through Variational Autoencoder";
			if(article_one == "28")    article_one = "Solitaire Fitness: Design of an asynchronous exergame for the elderly to enhance cognitive and physical ability";
			if(article_one == "17")    article_one = "SPR1NG Controller: An Interface for Kinesthetic Spatial Manipulation";
			if(article_one == "84")    article_one = "Synthetic infant head shapes with deformational plagiocephaly: concept and 3D model parameterization";
			if(article_one == "29")    article_one = "The adoption of a serious game to foster interaction between the elderly and the youth";
			if(article_one == "32")    article_one = "To Boldly Play Where No One Has Played Before: Learning Leadership Through Play";
			if(article_one == "44")    article_one = "Towards A Deep History of Serious Games";
			if(article_one == "38")    article_one = "Training Players to Analyze Age-Related Macular Degeneration Optical Coherence Tomography Scans using a Human Computation Game";
			if(article_one == "10")    article_one = "Twelve Ways to Reach for a Star: Player Movement Strategies in a Whole-Body Exergame";
			if(article_one == "77")    article_one = "Using Design-Based Research to Develop a Virtual Human Interface for Police Nystagmus Training";
			if(article_one == "23")    article_one = "Virtual Reality Tool for Customizing User Placement in Cardiac Auscultation Training";
			if(article_one == "72")    article_one = "Web-Based Wireless Monitoring System of Patient’s Vital Sign";

		    
		    document.getElementById("artTitle").value = article_one;

		}

	</script>
	
	<script>

        function setCookie(cname,cvalue,exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        
        function checkCookie() {
            var user=getCookie("username");
            if (user != "") {
                alert("Welcome again " + user);
            } else {
               user = prompt("Please enter your name:","");
               if (user != "" && user != null) {
                   setCookie("username", user, 30);
               }
            }
        }
        
    </script>
	
   </body>
</html>