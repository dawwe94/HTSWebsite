<!-- Kom ihåg att logga in till databasen först! -->
<?php
        include '../MinWowArmory/connection.php';
		
         $query = "SELECT * FROM armory WHERE name='$_POST[username]' AND password='$_POST[password]'";
         echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();
		 session_unset();
         
		 if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST[username];
			  header('Location: http://localhost/Armory/MinWowArmory/Armory.php');
		 }
		 else {
			  header('Location: startsida.php');
		 }
		
?>