<html>
<body>
<?php
  $sqlHost = 'localhost';
  $sqlUser = 'root';
  $sqlPass = 'root';
  $dbName = 'Evies';
    $db_table = 'user';
    $mysqli = new mysqli($sqlHost, $sqlUser, $sqlPass, $dbName);
    if (mysqli_connect_error()) {
        die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }
$username = $_POST['Username'];
$password = $_POST['Password'];
$count = 0;
$query = $mysqli->query("SELECT username, password FROM user WHERE username = '".$username."' AND  password = '".$password."'");
  //$query = $mysqli->query("SELECT username, password FROM user;");
  while($row = $query->fetch_array()) {
    if ($username == $row[0] && $password = $row[1]){ 
      $count = $count + 1;
    }
  }
  if ($count != 0) {
    echo "<script>window.top.location='http://localhost:8888/home.php</script>";
    //echo "Login successful. Continue to homepage.";
  }
  if ($count == 0) {
    echo "Incorrect username and/or password. Try again or register.";
  }
  ?>

</body>
</html>