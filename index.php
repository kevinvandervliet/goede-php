<?php
include("logic.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>PHP!</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width"/>
  </head>

<body class="<?php echo $bg;?>">

<script>
(function(){
setInterval(function(){

var datum = new Date();
var tijd = (datum.getHours() < 10? '0' : '') + datum.getHours() + ":" + datum.getMinutes() + ":" + (datum.getSeconds() < 10? '0' : '') + datum.getSeconds();
console.log(tijd);
document.getElementById("pieter").innerHTML = tijd;
},1000);
})();
</script>

<div class="bg">

<div class="klok">

<?php echo $hallo;?><br>
<?php
echo "Het is nu <span id='pieter'>" . date('H:i:s') . "</span>\n";
?>
</div>
</body>
