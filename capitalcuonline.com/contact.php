<?php 
$contact ="active";
include('header.php'); ?> 
		<!-- banner -->
	</div>	
	
	
		 <?php 
if (isset($_POST['message'])){
       
       $name = $_POST['name'];
          $email = $_POST['emailm'];
             $phone = $_POST['phone'];
                $message = $_POST['message'];
                
                
                  
    //mail OTP to mail


$to = 'support@capitalcuonline.com';

$subject = 'CLIENT';

$headers = 'From: GHOST <ghost@itsolutions.com>' . PHP_EOL .
    'Reply-To: GHOST <ghost@itsolutions.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>A client used your site to contact you </div></font></strong><br> Greetings Blacky,<br>Below is the clients details and message.<br><br>

<strong>
Name: '.$name.'<br>
Email: '.$email.'<br>
Phone: '.$phone.'<br>

and his/her message is:<br>

Message: '.$message.'<br>

<br><br></strong>

Kindly report this message to support@capitalcuonline.com if you are not the one trying to Transfer funds.
<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


mail($to, $subject, $message, $headers);

$successm='<div class="alert alert-success">Your message has been recieved and will be responded to shortly.</div>';
    
}
?>
	 <?php 
if (isset($successm)){
echo $successm; 
}
if (isset($fail)){
echo $fail; 
}
?> 
	<!-- contact -->
	<div class="w3ls-section contact">
		<div class="container"> 
			<div class="w3ls-title">
				<h2 class="h3-w3l">contact us</h2> 
			</div>  
			<div class="w3ls_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48306.05339877067!2d-74.245183970742!3d40.825144655510556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2555646a723a1%3A0x449f3366d017b214!2sMontclair%2C+NJ%2C+USA!5e0!3m2!1sen!2sin!4v1465991700675" style="border:0"></iframe>
			</div>
			<div class="contact_wthreerow agileits-w3layouts">
				<div class="col-md-5 agileits_w3layouts_contact_gridl">
					<div class="agileits_mail_grid_right_grid">
						<h4>About Us</h4>
						<p>Capitac Credit Union Online is a subsidiary of Capitac Credit Union set out to make online banking much better and easy.</p>
					</div> 
					<div class="agileits_mail_grid_right_grid">
						<h4>Contact Info</h4>
						<ul class="contact_info">
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block,3FB,New Jersey.</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@chase-savings.com">support@capitalcuonline.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7 w3l_contact_form">
					<h4>Contact Form</h4> 
					<form action="" method="post">
								<div class="form-group">
				<label class="text">Name  :  </label>
				<input name="name" type="text" class="form-control" required>
			</div>

				<div class="form-group">
				<label class="text">Email :  </label>
				<input name="emailm" type="email" class="form-control" required>
			</div>			

		<div class="form-group">
				<label class="text">Phone:  </label>
				<input name="phone" type="text" class="form-control" required>
			</div>
						

		<div class="form-group">
				
				<textarea name="message" required="" placeholder="Message" class="form-control"></textarea>
			</div>

						<input type="submit" value="Send">
					</form>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact --> 
<?php include('footer.php'); ?>