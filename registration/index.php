<?php

session_start();
$_SESSION['registration_option'] = "NULL";


require 'ConfEditionVariables.php';

?>
<!DOCTYPE html>
<html>
	<head>
		 <!--Import Google Icon Font-->
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
     <!--Import materialize.css-->
     <title><?php echo $confYear; ?> IEEE SeGAH</title>
     <meta name="name" content="content" charset="utf-8">
     <link type="text/css" rel="stylesheet" href="<?php echo $css_materialize; ?>"  media="screen,projection"/>
	 <link rel="stylesheet" href="<?php echo $css_animation; ?>" />
     <link type="text/css" rel="stylesheet" href="<?php echo $css_segah; ?>" media="screen,projection" />

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				</head>


				<body>
		
					<!---------------------------------- HEADER --------------------------------------->
				<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="#" data-activates="mobile-demo" class="button-collapse burger-menu left"><i class="material-icons">
                menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a class="Roboto-Medium animsition-link" href="../index.html">Home</a></li>
            <!-- <li><a class="Roboto-Medium animsition-link" href="program.html">Program</a></li> -->
            <li><a class="Roboto-Medium animsition-link" href="../scope.html">Scope and Topics</a></li>
            <!-- <li><a class="Roboto-Medium" class="animsition-link" href="keynotes.html">Keynotes</a></li> -->
            <li><a class="Roboto-Medium animsition-link" href="../venue.html">Venue</a></li>
            <li><a class="Roboto-Medium animsition-link" href="../submissions.html">Submissions</a>
            </li>
            <li><a class="Roboto-Medium animsition-link" href="../cfp.html">Call for Papers</a></li>
            <li><a class="Roboto-Medium" class="animsition-link" href="./">Registration</a>
            </li>
            <li><a class="Roboto-Medium animsition-link" href="../../<?php echo $confYear; ?>/committees.html">Committees</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a class="Roboto-Medium" href="../index.html">Home</a></li>
            <!-- <li><a class="hongkong" href="program.html">Program</a></li> -->
            <li><a class="Roboto-Medium" href="../<?php echo $confYear; ?>/scope.html">Scope and Topics</a></li>
            <!-- <li><a class="hongkong" href="keynotes.html">Keynotes</a></li> -->
            <li><a class="Roboto-Medium" href="../venue.html">Venue</a></li>
            <li><a class="Roboto-Medium" href="../submissions.html">Submissions</a></li>
            <li><a class="Roboto-Medium" href="../cfp.html">Call for Papers</a></li>
            <li><a class="hongkong" href="./">Registration</a></li>
            <li><a class="Roboto-Medium" href="../committees.html">Committees</a></li>
        </ul>
    </div>

    </div>
</nav>


