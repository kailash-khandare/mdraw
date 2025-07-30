<?php
session_start();         // Start the session
   // Unset all session variables
session_destroy();       // Destroy the session

// Optional: Redirect to homepage or login
header("Location: index.php");  // Change to login.php if needed
exit();
