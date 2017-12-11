<html>
<head><title>D&D Characters</title></head>
<body>
	<h1>Created Characters</h1>
<?php
$sqlHost = 'localhost';
$sqlUser = 'root';
$sqlPass = 'root';
$dbName = 'Evies';
$mysqli = new mysqli($sqlHost, $sqlUser, $sqlPass, $dbName);
if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}
?>



<?php
// echo 'Connected successfully.';
$result = $mysqli->query("SELECT char_name  FROM players;")
    or trigger_error($db->error);
//var_dump($result);?>
<!-- 
<TABLE>
<TR>
<TH>Character name</TH>
<TH>Race</TH>
<TH>Variant</TH>
<TH>Class</TH>
</TR>
 -->
<?php
$array = array('char_name');
while($row = $result->fetch_array()) {
    foreach($array as $field) {
        echo "<button type='button' onclick=''>".$row[$field]."</button>";
    }
}

 ?>

</TABLE>
<a href="Webview_Bobby.php"> Create a Character</a>
</body>
<?php
$db->close();
?>
</html>