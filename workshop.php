<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php") ?>
<?php  include_once "functions/db.php" ?>
  <?php   
      $sql = "SELECT countsinfo FROM user_count WHERE id = 1";

           $result = query($sql);

           confirm($result);
     
          if(row_count($result) == 1){

                 $row = fetch_array($result);
                         
                  $current_count = $row['countsinfo'];

                  $new_count = $current_count + 1;

                  $sql = " UPDATE user_count SET countsinfo = '$new_count' ";

                  $result = query($sql);
                  confirm($result);

                  // echo $new_count;            
            }           
  ?>

	<div class="jumbotron-xl bg-light">
		    <?php
          // if(logged_in()){
         
          // } else {
          // 	redirect("index.php");
          // }
          ?>
       <div class="container-fluid-xl">

          <div class="row justify-content-md shadow p-3 mb-5 bg-warning rounded"> <!--start row tag-->
                   
                   <div class="col col-lg-2 float-right">
                  
                        <a href="index.phtml"><img src="images/vidi_me_mini.jpg" class="img-responsive img-circle margin" style="display:inline"  width="22"/></a>
                   </div>

                   <div class="col col-lg-10 text-left">
                        <button type="button" class="btn btn-success "><a href="projekti.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Projekti</a></button>
                        <button type="button" class="btn btn-success "><a href="projekti.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Saradnja</a></button>
                   <!-- </div> -->
                        <button type="button" class="btn btn-success "><a href="workshop.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Radionice</a></button>

                        <button type="button" class="btn btn-success "><a href="predavanja.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Predavanja</a></button>
                    <!-- <div class="col col-lg-8 text-right"> -->
                        <button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Aktivnosti</a></button>
                        <button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Teme</a></button>
                     
                   <!-- </div>  -->
                    <!-- <div class="col col-lg-6 text-right"> -->
                      <button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Obuke</a></button> 
                                                            
                     <button type="button" class="btn btn-success"><a href="zirafe.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Kutak za žirafe</a></button>
                   <!-- <div class="col col-lg-2 text-right "> -->
                           
                         
                   <!-- </div> -->
                   <!-- <div class="col col-lg-2 text-right"> -->
                        <button type="button" class="btn btn-success "><a href="onama.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">O nama</a></button>
                   </div>

             </div>

       	  <div class="row justify-content-md-center"> <!--start row tag-->
                   
                   <div class="col col-lg-2">
                  
                        <!-- <a href="#"><img src="images/vidi_me_mini.jpg" class="img-responsive img-circle margin" style="display:inline"  width="50"/></a> -->
                   </div> 

                   <div class="col col-lg-2"> <!-- empty col -->

                   </div> <!-- empty col -->
                   
                   <div class="col-md-auto">
                         
                         <!-- <h1 class="text-center" style="font-family: Comic Sans MS,cursive, sans-serif; font-size: 90px; color: #BF04C8;">Vidi Me</h1> -->
                         <!-- <h4 class="text-center"><a href="#" class="text-info">Resize the browser window to see the effect</a></h4> -->
                   </div>                

                   <div class="col col-lg-2">
                         <!-- <h4 class="text-center">Vidi-Me Publications</h4> -->
                   </div>

             </div> <!--end row tag-->
              <!-- <p>download files</p>
              <button class="btn btn-outline-light" type="button"><a href="images/bird.jpg" download>Download</a></button> -->
             <div class="row">
          	       <div class="col-md-4">
                    <h4>Educating with the compassion, Workshop, video tutorials</h4>
                         <div class="list-group">
                              
                              
                               <div class="list-group-item list-group-item-action flex-column align-items-start active">
                                    <div class="d-flex w-100 justify-content-between">
                                      <h5 class="mb-1">Workshop</h5>

                                      <!-- <small>3 days ago</small> -->
                                       <form action="workshop.php" method="post">
                                            <div class="form-group">
                                            <input type="email" id="form1" name="email" class="form-control" placeholder="Enter email" required>
                                            </div>
                                                       
                                            <button type="submit" name="Submit" value="Submit"  class="btn btn-primary"><small>Check-in</small></button>
                                       </form>
                                       <?php 
                                                                                    
                                            if(isset($_POST['Submit'])){
                                                $email = $_POST['email'];
                                              $sql1= "SELECT id FROM workshop_1 WHERE email = '$email'";
                                                $result1 = query($sql1);
                                                   if(row_count($result1) == 1){
                                                    // return true;
                                                    echo"<small>Sorry that email already is exists</small>"; 
                                                    }else{
                                                     $sql1 = "INSERT INTO workshop_1(email) VALUES ('$email')";
                                                     $result1 = query($sql1);
                                                     confirm($result1);
                                                      echo"<small>Your email are inserted</small>";                              
                                                    } 
                                             } 
                                                                               
                                       ?> 
                                    </div>
                                    
                                    <small>Date & hours,workshop and so on u kratkim crtama</small>

                                </div>
                                <div class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                      <h5 class="mb-1">Workshop_soon</h5>
                                     
                                    </div>                                  
                                    <small class="text-muted">Date & hours,workshop and so on u kratkim crtama</small>
                                </div>

                                <div class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                      <h5 class="mb-1">Workshop_next month</h5>
                                      
                                    </div>
                                    
                                    <small class="text-muted">Date & hours,workshop and so on u kratkim crtama</small>
                                </div>

                                <div class="list-group-item list-group-item-action flex-column align-items-start">
                                 <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">List group workshop </h5>
                                    <!-- <small class="text-muted">3 days ago</small> -->
                                  </div>
                                  
                                  <small class="text-muted">Date & hours,workshop and so on u kratkim crtama</small>
                                </div>    
                          <!-- <p style="font-size: 16px"><a href="#" class="text-warning">Lorem ipsum dolor sit amet, eu pro idque  
                           petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel.
                       </a></p> -->
                      </div>
                  </div>
                  <div class="col-md-4">
                  <h4>Workshop</h4>
                        <ul class="list-group list-group-flush">
                              <li class="list-group-item"><a href="#">Cras justo odio</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                              <li class="list-group-item"><a href="#"> Dapibus ac facilisis in</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                              <li class="list-group-item"><a href="#">Morbi leo risus</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                              <li class="list-group-item"><a href="#">Porta ac consectetur ac</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                              <li class="list-group-item"><a href="#">Vestibulum at eros</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>
                        </ul>
                  </div>
                  <div class="col-md-4 offset-md-4>">
                    <h4>Lectures</h4>
                        <ul class="list-group list-group-flush">
                              <li class="list-group-item"><a href="#">Cras justo odio</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                              <li class="list-group-item"><a href="#"> Dapibus ac facilisis in</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                              <li class="list-group-item"><a href="#">Morbi leo risus</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                              <li class="list-group-item"><a href="#">Porta ac consectetur ac</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>

                              <li class="list-group-item"><a href="#">Vestibulum at eros</a><button class="btn btn-light btn-sm" type="button"><a href="images/bird.jpg" download>(Download)</a></button></li>
                        </ul>

                    </div>
                    <!-- <div class="col-md-4 ">
                    
                       
                    </div> -->
                       <!-- <p style="font-size: 16px"><a href="#" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                         petentium. Id hinc atqui duo, sit ea mucius petentium
                     </a></p> -->
                    


            </div>
       </div>
	</div>  <!-- end jumbotron-->


<?php  include("includes/footer.php") ?>