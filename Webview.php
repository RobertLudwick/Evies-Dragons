<html>
<head><title>Get Movie Info</title></head>
<body>
  <form method="post" action="">
    <input type="text" name="something" value="" />
    <input type="submit" name="submit" />
  </form>

<?php
if(isset($_POST['submit'])) {
  echo 'Query: ', htmlspecialchars($_POST['something']);
}


$user = 'root';
$password = 'root';
$db = 'Evies';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port", 
   $user, 
   $password
);
$db_selected = mysql_select_db(
   $db, 
   $link
);

if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

$result = $db->query("SELECT * FROM races;")
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
    //echo $row['film_id'].": ".$row['title']." (".$row['release_year'].", ".$row['rating'].")";
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
