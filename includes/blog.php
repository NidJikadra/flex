<?php
/**
 * Blog Section Component
 */

$blog_posts = [
    [
        'category' => 'Design',
        'title' => 'How Flex Integrated AVIF for Faster, Smaller, and Sharper Images',
        'description' => 'In May 2024, we shipped AVIF support. All images on Framer are now served as AVIF, which makes them ~20% smaller. However, integrating this format was challenging, partly because converting images to AVIF is slow. Here\'s how we solved this.',
        'image' => 'blog-img-1.png'
    ],
    [
        'category' => 'Web Development',
        'title' => 'Framer\'s $27M Series C and Shaping the Future of Web',
        'description' => 'We\'re happy to announce our $27M Series C funding round, led by Meritech Capital with participation from our current investors: Atomico, Accel, and Foundation.',
        'image' => 'blog-img-2.png'
    ],
    // Add more blog posts
];
?>

<section class="blog-section">
            <div class="container">
                <div class="page-title">
                    <div class="title-wrapper">
                        <h3 class="sub-title">Insights</h3>
                        <h2 class="h2">Blog & Articles</h2>
                    </div>
                    <button type="button" class="button btn-primary">Go to insights</button>
                </div>
                <div class="row">
                    <div class="blog-card">
                        <img src="assets/images/blog-img-1.png" alt="Blog 1" height="300" width="440" class="img-border">
                        <div class="text-block">
                            <p class="blog-card-text">Design</p>
                            <div class="blog-card-title"><a href="#">How Flex Integrated AVIF for Faster, Smaller, and Sharper Images</a></div>
                            <p class="blog-card-description">In May 2024, we shipped AVIF support. All images on Framer are now served as AVIF, which makes them ~20% smaller. However, integrating this format was challenging, partly because converting images to AVIF is slow. Here’s how we solved this.</p>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="blog">
                            <img src="assets/images/blog-img-2.png" alt="Blog 1" height="300" width="440" class="img-border">
                        </div>
                        <div class="text-block">
                            <p class="blog-card-text">Web Development</p>
                            <div class="blog-card-title"><a href="#">Framer's $27M Series C and Shaping the Future of Web</a></div>
                            <p class="blog-card-description">We’re happy to announce our $27M Series C funding round, led by Meritech Capital with participation from our current investors: Atomico, Accel, and Foundation. As always, thanks to all our customers, employees, and investors for coming on this journey with us.</p>
                        </div>
                    </div> 
                    <div class="blog-card">
                        <img src="assets/images/blog-img-3.png" alt="Blog 1" height="300" width="440" class="img-border">
                        <div class="text-block">
                            <p class="blog-card-text">Mobile Application</p>
                            <div class="blog-card-title"><a href="#">Radial Background Component for Framer</a></div>
                            <p class="blog-card-description">Introducing a new component — the radial background component. This component combines CSS repeating-radial-gradient, background-position/size manipulation, and is powered by Framer Motion. In this blog post, we'll dive into how it works.</p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="button btn-primary bottom">Go to insights</button>
        </section>