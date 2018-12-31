<?php  include("includes/header.php") ?>
<?php  include("includes/nav.php")	?> 

    	<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<?php  validate_user_registration(); ?>
                
	            <div class="row-md-center">
			        <div class="row justify-content-md-center"> <!--start row tag-->
		                   
		                   <div class="col col-lg-2">
		                  
		                        <a href="#"><img src="images/vidi_me_mini.jpg" class="img-responsive img-circle margin" style="display:inline"  width="150" height="232"/></a>
		                   </div> 

		                   <div class="col col-lg-2"> <!-- empty col -->

		                   </div> <!-- empty col -->
		                   
		                   <div class="col-md-auto">
		                         
		                         <h1 class="text-center" style="font-family: Comic Sans MS,cursive, sans-serif; font-size: 90px; color: #BF04C8;">Vidi Me</h1>
		                         
		                   </div>                
		                   
		            </div> <!--end row tag-->
			  
		        </div>
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="login.php">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" class="active" id="">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" role="form" >

									<!-- <div class="form-group">
										<input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name" value="" required >
									</div> -->
									<!-- <div class="form-group">
										<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" value="" required >
									</div> -->
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required >
									</div>
									<div class="form-group">
										<input type="email" name="email" id="register_email" tabindex="1" class="form-control" placeholder="Email Address" value="" required >
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php  include("includes/footer.php") ?>	
	
