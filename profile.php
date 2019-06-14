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

                      <h2>Your Previous Complaints</h2>
                      <br><br><br>
                     <?php
                      $db=mysql_query("SELECT * FROM `cmp_log` where email='$email' order by date desc");
                      while($data=mysql_fetch_array($db)) {
                       echo"<div class='col-lg-4'>
                        <div class='quotes blg text-center'>
						<h4>RefNO:".$data['ref_no']."</h4>
						<h4>DEPT:".$data['subject']."</h4>
                            <p>".$data['complain']."</p>
							<p>Complaint date: ".$data['date']."</p>
							<p>Solve date: ".$data['solvedate']."</p>
							<h5>STATUS:".$data['status']."</h5>
                        </div>
                      </div>";
                     }
                    ?>
   

                    <div class="col-lg-12">
                        <p>Your complaint will be recorded and dealt with by the most appropriate team or person in the area.</p>
                    </div>

             <!-- <div class="content">
                <div class="col-lg-12">
                  <div class="posts">
                    <?php
                      /*$db=mysql_query("SELECT * FROM `posts` ");
                      while($data=mysql_fetch_array($db)) {
                      echo "<br> <br> <div class='quotes glow'> ";
                      echo "<h4 class='heading'> Heading : ".$data['subject']."</h4>";
                      echo "<p> Story : ".$data['story']."<br><br>";
                      echo " Posted By : ".$data['session_name']."<br>";
                      echo "</p></div><br><br>";
                     }*/
                    ?>
                  </div>
                </div>
              </div>-->


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
