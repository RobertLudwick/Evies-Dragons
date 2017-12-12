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
      <div class="panel panel-primary"> 
         <div class="panel-heading">Welcome!</div>
         <div class="panel-body">
            Welcome all new users!
         </div>
      </div>
    </div>
    
      </div>
  </div>
<!-- Copyright & Credits bar-->
<
</div>
</div>
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
        echo "<input type='submit' onclick='seeCharacter(value)' value='$row[$field]' />";
    }
}

 ?>

<script type="application/javascript">
    function seeCharacter(value){
        window.location.href = 'ViewCharacters.php?'+value;
    }
</script>

</TABLE>
<a href="Webview_Bobby.php"> Create a Character</a>
</body>
<?php
$db->close();
?>
</html>