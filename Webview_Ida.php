<html>
<head><title>D&D Character Creator</title>
<style>
h1 {
    text-align: center;
    color: white;

    }
    body {
        background-color: black;
    }
 .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: black; 
    color: white; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;

}

</style>
    </head>
<body>
<h1>Welcome to the Dungeons and Dragons Character Builder!</h1>
<div>
</div>
<div class='myDiv'>
    <a href = "ViewCharacters2.php"<button class ="button button1"style='margin-right:500px'>View Existing Characters</button></a>
    <a href="Webview_Bobby.php"<button class ="button button1">Create New Character</button></a>
</div>
<center><img src = "dragon.jpg" alt = "dragon"
width = "500" height = "300"></center>
<?php
$sqlHost = 'localhost';
$sqlUser = 'root';
$sqlPass = 'root';
$dbName = 'Evies';
$mysqli = new mysqli($sqlHost, $sqlUser, $sqlPass, $dbName);
if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}
// echo 'Connected successfully.';

$db->close();
 ?>
</TABLE>
</body>
</html>
