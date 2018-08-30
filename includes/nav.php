<nav class="navbar navbar-expand navbar-dark bg-dark navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Vidi Me</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li ><a class="nav-link" href="index.php">Home<span class="sr-only"></a></li>
            <!-- <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li> -->

            <?php if(logged_in()): ?>
          

            <li><a class="nav-link" href="admin.php">Admin</a></li>
             
          
            <li><a class="nav-link" href="logout.php">Logout</a></li>

            <?php endif; ?>

            <?php if(!logged_in()): ?>
           
            <li><a class="nav-link" href="login.php">Login</a></li>

            <?php endif; ?>

            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>