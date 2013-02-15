<!-- Detta ska stå i början av html sidan -->
<?php
$server="localhost";
$user="root";
$password="";
$database="armory";

$link = mysql_connect($server, $user, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'You connected succesfully to the server';

mysql_select_db($database);

$query = mysql_query("Select * FROM armory");
while ($temp = mysql_fetch_array ($query)) {
echo $temp["Name"];
}

mysql_close($link);
?>

