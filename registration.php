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

	$username = $_POST['Username'];
	$email = $_POST['Email'];
	$password = $_POST['Password'];
  $count = 0;
  $query = $mysqli->query("SELECT username FROM user;");
  while($row = $query->fetch_array()) {
    if ($username == $row[0]){
      $count = $count + 1;
    }
  }
  if ($count != 0) {
    echo "This username already exists. Please choose another. Or login";
  }
  if ($count == 0) {
    $mysqli->query("INSERT INTO user VALUES ('$username', '$email', '$password')");
    echo "<script>window.top.location='http://localhost:8888/login1.php'</script>";
  }
  ?>
</body>
</html>
