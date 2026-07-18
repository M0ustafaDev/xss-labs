<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level2.php?keyword=test"; 
}
</script>
<title>Welcome to level 1</title>
</head>
<body>
<h1 align=center>Welcome to level 1</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["name"];
echo "<h2 align=center>Welcome user ".$str."</h2>";
?>
<center><img src=level1.png></center>
<?php 
echo "<h3 align=center>Payload length: ".strlen($str)."</h3>";
?>
</body>
</html>
