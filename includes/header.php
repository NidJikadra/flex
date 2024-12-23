<?php
/**
 * Header Component
 * This file contains the header HTML and initial setup
 */

// Load configuration
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../includes/helpers.php';

// Start output buffering
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Encoding" content="gzip">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <title><?php echo SITE_NAME; ?> | <?php echo isset($page_title) ? $page_title : 'HomePage'; ?></title>
    <link rel="stylesheet" href="/assets/scss/main.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <nav class="navbar">
                <a href="index.html" class="logo">
                    <img src="assets/images/Logo.png" alt="Logo" width="140" height="40">
                </a>
                <div class="navbar-list">
                    <ul class="nav-list">
                        <li><a href="#">Company</a></li>
                        <li class="dropdown menu-item">
                            <a href="#">Services</a>
                            <!-- Mega menu content -->
                            <div class="mega-menu">
                                <!-- Your mega menu content -->
                            </div>
                        </li>
                        <li class="dropdown menu-item">
                            <a href="#">Case Studies</a>
                            <!-- Mega menu content -->
                        </li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Blogs</a></li>
                    </ul>
                    
                    <button type="button" class="button btn-primary" aria-label="contact-button">Contact now</button>
                    <button type="button" class="menu-icon-btn" aria-label="menu-button"></button>
                    <ul class="nav-list mobile-menu">
                        <li><a href="#">Company</a></li>
                        <li class="dropdown"><a href="#">Services</a></li>
                        <li class="dropdown"><a href="#">Case Studies</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Blogs</a></li>
                        <button type="button" class="button btn-primary mobile-btn" aria-label="contact-button">Contact now</button>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</body>
</html>