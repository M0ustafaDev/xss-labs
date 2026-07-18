<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level5.php?keyword=find a way out!"; 
}
</script>
<title>Welcome to level 4</title>
</head>
<body>
<h1 align=center>Welcome to level 4</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace(">","",$str);
$str3=str_replace("<","",$str2);
echo "<h2 align=center>No results found related to ".htmlspecialchars($str).".</h2>".'<center>
<form action=level4.php method=GET>
<input name=keyword  value="'.$str3.'">
<input type=submit name=submit value=Search />
</form>
</center>';
?>
<center><img src=level4.png></center>
<?php 
echo "<h3 align=center>Payload length: ".strlen($str3)."</h3>";
?>
</body>
</html>
