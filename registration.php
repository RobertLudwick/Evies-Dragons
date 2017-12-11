<html>
<head></head>
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
	?>

  <form method="post" action="">
  username:<br>
  <input type="text" name="username" value="">
  <br>
  email<br>
  <input type="text" name="email" value="">
  <br>
  password<br>
  <input type="text" name="password" value="">
  <br><br>

    <input type="submit" name="submit" />
  </form>
  <?php
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
  $count = 0;
  $query = $mysqli->query("SELECT username FROM user;");
  while($row = $query->fetch_array()) {
    if ($username == $row[0]){
      $count = $count + 1;
    }
  }
  if ($count != 0) {
    echo "This username already exists. Please choose another.";
  }
  if ($count == 0) {
    $mysqli->query("INSERT INTO user VALUES ('$username', '$email', '$password')");
  }

}
  ?>
</body>
</html>
