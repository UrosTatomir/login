<?php

require'./vendor/autoload.php';
require'./vendor/phpmailer/phpmailer/src/PHPMailer.php';

/****************helper functions******************/


function clean($string){


	return htmlentities($string);
}

function redirect($location){

   
    return header("Location: {$location}");

}

function set_message($message){


	if(!empty($message)){

		$_SESSION['message'] = $message;

	}else{

		$message = "";
	}
}

function display_message(){

	if(isset($_SESSION['message'])){

		echo $_SESSION['message'];

        unset($_SESSION['message']);

	}
}

function token_generator(){

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token;

}

function validation_errors($error_message){

$error_message = <<<DELIMITER
       <div class="alert alert-danger alert-dismissible" role="alert">
		    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		    </button><strong>Warning!</strong> $error_message
	   </div>   
DELIMITER;

	        return $error_message;

}

function email_exists($email){

	$sql = "SELECT id FROM users WHERE email = '$email'";

	$result = query($sql);

	if(row_count($result) == 1){

		return true;

	}else{
    
		return false;
	}

}

function username_exists($username){

	$sql = "SELECT id FROM users WHERE username = '$username'";

	$result = query($sql);

	if(row_count($result) == 1){

		return true;

	}else{

		return false;
	}
	
}

function send_email($email=null, $subject=null, $message=null, $headers=null){

    $mail = new PHPMailer\PHPMailer\PHPMailer();

     //Server settings

    $mail->SMTPDebug = 2;                                
    $mail->isSMTP();                                     
    $mail->Host = Config::SMTP_HOST;                               
    $mail->Username = Config::SMTP_USER;                 
    $mail->Password = Config::SMTP_PASSWORD;
    $mail->Port = Config::SMTP_PORT; 
    $mail->SMTPAuth = true;                          
    $mail->SMTPSecure = 'tls'; // ssl 
    $mail->isHTML(true);
    $mail->Charset = 'UTF-8'; 
    $mail->setFrom('info@vidime.org','Uros Tatomir');
    $mail->addAddress($email);                     
     

    //Content                                    
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    if(!$mail->send()){

     echo 'Message could not be sent.';
     // echo 'Message has been sent';
     echo'Mailer Error:'.$mail->ErrorInfo;

    } else {
         echo'Message has been sent.';
    }  

    // return mail($email, $subject, $message, $headers); 

}


/****************validation functions******************/


function validate_user_registration(){

     $errors = [];
     $min = 3;
     $max = 20;
     

	 if($_SERVER['REQUEST_METHOD'] == "POST"){

	 	 // $first_name        = clean($_POST['first_name']);
	 	 // $last_name         = clean($_POST['last_name']);
	 	 $username          = clean($_POST['username']);
	 	 $email             = clean($_POST['email']);
	 	 $password          = clean($_POST['password']);
	 	 $confirm_password  = clean($_POST['confirm_password']);

	 	 // if(strlen($first_name) < $min){

	 	 // 	  $errors[] = "Your First Name cannot be less than {$min} characters";

	 	 // }

	 	 // if(strlen($first_name) > $max){

	 	 // 	  $errors[] = "Your First Name cannot be more than {$max} characters";
	 	 // }


	 	 // if(strlen($last_name) < $min){

	 	 // 	  $errors[] = "Your Last Name cannot be less than {$min} characters";

	 	 // }

	 	 // if(strlen($last_name) > $max){

	 	 // 	  $errors[] = "Your Last Name cannot be more than {$max} characters";
	 	 // }

	 	 if(strlen($username) < $min){

	 	 	  $errors[] = "Your Username cannot be less than {$min} characters";
	 	 }

	 	 if(strlen($username) > $max){

	 	 	  $errors[] = "Your Username cannot be more than {$max} characters";
	 	 }

	 	 if(username_exists($username)){

              $errors[] = "Sorry that username  already is taken";

	 	 }

	 	 if(email_exists($email)){

              $errors[] = "Sorry that email already is registered";

	 	 }

	 	 if(strlen($email) < $min){

	 	 	  $errors[] = "Your email cannot be less than {$min} characters";
	 	 }

	 	 if($password !== $confirm_password){

	 	 	 $errors[] = "Your password fields do not match";

	 	 }

	 	 if(!empty($errors)){

	 	 	 foreach($errors as $error){

	
            echo (validation_errors($error));
   

       
	 	 	 }

	 	 }else {

	 	 	// if(register_user($first_name, $last_name, $username, $email, $password)){
       if(register_user($username, $email, $password)){
	 	 		set_message("<p class='bg-success text-center'>Please check your email or spam folder for activation link</p>");

	 	 		redirect("index.php");

	 	 		
	 	 	} else{

	 	 		set_message("<p class='bg-danger text-center'>Sorry we could not register the user</p>");
               
                redirect("index.php");

	 	 	}
	 	 }

	 }  // POST REQUEST ***********

} //********** Register user Function ***********


