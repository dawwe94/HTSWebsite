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
<link rel="stylesheet" type="text/css" href="david.css">
</head>
<Body background="armory.jpg">
<div class="armory">
<?php
$query = mysql_query("Select * FROM armory");
while ($temp = mysql_fetch_array ($query)) {	
echo $temp["Name"];
echo "<br />";
echo $temp["Level"];
echo "<br />";
echo $temp["Class"];
echo "<br />";
echo $temp["Proffesion"];
echo "<br />";
echo $temp["Proffesion Level"];
$Frillex=$temp["Name"];
echo "
<FORM>
<INPUT Type='BUTTON' VALUE='$temp[Name]' ONCLICK='window.location.href=\"$temp[url]\"' /> 
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