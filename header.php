<?php
//HEADER FILE 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once 'includes/dbconn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../Day 11/assets/css/styles.css" rel="stylesheet" type="text/css">
    <title>Studio 23</title>
</head>
<body>

<!-- HEADER -->
<div class="header">
    <div class="inner-header">
        <a href="index.php" class="logo-link">
            <img src="../Day 11/assets/img/studio_23_logo.png" alt="Studio 23 Logo">
        </a>


        <!-- NAVIGATION MENU -->
        <nav>
            <a href="booking.php">Booking</a>
            <a href="contact.php">Contact</a>
            <a href="reviews.php">Reviews</a>
        </nav>

    </div>
    
    <?php if (isset($_SESSION['username'])): ?>
        <a href="user.php">
            <span class="login-header">Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
        </a>
    <?php else: ?>
        <a class="login-header" href="login.php">Login</a>
    <?php endif; ?>
</div>