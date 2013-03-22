<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">
<?php
include 'connection.php';
?>
<head>
<title>Min Armory</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<!-- En punkt lista. -->
<?php
$query = mysql_query("Select * FROM armory");
while ($temp = mysql_fetch_array ($query)) {
echo $temp["Name"];
}
mysql_close($link);
?>

<FORM>
<INPUT Type="BUTTON" VALUE="Armory" ONCLICK="window.location.href='file:///H:/HTSWebsite/MinWowArmory/Armory.html'"> 
</FORM>

</body>
</html>