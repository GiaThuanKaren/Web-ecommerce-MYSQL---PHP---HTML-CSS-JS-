<?php 
session_start();
unset($_SESSION['nameUser']);
header('Location: index.php');
?>