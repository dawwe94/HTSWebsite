<?php
         $query = "INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]')";
         echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
         if ($result === false) {
	         echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
?>
