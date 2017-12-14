<?php
 session_start();

  echo "Logout Successfully ";
  session_destroy();   // function that Destroys Session 
  echo '<script type="text/javascript"> window.open("login1.php","_self");</script>';            //  On Successful Login redirects to home.php
?>