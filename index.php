<?php


  require 'core/session.php';
  require 'core/config.php';
  require 'core/redirect.php';

  if(isset($_SESSION['username'])===true){
      header("location:profile.php");
  }

  $message="";

  if(empty($_POST)===false){
  $email = mysql_real_escape_string($_POST['email']);
  $password = mysql_real_escape_string($_POST['password']);
    if(empty($email) || empty($password)){
          header('Location:index.php');
    }else{
        $query1=mysql_query("SELECT * FROM `user` WHERE email='$email' and password='$password'") or die(mysql_error());
		$sub=substr($email,strpos($email,'@')+1);	    
        if($sub=="nitc.ac.in" and mysql_num_rows($query1)>0){
            $_SESSION['email'] = $_REQUEST['email'];
            header('Location:profile.php');
        }else{
			if($sub!="nitc.ac.in")

				{
					$message="Please use NITC mailId";
			}				
			else
            {
				$message="Your username or password is incorrect";
			}
        }
      }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOME  </title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body >

    <div class="animated fadeIn">


    <div class="cover user text-center">
      <br>
      <h2>National Institute of Technology Calicut </h2>
    </div>



      <div class="padd">

        <div class="col-lg-12 text-center">
              <form class="" method="post" autocomplete="off">
                <label for="username"></label>
                <input type="email" name="email" placeholder="Email" id="email">
                <br><br>
                <label for="password"></label>
                <input type="password" name="password" placeholder="password" id="pass">
                <br><br>
                <button type="submit" class="log">Login</button>
                <br><br>
                <span class="red"><?php echo $message; ?></span>
              </form>
              <br>
                Don't have an acccount ? <a href="signup.php">Sign Up  </a>

        </div>
      </div>

      <div class="links">
        <a href="dummy-login.php">Mechanic</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin-login.php">Admin </a>
      </div>

    </div>
    <?php
    include 'footer.php';
    include 'core/jsscript.php';
    ?>


  </body>
</html>
