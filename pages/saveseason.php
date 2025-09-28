<?php
session_start();

// Check if the session is set and has data
if (isset($_SESSION['us']) && !empty($_SESSION['us'])) {
    // Session is set and has data, so the user can proceed
    echo '<script>alert("Session is active.");</script>';
} else {
    // No session data found, redirect to index.php
    header("Location: ../index.php");
    exit();
}
?>
