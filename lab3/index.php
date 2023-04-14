<?php

session_start();

if (!isset($_SESSION['valid']))
    header('Location:login.php');
else 
echo "<h1>User is -\"".$_SESSION['username']."\"</h1>";

?>
<a href="logout.php">Logout</a>