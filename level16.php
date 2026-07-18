<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level17.php?arg01=a&arg02=b"; 
}
</script>
<title>Welcome to level 16</title>
</head>
<body>
<h1 align=center>Welcome to level 16</h1>
<?php 
ini_set("display_errors", 0);
$str = strtolower($_GET["keyword"]);
$str2=str_replace("script","&nbsp;",$str);
$str3=str_replace(" ","&nbsp;",$str2);
$str4=str_replace("/","&nbsp;",$str3);
$str5=str_replace("	","&nbsp;",$str4);
echo "<center>".$str5."</center>";
?>
<center><img src=level16.png></center>
<?php 
echo "<h3 align=center>Payload length: ".strlen($str5)."</h3>";
?>
</body>
</html>
