<?php 
// Inicia sess�es, para assim poder destru�-las 
session_start(); 
session_destroy(); 
$a='0';
header("Location: index.php"); 
?>
