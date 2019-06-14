<?php

  require 'core/session.php';
  require 'core/config.php';
  include 'core/user_key.php';

//  require 'core/redirect.php';
   $email=$_SESSION['email'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" href="files/img/ico.ico">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <link rel="stylesheet" href="files/css/custom.css">
  </head>
  <body>

      <div class="cover">
        <nav class="nav_u">
          <ul>
            <li><a href="message.php">Complain</a></li>
			 <li><a href="logout.php" onClick="javascript:return confirm ('Are you really want to logOut ?');">Logout</a></li>
          </ul>
        </nav>

        <p class="text-right pdd">
           <?php echo date("d M , l "); ?>
        </p>
      </div>

  <div class="animated fadeIn">

      <?php require 'nav-profile.php'; ?>

          <div class="content">
            <div class="container">

                  <div class="col-lg-12">

                    <table class="table">
    <thead>
      <tr>
        <th>Admins</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Anshul Jaiswal</td>	
      </tr>
	  <tr>
	  <td></td>
	  </tr>
	   <tr>
	   <td></td>
	  </tr>
	   <tr>
	   <td></td>
	   </tr>
	   <tr>
	   <td></td>
	   </tr>
	   <tr>
	   <td></td>
	   </tr>
	   <tr>
		<td></td>
	   </tr>
	   <tr>
	  <td></td>
	   </tr>
    </tbody>
  </table>


            </div>



          </div>
        </div>
      </div>
                <footer>
                    <br><br>NITC <?php echo $web_name; ?>
                </footer>





  <?php include 'core/jsscript.php'; ?>
  </body>
</html>
