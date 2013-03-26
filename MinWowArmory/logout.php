<?php
    session_start();
    session_unset();
    
    header("Location: startsida.php");
    die;
?> 