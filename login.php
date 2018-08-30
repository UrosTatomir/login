<?php  include("includes/header.php") ?>

<?php
	  if(logged_in()) {

	       redirect("admin.php");

	  }

?>

<?php  include("includes/nav.php") ?>	
    
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<?php display_message(); ?>
	            <?php validate_user_login(); ?>
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
								<a href="login.php" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="register.php" id="">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="login-
										password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="recover.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
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