<!-- <div class="imagemPerth-10 valign-wrapper"></div>  -->
					<div class="animsition">
					<main class="readable-background">
						<!---------------------------------- MAIN --------------------------------------->
				
						<div class="container">
							<div class="row">
							<div class="col s6 m6 l6">
									<h2>Online registration platform</h2>
								</div>
							</div>
							<div class="row">
								<div class="col s6 m6 l6">
									<div class="card">
										<div class="card-content cinza-text">
											<span class="card-title cinza-text">
												<h4>Registration Fees</h4>
											</span>
											<ul class="collapsible" data-collapsible="accordion">
												<li>
													<div class="collapsible-header">
														<i class="material-icons"></i>Attendee(s)
													</div>
													<div class="collapsible-body">
														<table>
															<tbody>
																<tr>
																	<td></td>
																	<td class="negrito center">Until <?php echo $confEarlyBirdText ?></td>
																	<td class="negrito center">After <?php echo $confEarlyBirdText ?></td>
																</tr>
																<tr>
																	<td>
																		<input class="with-gap" name="group1" type="radio" id="pay01"/>
																		<label for="pay01">Full For Non-Member</label>
																	</td>
																	<td class="center">
																		740 €
																	</td>
																	<td class="center">
																		850 €
																	</td>
																</tr>
																<tr>
																	<td>
																		<input class="with-gap" name="group1" type="radio" id="pay02"/>
																		<label for="pay02">Full for IEEE Member</label>
																	</td>
																	<td class="center">
																		590 €
																	</td>
																	<td class="center">
																		710 €
																	</td>
																</tr>
																<tr>
																	<td>
																		<input class="with-gap" name="group1" type="radio" id="pay03"/>
																		<label for="pay03">Members of the Programme Committee</label>
																	</td>
																	<td class="center">
																		590 €
																	</td>
																	<td class="center">
																		710 €
																	</td>
																</tr>
																<tr>
																	<td>
																		<input class="with-gap" name="group1" type="radio" id="pay04"/>
																		<label for="pay04">Student IEEE Member</label>
																	</td>
																	<td class="center">
																		320 €
																	</td>
																	<td class="center">
																		390 €
																	</td>
																</tr>
																<tr>
																	<td>
																		<input class="with-gap" name="group1" type="radio" id="pay05"/>
																		<label for="pay05">Student Non-Member</label>
																	</td>
																	<td class="center">
																		590 €
																	</td>
																	<td class="center">
																		710 €
																	</td>
																</tr>
																<tr>
																	<td>
																		<input class="with-gap" name="group1" type="radio" id="pay06"/>
																		<label for="pay06">IEEE Life Member Fee</label>
																	</td>
																	<td class="center">
																		320 €
																	</td>
																	<td class="center">
																		390 €
																	</td>
																</tr>
																<tr>
																	<td>
																		<button class="btn btn_callToAction waves-effect waves-light" id="pay_attendee" onclick="funcPayAttendee()" type="submit" name="action">Submit
																			<i class="material-icons right"></i>
																		</button>
																	</td>
																</tr>
																<tr>
																	<td></td>
																</tr>
															</tbody>
														</table>
													</div>
												</li>
												<li>
													<div class="collapsible-header">
														<i class="material-icons"></i>Author(s)
													</div>
													<div class="collapsible-body">
														<table>
															<tbody>
																<tr>
																	<td></td>
																	<td class="negrito center">Until <?php echo $confEarlyBirdText ?></td>
																	<td class="negrito center">After <?php echo $confEarlyBirdText ?></td>
																</tr>
																<tr>
																	<td>
																	
																	
																	<input class="with-gap" name="group1" type="radio" id="pay11"/>
																	<label for="pay11">Full For Non-Member</label>
																</td>
																<td class="center">
																	740 €
																</td>
																<td class="center">
																	850 €
																</td>
															</tr>
															<tr>
																<td>
																	<input class="with-gap" name="group1" type="radio" id="pay12"/>
																	<label for="pay12">Full for IEEE Member</label>
																</td>
																<td class="center">
																	590 €
																</td>
																<td class="center">
																	710 €
																</td>
															</tr>
															<tr>
																<td>
																	<input class="with-gap" name="group1" type="radio" id="pay13"/>
																	<label for="pay13">Members of the Programme Committee</label>
																</td>
																<td class="center">
																	590 €
																</td>
																<td class="center">
																	710 €
																</td>
															</tr>
															<tr>
																<td></td>
															</tr>
															<tr>
																<td>
																	<button class="btn btn_callToAction waves-effect waves-light" id="pay_author" onclick="funcPayAuthor()" type="submit" name="action">Submit
																		<i class="material-icons right"></i>
																	</button>
																</td>
															</tr>
															<tr>
															<td></td>
															</tr>
														</tbody>
													</table>
												</div>
											</li>
											<li>
												<div class="collapsible-header">
													<i class="material-icons"></i>Workshop/Tutorial/Demo
												</div>
												<div class="collapsible-body">
													<table>
														<tbody>
															<tr>
																<td></td>
																<td class="negrito center">Cost (€)</td>
															</tr>
															<tr>
																<td>
																	<input class="with-gap" name="group1" type="radio" id="pay21"/>
																	<label for="pay21">Workshop</label>
																</td>
																<td class="center">
																	1000 €
																</td>
															</tr>
															<tr>
																<td>
																	<input class="with-gap" name="group1" type="radio" id="pay22"/>
																	<label for="pay22">Tutorial</label>
																</td>
																<td class="center">
																	1000 €
																</td>
															</tr>
															<tr>
																<td>
																	<input class="with-gap" name="group1" type="radio" id="pay23"/>
																	<label for="pay23">Demo</label>
																</td>
																<td class="center">
																	1000 €
																</td>
															</tr>
															<tr>
</td>
															</tr>
															<tr>
																<td>
																	<button class="btn btn_callToAction waves-effect waves-light" id="pay_workshop" onclick="funcPayWorkshop()" type="submit" name="action">Submit
																		<i class="material-icons right"></i>
																	</button>
																</td>
															</tr>
															<tr>
