
<?php  include("includes/header.php") ?>

<?php  include("includes/navsr.php")	?>
 
<?php  include_once "functions/db.php" ?>	

	<div class="jumbotron-xl bg-light">

  <?php display_message(); ?>
  <?php
   
      $sql = "SELECT countssr FROM user_count WHERE id = 1";

           $result = query($sql);

           confirm($result);
     
          if(row_count($result) == 1){

                 $row = fetch_array($result);
                         
                  $current_count = $row['countssr'];

                  $new_count = $current_count + 1;

                  $sql = " UPDATE user_count SET countssr = '$new_count' ";

                  $result = query($sql);
                  confirm($result);

                  // echo $new_count;            
            }           
  ?>
  
         <div class="container-fluid-xl">

                  <!--end row tag-->

                 <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

                 <div class="row shadow p-3 mb-5 bg-white rounded"> <!--start row tag-->

                        
                        <div class="col-md-4 font-italic">
                          <h4><a href="index.phtml" class="text-success">Saradnja</a></h4>
                          <a href="index.phtml"><img src="images/hands.jpg" class="rounded"  width="200" height="200"/></a>
                          <hr class="invisible">                         
                          <p class=" font-italic" style="font-size:14px">Centar za uzajamno vaspitanje “VidiMe” uspostavio je saradnju sa pet osnovnih škola na području opštine Kotor zahvaljujući projektu “Nenasilna komunikacija u crnogorskom osnovnom obrazovanju” realizovanom 2014 god. uz pomoć Fondacije za otvoreno društvo.<a href="index.phtml" class="text-secondary"></a></p>
                          <p class=" font-italic" style="font-size:14px">U projektu su učestvovale sledeće škole:</p>
                            <ul class="list-group list-group-flush">
                                  <li class="list-group-item"><a href="index.phtml">O.Š. “Savo Ilić” u Dobroti, Kotor.</a></li>
                                  <li class="list-group-item"><a href="index.phtml"> O.Š. “Njegoš”, Kotor.</a></li>
                                  <li class="list-group-item"><a href="index.phtml">O.Š. “Veljko Drobnjaković”, Risan.</a></li>
                                  <li class="list-group-item"><a href="index.phtml">O.Š. “Ivo Visin”, Prčanj.</a></li>
                                  <li class="list-group-item"><a href="index.phtml">O.Š. “Nikola Đurković”, Radanovići.</a></li>
                            </ul>
                            <p class=" font-italic" style="font-size:14px"><a href="https://www.kotorskifestival.me/#!radionice/cg9l">Od 2015 godine uspostavljena je saradnja i sa Kotorskim festivalom pozorišta za djecu tako da se radionice nenasilne komunikacije za djecu uzrasta od 5 – 18 godina održavaju u sklopu pratećeg programa festivala kao i predavanja i radionice za roditelje, staratelje i edukatore.</a></p>
                            <img src="images/vidime-slideshow1.jpg" width="300"/>
                            
                        
                        </div>
                        <div class="col-md-4 font-italic">
                        
                           <h4><a href="index.phtml" class="text-success">Aktivnosti:</a></h4>
                           <div class="list-group">
                                  <a href="workshop.php" class="list-group-item list-group-item-action flex-column align-items-start active">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h4 class="mb-1">Radionice</h4>
                                        <!-- <small>3 days ago</small> -->
                                      </div>
                                      <ul class="mb-1" style="font-size:14px"><li>Radionice nenasilne komunikacije za djecu uzrasta od 5 do 18 godina.</li>
                                      <li>Radionice saosjećajnog roditeljstva za sve koji se bave vaspitanjem djece u porodičnom okruženju</li>
                                      <li>Radionice nenasilne komunikacije za nastavnike i vaspitače i sve one koji su deo vaspitno obrazovnog sistema</li>
                                      </ul>
                                      <!-- <small>Donec id elit non mi porta.</small> -->
                                  </a>
                                  <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h4 class="mb-1">Predavanja</h4>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Predavanja su isto kao i radionice interaktivnog tipa, ali s obzirom ne veći broj učesnika i kraći vremenski okvir daju manje mogućnosti za elaboraciju određenih tema.</p>
                                      <p class="mb-1" style="font-size:14px">Ukoliko ste zainteresovani možete naručiti predavanje na bilo koju temu koja je u vezi sa misijom i ciljevima Centra za uzajamno vaspitanje.</p>
                                      <p class="mb-1" style="font-size:14px">Oko svih administrativnih i logističkih pitanja možemo se dogovoriti tako da omogućimo svima koji to žele da učestvuju.</p>
                                      <!-- <small class="text-muted">Donec id elit non mi porta.</small> -->
                                  </a>
                                  <a href="https://www.kotorskifestival.me/#!prateci-program/c1j0d" class="list-group-item list-group-item-action flex-column align-items-start">
                                      <div class="d-flex w-100 justify-content-between">
                                        <h4 class="mb-1">Teme</h4>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Vaspitanje djece – posebna prilika za roditelje i vaspitače da utiču na nove generacije, Luksemburg </p>
                                      <p class="mb-1" style="font-size:14px">Vaspitni postupci i njihove razvojne posljedice na djecu, Jul 2015, Kotor (u okviru Kotorskog festivala pozorišta za djecu)</p>
                                      <!-- <small class="text-muted">Donec id elit non mi porta.</small> -->
                                  </a>
                                    <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h4 class="mb-1">Obuke</h4>
                                        <!-- <small class="text-muted">3 days ago</small> -->
                                      </div>
                                      <p class="mb-1" style="font-size:14px">Obuka za upravljanje emocijama u nastavi namenjena nastavnicima svih vaspitno-obrazovnih institucija, a predložena od strane Centra za uzajamno vaspitanje “VidiMe” uvrštena je u program stručnog usavršavanja nastavnika od strane Zavoda za školstvo za 2015-16 god.</p>
                                      <!-- <small class="text-muted">Donec id elit non mi porta.</small> -->
                                  </a>                                  
                                    <!-- <a href="index.phtml" class="list-group-item list-group-item-action flex-column align-items-start">
                                     <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Grupa 5</h5>
                                        
                                      </div>
                                      <p class="mb-1" style="font-size:16px">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                      <small class="text-muted">Donec id elit non mi porta.</small>
                                  </a> -->
                              </div>
                           <!-- <p style="font-size: 16px"><a href="#" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p> -->
                        </div>
                        <div class="col-md-4 font-italic">
                        
                           <h4><a href="projekti.php" class="text-success">Projekti</a></h4>
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
                           </div> <!-- end carousel-->
                           <!-- <a href="projekti.php"><img src="images/vidime_work2.jpg" class="rounded"  width="290" height="194"/></a> -->
                           <hr class="invisible">
                           <p style="font-size: 14px"><a href="projekti.php" class="text-secondary">U 2014. godini realizovan je projekat “Nenasilna komunikacija u crnogorskom osnovnom obrazovanju” uz pomoć Fonda za otvoreno društvo. U projektu su učestvovale osnovne škole sa područja opštine Kotor:
                           </a></p>
                           <ul>
                              <li>O.Š. “Savo Ilić” u Dobroti, Kotor.</li>
                              <li>O.Š. “Njegoš”, Kotor.</li>
                              <li>O.Š. “Veljko Drobnjaković”, Risan.</li>
                              <li>O.Š. “Ivo Visin”, Prčanj.</li>
                              <li>O.Š. “Nikola Đurković”, Radanovići.</li>

                           </ul>
                           <p style="font-size: 14px">Cilj je bio da se nastavnicima i roditeljima koji su članovi Savjeta roditelja predstave osnove nenasilne komunikacije kao i da se nastavnici osposobe da organizuju radionice nenasilne komunikacije za učenike.                             
                           </p>
                         <hr class="invisible">
                           <a href="projekti.php"><img src="images/vidime_work3.jpg" class="rounded"  width="290" height="344"/></a>  
                        </div>

                 </div> <!-- end row tag-->
                 <hr class="invisible">
                 <div class="row font-italic shadow p-3 mb-5 bg-white rounded"> <!--start row tag-->

                        <div class="col-md-4">
                            
                            <h4><a href="#" class="text-success">Saosjećajna porodica</a></h4> 
                            <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">Zamislite roditelje koji uspjevaju da savladaju sopstvenu buru osjećanja u trenucima kada ih njihova djeca skroz izbace iz takta i umjesto da izliju svoj bijes na njima oni im pružaju ono što im je najjpotrebnije, a to je istinsko razumijevanje.</a></p>
                            <a href="index.phtml"><img src="images/porodica.jpg" class="rounded"  width="290"/></a>
                            <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">“VidiMe” nudi radionice i ljetnju školu saosjećajnog roditeljstva kao i online podršku tokom cijele godine.</a></p>
                        </div>

                        <div class="col-md-4">
                            <h4><a href="index.phtml" class="text-success">Kutak za žirafe</a></h4>
                            <a href="index.phtml"><img src="images/zirafa1.jpg" class="rounded"  width="280"/></a> 
                            <hr class="invisible">
                            <ul style="font-size: 14px"><a href="index.phtml" class="text-secondary">
                              <li>Nenasilna komunikacija</li>
                              <li>Dnevna inspiracija</li>
                              <li>Ideje za radionice</li>
                              <li>Godišnja okupljanja</li>
                            </a></ul>
                            <form action="index.sr.php" method="post">
                              <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>
                              </div>
                                                           
                              <button type="submit" name="Submit" value="Submit" class="btn btn-primary">Prijava za žirafe</button>
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
                            <h4><a href="index.phtml" class="text-success">Saosjećajna škola</a></h4>
                            
                            <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">Zamislite školu u kojoj nastavnici ne viču, ne kažnjavaju učenike, ne prete već se trude da ih razumeju i da im pomognu da svađe i nesuglasice rješavaju mirnim putem (Ubaciti link za NVC u školi video).
                         </a></p>
                            <p style="font-size: 14px"><a href="index.phtml" class="text-secondary">“VidiMe” nudi obuku za nastavnike iz nenasilne komunikacije uz prateći program podrške kako online tako i uživo na kojima se razmenjuju iskustva i analiziraju moguća rešenja različitih problema u primeni saosjećajnog pristupa u školama. (link za godišnja okupljanja)</a></p>

                        </div>

                 </div> <!-- end row tag-->

                 

                  
                 <!-- <div class="row shadow p-3 mb-5 bg-white rounded"> --> <!--start row tag-->

                     <!-- <div class="col-sm-2" style="background-color:lavender;"> -->

                         <!-- <h4 class="text-center"><a href="index.phtml">Novosti</a></h4>
                         <p style="font-size: 16px"><a href="index.phtml" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p>


                     </div> -->
                     <!-- <div class="col-sm-4" style="background-color:lavenderblush;">

                         <h4 class="text-center"><a href="index.phtml"> Prirucnici</a></h4>
                            <p style="font-size: 16px"><a href="index.phtml" class="text-secondary">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.
                         </a></p>

                      </div>
                      <div class="col-sm-4" style="background-color:lavenderblush;">

                         <h4 class="text-center"><a href="index.phtml">Izdanja</a></h4>
                          <p style="font-size: 16px"><a href="index.phtml" class="text-secondary">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentiumEx veri utamur mel, has movet fastidii repudiare ad. Eu ius enim rationibus, ex pri erat principes. Te purto brute quo, per odio deseruisse ut. Solet quidam essent vis ne.
                         </a></p>

                      </div>
                      <div class="col-sm-2" style="background-color:lavender;">

                         <h4 class="text-center"><a href="index.phtml">Radionice</a></h4>
                          <p style="font-size: 16px"><a href="index.phtml" class="text-success">Lorem ipsum dolor sit amet, eu pro idque  
                             petentium. Id hinc atqui duo, sit ea mucius petentium
                         </a></p>

                      </div> -->
               <!-- </div> --> <!--end row tag-->
         </div> <!--end container fluid tag-->

         <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->
            
	</div> <!-- end jumbotron div -->


<?php  include("includes/footer.php") ?>

