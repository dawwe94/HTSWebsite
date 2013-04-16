<!-- Kom ihåg att logga in till databasen först! -->
<?php
        include '../MinWowArmory/connection.php';
		
         $query = "SELECT * FROM users WHERE username='$_POST[username]' AND password='$_POST[password]';";
         echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
		 session_start();
		 session_unset();
	
		 if (mysql_numrows($result) == 1) {
		      $_SESSION['session_user']=$_POST[username];
			  header('Location: Armory.php');
		 }
		 else {
			  header('Location: index.html');
		 }
		
?>