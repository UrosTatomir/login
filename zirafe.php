<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php")  ?> 
<?php  require_once "functions/db.php" ?>
<?php
   
      $sql = "SELECT countszirafe FROM user_count WHERE id = 1";

           $result = query($sql);

           confirm($result);
     
          if(row_count($result) == 1){

                 $row = fetch_array($result);
                         
                  $current_count = $row['countszirafe'];

                  $new_count = $current_count + 1;

                  $sql = " UPDATE user_count SET countszirafe = '$new_count' ";

                  $result = query($sql);
                  confirm($result);

                  // echo $new_count; 

            }           
  ?> 

        <div class="row justify-content-md shadow p-3 mb-5 bg-warning rounded"> <!--start row tag-->
                       
                        <div class="col col-lg-2 float-left">
                      
                            <a href="index.phtml"><img src="images/vidi_me_mini.jpg" class="img-responsive img-circle margin" style="display:inline"  width="22"/></a>
                       </div>

                       <div class="col col-lg-10 text-left">
                            <button type="button" class="btn btn-success "><a href="projekti.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Projekti</a></button>
                            <button type="button" class="btn btn-success "><a href="projekti.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Saradnja</a></button>
                       <!-- </div> -->
                            <button type="button" class="btn btn-success "><a href="radionice.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Radionice</a></button>
                            <button type="button" class="btn btn-success "><a href="predavanja.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Predavanja</a></button>
                        <!-- <div class="col col-lg-8 text-right"> -->
                            <button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Aktivnosti</a></button>
                            <button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Teme</a></button>
                         
                       <!-- </div>  -->
                        <!-- <div class="col col-lg-6 text-right"> -->
                          <button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Obuke</a></button> 
                          
                         
                       <!-- </div> -->
                       <!-- <div class="col col-lg-4 text-right"> -->
                           
                         
                       <!-- </div>                   -->
                         <button type="button" class="btn btn-success"><a href="zirafe.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Kutak za žirafe</a></button>
                       <!-- <div class="col col-lg-2 text-right "> -->
                               
                             
                       <!-- </div> -->
                       <!-- <div class="col col-lg-2 text-right"> -->
                            <button type="button" class="btn btn-success "><a href="onama.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">O nama</a></button>
                       </div>

         </div> <!--end row tag-->
         <div class="container-fluid text-center shadow-lg p-3 mb-5 rounded" style="background-color: #F8F9FA">
             <div class="row">
                <div class="col">
                    <h4>Kutak za Žirafe</h4>
                    <p style="font-size: 14px">Nenasilna komunikacija.</p>
                    <p style="font-size: 14px">Dnevna inspiracija.</p>
                    <p style="font-size: 14px">Ideje za radionice(Na ovoj stranici će se redovno pojavljivati neke nove igre i vežbe koje mogu da koriste nastavnici kada žele da organizuju radionice sa đacima).</p>
                    <p style="font-size: 14px">Godisnja okupljanja.</p>
                    <p style="font-size: 14px">Svi učesnici obuke iz nenasilne komunikacije pozvani su najjmanje dva puta godišnje na susrete na kojima se razmenjuju iskustva i analiziraju moguća rešenja različitih problema u primeni saosjećajnog pristupa u školama.</p>
                </div>
                <div class="col-5">
                    <h4>Ko Sam Ja</h4>
                   <img src="images/zirafa1.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="320" height="314">
                    <!-- <img class="background-image" src="images/oumaima-ben-chebtit-resize.jpg"
                    width="1020"/> -->
                      <!-- <img class="rounded-circle" src="images/kuca-circle.jpg"   width="960" height="600"/> -->
                    <!-- <p class="btn">Climbing</p>
                    <p class="btn-2">Diving...</P> -->
                    <h4>Ja Sam (Rista)Avanturista</h4>
                </div>
                <div class="col text-left">
                    <h4>Socialni Problemi Odrastanja</h4>
                    <p style="font-size: 14px">Na ovoj stranici će se redovno pojavljivati neke nove igre i vežbe koje mogu da koriste nastavnici kada žele da organizuju radionice sa đacima..</p> 
                    <form action="zirafe.php" method="post">
                              <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>
                              </div>
                                                           
                              <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Prijava za žirafe</button>
                    </form>  
                </div>
             </div>
             <div class="row"> <!--start row tag-->

                        
             </div>
             <!-- workshops_users-->
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

                                       // $to ="smtp.mailtrap.io";
                                       // $headers="From:vidime@vidime.org".$email;

                                       //  if(mail($to,$headers,$email)){
                                       //    echo"e-mail sent successfully, we will get back to you soon";
                                       //  }

                                      } 
                               }                                                     
                            ?>
            </div>

                  <!-- </div> --> <!-- end row tag-->
         <!-- </div> -->
         <!-- <div class="container-fluid text-center" style="background-color: #F8F9FA;">
             <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> 

             <h3>One word... WOW!!</h3>

             <a href="#"><img src="images/vidime.jpg" class="shadow-lg p-3 mb-5 rounded" style="display:inline"  width="320" height="118"/></a>

             <h5>Vaspitanje potomstva nije samo blablabla?</h5>
             <h6>Gde Me Sve Mozete Naci?</h6>

         </div> --> <!--end container-fluid tag-->

              <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

      <!-- <div class="row shadow p-3 mb-5 bg-white rounded"> -->   <!--start row div-->
          <!-- <div class="col-sm-4">
                  <a href="#"><img src="images/cody-board-770126-resize.jpg" class="rounded"  width="320" height="210"/></a>
                  <h4><a class="text-success" href="#">Kolumne</a></h4>
                  <p style="font-size: 16px"><a class="text-secondary" href="#">
                      Lorem ipsum dolor sit amet, eu pro idque petentium. Id hinc atqui duo, sit ea mucius petentium. Ex veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.   
                  </a></p>
          </div>
          <div class="col-sm-4">
                  <a href="#"><img src="images/steve-halama-770717-resize.jpg" class="img-responsive img-circle margin  "  width="300" height="180"/></a>

                  <h4><a class="text-success" href="#">Vas Ugao Na Sredini</a></h4>
                
                  <p style="font-size: 16px"><a class="text-secondary" href="#">
                      Lorem ipsum dolor sit amet, eu pro idque petentium. Id hinc atqui duo, sit ea mucius petentium. Ex veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.   
                  </a></p>

          </div> -->

          <!-- <div class="col-sm-4">
                  <a href="#"><img src="images/tomas-yates-770192-resize.jpg" class="img-thumbnail"  width="320" height="210"/></a>

                  <h4><a class="text-success" href="#">Ars Vivendi</a></h4>
                  
                  <p style="font-size: 16px"><a class="text-secondary" href="#">
                      Lorem ipsum dolor sit amet, eu pro idque petentium. Id hinc atqui duo, sit ea mucius petentium. Ex veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.   
                  </a></p>
              

          </div> -->  
      <!-- </div> -->
      <!-- <div class="container-fluid text-center shadow-lg p-3 mb-5 rounded" style="background-color: #91D798;"> -->
           
         <!-- <h3><a class="text-dark" href="#"> ABOUT VIDI ME</a></h3> -->

              
      <!-- </div>   -->


         <?php  include("includes/footer.php") ?>