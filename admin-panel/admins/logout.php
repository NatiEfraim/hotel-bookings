<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the main page (relative URL)
echo "  <script>window.location.href = './login-admins.php';</script>";
// header("Location: ../index.php");
exit(); // Make sure to exit after a header redirect