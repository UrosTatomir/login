<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php")  ?> 
<?php  include_once "functions/db.php" ?>
<?php
   
      $sql = "SELECT countsprojekt FROM user_count WHERE id = 1";

           $result = query($sql);

           confirm($result);
     
          if(row_count($result) == 1){

                 $row = fetch_array($result);
                         
                  $current_count = $row['countsprojekt'];

                  $new_count = $current_count + 1;

                  $sql = " UPDATE user_count SET countsprojekt = '$new_count' ";

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

         </div> <!--end row tag logo plus buttons-->
         <div class="container-fluid text-center shadow-lg p-3 mb-5 rounded" style="background-color: #F8F9FA">
             <div class="row">
                <div class="col">
                	<!-- <a href="index.phtml"><img src="images/vidime_work2.jpg" class="rounded"  width="250"/></a> -->
                    <h4>Projekti  Vidi Me</h4>
                    <p class="text-left">U 2014. godini realizovan je projekat “Nenasilna komunikacija u crnogorskom osnovnom obrazovanju” uz pomoć Fonda za otvoreno društvo. U projektu su učestvovale osnovne škole sa područja opštine Kotor:</p>
                    <ul class="text-left">
                    	<li><a href="index.phtml">O.Š. “Savo Ilić” u Dobroti, Kotor.</a></li>
                    	<li><a href="index.phtml">O.Š. “Njegoš”, Kotor.</a></li>
                    	<li><a href="index.phtml">O.Š. “Veljko Drobnjaković”, Risan.</a></li>
                      <li><a href="index.phtml">O.Š. “Ivo Visin”, Prčanj.</a></li>
                      <li><a href="index.phtml">O.Š. “Nikola Đurković”, Radanovići.</a></li>
                    </ul>
                    <img src="images/vidime_radionica1.jpg" class="img-thumbnail float-center" style="display:inline" alt="Vidime_Radionica" width="300">
                    <p class="text-left">Cilj je bio da se nastavnicima i roditeljima koji su članovi Savjeta roditelja predstave osnove nenasilne komunikacije kao i da se nastavnici osposobe da organizuju radionice nenasilne komunikacije za učenike.</p>
                    <p class="text-left"> Primjena ovog modela može dovesti do poboljšanja medjuljudskih odnosa u kolektivu i suzbijanja konfliktnih situacija kako u školi tako i u porodici.</p>
                    <p class="text-left">U sklopu projekta uspostavljen je i kontakt sa nastavnicima iz osnovne škole u Stokholmu (Švedska) koja je zasnovana na principima nenasilne komunikacije.</p>
                </div>
                <div class="col-5">
                    <h4>Integralna obuka</h4>
                   <!-- <img src="images/porodica.jpg" class="img-responsive img-circle margin float-center" style="display:inline" alt="Bird" width="200"> -->
                   <p class="text-left">Integralna obuka za nastavnike trajala je šest dana, a obuhvatila je sledeće teme: </p>
                   <ul class="text-left">
                   	   <li>Empatija, aktivno slušanje, 4 komponente NNK.</li>
                   	   <li>Upoznavanje sa načinima primjene nenasilne komunikacije na profesionalnom i ličnom planu.</li>
                   	   <li>Osvješćivanje komunikacije koja blokira saosjećajnost, razvijanje modela opažanja bez procjenjivanja, prepoznavanje i izražavanje osjećanja i potreba, preuzimanje odgovornosti za svoja osjećanja.</li>
                   	   <li>Upoznavanje i korišćenje jezika pozitivne akcije; upoznavanje sa strategijama ovladavanja bijesom.</li>
                       <li>Upoznavanje i provežbavanje načina rješavanja unutrašnjih i spoljašnjih konflikata</li>
                       <li>Upoznavanje sa tehnikama izražavanja zahvalnosti u nenasilnoj komunikaciji.</li>
                   </ul>
                   <hr class="invisible">
                   <img src="images/vidime_slide3.jpg" class="img-responsive img-circle margin float-center" style="display:inline" alt="Bird" width="280">
                   <hr class="invisible">
                   <p class="text-left">Nastavnici su bili oduševljeni kako načinom rada tako i programom obuke, a do kraja školske godine organizovali su radionice sa učenicima.</p>
                   <p class="test-left"> Naknadno je održan i supervizijski sastanak sa nastavnicima da bi im se pružila pomoć u rešavanju problema sa kojima su se suočili.</p>

                </div>
                <div class="col">
                    <hr class="invisible">
                    <!-- <h4>Djelatnosti fondacije</h4> -->
                    <img src="images/vidime_radionica2.jpg" class="img-thumbnail float-center" style="display:inline" alt="Radionica" width="300"/>
                    <hr class="invisible">
                    <p class="text-left">Voditeljica obuke bila je iskusni psiholog i psihoterapeut Smiljana Grujić trenutno zaposlena u kancelariji UNICEFa za prevenciju nasilja u školama republike Srbije. Smiljana se ovom vrstom edukacije bavila više od dvadeset godina i jedna je od trenera koji su blisko sarađivali sa autorom programa obuke "Reči su prozori, a ne zidovi" koji je predstavljen nastavnicima i roditeljima.</p>
                    <p class="text-left">Članovi Savjeta roditelja svih pet kotorskih osnovnih škola imali su priliku da učestvuje u radionici za roditelje, ali je na žalost njihov odaziv bio minimalan i pored velikig truda koji su organizatori projekta i škole uložili da ih animiraju. </p>  
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