<?php
/**
 * Blog detail single page Section Component
 */
?>

<section class="blog-detail">
    <div class="container">
        <div class="blog-detail__image-container">
            <div class="blog">
                <img src="assets/images/blogdetail-img.png" alt="Descriptive Alt Text" class="blog-detail__image">
            </div>
            <div class="blog-detail__message">
                <div class="demo">
                    <div class="blog-detail__meta">
                        <span class="blog-detail__small-title">Design</span>
                        <span class="blog-detail__date">05 August, 2024</span>
                        <span class="blog-detail__reading-time">8 Minutes Read</span>
                    </div>
                    <h3 class="blog-detail__title">How Framer Integrated AVIF for Faster, Smaller, and Sharper Images
                    </h3>
                </div>
                <div class="demo">
                    <span class="blog-detail__icons">Share :</span>
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
        <div class="blog-detail__content">
            <p>In May 2024, we shipped AVIF support. All images on Framer are now served as AVIF, which makes them ~20%
                smaller. However, integrating this format was challenging, partly because converting images to AVIF is
                slow. Here’s how we solved this.</p>

            <p class="blog-detail__subtitle">Challenge: AVIF Encoding Is Slow</p>
            <p>At Framer, we optimize every image on the first request. The optimized image is then cached on a CDN.</p>
            <p>This is a common approach, and it works well, but comes with a drawback...</p>

            <p class="blog-detail__subtitle">Solution: Stale-While-Revalidate</p>
            <p>Stale-while-revalidate is a caching setting...</p>

            <p class="blog-detail__subtitle">Summary</p>
            <p>In conclusion, integrating AVIF...</p>
        </div>

        <footer class="blog-detail__footer">
            <p>Written By: <strong class="blog-detail__author">Savannah Nguyen</strong></p>
        </footer>
    </div>
</section>