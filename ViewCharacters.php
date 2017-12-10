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
// echo 'Connected successfully.';
$result = $mysqli->query("SELECT * FROM players;")
    or trigger_error($db->error);
//var_dump($result);?>
<TABLE>
<TR>
<TH>Character ID</TH>
<TH>Character name</TH>
<TH>Player name</TH>
<TH>Gender</TH>
<TH>Race</TH>
<TH>Variant</TH>
<TH>Class</TH>
<TH>Background</TH>
<TH>Speed</TH>
<TH>Strength</TH>
<TH>Dexterity</TH>
<TH>Constitution</TH>
<TH>Intelligence</TH>
<TH>Wisdom</TH>
<TH>Charisma</TH>
<TH>HP</TH>
<TH>Hit Dice</TH>
<TH>Charcter level</TH>
<TH>Proficiency</TH>
<TH>Skills</TH>
</TR>
<?php



$array = array('char_id', 'char_name', 'player_name', 'gender', 'race', 'variant', 'class', 'background', 'speed', 'Strength', 'Dexterity', 'Constitution', 'Intelligence', 'Wisdom', 'Charisma', 'HP','hitdie', 'Clevel', 'Proficiency', 'Skills');
while($row = $result->fetch_array()) {
    echo "<TR>";
    foreach($array as $field) {
        echo "<TD>".$row[$field]."</TD>";
    }
    echo "</TR>";
}

 ?>

</TABLE>
<a href="Webview_Bobby.php"> Create a Character</a>
</body>
<?php
$db->close();
?>
</html>