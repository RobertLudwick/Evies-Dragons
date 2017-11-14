<html>
<head><title>D&D Character Creator</title></head>
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
	?>
  
  <form method="post" action="">
	<p>Name	
	<input type="name" name="something" value="" />
	</p>
    <p>Races
    <select name="Races">
    	<option value="">Race</option>
    	<?php
			$result = $mysqli->query("SELECT race_name FROM races;")
				or trigger_error($db->error);
			while($row = $result->fetch_array()) {
     			echo "<option value='".$row[0]."'>'".$row[0]."'</option>";
     		}
		?>
	</select>
	</p>
	<p>Variants
    <select name="Variants">
    	<option value="">Variant</option>
    	<?php
			$result = $mysqli->query("SELECT variant_name FROM variants;")
				or trigger_error($db->error);
//			if () {
			while($row = $result->fetch_array()) {
     			echo "<option value='".$row[0]."'>'".$row[0]."'</option>";
     		}
//			}
		?>
	</select>
	</p>
	<p>Classes
	<select name="Classes">
		<option value="">Class</option>
	    <?php
			$result = $mysqli->query("SELECT class_name FROM class;")
	    		or trigger_error($db->error);
// 	    	while($row = $result->fetch_array()) {
// 		 		echo "<option value='".$row[0]."'>'".$row[0]."'</option>";
// 	    	}
		?>
	</select>
	</p>
	<p>Backgrounds
	<select name="Backgrounds">
		<option value="">Backgrounds</option>
	    <?php
			$result = $mysqli->query("SELECT background_name FROM Backgrounds;")
	    		or trigger_error($db->error);
// 	    	while($row = $result->fetch_array()) {
// 		 		echo "<option value='".$row[0]."'>'".$row[0]."'</option>";
// 	    	}
		?>
	</select>
	</p>
	<p>Strength	
	<input type="name" name="Strength" value="" />
	</p>
	<p>Dexterity	
	<input type="name" name="Dexterity" value="" />
	</p>
	<p>Constitution	
	<input type="name" name="Constitution" value="" />
	</p>
	<p>Intelligence	
	<input type="name" name="Intelligence" value="" />
	</p>
	<p>Wisdom	
	<input type="name" name="Wisdom" value="" />
	</p>
	<p>Charisma	
	<input type="name" name="Charisma" value="" />
	</p>
    <input type="submit" name="submit" />
  </form>

<?php
if(isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['Races']);
    $races = $_POST['Races'];
    $variants = $_POST['Variants'];
	$classes = $_POST['Classes'];
    $backgrounds = $_POST['Backgrounds'];
    $strength = $_POST['Strength'];
    $dexterity = $_POST['Dexterity'];
    $constitution = $_POST['Constitution'];
    $intelligence = $_POST['Intelligence'];
    $wisdom = $_POST['Wisdom'];
    $charisma = $_POST['Charisma'];
    
    $mysqli->query("INSERT INTO players VALUES (400, 'Pontius', 'Bobby', 'Female', 'Elf', 'Wood Elf', 'Paladin', 'back', 28, 28, 18, 15, 4, 7, 11, 120, '2d8+7', 17, 4, ' somewhat skilled');")
	    		or trigger_error($db->error);
    
    //$mysqli->query("INSERT INTO players VALUES (500, $name, 'Bobby', 'Female', $races, $variants, 'Paladin', 'back', $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma, 11, 120, '2d8+7', 17, 4, ' somewhat skilled');") or trigger_error($db->error);
    
}


$db->close();
 ?>
</body>
</html>
