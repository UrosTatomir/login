<?php  include("includes/header.php") ?>

<?php  include("includes/nav.php")	?> 
	

	<div class="jumbotron">

		<h1 class="text-center"> Home Page</h1>

	</div>


	<?php
       $sql = "SELECT * FROM users";
       $result = query($sql);

       confirm($result);

       $row = fetch_array($result);

       echo $row[ 'id'].'<br>';
       echo $row[ 'first_name']. ' ';
       echo $row[ 'last_name'].'<br>';
       echo $row['username'];

	?>


<?php  include("includes/footer.php") ?>	
