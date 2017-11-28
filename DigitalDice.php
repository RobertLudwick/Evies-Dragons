<html>
<head><title>Digital Dice</title></head>
<body>
<form action="" method="post">
<select name="digdice">
    <option value="">Selecd Dice Type</option>
        <option value="D4">D4</option>
		<option value="D6">D6</option>
		<option value="D10">D10</option>
		<option value="D12">D12</option>
		<option value="D20">D20</option>
</select>
<input type="submit" value="submit">
<?php
switch(isset($_POST))
{
    case isset($_POST["D4"]):
      $d4 = rand(1,4);
      echo "You rolled a " , $d4 , "";
    break;
    case isset($_POST['D6']):
      $d6 = rand(1,6);
      echo "You rolled a " , $d6 , "";
    break;
    case isset($_POST['D10']):
      $d10 = rand(1,10);
      echo "You rolled a " , $d10 , "";
    break;
    case isset($_POST['D12']):
      $d12 = rand(1,12);
      echo "You rolled a " , $d12 , "";
    break;
    case isset($_POST['D20']):
      $d20 = rand(1,20);
      echo "You rolled a " , $d20 , "";
    break;

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