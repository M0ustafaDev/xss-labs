<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level9.php?keyword=not bad!"; 
}
</script>
<title>Welcome to level 8</title>
</head>
<body>
<h1 align=center>Welcome to level 8</h1>
<?php 
ini_set("display_errors", 0);
$str = strtolower($_GET["keyword"]);
$str2=str_replace("script","scr_ipt",$str);
$str3=str_replace("on","o_n",$str2);
$str4=str_replace("src","sr_c",$str3);
$str5=str_replace("data","da_ta",$str4);
$str6=str_replace("href","hr_ef",$str5);
$str7=str_replace('"','&quot',$str6);
echo '<center>
<form action=level8.php method=GET>
<input name=keyword  value="'.htmlspecialchars($str).'">
<input type=submit name=submit value="Add friendly link" />
</form>
</center>';
?>
<?php
 echo '<center><BR><a href="'.$str7.'">Friendly link</a></center>';
?>
<center><img src=level8.jpg></center>
<?php 
echo "<h3 align=center>Payload length: ".strlen($str7)."</h3>";
?>
</body>
</html>
