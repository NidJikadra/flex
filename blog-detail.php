<?php
$page_title = 'Blog Detail';
include 'includes/header.php';
?>

<main>
    <?php
        include 'includes/blog-detail/hero.php';
        include 'includes/blog-detail/single-page.php';
        include 'includes/blog-detail/latest-blog.php';
        include 'includes/call.php';

    ?>
</main>

<?php
include 'includes/footer.php';
?>