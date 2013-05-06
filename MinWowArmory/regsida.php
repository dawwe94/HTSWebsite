<?php
	include 'connection.php';
		if(isset($_POST["username"]) and $_POST["password"] and $_POST["email"]){
             
		
         $query = "INSERT INTO `users`(`username`, `password`, `email`) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]')";
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
