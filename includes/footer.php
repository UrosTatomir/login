</div> <!--Container-->

<!-- Footer -->

<footer class="page-footer font-small blue-grey lighten-5">

    <div style="background-color: #6ECC74;">
      <div class="container">

        <!-- Grid row--#21d192>
        <div class="row py-4 d-flex align-items-center">

          <!- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a href="https://www.facebook.com/bootsnipp" class="fb-ic">
              <i class="fa fa-facebook-official fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/bootsnipp" class="tw-ic">
              <i class="fa fa-twitter white-text fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a href="https://plus.google.com" class="gplus-ic">
              <i class="fa fa-google-plus white-text fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a href="https://www.linkedin.com/feed/" class="li-ic">
              <i class="fa fa-linkedin white-text fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a href="https://www.instagram.com" class="ins-ic">
            	
              <i class="fa fa-instagram white-text fa-2x"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3 dark-grey-text">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!-- Content -->
          <h4 class="text-uppercase text-center font-weight-bold">Vidi(See)Me</h4>
          <hr class="invisible teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <a href="#"><img src="images/vidi_me_mini.jpg" class="img-responsive img-circle margin" style="display:inline"  width="150" height="232"/></a>
        </div>
        <!-- Grid column uppercase -->

        
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h5 class="text-uppercase font-weight-bold">Products</h5>
          <hr class="invisible teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a class="dark-grey-text" href="#!">MDBootstrap</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">MDWordPress</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">BrandFlow</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h5 class="text-uppercase font-weight-bold">Useful links</h5>
          <hr class=" invisible teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

          <?php  if(logged_in()): ?>
          <p>
            <a class="dark-grey-text" href="admin.php">Admin</a>
          </p>

          <p>
            <a class="dark-grey-text" href="logout.php">Logout</a>
          </p>
          <?php endif;?>

          <?php if(!logged_in()):?>
          <p>
            <a class="dark-grey-text" href="login.php">Login</a>
          </p>
          <?php endif; ?>

          <p>
            <a class="dark-grey-text" href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Shipping Rates</a>
          </p>
          <p>
            <a class="dark-grey-text" href="#!">Help</a>
          </p>

        </div>
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h5 class="text-uppercase font-weight-bold">foto workshop</h5>
          <hr class=" invisible teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <a href="#"><img src="images/foto-workshop1.jpg" class="img-thumbnail"  width="150" height="182"/></a>
          

        </div>

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h5 class="text-uppercase font-weight-bold">Contact</h5>
          <hr class=" invisible teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a></p>
            <p>
            <a href="https://www.instagram.com"><i class="fa fa-instagram fa-2x social"></i></a></p>  
          <p>            
            <a href="https://www.linkedin.com/feed/">
            <i class="fa fa-linkedin-square  fa-2x social"></i></a></p>         
          <p>
            <a href="https://twitter.com/bootsnipp">
            <i id="social-gp" class="fa fa-twitter-square fa-2x social"></i></a></p>
         
          <p>
            <a href="mailto:bootsnipp@gmail.com">
            <i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a></p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
      <a class="dark-grey-text" href="https://mdbootstrap.com/bootstrap-tutorial/">Uros Tatomir</a>
    </div>
    <!-- Copyright -->

  </footer> <!--end footer div-->


	
</body>
</html>