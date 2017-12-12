<html>
<head><title>D&D Characters</title></head>
<body>

<?php
$sqlHost = 'localhost';
$sqlUser = 'root';
$sqlPass = 'root';
$dbName = 'Evies';
$mysqli = new mysqli($sqlHost, $sqlUser, $sqlPass, $dbName);
if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}
$cname=$_SERVER['QUERY_STRING'];
//echo $cname;
$cname2 = str_replace("%20", " ", $cname);
echo '<h1>' . $cname2 . '</h1>';
//echo $cname2;
//$test = "SELECT * FROM players WHERE char_name = '" . $cname . "';";
//echo $test;
// echo 'Connected successfully.';
$result = $mysqli->query("SELECT * FROM players WHERE char_name = '" . $cname2 . "';")
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
        $race = $row[4];
        $variant = $row[5];
        $class = $row[6];
        $clevel = $row[17];
        echo "<TD>".$row[$field]."</TD>";
    }
    echo "</TR>";
}

 ?>
</TABLE>

<TABLE>
    <TR>
        <TH>Race Name</TH>
        <TH>Variant</TH>
        <TH>Size</TH>
        <TH>Speed</TH>
        <TH>Proficiencies</TH>
        <TH>Skills</TH>
        <TH>Languages</TH>
        <TH>Resistances</TH>
        <TH>Advantages</TH>
    </TR>
    <?php
    $result2 = $mysqli->query("SELECT * FROM races WHERE race_name = '" . $race . "';")
    or trigger_error($db->error);
    $array2 = array('race_name', 'variant', 'size', 'speed',  'Proficiencies', 'Skills', 'languages', 'resistances', 'advantages');
    while($row2 = $result2->fetch_array()) {
        echo "<TR>";
        foreach ($array2 as $field2) {
            echo "<TD>" . $row2[$field2] . "</TD>";
        }
        echo "</TR>";
    }
    ?>
</TABLE>

<TABLE>
    <TR>
        <TH>Class Name</TH>
        <TH>HP</TH>
        <TH>Hit Dice</TH>
        <TH>Proficiencies</TH>
        <TH>Choosen Skills</TH>
        <TH>Skills</TH>
        <TH>Equipment</TH>
    </TR>
    <?php
    $result3 = $mysqli->query("SELECT * FROM classes WHERE class_name = '" . $class . "';")
    or trigger_error($db->error);
    $array3 = array('class_name', 'HP', 'hitdie', 'Proficiencies', 'choose_skills', 'Skills', 'Equipment');
    while($row3 = $result3->fetch_array()) {
        echo "<TR>";
        foreach ($array3 as $field3) {
            echo "<TD>" . $row3[$field3] . "</TD>";
        }
        echo "</TR>";
    }
    ?>
</TABLE>

<TABLE>
    <TR>
        <TH>Race Name</TH>
        <TH>Variant Name</TH>
        <TH>Proficiencies</TH>
        <TH>Skills</TH>
        <TH>Languages</TH>
        <TH>Resistances</TH>
        <TH>Advantages</TH>
    </TR>
    <?php

    $result4 = $mysqli->query("SELECT * FROM variants WHERE variant_name = '" . $variant . "';")
    or trigger_error($db->error);
    $array4 = array('race_name', 'variant_name', 'Proficiencies', 'Skills', 'languages', 'resistances', 'advantages');
    while($row4 = $result4->fetch_array()) {
        echo "<TR>";
        foreach ($array4 as $field4) {
            echo "<TD>" . $row4[$field4] . "</TD>";
        }
        echo "</TR>";
    }
    ?>
</TABLE>

<TABLE>
    <TR>
        <TH>Class Name</TH>
        <TH>Level</TH>
        <TH>Proficiency Bonus</TH>
        <TH>Bonus</TH>
        <TH>Bonus Points</TH>
        <TH>Features</TH>
        <TH>Cantrips</TH>
        <TH>Spells</TH>
        <TH>1st</TH>
        <TH>2nd</TH>
        <TH>3rd</TH>
        <TH>4rd</TH>
        <TH>5th</TH>
        <TH>6th</TH>
        <TH>7th</TH>
        <TH>8th</TH>
        <TH>9th</TH>
        <TH>Bonus Damage</TH>
    </TR>
    <?php
    $result5 = $mysqli->query("SELECT * FROM levels WHERE class_name = '" . $class . "' AND level = '" . $clevel . "';")
    or trigger_error($db->error);
    $array5 = array('class_name', 'Level', 'Prof_bonus', 'Bonus', 'Bonus_points', 'Features', 'Cantrips', 'Spells', '1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '9th', 'bonus_damage');
    while($row5 = $result5->fetch_array()) {
        echo "<TR>";
        foreach ($array5 as $field5) {
            echo "<TD>" . $row5[$field5] . "</TD>";
        }
        echo "</TR>";
    }
    ?>
</TABLE>

<a href="Webview_Bobby.php"> Create a Character</a>

<form method="post" action="" name = "myform">
	<input type="submit" name="submit" value="Level Up" />  
  </form>
<?php
if(isset($_POST['submit'])) {
	$clevel = $clevel + 1;
	if ($clevel > 20){
		$clevel = 20;
	}
	$result6 = $mysqli->query("UPDATE players SET Clevel = $clevel WHERE char_name = '$cname2';")
    or trigger_error($db->error);
}	
?>

</body>
<?php
$db->close();
?>
</html>