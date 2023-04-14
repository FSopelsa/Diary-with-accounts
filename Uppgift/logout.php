<?php ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);

// Stänger ner aktiv session, vilket loggar ut användaren,
// och tar denne tillbaka till ingångssidan.

    session_start();
    session_destroy();
    
    header('Location:ingångssida.php');

?>