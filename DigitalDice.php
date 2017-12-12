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
     <!--  <div class="panel panel-primary"> 
         <div class="panel-heading">Welcome!</div>
         <div class="panel-body">
            Welcome all new users! -->
         </div>
      </div>
    </div>
    
      </div>
  </div>
<!-- Copyright & Credits bar-->
<
</div>
</div>

<form method="post" action="" name="myform">
    <p><input type="number" name="D4Count"/> D4 + <input type="number" name="D4Add"/> = <input type="text" name="D4Result" /></p>
    <p><input type="number" name="D6Count"/> D6 + <input type="number" name="D6Add"/> = <input type="text" name="D6Result" /></p>
    <p><input type="number" name="D8Count"/> D8 + <input type="number" name="D8Add"/> = <input type="text" name="D8Result" /></p>
    <p><input type="number" name="D10Count"/> D10 + <input type="number" name="D10Add"/> = <input type="text" name="D10Result" /></p>
    <p><input type="number" name="D12Count"/> D12 + <input type="number" name="D12Add"/> = <input type="text" name="D12Result" /></p>
    <p><input type="number" name="D20Count"/> D20 + <input type="number" name="D20Add"/> = <input type="text" name="D20Result" /></p>
    <p><input type="number" name="D100Count"/> D100 + <input type="number" name="D100Add"/> = <input type="text" name="D100Result" /></p>
    <div align="center"><p>Sum<input type="number" name="Sum"/></p></div>
</form>



<button onclick="roll()">Roll Dice</button>


<script type="application/javascript">
    var d4res = document.forms['myform']['D4Result'];
    var d4ad = document.forms['myform']['D4Add'];
    var d4cnt = document.forms['myform']['D4Count'];
    var d6res = document.forms['myform']['D6Result'];
    var d6ad = document.forms['myform']['D6Add'];
    var d6cnt = document.forms['myform']['D6Count'];
    var d8res = document.forms['myform']['D8Result'];
    var d8ad = document.forms['myform']['D8Add'];
    var d8cnt = document.forms['myform']['D8Count'];
    var d10res = document.forms['myform']['D10Result'];
    var d10ad = document.forms['myform']['D10Add'];
    var d10cnt = document.forms['myform']['D10Count'];
    var d12res = document.forms['myform']['D12Result'];
    var d12ad = document.forms['myform']['D12Add'];
    var d12cnt = document.forms['myform']['D12Count'];
    var d20res = document.forms['myform']['D20Result'];
    var d20ad = document.forms['myform']['D20Add'];
    var d20cnt = document.forms['myform']['D20Count'];
    var d100res = document.forms['myform']['D100Result'];
    var d100ad = document.forms['myform']['D100Add'];
    var d100cnt = document.forms['myform']['D100Count'];

    function roll() {
    var sum=0;
    if(isNaN(d4cnt.value) == false && d4cnt.value != 0 ) {
        if (d4ad.value == "") {
            d4ad.value = 0;
        }
        var random = Math.floor(Math.random() * 4) + 1;
        var first = parseInt(d4ad.value) + random;
        for ($i = 1; $i < d4cnt.value; $i++) {
            var nextrand = Math.floor(Math.random() * 4) + 1;
            var next = d4ad.value + nextrand;
            first = parseInt(first) + parseInt(nextrand);
        }
        d4res.value = first;
        sum+=first;
    }

        if(isNaN(d6cnt.value) == false && d6cnt.value != 0 ) {
            if (d6ad.value == "") {
                d6ad.value = 0;
            }
            var random = Math.floor(Math.random() * 6) + 1;
            var first = parseInt(d6ad.value) + random;
            for ($i = 1; $i < d6cnt.value; $i++) {
                var nextrand = Math.floor(Math.random() * 6) + 1;
                var next = d6ad.value + nextrand;
                first = parseInt(first) + parseInt(nextrand);
            }
            d6res.value = first;
            sum+=first;
        }

        if(isNaN(d8cnt.value) == false && d8cnt.value != 0 ) {
            if (d8ad.value == "") {
                d8ad.value = 0;
            }
            var random = Math.floor(Math.random() * 8) + 1;
            var first = parseInt(d8ad.value) + random;
            for ($i = 1; $i < d8cnt.value; $i++) {
                var nextrand = Math.floor(Math.random() * 8) + 1;
                var next = d8ad.value + nextrand;
                first = parseInt(first) + parseInt(nextrand);
            }
            d8res.value = first;
            sum+=first;
        }

        if(isNaN(d10cnt.value) == false && d10cnt.value != 0 ) {
            if (d10ad.value == "") {
                d10ad.value = 0;
            }
            var random = Math.floor(Math.random() * 10) + 1;
            var first = parseInt(d10ad.value) + random;
            for ($i = 1; $i < d10cnt.value; $i++) {
                var nextrand = Math.floor(Math.random() * 10) + 1;
                var next = d10ad.value + nextrand;
                first = parseInt(first) + parseInt(nextrand);
            }
            d10res.value = first;
            sum+=first;
        }

        if(isNaN(d12cnt.value) == false && d12cnt.value != 0 ) {
            if (d12ad.value == "") {
                d12ad.value = 0;
            }
            var random = Math.floor(Math.random() * 12) + 1;
            var first = parseInt(d12ad.value) + random;
            for ($i = 1; $i < d12cnt.value; $i++) {
                var nextrand = Math.floor(Math.random() * 12) + 1;
                var next = d12ad.value + nextrand;
                first = parseInt(first) + parseInt(nextrand);
            }
            d12res.value = first;
            sum+=first;
        }

        if(isNaN(d20cnt.value) == false && d20cnt.value != 0 ) {
            if (d20ad.value == "") {
                d20ad.value = 0;
            }
            var random = Math.floor(Math.random() * 20) + 1;
            var first = parseInt(d20ad.value) + random;
            for ($i = 1; $i < d20cnt.value; $i++) {
                var nextrand = Math.floor(Math.random() * 4) + 1;
                var next = d20ad.value + nextrand;
                first = parseInt(first) + parseInt(nextrand);
            }
            d20res.value = first;
            sum+=first;
        }

        if(isNaN(d100cnt.value) == false && d100cnt.value != 0 ) {
            if (d100ad.value == "") {
                d100ad.value = 0;
            }
            var random = Math.floor(Math.random() * 100) + 1;
            var first = parseInt(d100ad.value) + random;
            for ($i = 1; $i < d100cnt.value; $i++) {
                var nextrand = Math.floor(Math.random() * 100) + 1;
                var next = d100ad.value + nextrand;
                first = parseInt(first) + parseInt(nextrand);
            }
            d100res.value = first;
            sum+=first;
        }
        document.forms['myform']["Sum"].value = sum;
    }

</script>

<a href="#" onclick="window.open('DigitalDice.php', 'newwindow', 'width=300, height=250'); return false;">Click here to roll dice</a>
</body>
</html>