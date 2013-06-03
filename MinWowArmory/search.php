<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'armory';

// Database Connection String
$con = mysql_connect($db_hostname, $db_username, $db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_database, $con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
	
<Body bgcolor="black">
<font color="white">
<font size="5">

<?php
if (!empty($_REQUEST['term'])) {
	
	$term = mysql_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM armory WHERE name LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 
$term = 0;
while ($row = mysql_fetch_array($r_query)){  
echo 'Name: ' .$row['name'];
echo '<br /> Level: ' .$row['level'];
echo '<br /> Class: '.$row['class'];
echo '<br /> Profession: '.$row['profession'];
echo '<br /> Profession level: '.$row['professionlevel'];
$Frillex=$row["name"];
echo "
<FORM>
<INPUT Type='BUTTON' VALUE='$row[name]' ONCLICK='window.location.href=\"$row[url]\"' /> 
</FORM>
";
}
}else{
header('Location: Armory.php');
}

?>
    </body>
</html>