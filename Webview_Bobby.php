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
	<p>Gender
    <select name="Gender">
	<option value="">Select...</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
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
			//$result = $mysqli->query("SELECT class_name FROM class;")
			$result = $mysqli->query("SELECT class_name FROM levels WHERE Level = 1;")
	    		or trigger_error($db->error);
	    	while($row = $result->fetch_array()) {
 		 		echo "<option value='".$row[0]."'>'".$row[0]."'</option>";
 	    	}
		?>
	</select>
	</p>
	<p>Backgrounds
	<select name="Backgrounds">
		<option value="">Backgrounds</option>
	    <?php
			$result = $mysqli->query("SELECT background_name FROM Backgrounds;")
	    		or trigger_error($db->error);
 	    	while($row = $result->fetch_array()) {
 		 		echo "<option value='".$row[0]."'>'".$row[0]."'</option>";
 	    	}
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
    $name = htmlspecialchars($_POST['something']);
    $races = $_POST['Races'];
    $gender = $_POST['Gender'];
    $variants = $_POST['Variants'];
	$classes = $_POST['Classes'];
    $backgrounds = $_POST['Backgrounds'];
    $strength = $_POST['Strength'];
    $dexterity = $_POST['Dexterity'];
    $constitution = $_POST['Constitution'];
    $intelligence = $_POST['Intelligence'];
    $wisdom = $_POST['Wisdom'];
    $charisma = $_POST['Charisma'];
    
    $stats =  $mysqli->query("SELECT Strength,Dexterity,Constitution,Intelligence,Wisdom,Charisma FROM races WHERE race_name = '$races';")
	    		or trigger_error($db->error);
	    		
	    		
	$stats1 =  $mysqli->query("SELECT Strength,Dexterity,Constitution,Intelligence,Wisdom,Charisma FROM variants WHERE variant_name = '$variants';")
	    		or trigger_error($db->error);
	
	$Health = $mysqli->query("SELECT HP, hitdie FROM classes WHERE class_name = '$classes';")
	    		or trigger_error($db->error);
	
	$skills =  $mysqli->query("SELECT Skills FROM races WHERE race_name = '$races';")
	    		or trigger_error($db->error);
			
	 while($row = $stats->fetch_array()) {
		$strength = $strength + $row[0];
    	$dexterity =$dexterity + $row[1];
    	$constitution = $constitution + $row[2];
    	$intelligence = $intelligence + $row[3];
    	$wisdom = $wisdom + $row[4];
    	$charisma = $charisma + $row[5];
	}
	
	while($row = $stats1->fetch_array()) {
		$strength = $strength + $row[0];
    	$dexterity =$dexterity + $row[1];
    	$constitution = $constitution + $row[2];
    	$intelligence = $intelligence + $row[3];
    	$wisdom = $wisdom + $row[4];
    	$charisma = $charisma + $row[5];
	}
	
	while($row = $skills->fetch_array()) {
		$skill = $row[0];
	}
	
	
	$Con_Mod = round(($constitution - 10)/2, 0, PHP_ROUND_HALF_DOWN);
	
	while($row = $Health->fetch_array()) {
		$HP = $row[0] + $Con_Mod;
		$hitdie = $row[1];
	}
    
    $id = $mysqli->query("SELECT COUNT(*) FROM players;")
	    		or trigger_error($db->error);
    
    
    while($row = $id->fetch_array()) {
		$result = $row[0];
	}
    
    
    $mysqli->query("INSERT INTO players VALUES ($result, '$name', 'Bobby', '$gender', '$races', '$variants', '$classes', 'back', 30, '$strength', '$dexterity', '$constitution', '$intelligence', '$wisdom', '$charisma', $HP, '$hitdie', 1, 1, '$skill');")
	    		or trigger_error($db->error);
    
    //$mysqli->query("INSERT INTO players VALUES (500, $name, 'Bobby', 'Female', $races, $variants, 'Paladin', 'back', $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma, 11, 120, '2d8+7', 17, 4, ' somewhat skilled');") or trigger_error($db->error);
    
}


$db->close();
 ?>
</body>
</html>
