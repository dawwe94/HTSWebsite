<!-- Kom ihåg att logga in till databasen först! -->
<?php
        include '../MinWowArmory/connection.php';
		$password = $_POST['password'];
		$md5_password = md5($password);
         $query = "SELECT * FROM users WHERE username='$_POST[username]' AND password='$md5_password';";
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