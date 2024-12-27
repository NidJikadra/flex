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
    <link rel="stylesheet" href="./assets/scss/main.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <nav class="navbar">
                <a href="./" class="logo">
                    <img src="assets/images/icons/Logo.svg" alt="Logo" width="124" height="32" class="logo-default">
                    <img src="assets/images/icons/Logo-mobile.svg" alt="Logo Large" width="200" height="50" class="logo-lg">
                </a>
                <div class="navbar-list">
                    <ul class="nav-list">
                        <li><a href="aboutus.php">Company</a></li>
                        <li class="dropdown menu-item">
                            <a href="our-services.php">Services</a>
                            <div class="mega-menu">
                                <div class="mega-menu-wrapper">
                                    <div class="menu-row">
                                        <div class="menu-column">
                                            <div class="menu-text-block">
                                                <div class="menu-card-title">CMS Platform and Frameworks</div>
                                                <p class="menu-card-text">User-friendly platforms for efficient content management.</p>
                                            </div>
                                            <img src="assets/images/mega-vector1.png" height="195" width="340" alt="CMS Platform">
                                        </div>
                                        <div class="menu-column">
                                            <div class="menu-text-block">
                                                <div class="menu-card-title">Web App Development</div>
                                                <p class="menu-card-text">Build responsive apps tailored to your needs.</p>
                                            </div>
                                            <img src="assets/images/mega-vectore2.png" height="195" width="340" alt="Web App Development">
                                        </div>
                                        <div class="menu-column">
                                            <div class="menu-text-block">
                                                <div class="menu-card-title">UI/UX Designing</div>
                                                <p class="menu-card-text">Create intuitive, engaging user interfaces and experiences.</p>
                                            </div>
                                            <img src="assets/images/mega-vector3.png" height="195" width="340" alt="UI/UX Designing">
                                        </div>
                                        <div class="menu-column">
                                            <div class="menu-text-block">
                                                <div class="menu-card-title">SEO & Performance</div>
                                                <p class="menu-card-text">Boost visibility and speed for optimal results.</p>
                                            </div>
                                            <img src="assets/images/mega-vector4.png" height="195" width="340" alt="SEO & Performance">
                                        </div>  
                                        <div class="menu-column">
                                            <div class="menu-text-block">
                                                <div class="menu-card-title">Support & Maintenance</div>
                                                <p class="menu-card-text">Ongoing support to ensure website reliability.</p>
                                            </div>
                                            <img src="assets/images/mega-vector5.png" height="195" width="340" alt="Support & Maintenance">
                                        </div>      
                                        <div class="menu-column">
                                            <div class="menu-text-block">
                                                <div class="menu-card-title">Backend Development</div>
                                                <p class="menu-card-text">Develop robust systems for seamless web operations.</p>
                                            </div>
                                            <img src="assets/images/mega-vectore-6.png" height="195" width="340" alt="Backend Development">
                                        </div>
                                        <div class="menu-column">
                                            <div class="menu-text-block">
                                                <div class="menu-card-title">E-Commerce</div>
                                                <p class="menu-card-text">Secure, high-performing online stores for growth.</p>
                                            </div>
                                            <img src="assets/images/mega-vectore7.png" height="195" width="340" alt="E-Commerce">
                                        </div>
                                        <div class="menu-column"></div>
                                    </div>
                                    <div class="view-all">
                                        <div class="view-text-block">
                                            <div class="view-all-title">Explore All Our Services</div>
                                            <p class="view-all-desc">Discover tailored solutions that drive growth and innovation.</p>
                                        </div>
                                        <button type="button" class="button btn-primary bottom">View all Services</button>
                                    </div>
                                </div>  
                            </div>
                        </li>
                        <li class="dropdown menu-item">
                            <a href="#">Case Studies</a>
                            <div class="mega-menu">
                                <div class="mega-menu-wrapper">
                                    <div class="grid-menu">
                                        <div class="menu-card">
                                            <img src="assets/images/menu-card1.png" alt="Laptop mockup" class="img-border">
                                            <p class="tech-field">
                                                <span>UI</span>
                                                <span>UX</span>
                                                <span>Branding</span>
                                                <span>Web Design</span>
                                                <span>Development</span>
                                                <span>3D Design</span>
                                            </p>
                                            <div class="card-title">The Interactive Dictionary of Free Speech - Web Experience</div>
                                            <div class="tech-icons">
                                                <div class="icons"><img src="assets/images/icons/Figma.svg" alt="figma-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/angular.svg" alt="angular-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/javascript.svg" alt="javascript-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/react.svg" alt="react-icon" height="28" width="28"></div>
                                            </div>
                                            <a href="#" class="read-more" data-hover="Explore the Details"><span>Explore the Details</span></a>
                                        </div>
                                        <div class="menu-card">
                                            <img src="assets/images/menu-card2.png" alt="Ipad mockup" class="img-border">
                                            <p class="tech-field">
                                                <span>UI</span>
                                                <span>UX</span>
                                                <span>Branding</span>
                                                <span>Web Design</span>
                                                <span>Development</span>
                                                <span>3D Design</span>
                                            </p>
                                            <div class="card-title">The Interactive Dictionary of Free Speech - Web Experience</div>
                                            <div class="tech-icons">
                                                <div class="icons"><img src="assets/images/icons/Figma.svg" alt="figma-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/angular.svg" alt="angular-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/javascript.svg" alt="javascript-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/react.svg" alt="react-icon" height="28" width="28"></div>
                                            </div>
                                            <a href="#" class="read-more" data-hover="Explore the Details"><span>Explore the Details</span></a>
                                        </div>
                                        <div class="menu-card">
                                            <img src="assets/images/menu-card3.png" alt="Iphone mockup" class="img-border">
                                            <p class="tech-field">
                                                <span>UI</span>
                                                <span>UX</span>
                                                <span>Branding</span>
                                                <span>Web Design</span>
                                                <span>Development</span>
                                                <span>3D Design</span>
                                            </p>
                                            <div class="card-title">The Interactive Dictionary of Free Speech - Web Experience</div>
                                            <div class="tech-icons">
                                                <div class="icons"><img src="assets/images/icons/Figma.svg" alt="figma-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/angular.svg" alt="angular-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/javascript.svg" alt="javascript-icon" height="28" width="28"></div>
                                                <div class="icons"><img src="assets/images/icons/react.svg" alt="react-icon" height="28" width="28"></div>
                                            </div>
                                            <a href="#" class="read-more" data-hover="Explore the Details"><span>Explore the Details</span></a>
                                        </div>
                                    </div>
                                    <div class="view-all">
                                        <div class="view-text-block">
                                            <div class="view-all-title">Showcasing Success Stories and Innovations</div>
                                            <p class="view-all-desc">Explore our projects and see how we deliver results.</p>
                                        </div>
                                        <button type="button" class="button btn-primary">View all Case Studies</button>
                                    </div>
                                </div>
                            </div>
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