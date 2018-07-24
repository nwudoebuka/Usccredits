<?php 
$about='active';
include('header.php');

 ?>
		<!-- banner-text -->
		<!-- banner -->
	</div>	
	<!-- about -->
	<div class=" w3ls-section" id="inner-about">
		<div class="container">
			<h3 class="h3-w3l">about us</h3>
			<!-- about bottom-->
			<div class="about-bottom">
				<div class="col-md-6 about-w3right">
					
				</div>
				<div class="col-md-6 about-w3left"> 
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h5 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Savings account
									</a>
								</h5>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
								<div class="panel-body panel_text">
									Open a savings account with us online and start recieving and sending money at ease.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h5 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Current account
									</a>
								</h5>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
								<div class="panel-body panel_text">
									You can have a current account with us just in a click, write checks and send to friends, use your account for mobile deposit to other banks.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h5 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Funded 
									</a>
								</h5>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
								<div class="panel-body panel_text">
									Do you have a business or a job that will but do not have money to in your account?. dont worry create a funded account with us and have your account funded. Note we verify your business/job and your ability of refund.


<!-- 
										changes made here -->
								</div>
							</div>
						</div>
					</div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div>	
			<!-- //about-bottom -->
	</div>
	<!-- //about -->
	<!-- //Awards-->
	<div class="awards-agileinfo  w3ls-section">
		<div class="awardsw3-agileits banner-agileinfo">
			<div class="container">
				<div class="w3ls_banner_bottom_grids">
					<div class="col-sm-3 col-xs-3 w3ls_about_guage">
						<h4>Awards</h4>
						<canvas id="gauge1" width="200" height="100"></canvas>
					</div>
					<div class="col-sm-3 col-xs-3 w3ls_about_guage">
						<h4>Followers</h4>
						<canvas id="gauge2" width="200" height="100"></canvas>
					</div>
					<div class="col-sm-3 col-xs-3 w3ls_about_guage">
						<h4>Branches</h4>
						<canvas id="gauge3" width="200" height="100"></canvas>
					</div>
					<div class="col-sm-3 col-xs-3 w3ls_about_guage">
						<h4>Support</h4>
						<canvas id="gauge4" width="200" height="100"></canvas>
					</div>
					<div class="clearfix"> </div>
				</div> 
			</div>
		</div>
		<script src="js/jquery.gauge.js"></script>
		<script>
			$(document).ready(function (){
				$("#gauge1").gauge(70,{color: "#ef3708",unit: " %",type: "halfcircle"});
				$("#gauge2").gauge(70, {color: "#5f48f9", unit: " %",type: "halfcircle"});
				$("#gauge3").gauge(75, {color: "#10b55d",unit: " %",type: "halfcircle"});
				$("#gauge4").gauge(90, {color: "#20c4da",unit: " %",type: "halfcircle"});
			});
		</script> 
	</div>
	<!-- //Awards-->
	<!-- about -->
	<div id="about" class="w3ls-section about"> 
		<div class="container"> 
			<div class="about-agileinfo"> 
				<div class="col-sm-3  about-grids about-grids2">
					<img src="images/g1.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-sm-6 about-text">
					<h2>We accept deposits in all currency</h2>
					<p>Chase-savings is among the first banking platform that accepts deposit in all currency including crypto currencies such as bitcoin . </p>
				</div>
				<div class="col-sm-3 about-grids about-grids2 inner-about-g3">
					<img src="images/g2.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>	 			
		</div>	 			
	</div>			
	<!-- //about -->  
	<!-- team -->
	<div id="team" class="w3ls-section team agileits">
		<div class="team-agileinfo">
			<div class="container">  
				<h3 class="h3-w3l">Our Team</h3>
				<div class="team-row agileits-w3layouts">
					<div class="col-md-3 col-xs-6 team-grids">
						<div class="team-agileimg">
							<img class="img-responsive" src="images/t1.jpg" alt="">
							<div class="captn">
								<div class="captn-top">
									<h4>Bob</h4>
									<p>Account Officer</p>
								</div> 
								<div class="social-w3lsicon agileinfo-social-grids">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li> 
									</ul>
								</div> 
							</div>
						</div>
					</div>					
					<div class="col-md-3 col-xs-6 team-grids">
						<div class="team-agileimg">
							<img class="img-responsive" src="images/t2.jpg" alt="">
							<div class="captn">
								<div class="captn-top">
									<h4>Hoover</h4>
									<p>Human Resources</p>
								</div>
								<div class="social-w3lsicon agileinfo-social-grids">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li> 
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 team-grids">
						<div class="team-agileimg">
							<img class="img-responsive" src="images/t3.jpg" alt="">
							<div class="captn">
								<div class="captn-top">
									<h4>James</h4>
									<p>Chief Risk Officer</p>
								</div>
								<div class="social-w3lsicon agileinfo-social-grids">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li> 
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6 team-grids">
						<div class="team-agileimg">
							<img class="img-responsive" src="images/t4.jpg" alt="">
							<div class="captn">
								<div class="captn-top">
									<h4>Sturgill</h4>
									<p>Chief Financial Officer</p>
								</div>
								<div class="social-w3lsicon agileinfo-social-grids">
									<ul>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-rss"></i></a></li> 
									</ul>
								</div> 
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
<!-- //team -->   

	
<!--footer-->
<?php include('footer.php'); ?>
