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
	<input type="Strength" name="something" value="" />
	</p>
	<p>Dexterity	
	<input type="Dexterity" name="something" value="" />
	</p>
	<p>Constitution	
	<input type="Constitution" name="something" value="" />
	</p>
	<p>Intelligence	
	<input type="Intelligence" name="something" value="" />
	</p>
	<p>Wisdom	
	<input type="Wisdom" name="something" value="" />
	</p>
	<p>Charisma	
	<input type="Charisma" name="something" value="" />
	</p>
    <input type="submit" name="submit" />
  </form>

<?php



$db->close();
 ?>
</body>
</html>