// function register_user($first_name,$last_name,$username,$email,$password){
function register_user($username,$email,$password){
      // $first_name = escape($first_name);
      // $last_name  = escape($last_name);
      $username   = escape($username); //escapes special characters
      $email      = escape($email);
      $password   = escape($password);

      if(email_exists($email)){

      	   return false;

      } else if(username_exists($username)){

           return false;

      }  else {

      	  // $password = md5($password);
          $password = password_hash($password,PASSWORD_BCRYPT, array('cost'=>12));  

      	  $validation_code = md5($username . microtime());

          // first_name, last_name -- dont exist;
      	  $sql = "INSERT INTO users(username, email, password, validation_code, active)
      	  VALUES ('$username','$email','$password','$validation_code', 0)";

          $result = query($sql);
          confirm($result);

          
          $subject = "Activate Account";
          $message = "Please click the link below to activate your Account
          <a href=\"". Config::DEVELOPMENT_URL ."/activate.php?email=$email&code=$validation_code\">LINK HERE</a>"; // PRODUCTION_URL

          //http://vidime.org/vidime_app/activate.php?email=$email&code=$validation_code";

          $headers = "From: info@vidime.org";

          send_email($email, $subject, $message, $headers);

      	  return true;
      } 

}


//********** Activate user Function ***********


function activate_user(){


     if($_SERVER['REQUEST_METHOD'] == "GET"){


     	if(isset($_GET['email'])){

             $email = clean($_GET['email']);

             $validation_code = clean($_GET['code']);

             $sql = "SELECT id FROM users WHERE email = '".escape($_GET['email'])."' AND validation_code = '".escape($_GET['code'])."' ";
             $result = query($sql);
             confirm($result);

	          if(row_count($result) == 1){

		          	$sql2 = " UPDATE users SET active = 1, validation_code = 0 WHERE email = '".escape($email)."' AND validation_code ='".escape($validation_code)."' ";
		          	$result2 = query($sql2);
		          	confirm($result2);


		             set_message("<p class='bg-success'>Your account has been activated please login</p>");

		             redirect("login.php");

	     	  } else {

	                 set_message("<p class='bg-danger'>Sorry Your account could not be activated</p>");

		             redirect("login.php");
	     	  }
     	 }

     }

}


/****************validate user login functions******************/



function validate_user_login(){

     $errors = [];
     $min = 3;
     $max = 20;
     

	 if($_SERVER['REQUEST_METHOD'] == "POST"){


	   $email    = clean($_POST['email']);
	   $password = clean($_POST['password']);
	   $remember = isset($_POST['remember']); // isset(clean($_POST['remember']));


       if(empty($email)){

          $errors[] = "Email field cannot be empty";

       }


       if(empty($password)){

          $errors[] = "Password field cannot be empty";

       }


       if(!empty($errors)){

	 	 	 foreach($errors as $error){

	
            echo validation_errors($error);
          
	 	 	 }
	 	 	 
	 	 } else {

            if(login_user($email, $password, $remember)){


               redirect("index.php");


            } else {

               echo validation_errors("Your credentials are not correct");

            }

	     }
   }

}  // function



/**************** User login functions******************/


function login_user($email, $password, $remember){

    $sql ="SELECT password, id FROM users WHERE email ='".escape($email)."' AND active = 1 ";
    $result = query($sql);

    if(row_count($result) == 1){ 

    	  $row = fetch_array($result);

    	  $db_password = $row['password'];

       // if(password_hash($password,PASSWORD_BCRYPT, array('cost'=>12)) === $db_password){
      	// if(md5($password) === $db_password){
         if(password_verify($password, $row['password'])){ 
          		if($remember =="on"){

          			 setcookie('email', $email, time() + 86400);

          		 }
                  $_SESSION['email'] = $email;

                return true;
        }else {

                return false;
        }      
    } 
    
}    // end functions 


/**************** logged in functions******************/

function logged_in(){

    if(isset($_SESSION['email']) || isset($_COOKIE['email'])){


       return true;


    } else {

    	return false;
    	
    }

}  // functions




