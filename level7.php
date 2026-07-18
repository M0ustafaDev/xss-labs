<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level8.php?keyword=nice try!"; 
}
</script>
<title>Welcome to level 7</title>
</head>
<body>
<h1 align=center>Welcome to level 7</h1>
<?php 
ini_set("display_errors", 0);
$str =strtolower( $_GET["keyword"]);
$str2=str_replace("script","",$str);
$str3=str_replace("on","",$str2);
$str4=str_replace("src","",$str3);
$str5=str_replace("data","",$str4);
$str6=str_replace("href","",$str5);
echo "<h2 align=center>No results found related to ".htmlspecialchars($str).".</h2>".'<center>
<form action=level7.php method=GET>
<input name=keyword  value="'.$str6.'">
<input type=submit name=submit value=Search />
</form>
</center>';
?>
<center><img src=level7.png></center>
<?php 
echo "<h3 align=center>Payload length: ".strlen($str6)."</h3>";
?>
</body>
</html>
