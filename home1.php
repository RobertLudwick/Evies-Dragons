<?php   session_start();  ?>

<html>
  <head>

       <title> Home1 </title>
  </head>
  <body>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
          echo "<a href = 'login1.php'>Please Login</a>";
           //header("Location:Login1.php");
           exit;  
       }

          echo $_SESSION['use'];

          echo "Login Success";

          echo "<a href='logout1.php'> Logout</a> "; 
?>
</body>
</html>