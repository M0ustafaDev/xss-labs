<html ng-app>
<head>
        <meta charset="utf-8">
        <script src="angular.min.js"></script>
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level16.php?keyword=test"; 
}
</script>
<title>Welcome to level 15</title>
</head>
<h1 align=center>Welcome to level 15, find your own way out!</h1>
<p align=center><img src=level15.png></p>
<?php 
ini_set("display_errors", 0);
$str = $_GET["src"];
echo '<body><span class="ng-include:'.htmlspecialchars($str).'"></span></body>';
?>
