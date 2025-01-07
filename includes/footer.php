<?php
/**
 * Footer Component
 */
?>
<footer>
    <div class="container">
        <div class="row-footer">
            <div class="column">
                <a href="index.html" class="footer-logo">
                    <img src="assets/images/Logo.png" alt="Flex-logo">
                </a>
                <p class="footer-text"><?php echo COMPANY_ADDRESS; ?></p>
                <ul class="social-icons">
                    <?php foreach(SOCIAL_LINKS as $social): ?>
                        <li class="social-icon">
                            <a href="<?php echo htmlspecialchars($social['url'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">
                                <?php echo $social['icon']; ?>
                                <span class="tooltip"><?php echo htmlspecialchars($social['platform'], ENT_QUOTES, 'UTF-8'); ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="second-column">
                <?php foreach(FOOTER_LINKS as $section): ?>
                    <div class="column-footer">
                        <p class="footer-title"><?php echo htmlspecialchars($section['title'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <ul class="footer-nav">
                            <?php foreach($section['links'] as $link): ?>
                                <li><a href="<?php echo htmlspecialchars($link['url'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($link['text'], ENT_QUOTES, 'UTF-8'); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row-copyright">
        <div class="container">
            <div class="columns">
                <div class="footer-column">
                    <p class="copyright-text">&copy; <?php echo date('Y'); ?> Flex Solutions All Rights Reserved.</p>
                </div>
                <ul class="footer-column-text">
                    <?php foreach(LEGAL_LINKS as $link): ?>
                        <li><a href="<?php echo $link['url']; ?>" target="_blank"><?php echo $link['text']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="./assets/js/main.js" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/embla-carousel/embla-carousel.umd.js"></script>
</body>
</html>
<?php
// End output buffering and send output
ob_end_flush();
?> 