<html>
<head><title>Get Movie Info</title></head>
<body>
  <form method="post" action="">
    <input type="text" name="something" value="" />
    <input type="submit" name="submit" />
  </form>

<?php

// if(isset($_POST['submit'])) {
//   echo 'Query: ', htmlspecialchars($_POST['something']);
// }


// $user = 'root';
// $password = 'root';
// $db = 'Evies';
// $socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';
// 
// $link = mysql_connect(
//    $socket, 
//    $user, 
//    $password
// );
// $db_selected = mysql_select_db(
//    $db, 
//    $link
// );

// $user = 'root';
// $password = 'root';
// $db = 'Evies';
// $host = 'localhost';
// $port = 8889;
// 
// $link = mysql_connect(
//    "$host:$port", 
//    $user, 
//    $password
// );
// $db_selected = mysql_select_db(
//    $db, 
//    $link
// );

// $user = 'root';
// $password = 'root';
// $db = 'Evies';
// $host = 'localhost';
// $port = 8889;
// 
// $link = mysqli_init();
// $success = mysqli_real_connect(
//    $link, 
//    $host, 
//    $user, 
//    $password, 
//    $db,
//    $port
// );

$sqlHost = 'localhost';
$sqlUser = 'root';
$sqlPass = 'root';
$dbName = 'Evies';

$mysqli = new mysqli($sqlHost, $sqlUser, $sqlPass, $dbName);

if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}

echo 'Connected successfully.';

$result = $mysqli->query("SELECT * FROM Skills;")
    or trigger_error($db->error);
//var_dump($result);?>
<TABLE>
<TR>
<TH>skill_name</TH>
<TH>skill_descript</TH>
</TR>
<?php
$array = array('skill_name', 'skill_descript');

while($row = $result->fetch_array()) {
    // Less DRY ways to display for testing
    //echo var_dump($row);
    echo "working";
    echo $row['skill_name'].": ".$row['skill_descript'];
    //echo "<BR>";
    echo "<TR>";
    foreach($array as $field) {
        echo "<TD>".$row[$field]."</TD>";
    }
    echo "</TR>";
}
$db->close();
 ?>
</TABLE>
</body>
</html>
