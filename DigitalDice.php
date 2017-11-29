<html>
<head><title>Digital Dice</title></head>
<body>
<!-- <form method="post" action="">
<select name="digdice">
    <option value="">Selecd Dice Type</option>
        <option value="D4">D4</option>
		<option value="D6">D6</option>
		<option value="D10">D10</option>
		<option value="D12">D12</option>
		<option value="D20">D20</option>
</select>
    <input type="submit" name="submit" />
    </form> -->
<form method="post" action="">
  <input type="radio" name="dicetype" value="D4"> D4<br>
  <input type="radio" name="dicetype" value="D6"> D6<br>
  <input type="radio" name="dicetype" value="D10"> D10<br>
  <input type="radio" name="dicetype" value="D12"> D12<br>
  <input type="radio" name="dicetype" value="D20"> D20<br> 
    <input type="submit" name="submit" />
</form>
<?php
if(isset($_POST['submit'])) {
    $type = $_POST['dicetype'];
    if ($type == "D4") $value = rand(1,4);
    if ($type == "D6") $value = rand(1,6);
    if ($type == "D10") $value = rand(1,10);
    if ($type == "D12") $value = rand(1,12);
    if ($type == "D20") $value = rand(1,20);
    echo "You rolled a " , $type , " with a value of : " , $value , "";

//     $d4 = $_POST[''];
//     $races = $_POST['Races'];
//     $gender = $_POST['Gender'];
//     $variants = $_POST['Variants'];



//       $d6 = rand(1,6);
//       echo "You rolled a " , $d6 , "";
//     break;
//     case isset($_POST['D10']):
//       $d10 = rand(1,10);
//       echo "You rolled a " , $d10 , "";
//     break;
//     case isset($_POST['D12']):
//       $d12 = rand(1,12);
//       echo "You rolled a " , $d12 , "";
//     break;
//     case isset($_POST['D20']):
//       $d20 = rand(1,20);
//       echo "You rolled a " , $d20 , "";
//     break;
  echo "hi";
}

/*do {
$d4 = rand(1,4);
$d6 = rand(1,6);
$d10 = rand(1, 10);
$d12 = rand(1,12);
$d20 = rand(1,20);
$rollCount ++;
if ($roll != 6){
echo " You rolled a " . $roll . "";
}
else {
echo "You rolled a high " . $roll . "!";
}
} while ($roll != 6);
$verb = "were";
$last = "rolls";
if ($rollCount == 1) {
$verb = "was";
$last = "roll";
}
echo "There {$verb} {$rollCount} {$last}!";
*/
?>
</body>
</html>