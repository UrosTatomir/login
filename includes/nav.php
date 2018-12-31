<nav class="navbar navbar-expand navbar-dark bg-dark navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-warning" href="index.php">Vidi Me</a>
            <!-- <a class="navbar-inline" href="#"><img src="images/vidime_logo.jpg" class="img-responsive img-circle margin" style="display:inline" width="29" height="45"/></a> -->
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="navbar-nav">
              
              <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only"></a></li>
              <!-- <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li> -->
              <li><a class="nav-link" href="info.php">Info</a></li>
              
              <?php if(logged_in()): ?>
            

              

              <!-- <li><a class="nav-link" href="download.php">Download</a></li>  -->
            
              <li><a class="nav-link" href="logout.php">Logout</a></li>

              <?php endif; ?>

              <?php if(!logged_in()): ?>
             
              <li><a class="nav-link" href="login.php">Login</a></li>

              <?php endif; ?>           
            </ul>
            <div class="p-2 float-right">
               <button type="button" class="btn btn-outline-dark"><a href="index.php" class="badge badge-success">English</a></button>
               <button type="button" class="btn btn-outline-dark"><a href="index.sr.php" class="badge badge-info">Serbian</a></button>

                 <div class="p-2 mb-2 bg-dark text-white float-right">
                    <?php if(logged_in()){
                        $email = $_SESSION['email'];
                          echo $email;
                        }
                    ?>
                  </div>
                <button type="button" class="btn btn-outline-warning"><a href="download.php" class="btn-outline-warning">Download</a></button>
            </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>