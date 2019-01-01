<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php")	?> 
<?php  include_once "functions/db.php" ?>

  <?php
   
      $sql = "SELECT counts FROM user_count WHERE id = 1";

           $result = query($sql);

           confirm($result);
     
          if(row_count($result) == 1){

                 $row = fetch_array($result);
                         
                  $current_count = $row['counts'];

                  $new_count = $current_count + 1;

                  $sql = " UPDATE user_count SET counts = '$new_count' ";

                  $result = query($sql);
                  confirm($result);

                  // echo $new_count;            
            }           
  ?>
	<div class="jumbotron-xl bg-white">

  <?php display_message(); ?>

         <div class="container-fluid-xl">
                 

                 <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

                 <div class="row shadow p-3 mb-5 bg-white rounded"> <!--start row tag-->

                        
                        <div class="col-md-4 ">
                          <h4><a href="index.phtml" class="text-success">Cooperation</a></h4>
                          <a href="index.phtml"><img src="images/hands.jpg" class="rounded"  width="250"/></a>
                          <hr class="invisible">                         
                          <p class="mb-1 float-left" style="font-size:14px"><a href="index.phtml" class="text-secondary">Data 1</a></p>
                          <h4><a href="index.phtml" class="text-success">The following schools participated in the project</a></h4>
                            <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><a href="index.phtml">data 1</a></li>
                                  <li class="list-group-item"><a href="index.phtml"> data 2</a></li>
                                  <li class="list-group-item"><a href="index.phtml">data 3</a></li>
                                  <li class="list-group-item"><a href="index.phtml">data 4</a></li>
                                  <li class="list-group-item"><a href="index.phtml">data 5</a></li>
                            </ul>   
                        
                        </div>
                        <div class="col-md-4">                        
                           <h4><a href="index.phtml" class="text-success">Activities</a></h4>
                           <div class="list-group">
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start active">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group workshop 1</h5>
                                        <!-- <small>3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Data 1  .</p>
                                      <small>Data 2.</small>
                                  </a>
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group workshop 2</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                      <small class="text-muted">Donec id elit non mi porta.</small>
                                  </a>
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group workshop 3</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                      <small class="text-muted">Donec id elit non mi porta.</small>
                                  </a>
                                    <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group workshop 4</h5>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                      <small class="text-muted">Donec id elit non mi porta.</small>
                                  </a>                                  
                                    
                              </div>
                           <!-- <p style="font-size: 16px"><a href="#" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p> -->
                        </div>
                        <div class="col-md-4 ">
                        
                           <h4><a href="index.phtml" class="text-success">Projects</a></h4>
                           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img  src="images/vidime_work2.jpg" width="330" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/skola.jpg" width="330" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/vidime_slide2.jpg" width="330" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                           </div>
                           <!-- <a href="index.phtml"><img src="images/vidime_work2.jpg" class="rounded"  width="290" height="194"/></a> -->
                           <hr class="invisible">
                           <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">data 1</a></p>
                         <hr class="invisible">
                           <a href="index.phtml"><img src="images/vidime_work3.jpg" class="rounded"  width="290" height="344"/></a>  
                        </div>

                 </div> <!-- end row tag-->
                 <hr class="invisible">
                 <div class="row font-italic shadow p-3 mb-5 bg-white rounded"> <!--start row tag-->

                        <div class="col-md-4">
                            
                            <h4><a href="#" class="text-success">Compassionate family</a></h4> 
                            <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">Imagine the parents who manage to master their own sense of emotions at moments when their children are completely thrown out of the clock and instead of pouring out their anger on them they give them what is most needed to them, which is a true understanding.</a></p>
                            <a href="index.phtml"><img src="images/porodica.jpg" class="rounded"  width="290"/></a>
                            <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">“VidiMe” offers workshops and a summer school of compassionate parenting as well as online support throughout the year.</a></p>
                        </div>
                        
                        <div class="col-md-4">
                            <h4><a href="index.phtml" class="text-success">Giraff's corner</a></h4>
                            <a href="index.phtml"><img src="images/zirafa1.jpg" class="rounded"  width="280"/></a> 
                            <!-- <hr class="invisible"> -->
                            <ul style="font-size: 14px"><a href="index.phtml" class="text-secondary">
                              <li>Nonviolent communication</li>
                              <li>Daily inspiration</li>
                              <li>Ideas for workshops</li>
                              <li>Annual gatherings</li>
                            </a></ul>
                            <form action="index.php" method="post">
                              <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>
                              </div>
                                                           
                              <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                        <?php                                              
                              if(isset($_POST['Submit'])){

                                    $email = $_POST['email'];

                                $sql= "SELECT id FROM workshop_users WHERE email = '$email'";

                                $result = query($sql);

                                     if(row_count($result) == 1){

                                      // return true;

                                     echo"Sorry that email already is exists";

                                      }else{

                                       $sql = "INSERT INTO workshop_users(email) VALUES ('$email')";

                                       $result = query($sql);
                                      confirm($result);                                      
                                      echo"Your email are inserted";

                                      }
                                 
                               }
                                                      
                        ?>
                        <div class="col-md-4 ">
                            <h4><a href="index.phtml" class="text-success">Compassionate school</a></h4>
                            
                            <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">Imagine a school in which teachers do not shout, do not punish students, they are not threatened, they already try to understand them and help them resolve quarrels and disagreements peacefully.
                         </a></p>
                            <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">“VidiMe” offers training for non-violent communication teachers with accompanying support programs both online and live where experiences are exchanged and analyzed possible solutions to various problems in the application of compassionate approach in schools.</a></p>

                        </div>

                 </div>

                 <!-- <div class="row shadow p-3 mb-5 bg-white rounded"> --> <!--start row tag-->

                        <!-- <div class="col-md-4">
                            <h4><a href="index.phtml" class="text-success">Private Consultations</a></h4>
                            <a href="index.phtml"><img src="images/vidime_work4.jpg" class="rounded"  width="290" height="193"/></a> 
                            <p style="font-size: 16px"><a href="index.phtml" class="text-secondary">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel.
                         </a></p>
                         
                        </div>

                        <div class="col-md-4">
                            <h4><a href="index.phtml" class="text-success">No-School-Problems Consultations</a></h4>
                            <a href="index.phtml"><img src="images/vidime_work5.jpg" class="rounded"  width="290" height="197"/></a> 
                            <p style="font-size: 16px"><a href="index.phtml" class="text-secondary">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel.
                             </a></p>
                        </div>

                        <div class="col-md-4 ">
                            <h4><a href="index.phtml" class="text-success">Publications</a></h4>
                            <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><a href="index.phtml">Cras justo odio</a></li>
                                  <li class="list-group-item"><a href="index.phtml"> Dapibus ac facilisis in</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Morbi leo risus</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Porta ac consectetur ac</a></li>
                                  <li class="list-group-item"><a href="index.phtml">Vestibulum at eros</a></li>
                            </ul> -->
                            <!-- <p style="font-size: 16px"><a href="#" class="text-warning">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel.
                         </a></p> -->
                        <!-- </div> -->

                 <!-- </div> --> <!-- end row tag-->

                 <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
                 
                 

                  <!-- <hr class="invisible teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

                 <!-- <div class="row shadow p-3 mb-5 bg-white rounded"> --> <!--start row tag-->

                    <!--  <div class="col-sm-2" style="background-color:lavender;">

                         <h4 class="text-center"><a href="index.phtml">News</a></h4>
                         <p style="font-size: 16px"><a href="index.phtml" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p>


                     </div>
                     <div class="col-sm-4" style="background-color:lavenderblush;">

                         <h4 class="text-center"><a href="index.phtml"> Tutorials</a></h4>
                            <p style="font-size: 16px"><a href="index.phtml" class="text-secondary">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.
                         </a></p>

                      </div>
                      <div class="col-sm-4" style="background-color:lavenderblush;">

                         <h4 class="text-center"><a href="index.phtml">Newsletter</a></h4>
                          <p style="font-size: 16px"><a href="index.phtml" class="text-secondary">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.
                         </a></p>

                      </div>
                      <div class="col-sm-2" style="background-color:lavender;">

                         <h4 class="text-center"><a href="index.phtml">Workshop</a></h4>
                          <p style="font-size: 16px"><a href="index.phtml" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p>

                      </div> -->
               <!-- </div> --> <!--end row tag-->
         </div> <!--end container fluid tag-->
                         
	</div> <!-- end jumbotron div -->


	<?php
       // $sql = "SELECT * FROM users";
       // $result = query($sql);

       // confirm($result);

       // $row = fetch_array($result);

       // echo $row['id'].'<br>';
       // echo $row['first_name']. ' ';
       // echo $row[ 'last_name'].'<br>';
       // echo $row['username'];

	?>


<?php  include("includes/footer.php") ?>	
