<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <title>2021 IEEE SeGAH</title>
     <meta name="name" content="content" charset="utf-8">
     <link type="text/css" rel="stylesheet" href="../../2021/css/materialize.min.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="../../2021/css/segah19.css"  media="screen,projection"/>

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
                              <span class="card-title cinza-text"><h2>Upload Proof-of-payment</h2></span>
                              
	                              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                             			<table>
		                                 <tbody>
		                                   <tr>
		                                     <td>RegistrationCode<span class="error"> * </td>
		                                     <td class="center">
		                                     	<input id="code" name="code" type="text" class="validate" required>
		                                     </td>
		                                   </tr>
		                        
		                                   <tr>
		                                     <td>File<span class="error"> * </td>
		                                     <td class="center">
		                                        <input type="file" name="uploadfiles" id="uploadfiles" multiple="multiple" class="validate" required />
		                                     </td>
		                                   </tr>
		                                                                
		                                   <tr>
		                                        <td>
		                                       <p></p>
		                                       </td>
		                                   </tr>
		                                   <tr>
		                                        <td>
		                                       <p></p>
		                                       </td>
		                                   </tr>
		                                   <tr>
		                                        <td>
		                                       <p></p>
		                                       </td>
		                                   </tr>
		                                    
		                                   
		                                   <tr>
		                                     <td> 
			                             	
		                                     	 <button class="btn waves-effect waves-light" id="next_btn" onclick="funcProcess()" type="submit" name="action">Finish
							                    <i class="material-icons right"></i>
							                    </button></td>
							
		                                   </tr>
		                                   
		                                 </tbody>
		                           	</table>
		                       </form>                                  			                                                          
                     </div>
               </div>
        </div>

            <div class="col s12 m12 l4 payment-notes">
              <p class="negrito">
                Payments by Bank or Wire transfer.                
              </p>
             

              <p>
                To be published in the IEEE SEGAH 2021 Conference Proceedings (indexed in IEEE Xplore), an author of an accepted paper is required to register for the conference at the Full (member or non-member) rate and the paper must be presented at the conference. Non-refundable registration fees must be paid prior to uploading the final IEEE formatted, publication-ready version of the paper. For authors with multiple accepted papers, one full registration is valid for up to 2 papers. <b>Accepted and presented full papers will be published in the IEEE SEGAH 2019 Conference Proceedings (indexed in IEEE Xplore)</b>. IEEE reserves the right to exclude a paper from distribution after the conference (e.g., removal from IEEE Xplore) if the paper is not presented at the conference.
              </p>
              <p class="negrito">
                  Note: It is not allowed to cancel a registration after its payment.
                </p>
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
	
	    function isCodeValid()
	    {
	        //Check key code 1 - at Begin
            var code = document.getElementById("code").value;
            if(code.slice(0,3) != "S18"){
                console.log("invalid key 1");
                alert("Wrong or invalid RegistrationCode, please try again or contact secretariat@segah.org");
                return false;
            }
            
            //Check key code 2 - at End
            var test = code.slice(code.length-4,code.length)
            console.log(test)
            
            switch(test)
            {
                case "AWOR":
                case "ATUT":
                case "AUPC":
                case "AUNM":
                case "AUMB":
                case "ASNM":
                case "ASMB":
                case "ARMB":
                case "APCM":
                case "AFNM":
                case "AFMB":
                case "A1DP":
                    console.log("code OK");
                    console.log(code);
                    break;
                default:
                    console.log("invalid key 2");
                    alert("Wrong or invalid RegistrationCode, please try again or contact secretariat@segah.org");
                    return false;
              }
              
              return true;
	    }
		
		function funcProcess() 
		{
		    if (isCodeValid() && document.querySelector('#uploadfiles').files.length > 0)
		    { 
    		    gotoThankYou(); 
		    }
		}
		
		function gotoThankYou() 
		{
		    window.location.href = "upload-form-thank-you.html";
		}
		
		(function () {

                var uploadfiles = document.querySelector('#uploadfiles');
                
                uploadfiles.addEventListener('change', function () {
                    
                    //Check key code 1 - at Begin
                    var code = document.getElementById("code").value;
                    if(code.slice(0,3) != "S18"){
                        console.log("invalid key 1");
                        alert("Wrong or invalid RegistrationCode, please try again or contact secretariat@segah.org");
                        return;
                    }
                    
                    //Check key code 2 - at End
                    var test = code.slice(code.length-4,code.length)
                    console.log(test)
                    
                    switch(test)
                    {
                        case "AWOR":
                        case "ATUT":
                        case "AUPC":
                        case "AUNM":
                        case "AUMB":
                        case "ASNM":
                        case "ASMB":
                        case "ARMB":
                        case "APCM":
                        case "AFNM":
                        case "AFMB":
                        case "A1DP":
                            console.log("code OK");
                            console.log(code);
                            break;
                        default:
                            console.log("invalid key 2");
                            alert("Wrong or invalid RegistrationCode, please try again or contact secretariat@segah.org");
                            return;
                      }
                      
                    //Key code verified - upload file
                    var files = this.files;
                    for(var i=0; i<files.length; i++)
                    {
                        code = document.getElementById("code").value;
                        //var article = document.getElementById("articleid").value;
                        
                        uploadFile(this.files[i], code, "");
                    }
            
                }, false); 


            /**
             * Upload a filez
             * @param file
             */
            function uploadFile(file, var1, var2){
                var url = "saveFiles.php";
                var xhr = new XMLHttpRequest();
                var fd = new FormData();
                xhr.open("POST", url, true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Every thing ok, file uploaded
                        console.log(xhr.responseText); // handle response.
                    }
                };
                fd.append('uploaded_file', file);
                fd.append('code', var1);
                //fd.append('article', var2);
            
                //console.log(var2);

                xhr.send(fd);
                
                alert("File sent successfully. Thank you.");
                console.log("file sent...");
               
                gotoThankYou();
            }
            }());

	</script>
	
   </body>
</html>