/**************** Recover Password functions ******************/

function recover_password(){


   if($_SERVER['REQUEST_METHOD'] == "POST"){

      if(isset($_SESSION['token']) && $_POST['token'] === $_SESSION['token']){


      	   $email = clean($_POST['email']);


           if(email_exists($email)){

           	  $validation_code = md5($email . microtime());

           	  setcookie('temp_access_code',$validation_code, time()+900);

           	  $sql = "UPDATE users SET validation_code = '".escape($validation_code)."' WHERE email = '".escape($email)."' ";

           	  $result = query($sql);

              $subject = "Please reset your password";
              $message = "<h2>Here is your password reset code,click the link below or paste in the browser.</h2><h1>{$validation_code}</h1>

              <a href=\"". Config::DEVELOPMENT_URL ."/code.php?email={$email}&code={$validation_code}\">". Config::DEVELOPMENT_URL ."/code.php?email=some@{$email}&code={$validation_code}</a>";
              // PRODUCTION_URL
              //http://vidime.org/vidime_app/code.php?email=$email&code=$validation_code
              
              $headers = "From  info@vidime.org";

              send_email($email, $subject, $message, $headers);
             

                 // echo validation_errors("Email could not be sent");
             

                set_message("<p class='bg-success text-center'>Please check your email or spam folder for a password reset code</p>");

                redirect("index.php");


           } else {

             echo validation_errors("This emails does not exist");

           }

      } else {

         redirect("index.php");

      }

    if(isset($_POST['cancel_submit'])) {


       redirect("login.php");



    }

      // token checks 

   } // post request


} //functions



/**************** Code Validation functions ******************/


function validate_code(){

  if(isset($_COOKIE['temp_access_code'])){


        if(!isset($_GET['email']) && !isset($_GET['code'])){
         
               redirect("index.php");

         } else if(empty($_GET['email']) || empty($_GET['code'])){

               redirect("index.php");

         } else {

             if(isset($_POST['code'])){

               $email = clean($_GET['email']);

               $validation_code = clean($_POST['code']);

               $sql = "SELECT id FROM users WHERE validation_code = '".escape($validation_code)."' AND email = '".escape($email)."' ";

               $result = query($sql);

               if(row_count($result)){

               	setcookie('temp_access_code',$validation_code, time()+900);

                  redirect("reset.php?email=$email&code=$validation_code");

               } else {

                   echo validation_errors("Sorry wrong validation code");

                }              

             }

         }


  } else {

  // temp_access_code

     set_message("<p class='bg-danger text-center'>Sorry your validation cookie was expired</p>");

     }


} // function


/**************** Reset Password Functions ******************/


function password_reset() {

	if(isset($_COOKIE['temp_access_code'])) {


	  if(isset($_GET['email']) && isset($_GET['code'])) {


	        if(isset($_SESSION['token']) && isset($_POST['token'])){ 

	             if( $_POST['token']  === $_SESSION['token']) {

	             	if($_POST['password'] === $_POST['confirm_password']){

                    
                 // $updated_password = md5($_POST['password']);
                  
                $updated_password = password_hash($_POST['password'],PASSWORD_BCRYPT, array('cost'=>12));

                        $sql = "UPDATE users SET password = '".escape($updated_password)."',validation_code = 0, active=1  WHERE email = '".escape($_GET['email'])."'"; 

                          $result = query($sql);
                          confirm($result);

                       set_message("<p class='bg-danger text-center'>Your password has been updated, please login</p>");

                       redirect("login.php");


                      } else {
                    
                        echo validation_errors("Password fields don't match");

                      }  
	             }			     	             
			}

	    } 

     } else {

	          set_message("<p class='bg-danger text-center'>Sorry your time has expired</p>");

	          redirect("recover.php");

	    }


}// function

/**************** Checked workshops Functions ******************/
// function insert_db($email){

//      $email=$_POST['email'];

//      if($_POST['Submit'] =='Submit'){

//          if(email_exist_work()){
 
//           return false;

//       }else{

//         $sql ="INSERT INTO workshop_user(email,work_1,work_2,work_3,work_4,work_5) VALUES('$email',1,0,0,0,0)";
//         $result = query($sql);

//       }

//      }

       
      
//  }

      
 ///-------
// function email_exist_work(){

//  $sql = "SELECT id FROM workshop_user WHERE email = '$email'";

//   $result = query($sql);

//   if(row_count($result) == 1){

//     return true;
//   }else{
//     return false;
//   }    
          
  

//   }     



?>