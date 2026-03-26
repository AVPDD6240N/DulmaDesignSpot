<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dulma Design Spot</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<header class="navbar">
  <div class="logo">
    <!-- Video logo -->
    <video autoplay loop muted playsinline class="logo-video">
      <source src="images/logo-animation.mp4" type="video/mp4">
      <!-- fallback image -->
      <img src="images/logo1.jpg" alt="Dulma Design Spot Logo">
    </video>
    <span>Dulma Design Spot</span>
  </div>

  <nav class="nav-links">
    <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="portfolio.php">Portfolio</a>
    <a href="blog.php">Blog</a>
    <a href="contact.php">Contact</a>
  </nav>

  <!-- Hamburger Menu for Mobile -->
  <div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </div>
</header>