</td>
															</tr>
														</tbody>
													</table>
												</div>
											</li>
										</ul>
										<p>&nbsp;</p>
										<p>&nbsp;</p>
										<p>&nbsp;</p>
										<span class="card-title cinza-text">
											<h4>Electronic Copyright Form</h4>
										</span>
										<button class="btn btn_callToAction waves-effect waves-light" id="eCF_submit" onclick="funcGenerate_eCF()" type="submit" name="action">Submit Copyright
											<i class="material-icons right"></i>
										</button>
									</td>
								</div>
							</div>
						</div>
						<div class="col s6 m6 l6">
						<p class="negrito">
                            Registration details
                        </p>

                        <p>
                            To be published in the SeGAH <?php echo $confYear ?> Conference Proceedings (indexed in IEEE Xplore), an author of an accepted paper is required to register for the conference at the Full (member or non-member) rate and the paper must be presented at the conference.
                            Non-refundable registration fees must be paid prior to uploading the final IEEE formatted, publication-ready version of the paper. For authors with multiple accepted papers, one full registration is valid for up to 2 papers.
                            <b>Accepted and presented full papers will be published in the IEEE SEGAH <?php echo $confYear ?> Conference Proceedings (indexed in IEEE Xplore)</b>. IEEE reserves the right to exclude a paper from distribution after the conference (e.g., removal
                            from IEEE Xplore) if the paper is not presented at the conference.
                        </p>
                        <p class="negrito">
                            Note: It is not allowed to cancel a registration after its payment.
                        </p>
</div>
					</div>
				
					<!--fecha linha fees-->
				</div>
				<!--fecha container-->
			</main>
		<!---------------------------------- FOOTER --------------------------------------->
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
                    <li><a class="footer-text" href="../scope.html">Scope and Topics</a></li>
                    <li><a class="footer-text" href="../committees.html">Program Committees</a></li>
                    <li><a class="footer-text" href="../scope.html">Important Dates</a></li>
 
                </ul>
            </div>
            <div class="col l2 s12">
                <h5 class="footer-text">Venue</h5>
                <ul>
                    <li><a class="footer-text" href="../venue.html">About the city</a></li>
                    <li><a class="footer-text" href="../venue.html">Travel to Dubai</a></li>
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

            © Segah <?php echo $confYear ?> Copyright
        </div>
    </div>

</footer>
		
</div>
	

			
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animsition/4.0.2/css/animsition.min.css">
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
			<script type="text/javascript" src="<?php echo $js_materialize; ?>"></script>
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
	
				$(".testingFade").hide().fadeIn(1000);
				$(".button-collapse").sideNav();

				$('.slider').slider({
					height: 270,
					indicators: true,
					interval: 6000
				});

			});
			</script>

	
			<script>function funcPayAttendee() { 
				if (document.getElementById("pay01").checked) { 
					window.location.href = "Attendee_FullNonMember.php";
				} 
				if (document.getElementById("pay02").checked) { 
					window.location.href = "Attendee_FullIEEEMember.php"; 
				} 
				if (document.getElementById("pay03").checked) { 
					window.location.href = "Attendee_ProgrammeCommittee.php"; 
				} 
				if (document.getElementById("pay04").checked) { 
					window.location.href = "Attendee_StudentMember.php"; 
				} 
				if (document.getElementById("pay05").checked) { 
					window.location.href = "Attendee_StudentNonMember.php"; 
				} 
				if (document.getElementById("pay06").checked) { 
					window.location.href = "Attendee_RetiredMember.php"; 
				} 
				if (document.getElementById("pay07").checked) { 
					window.location.href = "Attendee_1DayPass.php"; 
				} 
			} 
			
			function funcPayAuthor() { 
				if (document.getElementById("pay11").checked) { 
					window.location.href = "Author_FullNonMember.php"; 
				} 
				if (document.getElementById("pay12").checked) { 
					window.location.href = "Author_FullIEEEMember.php"; 
				} 
				if (document.getElementById("pay13").checked) { 
					window.location.href = "Author_ProgrammeCommittee.php"; 
				} 
				if (document.getElementById("pay14").checked) { 
					window.location.href = "Author_StudentMember.php"; 
				} 
				if (document.getElementById("pay15").checked) { 
					window.location.href = "Author_StudentNonMember.php"; 
				} 
				if (document.getElementById("pay16").checked) { 
					window.location.href = "Author_RetiredMember.php"; 
				} 
			} 
			
			function funcPayWorkshop() { 
				if (document.getElementById("pay21").checked) { 
					window.location.href = "Workshop.php"; 
				} 
				if (document.getElementById("pay22").checked) { 
					window.location.href = "TutorialDemo.php"; 
				} if (document.getElementById("pay23").checked) { 
					window.location.href = "TutorialDemo.php"; 
				} 
			} 
			
			function funcUploadFile() { 
				window.location.href = "Upload_Proof.php"; 
			} 
			
			function funcGenerate_eCF() { 
				window.location.href = "eCF.php"; 
			}</script>
		</body>
	</html>
