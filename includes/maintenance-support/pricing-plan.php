<?php
/**
 * Pricing Plan Component
 */

$features = [
    'Website Speed Optimization',
    'Security Upgrades',
    'SSL Installation',
    'Google ReCaptcha Integration',
    'Google Analytics Integration',
    'Google Search Console Setup',
    'Plugin Updates',
    'Core Updates'
];
        
$plans = [
    'Start-ups' => [true, true, true, false, true, false, false, false],
    'Professional' => [true, true, true, true, true, true, false, false],
    'Business' => [true, true, true, true, true, true, true, true]
];
?>

<section class="pricing-plans">
    <div class="container">
        <div class="section-title">
            <div class="title-wrapper">
                <p class="sub-title">Find the Right Fit</p>
                <h2 class="h2">Select Website Maintenance Plan</h2>
            </div>
            <button type="button" class="button btn-primary" aria-label="contact-button">Send Inquiry</button>
            <p class="description">Choose the perfect website maintenance plan tailored to your business needs.</p>
        </div>

        <div class="pricing-plans__wrapper">
            <div class="pricing-plans__header">
                <div class="pricing-plans__title-col">Pick Your Plan</div>
                <div class="pricing-plans__dropdown">
                    <select class="pricing-plans__select">
                        <?php foreach(array_keys($plans) as $plan): ?>
                        <option value="<?php echo strtolower(str_replace(' ', '-', $plan)); ?>">
                            <?php echo $plan; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <span class="pricing-plans__select-arrow"></span>
                </div>
                <div class="pricing-plans__options">
                    <?php foreach(array_keys($plans) as $plan): ?>
                    <div class="pricing-plans__option"><?php echo $plan; ?></div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="pricing-plans__content">
                <div class="pricing-plans__features">
                    <?php foreach($features as $feature): ?>
                    <div class="pricing-plans__feature"><?php echo $feature; ?></div>
                    <?php endforeach; ?>
                </div>

                <div class="pricing-plans__checks">
                    <?php 
                        $totalColumns = count($plans); 
                        $currentColumn = 0; 

                        foreach ($plans as $planKey => $planFeatures): 
                            $currentColumn++;
                            $isFirstColumn = ($currentColumn === 1); 
                            $isLastColumn = ($currentColumn === $totalColumns); 
                    ?>
                    <div class="pricing-plans__check-column <?php echo $isFirstColumn ? 'active' : ''; ?>"
                        data-plan="<?php echo strtolower(str_replace(' ', '-', $planKey)); ?>">
                        <?php foreach ($planFeatures as $index => $hasFeature): ?>
                        <div class="pricing-plans__check 
                            <?php echo $isFirstColumn && $index === 0 ? 'first-column-first-check' : ''; ?> 
                            <?php echo $isLastColumn && $index === 0 ? 'last-column-first-check' : ''; ?>">
                            <img src="assets/images/icons/<?php echo $hasFeature ? 'checkmark' : 'empty'; ?>.svg"
                                alt="<?php echo $hasFeature ? 'checkmark' : 'empty'; ?>" height="13" width="13">
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="pricing-plans__footer">
                    <span>View All Services</span>
                </div>
            </div>

        </div>
    </div>
</section>