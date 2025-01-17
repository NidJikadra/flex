<?php
/**
 * Trusted Section Component
 */
?>
<section class="trusted-by-many word">
    <div class="container">
        <div class="trustred-slider">
            <p class="sub-title">Trusted By</p>
            <div class="slider-wrapper">
                <div class="slider">
                    <?php for($i = 1; $i <= 6; $i++) : ?>
                        <img src="assets/images/Card<?php echo $i; ?>.png" alt="Logo <?php echo $i; ?>">
                    <?php endfor; ?>
                    <?php for($i = 1; $i <= 6; $i++) : ?>
                        <img src="assets/images/Card<?php echo $i; ?>.png" alt="Logo <?php echo $i; ?>">
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section> 