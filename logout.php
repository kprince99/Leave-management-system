<?php
// core configuration
include_once "core.php";
 
// destroy session, it will remove ALL session settings
session_destroy();
session_unset();

  
//redirect to login page
header("Location: {$home_url}login.html");
?>