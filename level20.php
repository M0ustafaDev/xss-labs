<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level21.php?arg01=a&arg02=b"; 
}
</script>
<title>Welcome to level 20</title>
</head>
<body>
<h1 align=center>Welcome to level 20</h1>
<?php
ini_set("display_errors", 0);
echo '<embed src="xsf04.swf?'.htmlspecialchars($_GET["arg01"])."=".htmlspecialchars($_GET["arg02"]).'" width=100% heigth=100%>';
?>
</body>
</html>
