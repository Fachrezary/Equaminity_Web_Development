<?php 
session_start();
ini_set('session.gc_max_lifetime', 0);
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);
session_destroy();
header("Location: login.php");
?>