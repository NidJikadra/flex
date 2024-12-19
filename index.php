<?php
/**
 * Main Index File
 */

// Load configuration
require_once 'config/config.php';
require_once 'includes/helpers.php';

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
    <title><?php echo SITE_NAME; ?> | HomePage</title>
    <link rel="stylesheet" href="/assets/scss/main.css">
</head>
<body>
    <?php 
    include 'includes/header.php';
    ?>

    <main>
        <?php
        include 'includes/home/hero.php';
        include 'includes/trusted.php';
        include 'includes/case-studies.php';
        include 'includes/testimonials.php';
        include 'includes/services.php';
        include 'includes/tabs.php';
        include 'includes/about.php';
        include 'includes/blog.php';
        include 'includes/faq.php';
        include 'includes/call.php';
        ?>
    </main>

    <?php
    include 'includes/footer.php';
    ?>

    <script src="/assets/js/main.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/motion@11.11.13/dist/motion.js"></script>
    <script>
        const { animate, scroll } = Motion;
    </script>
</body>
</html>
<?php
// End output buffering and send output
ob_end_flush();
?>
