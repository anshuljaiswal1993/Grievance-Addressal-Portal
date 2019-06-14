<?php
    require 'core/session.php';
    require 'core/config.php';
    include 'core/user_key.php';
    //for session
    $session=$_SESSION['email'];
    $ref = rand (3858558,100000);
	$error = "";
	$message = "";
	$alpha="M y a p p ";
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
    <style media="screen">
    table{border: 0px;}
    td{
      padding:10px;
      border-top: 0px solid #eee;
      border-bottom: 0px solid #eee!important;
      padding-left: 0px;
      color:#0ea798;
    }
    input,button.log{width: 450px;}
    </style>
  </head>
  <body>
    <div class="cover user text-center" style="height:120px;">
      <br>
      <h2>Complaint Here</h2>
    </div>
    <?php require 'nav-profile.php'; ?>
    <div class="animated fadeIn">
      <div class="padd">
        <div class="col-lg-12 text-center">
          <?php
            $query1=mysql_query("SELECT * FROM `user` WHERE email LIKE '%$session%'");
            while( $arry=mysql_fetch_array($query1) ) {
              $id=$arry['nitcId'];
              $name=$arry['name'];
              $email = $arry['email'];
			  $date=$arry['date'];
                 }
                   if(empty($_POST)===false){
                     $phoneno =mysql_real_escape_string($_POST['phoneno']);
                     $subject = mysql_real_escape_string($_POST['subject']);
					 $department=mysql_real_escape_string($_POST['department']);
                     $complain = mysql_real_escape_string($_POST['complain']);
					 $crespect = mysql_real_escape_string($_POST['crespect']);
					 $ctype = mysql_real_escape_string($_POST['ctype']);
					 $sname = mysql_real_escape_string($_POST['sname']);
					 $fname = mysql_real_escape_string($_POST['fname']);
                     if(empty($phoneno) || empty($subject) || empty($complain)){
                     }elseif (!preg_match("/^[0-9]*$/",$phoneno)) {
                       $error = "Invalid Phone Number";
                     }else{
					
                       mysql_query("INSERT INTO `cmp_log` VALUES ('0','$id','$name','$date','$email','$phoneno','$subject','$complain','$ref','UNSOLVED',NOW(),'$department','$crespect','$ctype','$sname','$fname','0000-00-00')") or die(mysql_error());
                       echo '<script language="javascript">';
						echo 'alert("Complain Reg Success")';
						 echo '</script>';
                       }
                   }
              ?>
          <form class="" method="post" autocomplete="off">
            <div class="container">
              <div class="panel panel-default">
                  <div class="panel-body">
                      <h2>Your Reference no : &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ref;
                      echo"<p><span class='error'>".$error."</p></span>";
                      echo "<p><span class='message'>".$message."</p></span>";
                      ?></h2>
                  </div>
              </div>
              <table>
               <tr>
                  <td class="text-left">Your Subject *</td>
                  <td >
				  
				   <input type="radio" name="subject" value="Electrical Maintainance" checked style="height:15px;width:24px;"> Electrical Maintenance
					<input type="radio" name="subject" value="Carpentary"  style="height:15px;width: 24px; "> Carpentary
					<input type="radio" name="subject" value="Plumbing"  style="height:15px;width: 24px; "> Plumbing  
				  
				  
				 <!-- <select name="subject" class="text-left">
				  
					  <option value="Electrical Maintainance">Electrical Maintainance</option>
					  <option value="Carpentary">Carpentary</option>
					  <option value="Plumbing">Plumbing</option>
					</select>--></td>
					</tr>
					<tr>
					<td class="text-left">Department*</td>
                  <td><select name="department" class="text-left">
					  <option value="Architecture and Planning">Architecture and Planning</option>
					  <option value="Chemical Engineering">Chemical Engineering</option>
					  <option value="Civil Engineering">Civil Engineering</option>
					  <option value="Computer Science & Engineering">Computer Science & Engineering</option>
					  <option value="Electrical Engineering">Electrical Engineering</option>
					  <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
					  <option value="Mathematics">Mathematics</option>
					  <option value="Mechanical Engineering">Mechanical Engineering</option>
					  <option value="Training Placement">Training Placement</option>
					  <option value="Physical Education">Physical Education</option>
					  <option value="Campus Networking Centre (CNC)">Campus Networking Centre (CNC)</option>
					  <option value="Biomechanics">Biomechanics</option>
					  <option value="Advanced Manufacturing Centre">Advanced Manufacturing Centre</option>
					  <option value="Central Computer Centre">Central Computer Centre</option>
					  <option value="Centre for Value Education">Centre for Value Education</option>
					  <option value="Sophisticated Instruments Centre">Sophisticated Instruments Centre</option>
					  <option value="Transportation Research">Transportation Research</option>
					  <option value="Centre for Scanning Microscopy">Centre for Scanning Microscopy</option>
					  <option value="School of Biotechnology">School of Biotechnology</option>
					  <option value="School of Management Studies">School of Management Studies</option>
					  <option value="School of Nano Science and Technology">School of Nano Science and Technology</option>
					  
					  

					</select></td>
					</tr>
                <!--</tr>
                <tr>
                  <td class="text-left">Your Username</td>
                  <td class="text-left"><div class="dis_b"><?php //echo $username;?></div></td>
                </tr>
                <tr>
                  <td class="text-left">Your User ID</td>
                  <td class="text-left"><div class="dis_b"><?php //echo $alpha.$id;  $user_id = $id;?></div></td>
                </tr>
                <tr>
                  <td class="text-left">Your Your Email ID</td>
                  <td class="text-left"><div class="dis_b"><?php //echo $email;?></div></td>
                </tr>-->
               
				 <tr>
                  <td class="text-left">Complaint with respect to *</td>
                  <td><select name="crespect" class="text-left">
				  
					  <option value="Electrical Maintainance">Electrical Maintenance</option>
					  <option value="Carpentary">Carpentry</option>
					  <option value="Plumbing">Plumbing</option>
					</select></td>
					</tr>
				  <tr>
                  <td class="text-left">Department/Hostel/Lab /Quarters<br>Name/Other*</td>
                  <td><input type = "text" name = "sname"  placeholder = "StreetNo/Department/Hostel/Lab">  </td>
                </tr>
	            <tr>
                  <td class="text-left">Flat No/Department Room No/<br>Hostel Room No/Lab Room No/Other*</td>
                  <td><input type = "text" name = "fname"  placeholder = "Flat No/Department Room No/Hostel Room No/Lab Room No/Other">  </td>
                </tr>
			     <tr>
                  <td class="text-left">Your Contact Number *</td>
                  <td><input type = "text" name = "phoneno" maxlength=10 placeholder = "Your Phone number">  </td>
                </tr>
                
                <tr> 
                  <td class="text-left">Your Complain *</td>
                  <td><textarea name="complain" rows="8" cols="80" placeholder="Your complain"></textarea></td>
                </tr>
                <tr><td></td><td></td></tr>
                <tr>
                  <td></td>
                  <td><button type="submit" class="log">Post</button></td>
                </tr>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
      <footer>
            <br><br>NITC <?php echo $web_name; ?>
      </footer>
    <script src="files/js/jquery.js"></script>
    <script src="files/js/bootstrap.min.js"></script>
    <script src="files/js/script.js"></script>
  </body>
</html>
