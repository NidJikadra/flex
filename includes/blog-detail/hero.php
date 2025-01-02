<?php
/**
 * Blog detail Hero Section Component
 */
?>

<section class="about-hero blog-details">
    <div class="container">
        <div class="blog-details__hero">
            <div class="blog">
                <img src="assets/images/blogdetail-img.png" alt="Descriptive Alt Text" class="blog-details__image">
            </div>
            <div class="blog-details__message">
                <div class="blog-details__category">
                    <div class="blog-details__meta">
                        <span class="blog-details__small-title">Design</span>
                        <span class="blog-details__date">05 August, 2024</span>
                        <span class="blog-details__reading-time">8 Minutes Read</span>
                    </div>
                    <h3 class="blog-details__title">How Framer Integrated AVIF for Faster, Smaller, and Sharper Images
                    </h3>
                </div>
                <div class="blog-details__share-button">
                    <span class="blog-details__icons">Share :</span>
                    <ul class="social-icons">
                        <?php foreach(SOCIAL_LINKS as $social): ?>
                        <li>
                            <a href="<?php echo htmlspecialchars($social['url'], ENT_QUOTES, 'UTF-8'); ?>"
                                target="_blank" rel="noopener noreferrer">
                                <?php echo $social['icon']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>