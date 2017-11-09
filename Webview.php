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


$sqlHost = 'localhost';
$sqlUser = 'root';
$sqlPass = 'new-password';
$dbName = 'Evies';
$userInput = htmlspecialchars($_POST['something']);
$db =  new mysqli($sqlHost, $sqlUser, $sqlPass, $dbName) ;

if($db->connect_errno){
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

$result = $db->query("SELECT film.film_id, film.title, film.release_year, film.rating, category.name FROM film INNER JOIN film_category ON film.film_id = film_category.film_id INNER JOIN category on film_category.category_id = category.category_id WHERE film.title LIKE '%$userInput' OR film.title LIKE '$userInput%' ORDER BY film.title;
")
    or trigger_error($db->error);
//var_dump($result);?>
<TABLE>
<TR>
<TH>Film Id</TH>
<TH>Title</TH>
<TH>Release<BR>Year</TH>
<TH>Rating</TH>
<TH>Genre</TH>
</TR>
<?php
$array = array('film_id', 'title', 'release_year', 'rating', 'name');
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
