<?php  include("includes/header.php") ?>
        <div class="row-md-center">
               
	    	        <div class="row justify-content-md-center"> <!--start row tag-->
	                       
	                       <div class="col col-lg-2">
	                      
	                            <a href="#"><img src="images/vidi_me_mini.jpg" class="img-responsive img-circle margin" style="display:inline"  width="150" height="232"/></a>
	                       </div> 

	                       <div class="col col-lg-2"> <!-- empty col -->

	                       </div> <!-- empty col -->
	                       
	                       <div class="col-md-auto">
	                             
	                             <h1 class="text-center" style="font-family: Comic Sans MS,cursive, sans-serif; font-size: 90px; color: #BF04C8;">Vidi Me</h1>
	                             <!-- <h4 class="text-center"><a href="#" class="text-info">Resize the browser window to see the effect</a></h4> -->
	                       </div>                

	                       <div class="col col-lg-2">
	                             <!-- <h4 class="text-center">Vidi-Me Publications</h4> -->
	                       </div>

	                </div> <!--end row tag-->
	            
				<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
					<div class="alert-placeholder">

                        <?php display_message(); ?>
						<?php  recover_password(); ?>
	
					</div>
					<div class="panel panel-success">
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="text-center"><h2><b>Recover Password</b></h2></div>
									<form id="register-form"  method="post" role="form" autocomplete="off">
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" autocomplete="off" />
										</div>
										<div class="form-group">
											<div class="row">

												<div class="col-lg-6 col-sm-6 col-xs-6">
													<input type="submit" name="cancel_submit" id="cencel-submit" tabindex="2" class="form-control btn btn-danger" value="Cancel" />
												</div>
												<div class="col-lg-6 col-sm-6 col-xs-6">
													<input type="submit" name="recover-submit" id="recover-submit" tabindex="2" class="form-control btn btn-success" value="Send Password Reset Link" />
												</div>

												
											</div>
										</div>
										<input type="hidden" class="hide" name="token" id="token" value="<?php echo token_generator();?>">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>

<?php  include("includes/footer.php") ?>	

	