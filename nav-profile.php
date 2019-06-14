

<div class="bar">
     <!-- Single button -->
      <div class="btn-group">
        <button type="button" class="acc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if (isset($_SESSION['email'])===true) {echo $_SESSION['email'];}?>
           <span class="caret"></span>
        </button>



        <a href="profile.php">Home</a>
		<a href="contact.php" style="margin-left: 15px;">EMU Staff</a>


        <ul class="dropdown-menu">

          <li><a href="message.php">Complain</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="logout.php" onClick="javascript:return confirm ('Are you really want to logOut ?');">Logout</a></li>
        </ul>
      </div>
</div>
