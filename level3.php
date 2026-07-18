<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level4.php?keyword=try harder!"; 
}
</script>
<title>Welcome to level 3</title>
</head>
<body>
<h1 align=center>Welcome to level 3</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
echo "<h2 align=center>No results found related to ".htmlspecialchars($str).".</h2>"."<center>
<form action=level3.php method=GET>
<input name=keyword  value='".htmlspecialchars($str)."'>	
<input type=submit name=submit value=Search />
</form>
</center>";
?>
<center><img src=level3.png></center>
<?php 
echo "<h3 align=center>Payload length: ".strlen($str)."</h3>";
?>
</body>
</html>
