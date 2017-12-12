<html>
<head>
<!-- Import Bootstrap from CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--Extra Theme-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!--Import jQuary from CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Extra CSS -->
<style>
.text-right {
  float: right;
}
body {
  background: #16a085;
}
</style>	
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Evies & Dragons</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
<ul class="nav navbar-nav">
      <li class="active"><a href="Webview_bobby.php">Create New Character</a></li>
<ul class="nav navbar-nav">
      <li class="active"><a href="viewcharacters2.php">View Existing Characters</a></li>
<ul class="nav navbar-nav">
      <li class="active"><a href="DigitalDice.php">Roll Dice</a></li>

    </ul>
    <ul class="nav navbar-nav">
      <li><a href="signin.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
    </ul>
  </div>
</nav>
  <div class="row">
    <div class="col-md-9">
      <!-- <div class="panel panel-primary"> 
         <div class="panel-heading">Welcome!</div>
         <div class="panel-body">
            Welcome all new users!
         </div> -->
      </div>
    </div>
    
      </div>
  </div>
<!-- Copyright & Credits bar-->
<
</div>
</div>
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
  
  <form method="post" action="" name = "myform">
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
	<p>Strength <input type="number" name="Strength" onchange="myFunction(name)" value="8"/></p>
    <p>Dexterity <input type="number" name="Dexterity" onchange="myFunction(name)" value="8"/></p>
    <p>Constitution <input type="number" name="Constitution" onchange="myFunction(name)" value="8"/></p>
    <p>Intelligence <input type="number" name="Intelligence" onchange="myFunction(name)" value="8"/></p>
    <p>Wisdom <input type="number" name="Wisdom" onchange="myFunction(name)" value="8"/></p>
    <p>Charisma <input type="number" name="Charisma" onchange="myFunction(name)" value="8"/></p>
    <div align="center"><p>Available<input type="number" name="Sum" value="27"/></p></div>
  </form>
  
	<script type="application/javascript">
    var Strength = document.forms['myform']['Strength'];
    var Dexterity = document.forms['myform']['Dexterity'];
    var Constitution = document.forms['myform']['Constitution'];
    var Intelligence = document.forms['myform']['Intelligence'];
    var Wisdom = document.forms['myform']['Wisdom'];
    var Charisma = document.forms['myform']['Charisma'];
	
	
	function myFunction(LastUsed) {
		var sum=27;
		var extraStr=0;
		var extraDex=0;
		var extraCon=0;
		var extraInt=0;
		var extraWis=0;
		var extraCha=0;
		
		if(Strength.value >= 15 ) {
			Strength.value = 15
		}
		if(Dexterity.value >= 15 ) {
			Dexterity.value = 15
		}
		if(Constitution.value >= 15 ) {
			Constitution.value = 15
		}
		if(Intelligence.value >= 15 ) {
			Intelligence.value = 15
		}
		if(Wisdom.value >= 15 ) {
			Wisdom.value = 15
		}
		if(Charisma.value >= 15 ) {
			Charisma.value = 15
		}
		
		if(Strength.value > 8 && Strength.value <= 15) {
			extraStr = Strength.value-8;
			if(Strength.value > 13) {
				extraStr = extraStr + (Strength.value - 13);
			}
		}
		if(Dexterity.value > 8 && Dexterity.value <= 15) {
			extraDex = Dexterity.value-8;
			if(Dexterity.value > 13) {
				extraDex = extraDex + (Dexterity.value - 13);
			}
		}
		if(Constitution.value > 8 && Constitution.value <= 15) {
			extraCon = Constitution.value-8;
			if(Constitution.value > 13) {
				extraCon = extraCon + (Constitution.value - 13);
			}
		}
		if(Intelligence.value > 8 && Inteligence.value <= 15) {
			extraInt = Inteligence.value-8;
			if(Intelligence.value > 13) {
				extraInt = extraInt + (Intelligence.value - 13);
			}
		}
		if(Wisdom.value > 8 && Wisdom.value <= 15) {
			extraWis = Wisdom.value-8;
			if(Wisdom.value > 13) {
				extraWis = extraWis + (Wisdom.value - 13);
			}
		}
		if(Charisma.value > 8 && Charisma.value <= 15) {
			extraCha = Charisma.value-8;
			if(Charisma.value > 13) {
				extraCha = extraCha + (Charisma.value - 13);
			}
		}
		
		if(Strength.value <= 8 ) {
			Strength.value = 8
		}
		if(Dexterity.value <= 8 ) {
			Dexterity.value = 8
		}
		if(Constitution.value <= 8 ) {
			Constitution.value = 8
		}
		if(Intelligence.value <= 8 ) {
			Intelligence.value = 8
		}
		if(Wisdom.value <= 8 ) {
			Wisdom.value = 8
		}
		if(Charisma.value <= 8 ) {
			Charisma.value = 8
		}
		
		sum = sum - extraStr - extraDex - extraCon - extraInt - extraWis - extraCha;
		if(sum < 0){
			document.forms['myform'][LastUsed].value = document.forms['myform'][LastUsed].value-1;
			sum = 0;
		}
		document.forms['myform']["Sum"].value = sum;
	}
	
    
</script>

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
    
    
    $mysqli->query("INSERT INTO players VALUES ($result, '$name', 'Bobby', '$gender', '$races', '$variants', '$classes', '$backgrounds', 30, '$strength', '$dexterity', '$constitution', '$intelligence', '$wisdom', '$charisma', $HP, '$hitdie', 1, 1, '$skill');")
	    		or trigger_error($db->error);
    
    //$mysqli->query("INSERT INTO players VALUES (500, $name, 'Bobby', 'Female', $races, $variants, 'Paladin', 'back', $strength, $dexterity, $constitution, $intelligence, $wisdom, $charisma, 11, 120, '2d8+7', 17, 4, ' somewhat skilled');") or trigger_error($db->error);
    
}


$db->close();
 //$result = $mysqli->query("SELECT *, races.languages FROM players INNER JOIN races ON races.race_name = players.race INNER JOIN classes ON classes.class_name = players.class INNER JOIN Levels ON Levels.class_name = players.class WHERE char_name = 'Anduin';")
 ?>
 <a href="#" onclick="window.open('DigitalDice.php', 'newwindow', 'width=300, height=250'); return false;">Click here to roll dice</a>


</body>
</html>
