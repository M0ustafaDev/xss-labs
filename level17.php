<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!"); 
}
</script>
<title>Welcome to level 17</title>
</head>
<body>
<h1 align=center>Welcome to level 17</h1>
<?php
ini_set("display_errors", 0);
echo "<embed src=xsf01.swf?".htmlspecialchars($_GET["arg01"])."=".htmlspecialchars($_GET["arg02"]))." width=100% heigth=100%>";
?>
<h2 align=center>After success, <a href=level18.php?arg01=a&arg02=b>click me to enter next level</a></h2>
</body>
</html>
