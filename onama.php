<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php")  ?> 
<?php  include_once "functions/db.php" ?>
<?php
   
      $sql = "SELECT countsonama FROM user_count WHERE id = 1";

           $result = query($sql);

           confirm($result);
     
          if(row_count($result) == 1){

                 $row = fetch_array($result);
                         
                  $current_count = $row['countsonama'];

                  $new_count = $current_count + 1;

                  $sql = " UPDATE user_count SET countsonama = '$new_count' ";

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
                            <button type="button" class="btn btn-success "><a href="workshop.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Radionice</a></button>
                            <button type="button" class="btn btn-success "><a href="predavanja.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Predavanja</a></button>
                        <!-- <div class="col col-lg-8 text-right"> -->
                        	<button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Aktivnosti</a></button>
                         
                       <!-- </div>  -->
                            <button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Teme</a></button>
                            <button type="button" class="btn btn-success "><a href="index.phtml" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Obuke</a></button> 
                        <!-- <div class="col col-lg-6 text-right"> -->
                        	
                        	
                         
                       <!-- </div> -->
                       <!-- <div class="col col-lg-4 text-right"> -->
                       	   
                         
                       <!-- </div>  -->

                       <!-- <div class="col col-lg-2 text-right "> -->
                       		<button type="button" class="btn btn-success"><a href="zirafe.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">Kutak za žirafe</a></button>
                       	        
                             
                       <!-- </div> -->
                       <!-- <div class="col col-lg-2 text-right"> -->
                       	    <button type="button" class="btn btn-success "><a href="onama.php" class="btn-success" style="font-family: cursive, sans-serif; font-size:14px;">O nama</a></button>
                       </div>

         </div> <!--end row tag logo plus buttons-->
         <div class="container-fluid text-center shadow-lg p-3 mb-5 rounded" style="background-color: #F8F9FA">
             <div class="row">
                <div class="col">
                	<a href="index.phtml"><img src="images/vidime_work2.jpg" class="rounded"  width="250"/></a>
                    <h4>Riječ osnivača</h4>
                    <p class="text-left">Fondaciju VidiMe vodi njen osnivač i direktorka Ranka Šarenac zajedno sa Upravnim odborom koji čine:</p>
                    <ul class="text-left">
                    	<li>Dr. Prim. Budimka Šarenac, predsjednica, Risan, Crna Gora.</li>
                    	<li>Leif Svensson, novinar i sociolog, Stokholm, Švedska.</li>
                    	<li>Enrico Ezio Possenti, stručnjak za komunikaciju, Evropska investiciona banka, Luksemburg.</li>
                    </ul>
                    <p class="text-left">U ispunjavanju svojih strateških ciljeva i misije Fondaciji pomaže i Savjetodavni odbor u sledećem sastavu: </p>
                    <ul class="text-left">
                    	<li>Smiljana Cila Grujić, psiholog i psihoterapeut, UNICEF-Kancelarija za prevenciju nasilja, Beograd, Srbija.</li>
                    	<li>Tatjana Rajić, arhitekta i koordinatorka programa, NVO “EXPEDITIO” Kotor, Crna Gora.</li>
                    	<li>Dragutin Šćekić, direktor, O.Š. “Veljko Drobnjaković” Risan, Crna Gora.</li>
                    </ul>
                </div>
                <div class="col-5">
                    <h4>Ciljevi fondacije su:</h4>
                   <img src="images/porodica.jpg" class="img-responsive img-circle margin float-center" style="display:inline" alt="Bird" width="200">
                   <ul class="text-left">
                   	   <li>Podsticanje dječijeg razvoja kroz razvoj uzajamnog poštovanja i razumijevanja.</li>
                   	   <li>Promovisanje vaspitnog pristupa zasnovanog na principima nenasilne komunikacije, aktivnog roditeljstva i uvažavanja dječije kompetencije u skladu sa uzrastom.</li>
                   	   <li>Razvijanje unutrašnje (intrinzičke) motivacije kod djece i otvorenog duha za nova saznanja ("growth mindset") i za uvažavanje različitosti.</li>
                   	   <li>Poštovanje Konvencije o pravima djeteta</li>
                   </ul>
                   <hr class="invisible">
                   <img src="images/skola.jpg" class="img-responsive img-circle margin float-center" style="display:inline" alt="Bird" width="280">

                </div>
                <div class="col">
                    <h4>Djelatnosti fondacije</h4>
                    <ul class="text-left">
                    	<li>Obuke, seminari, škole, predavanja, forumi, radionice za roditelje, staratelje, profesionalne edukatore i djecu; </li>
                    	<li>Priprema i objavljivanje materijala i tekstova na temu nenasilne komunikacije, aktivnog roditeljstva i uvažavanja dječije kompetencije u skladu sa uzrastom; </li>
                    	<li>Uvođenje principa nenasilne komunikacije u vaspitno obrazovne ustanove;</li>
                    	<li>Uspostavljanje partnerskih odnosa između roditelja, vaspitno obrazovnih institucija i ostalih zainteresovanih strana;</li>
                    	<li>Podrška aktivne uloge Savjeta roditelja u funkcionisanju vaspitno obrazovnih ustanova;</li>
                    	<li>Tematska okupljanja i rasprave;</li><li>Savjetovanje i konsultacije za pojedince i grupe;</li> 
                        <li>Studijske grupe i putovanja za izučavanje tema vezanih za dobrobit djece;</li>  
                        <li>Organizovanje dječjih okupljanja na različitim jezicima, na različitim mjestima (parkovi, kafići...) i na različite načine (predstave, priče...)</li>
                        <li>Sve ostale djelatnosti koje mogu doprinijeti ostvarivanju ciljeva fondacije.</li>
                    </ul>  
                </div>
             </div>
             <div class="row"> <!--start row tag-->

                        <div class="col-md-6 offset-md-3">
                          <!--   <a href="#"><img src="images/vidime_work1.jpg" class="rounded"  width="460" height="238"/></a> -->
                            <!-- <h4>Ensuring the compassion of the workshop</h4> -->

                            <!-- <p style="font-size: 16px"><a href="#" class="text-warning">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.
                         </a></p> -->
                        </div>

                  </div> <!-- end row tag-->
         </div>
         <!-- <div class="container-fluid text-center" style="background-color: #F8F9FA;"> -->
             <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">  -->

             <!-- <h3>One word... WOW!!</h3> -->

             <!-- <a href="#"><img src="images/vidime.jpg" class="shadow-lg p-3 mb-5 rounded" style="display:inline"  width="320" height="118"/></a> -->

             <!-- <h5>Vaspitanje potomstva nije samo blablabla?</h5> -->
             <!-- <h6>Gde Me Sve Mozete Naci?</h6> -->

         <!-- </div> end container-fluid tag -->

              <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

       <!-- <div class="row shadow p-3 mb-5 bg-white rounded"> -->   <!--start row div -->
          <!-- <div class="col-sm-4">
                  <a href="#"><img src="images/cody-board-770126-resize.jpg" class="rounded"  width="320" height="210"/></a>
                  <h4><a class="text-success" href="#">Kolumne</a></h4>
                  <p style="font-size: 16px"><a class="text-secondary" href="#">
                      Lorem ipsum dolor sit amet, eu pro idque petentium. Id hinc atqui duo, sit ea mucius petentium. Ex veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.   
                  </a></p>
          </div> -->
          <!-- <div class="col-sm-4">
                  <a href="#"><img src="images/steve-halama-770717-resize.jpg" class="img-responsive img-circle margin  "  width="300" height="180"/></a>

                  <h4><a class="text-success" href="#">Vas Ugao Na Sredini</a></h4>
                
                  <p style="font-size: 16px"><a class="text-secondary" href="#">
                      Lorem ipsum dolor sit amet, eu pro idque petentium. Id hinc atqui duo, sit ea mucius petentium. Ex veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.   
                  </a></p>

          </div>

          <div class="col-sm-4">
                  <a href="#"><img src="images/tomas-yates-770192-resize.jpg" class="img-thumbnail"  width="320" height="210"/></a>

                  <h4><a class="text-success" href="#">Ars Vivendi</a></h4>
                  
                  <p style="font-size: 16px"><a class="text-secondary" href="#">
                      Lorem ipsum dolor sit amet, eu pro idque petentium. Id hinc atqui duo, sit ea mucius petentium. Ex veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.   
                  </a></p> -->
               <!-- </div> -->

          <!-- </div>   -->
      <!-- </div> -->
      <!-- <div class="container-fluid text-center shadow-lg p-3 mb-5 rounded" style="background-color: #91D798;">
           
         <h3><a class="text-dark" href="#"> ABOUT VIDI ME</a></h3>

              
      </div> -->  


<?php  include("includes/footer.php") ?> 
