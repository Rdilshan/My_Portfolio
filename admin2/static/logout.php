<?php
// Start the session
session_start();

// Clear specific session data
unset($_SESSION['username']);
unset($_SESSION['user_id']);


// Destroy the entire session
session_destroy();

header("Location: index.php");
exit();

?>
