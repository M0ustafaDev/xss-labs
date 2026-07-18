<!DOCTYPE html><!--STATUS OK--><html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<script>
window.alert = function()  
{     
confirm("Great job!");
 window.location.href="level7.php?keyword=move up!"; 
}
</script>
<title>Welcome to level 6</title>
</head>
<body>
<h1 align=center>Welcome to level 6</h1>
<?php 
ini_set("display_errors", 0);
$str = $_GET["keyword"];
$str2=str_replace("<script","<scr_ipt",$str);
$str3=str_replace("on","o_n",$str2);
$str4=str_replace("src","sr_c",$str3);
$str5=str_replace("data","da_ta",$str4);
$str6=str_replace("href","hr_ef",$str5);
echo "<h2 align=center>No results found related to ".htmlspecialchars($str).".</h2>".'<center>
<form action=level6.php method=GET>
<input name=keyword  value="'.$str6.'">
<input type=submit name=submit value=Search />
</form>
</center>';
?>
<center><img src=level6.png></center>
<?php 
echo "<h3 align=center>Payload length: ".strlen($str6)."</h3>";
?>
</body>
</html>
