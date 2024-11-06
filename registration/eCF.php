

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

     <!--Let browser know Titlewebsite is optimized for mobile-->
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
        <div class="col s12 m12 l12">
                  <div class="card">
                    <div class="card-content">
                              <h2>Copyright Info</h2>
							 
	                              <form method="get" action="https://ecopyright.ieee.org/ECTT/IntroPage.jsp">
									<!-- <form action="https://ecopyright.ieee.org/ECTT/IntroPage.jsp" method="get"> -->
									
	                            

										<table >
							
								
										<tr>
		                                     <td>Authors<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="AuthName" type="text" class="btn_line validate" required>
		                                     </td>
		                                   </tr>
		                               
		                                   <tr>
		                                     <td>Contact Email<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input name="AuthEmail" type="email" class="validate" required>
		                                     </td>
		                                   </tr>
		                                   
		                                   
		                                  
										 
										   <tr>
		                                     <td>Article Title<span > * </td>
		                                     <td class="center">	
											 <?
										

											$conn = new mysqli($servername, $username, $password, $dbname);
											$resultArticles = $conn->query("select * from articles_copyright order by title asc");
												while($obj = $resultArticles->fetch_object()){
													$articles .='<option value="'.$obj->id.'">'.$obj->title.'</option>';
												};

											?>               
											<select class="select_eCF" name="ArtId" id="artid" required="required" required>
									<!-- <select class="select_eCF" name="str_article_one" required="required" required> -->
										<option value="">Choose Article</option>
										<?=$articles?>	
										</select>
		                                     </td>
		                                   </tr>
		                                         
	                                  <input type="hidden" name="PubTitle" value="2025 IEEE 12th International Conference on Serious Games and Applications for Health (SeGAH) ">
                                      <input type="hidden" id="artTitle" name="ArtTitle" value="0000">
                                      <input type="hidden" name="ArtSource" value="61285">
                                      <input type="hidden" name="rtrnurl" value="https://www.segah.org/">
		                         
		                                                                
		                                   <tr>
		                                     		                                     			                                     			                                     						                                		                                    		                                     
		                                   </tr>
		                                   
		                                   <tr>
		                                     <td> 
							

		                                     	  <button class="btn btn_callToAction waves-effect waves-light" onclick="funcProcess()" type="submit">Next
							                            <i class="material-icons right"></i>
							                    </button></td>
							
		                                   </tr>
		                              
		                           	</table>
		                       </form>                                  			                                                          
                     </div>
               </div>
        </div>

          

	    </div><!--fecha linha fees-->
 

	</div><!--fecha container-->
	</main>
  </div>

	
  <footer class="page-footer">
    <div class="container main-center">
        <div class="row">
            <div class="col l4 s12">
                <h5 class="footer-text">Contact</h5>
                <p class="footer-text">You can contact the conference organizers using the following channel:<br>

                    <a class="footer-text" href="mailto: secretariat@segah.org">secretariat@segah.org</a></p>
            </div>
            <div class="col l2 s12">
                <h5 class="footer-text">Conference</h5>
                <ul>
                    <li><a class="footer-text" href="../../<?php echo $confYear; ?>/scope.html">Scope and Topics</a></li>
                    <li><a class="footer-text" href="../../<?php echo $confYear; ?>/committees.html">Program Committees</a></li>
                    <li><a class="footer-text" href="../../<?php echo $confYear; ?>/scope.html">Important Dates</a></li>
                </ul>
            </div>
            <div class="col l2 s12">
                <h5 class="footer-text">Venue</h5>
                <ul>
                    <li><a class="footer-text" href="../../<?php echo $confYear; ?>/venue.html">About the city</a></li>
                    <li><a class="footer-text" href="../../<?php echo $confYear; ?>/venue.html">Travel to Dubai</a></li>
                    <li><a class="footer-text" href="#">Accomodation - soon</a></li>
             
                </ul>
            </div>

         
			<div class="col l4 s12">
        <div>
          <h5 class="footer-text">Sponsors:</h5>
          <a href="http://www.ieee.com"
            ><img src="assets/IEEE-LOGO.png" height="60px"
          /></a>
         
        </div>
      </div>
        </div>

    </div>

    <div class="footer-copyright">
        <div class="container center">

            © Segah 2023 Copyright
        </div>
    </div>
</footer>


	
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
		console.log()
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
