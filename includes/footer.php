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
                        <li>
                            <a href="<?php echo $social['url']; ?>" target="_blank">
                                <?php echo $social['icon']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="second-column">
                <?php foreach(FOOTER_LINKS as $section): ?>
                    <div class="column-footer">
                        <p class="footer-title"><?php echo $section['title']; ?></p>
                        <ul class="footer-nav">
                            <?php foreach($section['links'] as $link): ?>
                                <li><a href="<?php echo $link['url']; ?>"><?php echo $link['text']; ?></a></li>
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