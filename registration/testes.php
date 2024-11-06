
<!-- ####################################################################################################################################### -->
<?php
require 'ConfEditionVariables.php';
?>

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
<div class="animsition">
  <main class="readable-background">
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
                              <span class="card-title cinza-text"><h2>Copyright Info</h2></span>
                              
	                              <form method="post" action="https://ecopyright.ieee.org/ECTT/IntroPage.jsp">
	                                  
	                                  <input type="hidden" name="PubTitle" value="2020 IEEE 8th International Conference on Serious Games and Applications for Health(SeGAH)">
                                      <input type="hidden" id="artTitle" name="ArtTitle" value="0000">
                                      <input type="hidden" name="ArtSource" value="49190">
                                      <input type="hidden" name="rtrnurl" value="">
<table>
<tbody>
<tr>
		                                     <td>Authors<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="AuthName" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                               
		                                   <tr>
		                                     <td>Contact Email<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="AuthEmail" type="email" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   
		                                   <tr>
		                                     <td>Article Title<span class="error"> * </td>
		                                     <td class="center">		                                     			                                     	
		                                     	
                                          
                                          <?

                           $conn = new mysqli($servername, $username, $password, $dbname);
                           $resultArticles = $conn->query("select * from articles order by title asc");
                             while($obj = $resultArticles->fetch_object()){
                                $articles .='<option value="'.$obj->id.'">"'.$obj->title.'"</option>';
                            };
                           ?>       
                							   
                                 <select id="artid" name="ArtId" class="validate" required="required" required>
                							        <option value="">Choose Article</option>
                							        
													              <option><?=$articles?></option>
                                        <option value="37">3D Body Image Perception and Pain Visualization Tool for Upper Limb Amputees</option>
									<option value="26">A Dialogue Intervention Simulation Framework to Facilitate Psychotherapy training</option>
									<option value="81">A Game Based Intervention to Promote HPV Vaccination among Adolescents</option>
									<option value="15">A Joint International (Colombia-Canada) Graduate Course on Simulation, VR/AR, and Serious Games</option>
									<option value="20">A Mixed Reality Direct Ophthalmoscopy Simulator</option>
									<option value="74">A new approach of developing games for motor rehabilitation using Microsoft Kinect</option>
									<option value="31">A Picture-based Serious Game to Train Non-medical People for Emergency Situations</option>
									<option value="6">A Serious Game for Measuring and Displaying Mathematics Competencies of Disabled Students</option>
									<option value="14">A Smart Chair Physiotherapy Exergame for Fall Prevention</option>
									<option value="54">Adaptive Design and Implementation Of Six-Legged Hexapod in accordance to the field of application</option>
									<option value="67">An Empathic Virtual Caregiver for assistance in exer-game-based rehabilitation therapies</option>
									<option value="16">An Interactive Game to aid with Anxiety Management</option>
									<option value="43">Analisys with a serious game for teaching ICD-10 diagnosis coding to medicine students</option>
									<option value="42">Analysis of Inverse Kinematics Solutions for Full-Body Reconstruction in Virtual Reality</option>
									<option value="75">Analyzing Player Engagement for Biofeedback Games</option>
                
                							    </select>
							
		                                     </td>
		                                   </tr>
		                                   
		                                   
		                                                                
		                                   <tr>
		                                     		                                     			                                     			                                     						                                		                                    		                                     
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td> 
			                             	
		                                     	  <button class="btn waves-effect waves-light" onclick="funcProcess()" type="submit">Next
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
			<script type="text/javascript" src="js/materialize.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/js/animsition.min.js"></script>

		

			
			<script>
				$(function () {
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
	
			});
</script>
<script>
		
		function funcProcess() {

		 	  var article_one = document.getElementById("artid");
			  var selectedText = article_one.options[article_one.selectedIndex].text;
		    
		    document.getElementById("artTitle").value = selectedText;

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
