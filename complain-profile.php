<?php

  require 'core/session.php';
  require 'core/config.php';
  include 'core/user_key.php';
 $session=$_SESSION['email'];
//  require 'core/redirect.php';

 ?>
<!DOCTYPE html>
<html lang="en">
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
            <li><a href="#">Profile</a></li>
            <li><a href="message.php">Message</a></li>
          </ul>
        </nav>

        <p class="text-right pdd">
           <?php echo date("d M , l "); ?>
        </p>
      </div>

  <div class="animated fadeIn">

      <?php require 'nav-profile.php'; ?>
	
	  
  
    
		
	
									 <?php
            $query1=mysql_query("SELECT * FROM `circle` WHERE email='manishsahu8696@gmail.com'");
            while( $arry=mysql_fetch_array($query1) ) {
              $id=$arry['id'];
              $fname=$arry['name'];
              $username=$arry['username'];
              $email = $arry['email'];
			  $mob = $arry['mobile'];
			  $roll = $arry['nitcId'];
			  $dep = $arry['department'];
                 }
									?>
                <div class="col-md-8" >
				  <table style="font-size:20px;">
				  <tr>
				  <td>
                    <strong>Name: </strong></td><td><?php echo $fname ?></td>
					</tr>
					
                    <tr>
					<td><strong>Email: </strong></td><td><?php echo $email; ?></td>
					</tr>
                    <tr>
					<td><strong>Mobile: </strong></td><td><?php echo $mob; ?></td>
					</tr>
					
					<tr>
					<td><strong>Department: </strong></td>
					<td><?php echo $dep; ?></td>
					</tr>
					<tr>
					
                     <td><strong>NITC-ID: </strong></td><td><?php echo $roll; ?></td>
					 </tr>
					 </table>
					<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModa">Change Password</button>
					  <div class="about_data" >
                                    <h3 class="mgbt-xs-15 mgtp-10 font-semibold">
                                     
                                        <label>Your Complaints</label>
                                    </h3>
									 <table class="table table-striped">
    <thead>
      <tr>
	  
        <th>Sr.No</th>
        <th>Ref-No</th>
        <th>Subject</th>
		<th>Complaint</th>
		<th>Date</th>
				<th>Status</th>	
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
									</div>
			 </div>
			</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
