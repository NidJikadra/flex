<?php
/**
 * Blog Pagination Section Component
 */
?>
<section class="blogs-spot">
    <div class="container">
        <div class="blog__search">
            <div class="search-container">
                <input type="text" id="searchInput" class="blog__search-input" placeholder="Search here" />
                <button class="blog__search-button d-block">
                    <img src="assets/images/icons/search-btn.svg" alt="search-button" height="32" width="32">
                </button>
            </div>
        </div>
        <div class="row">
            <div class="blog-card">
                <img src="assets/images/blog-img-1.png" alt="Blog 1" height="300" width="440" class="img-border">
                <div class="text-block">
                    <p class="blog-card-text">Design</p>
                    <div class="blog-card-title"><a href="blog-detail.php">How Flex Integrated AVIF for Faster, Smaller, and Sharper
                            Images</a></div>
                    <p class="blog-card-description">In May 2024, we shipped AVIF support. All images on Framer are now
                        served as AVIF, which makes them ~20% smaller. However, integrating this format was challenging,
                        partly because converting images to AVIF is slow. Here’s how we solved this.</p>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog">
                    <img src="assets/images/blog-img-2.png" alt="Blog 1" height="300" width="440" class="img-border">
                </div>
                <div class="text-block">
                    <p class="blog-card-text">Web Development</p>
                    <div class="blog-card-title"><a href="#">Framer's $27M Series C and Shaping the Future of Web</a>
                    </div>
                    <p class="blog-card-description">We’re happy to announce our $27M Series C funding round, led by
                        Meritech Capital with participation from our current investors: Atomico, Accel, and Foundation.
                        As always, thanks to all our customers, employees, and investors for coming on this journey with
                        us.</p>
                </div>
            </div>
            <div class="blog-card">
                <img src="assets/images/blog-img-3.png" alt="Blog 1" height="300" width="440" class="img-border">
                <div class="text-block">
                    <p class="blog-card-text">Mobile Application</p>
                    <div class="blog-card-title"><a href="#">Radial Background Component for Framer</a></div>
                    <p class="blog-card-description">Introducing a new component — the radial background component. This
                        component combines CSS repeating-radial-gradient, background-position/size manipulation, and is
                        powered by Framer Motion. In this blog post, we'll dive into how it works.</p>
                </div>
            </div>
            <div class="blog-card">
                <img src="assets/images/blog-image4.png" alt="Blog 1" height="300" width="440" class="img-border">
                <div class="text-block">
                    <p class="blog-card-text">SaaS Application</p>
                    <div class="blog-card-title"><a href="#">15 Standout Portfolio Website Examples in Framer</a></div>
                    <p class="blog-card-description">In May 2024, we shipped AVIF support. All images on Framer are now
                        served as AVIF, which makes them ~20% smaller. However, integrating this format was challenging,
                        partly because converting images to AVIF is slow. Here’s how we solved this.</p>
                </div>
            </div>
            <div class="blog-card">
                <img src="assets/images/blog-image5.png" alt="Blog 1" height="300" width="440" class="img-border">
                <div class="text-block">
                    <p class="blog-card-text">Design</p>
                    <div class="blog-card-title"><a href="#">Showcasing Innovative Menus: Highlights from the Framer
                            Challenge</a>
                    </div>
                    <p class="blog-card-description">In May 2024, we shipped AVIF support. All images on Framer are now
                        served as AVIF, which makes them ~20% smaller. However, integrating this format was challenging,
                        partly because converting images to AVIF is slow. Here’s how we solved this.</p>
                </div>
            </div>
            <div class="blog-card">
                <img src="assets/images/blog-image6.png" alt="Blog 1" height="300" width="440" class="img-border">
                <div class="text-block">
                    <p class="blog-card-text">Knowledge</p>
                    <div class="blog-card-title"><a href="#">Master Framer and Become a More Valuable Designer</a></div>
                    <p class="blog-card-description">Exciting news for anyone interested in learning Framer — the
                        Ultimate Framer Course is now live!</p>
                </div>
            </div>
        </div>

        <nav class="blog__pagination">
            <ul class="blog__pagination-list">
                <li class="blog__pagination-item"><a href="#" class="blog__pagination-link">1</a></li>
                <li class="blog__pagination-item"><a href="#" class="blog__pagination-link">2</a></li>
                <li class="blog__pagination-item"><a href="#" class="blog__pagination-link">3</a></li>
                <li class="blog__pagination-item blog__pagination-item--dots">...</li>
                <li class="blog__pagination-item"><a href="#" class="blog__pagination-link">9</a></li>
            </ul>
        </nav>
    </div>
</section>