<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php") ?>


	<div class="jumbotron">
		<h5 class="text-right"><?php

          if(logged_in()){

           //  $email = $_SESSION['email'];
          	// echo'Logged in - '.$email;

          } else {

          	redirect("index.php");

          }

          ?></h5>
           <div class="container-fluid">
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
              <p>download files</p>
              <button class="btn btn-outline-light" type="button"><a href="images/bird.jpg" download>Download</a></button>
              <div class="row">
              	  <div class="col-md-4">
                            <h4><a href="#" class="text-success">Publications</a></h4>
                            <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><a href="#">Cras justo odio</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                                  <li class="list-group-item"><a href="#"> Dapibus ac facilisis in</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                                  <li class="list-group-item"><a href="#">Morbi leo risus</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                                  <li class="list-group-item"><a href="#">Porta ac consectetur ac</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                                  <li class="list-group-item"><a href="#">Vestibulum at eros</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>
                            </ul>
                            <!-- <p style="font-size: 16px"><a href="#" class="text-warning">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel.
                         </a></p> -->
                        </div>
                        <div class="col-md-4 offset-md-4">
                        
                           <h4><a href="#" class="text-success">Educating with the compassion, Workshop, video tutorials</a></h4>
                           <div class="list-group">
                                  <a href="images/bird.jpg" class="list-group-item list-group-item-action flex-column align-items-start active" download>
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group workshop 1</h5>
                                        <!-- <small>3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:16px">Data  id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                      <small>Download</small>

                                  </a>
                                  <a href="images/bird.jpg" class="list-group-item list-group-item-action flex-column align-items-start" download>
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group workshop 2</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:16px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                      <small class="text-muted">Download</small>
                                  </a>
                                  <a href="images/bird.jpg" class="list-group-item list-group-item-action flex-column align-items-start" download>
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group workshop 3</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:16px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                      <small class="text-muted">Download</small>
                                  </a>
                                  <a href="images/bird.jpg" class="list-group-item list-group-item-action flex-column align-items-start" download>
                                   <div class="d-flex w-100 justify-content-between">
                                      <h5 class="mb-1">List group workshop 4</h5>
                                      <!-- <small class="text-muted">3 days ago</small> -->
                                    </div>
                                    <p class="mb-1" style="font-size:16px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Download</small>
                                  </a>
                              </div>
                           <!-- <p style="font-size: 16px"><a href="#" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p> -->
                        </div>


              </div>
           </div>
	</div>


<?php  include("includes/footer.php") ?>