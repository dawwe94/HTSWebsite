<?php
session_start();
if(!isset($_SESSION['session_user'])){
	header('Location: login.php');
}
?>
<?php
include 'connection.php';
?>
<head>
<title>Min Armory</title>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Search  Contacts</title> 
 
<link rel="stylesheet" type="text/css" href="david.css">
</head>
<Body background="armory.jpg">
</br>
</br>
<form  method="post" action="search.php"  id="searchform"> 
<input  type="text" name="name"> 
<input  type="submit" name="submit" value="Search"> 
</form> 
</br>
<div class="armory">
<?php
$query = mysql_query("Select * FROM armory");
while ($temp = mysql_fetch_array ($query)) {	
echo $temp["name"];
echo "<br />";
echo $temp["level"];
echo "<br />";
echo $temp["class"];
echo "<br />";
echo $temp["profession"];
echo "<br />";
echo $temp["professionlevel"];
echo "<br />";

//echo "<a href=".$temp['armory'].">Armory</a>";
$Frillex=$temp["name"];
echo "
<FORM>
<INPUT Type='BUTTON' VALUE='$temp[name]' ONCLICK='window.location.href=\"$temp[url]\"' /> 
</FORM>
";

}
mysql_close($link);
?>
</br>
<form action="logout.php" method="post">
<input type="submit" Name ="Submit2" Value = "Logga ut!">
</form>
</div>

</body>