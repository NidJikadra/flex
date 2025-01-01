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
                <div class="blog-detail__category">
                    <div class="blog-detail__meta">
                        <span class="blog-detail__small-title">Design</span>
                        <span class="blog-detail__date">05 August, 2024</span>
                        <span class="blog-detail__reading-time">8 Minutes Read</span>
                    </div>
                    <h3 class="blog-detail__title">How Framer Integrated AVIF for Faster, Smaller, and Sharper Images
                    </h3>
                </div>
                <div class="blog-detail__share-button">
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
        <div class="blog-detail__blockquote">
            <div class="blog-detail__content">
                <p class="blog-detail__caption">In May 2024, we shipped AVIF support. All images on Framer are now
                    served as AVIF, which makes them
                    ~20%
                    smaller. However, integrating this format was challenging, partly because converting images to AVIF
                    is
                    slow. Here’s how we solved this.</p>

                <h2 class="blog-detail__subtitle">Challenge: AVIF Encoding Is Slow</h2>
                <p class="description">At Framer, we <span class="text-blue">optimize every image</span> on the first
                    request. The optimized image is then cached on a CDN.</p>

                <p class="description">This is a common approach, and it works well, but it comes with a drawback.
                    Because the first uncached request has to convert and resize the image, it takes longer than
                    subsequent ones. With WebP, “longer” is noticeable but acceptable: in our infrastructure, WebP
                    conversion typically adds 100-300 milliseconds. However, with AVIF, this grows to 1-2 seconds.</p>

                <p class="description"><strong>Side note :</strong> “1-2 seconds? Isn’t that still fast?” — It’s fast,
                    but only outside computer contexts. <span class="text-blue">Research shows</span> that users start
                    feeling things aren’t instant after just 100 milliseconds.</p>

                <p class="description">Framer’s cache hit for images is ~98%. If we ignored this issue and switched to
                    AVIF, every 50th image would take several seconds to load. We felt this was unacceptable, so
                    Framer’s Jacob came up with, and Piotr shipped a clever strategy that avoided that – the
                    stale-while-revalidate header.</p>

                <h2 class="blog-detail__subtitle">Solution: Stale-While-Revalidate</h2>
                <p class="description"><span class="text-blue">stale-while-revalidate</span> is a caching setting. It’s
                    a parameter in the <strong>Cache-Control</strong> header, and it tells CDNs how long they can keep
                    serving the image
                    after it expires:</p>

                <p class="description">This is a common approach, and it works well, but it comes with a drawback.
                    Because the first uncached request has to convert and resize the image, it takes longer than
                    subsequent ones. With WebP, “longer” is noticeable but acceptable: in our infrastructure, WebP
                    conversion typically adds 100-300 milliseconds. However, with AVIF, this grows to 1-2 seconds.</p>

                <div class="our-mission__block">
                    <p class="description description-info">Cache-Control: max-age=<span
                            class="text-yellow">3600</span>, stale-<span class="dark-blue">while</span>-revalidate=<span
                            class="text-yellow">60</span> ↑ how long a file can be cached <span
                            class="dark-blue">for</span> ↑ how long a CDN can keep serving the file after max-age
                        expires
                    </p>
                </div>
                <p class="blog-detail__paragraph-title">Here’s how we used it to make sure AVIF never makes image
                    responses slow:</p>
                <ul class="blog-detail__list">1. First Request: WebP
                    <li class="description">On the first request, we serve the image as WebP, not as AVIF.</li>
                    <li class="description">We also set the Cache-Control header to max-age=0,
                        stale-while-revalidate=31536000</li>
                </ul>
                <ul class="blog-detail__list">2. Immediate Expiry
                    <li class="description">Because max-age is set to 0, the WebP image expires immediately. This
                        prompts the CDN to forward the second request to us.</li>
                </ul>
                <ul class="blog-detail__list">3. Second Request: AVIF
                    <li class="description">When the second request arrives, we serve the image as AVIF.</li>
                    <li class="description" style="margin-left: 40px;">Responding to the second request can take several
                        seconds because AVIF
                        conversion is slow. But thanks to stale-while-revalidate, our CDN (CloudFront) keeps serving the
                        WebP image until the conversion is complete.</li>
                    <li class="description" style="margin-left: 40px;">We recognize the second request from the first by
                        the If-None-Match header.
                        Only the second request has it.</li>
                    <li class="description">When the AVIF image is ready, we return it with Cache-Control:
                        max-age=31536000. This allows the CDN to cache and serve it for a long time.</li>
                </ul>
                <div class="blog-detail__image">
                    <img src="assets/images/avif-image.png" alt="" width="750" height="420">
                </div>
                <h2 class="blog-detail__subtitle">When We Don’t Use AVIF</h2>
                <p class="blog-detail__paragraph-title">AVIF is now the default format for most images. But there are
                    still a few scenarios where we continue to use WebP:</p>

                <ul class="blog-detail__list">
                    <li class="description">Lossless Images: AVIF’s lossless compression is not truly lossless and also
                        worse than WebP’s. So, for lossless images, we keep using WebP.</li>
                    <li class="description">Animated Images: The library we rely on for image optimization doesn’t
                        support animated AVIF images, so we continue using WebP for these.</li>
                </ul>
            </div>

            <div class="blog-detail__toc">
                <h3 class="h3">Table of Contents</h3>
                <p class="blog-detail__paragraph-title"><span class="text-white">Introduction</span></p>
                <p class="description">Challenge: AVIF Encoding Is Slow</p>
                <p class="description">Solution: Stale-While-Revalidate</p>
                <p class="description">Here’s how we used it to make sure AVIF never makes image responses slow:</p>
                <p class="description">When We Don’t Use AVIF</p>
                <p class="description">Summery</p>
                <div class="blog-detail__author-details">
                    <p class="blog-detail__list">Written By</p>
                    <div class="blog-detail__author">
                        <div class="testimonial-wrapper__image">
                            <img src="assets/images/Image1.png" height="80" width="80" alt="Savannah Nguyen">
                        </div>
                        <div class="blog-detail__desc">
                            <p class="blog-detail__name">Savannah Nguyen</p>
                            <p class="blog-detail__position">Lead Designer, Flex</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>