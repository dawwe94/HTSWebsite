<?php
include 'connection.php';
?>
<head>
<title>Min Armory</title>
<link rel="stylesheet" type="text/css" href="david.css">
</head>

<div class="Character">
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
echo "<br />";
$Frillex=$temp["Name"];
echo "
<FORM>
<INPUT Type='BUTTON' VALUE='$temp[Name]' ONCLICK='window.location.href=\"$temp[url]\"' /> 
</FORM>
";


}
mysql_close($link);
?>
</div>

</body>