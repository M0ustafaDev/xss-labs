<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level14.php"; 
}
</script>
<title>Welcome to level 13</title>
</head>
<body>
<h1 align=center>Welcome to level 13</h1>
<?php 
setcookie("user", "call me maybe?", time()+3600);
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str00 = $_GET["t_sort"];
$str11=$_COOKIE["user"];
$str22=str_replace(">","",$str11);
$str33=str_replace("<","",$str22);
echo "<h2 align=center>No results found related to ".htmlspecialchars($str).".</h2>".'<center>
<form id=search>
<input name="t_link"  value="'."'" type="hidden">
<input name="t_history"  value="'."'" type="hidden">
<input name="t_sort"  value="'.htmlspecialchars($str00).'" type="hidden">
<input name="t_cook"  value="'.$str33.'" type="hidden">
</form>
</center>';
?>
<center><img src=level13.png></center>
<?php 
echo "<h3 align=center>Payload length: ".strlen($str)."</h3>";
?>
</body>
</html>
