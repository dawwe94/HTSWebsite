<?php
	include 'connection.php';
		if(isset($_POST["username"]) and $_POST["password"] and $_POST["email"] and $_POST["name"] and $_POST["level"] and $_POST["class"] and $_POST["profession"] and $_POST["professionlevel"] and $_POST["url"]){
         
		$password = $_POST['password'];
		$md5_password = md5($password);
		if ($numrows>0) {
		 echo ("Detta användarnamn finns redan i databasen! Välj ett nytt!");
		 }
		 else
		$query = "INSERT INTO `users`(`username`, `password`, `email`) VALUES ('$_POST[username]','$md5_password','$_POST[email]')";
		
		 
		echo $query;
		
		
		 
		 $result = mysql_query($query);
        
             if ($result === false) {
	             echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		
		$query = "INSERT INTO `armory`(`name`, `level`, `class`, `profession`, `professionlevel`, `url`) VALUES ('$_POST[name]','$_POST[level]','$_POST[class]','$_POST[profession]','$_POST[professionlevel]','$_POST[url]')";
		 
		echo $query;
		
		 $result = mysql_query($query);
        
             if ($result === false) {
	             echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		
		else {
		     echo "Successfully added datat to database." ;
			 header('Location: index.html');
		}
		}
		else
	   {
	         echo "Missing values to add to databas.";
			header('Location: registrera.php'); 
	   }
	   
?>
