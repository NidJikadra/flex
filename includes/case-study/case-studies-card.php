<?php
/**
 * Case studies card Section Component
 */

 // Sample data for dynamic content
$technologies = [
    ['src' => 'assets/images/icons/figma-case.svg', 'name' => 'Figma'],
    ['src' => 'assets/images/icons/angular-case.svg', 'name' => 'Angular'],
    ['src' => 'assets/images/icons/js-case.svg', 'name' => 'Javascript'],
    ['src' => 'assets/images/icons/react-case.svg', 'name' => 'React'],
];

$stats = [
    ['value' => '~25%', 'description' => 'Navigate effortlessly with our intuitive interface.'],
    ['value' => '1m', 'description' => 'Enjoy reliable, cutting-edge technology every time.'],
];

?>
<section class="case-studies-list-section">
    <div class="container">
        <div class="case-studies-list__content">
            <div class="case-studies-list__content-list">
                <div class="case-studies-list__image-container">
                    <img src="assets/images/case-studies1.png" width="690" height="781"
                        alt="Laptop with virtual dictionary" class="case-studies-list__laptop-image">
                </div>
                <div class="case-studies-list__details">
                    <p class="tech-field">
                        <span>UI</span>
                        <span>UX</span>
                        <span>Branding</span>
                        <span>Web Design</span>
                        <span>Development</span>
                        <span>3D Design</span>
                    </p>
                    <h3 class="h3">The Interactive Dictionary of Free Speech - WebExperience</h3>
                    <p class="service-text">
                        A virtual reality gaming experience showcasing the wonders of the island of Nisida, intertwining
                        myths, legends, and tourist information with a message of hope and redemption.
                    </p>
                    <div class="case-studies-list__technologies">
                        <?php foreach ($technologies as $tech): ?>
                        <div class="case-studies-list__tech">
                            <div class="grid-image">
                                <img src="<?php echo $tech['src']; ?>" height="45" width="45" alt="<?php echo $tech['name']; ?>">
                            </div>
                            <div class="item-name"><?php echo $tech['name']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="case-studies-list__stats">
                        <?php foreach ($stats as $stat): ?>
                        <div class="case-studies-list__stat">
                            <p class="case-studies-list__stat-value"><?php echo $stat['value']; ?></p>
                            <p class="case-studies-list__stat-description"><?php echo $stat['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="button btn-secondary">Explore the details<span
                            class="icon"></span></button>
                </div>
            </div>
        </div>
        <div class="case-studies-list__content">
            <div class="case-studies-list__content-list">
                <div class="case-studies-list__image-container">
                    <img src="assets/images/case-studies2.png" width="690" height="781"
                        alt="Laptop with virtual dictionary" class="case-studies-list__laptop-image">
                </div>
                <div class="case-studies-list__details">
                    <p class="tech-field">
                        <span>UI</span>
                        <span>UX</span>
                        <span>Branding</span>
                        <span>Web Design</span>
                        <span>Development</span>
                        <span>3D Design</span>
                    </p>
                    <h3 class="h3">The Interactive Dictionary of Free Speech - WebExperience</h3>
                    <p class="service-text">
                        A virtual reality gaming experience showcasing the wonders of the island of Nisida, intertwining
                        myths, legends, and tourist information with a message of hope and redemption.
                    </p>
                    <div class="case-studies-list__technologies">
                        <?php foreach ($technologies as $tech): ?>
                        <div class="case-studies-list__tech">
                            <div class="grid-image">
                                <img src="<?php echo $tech['src']; ?>" height="45" width="45" alt="<?php echo $tech['name']; ?>">
                            </div>
                            <div class="item-name"><?php echo $tech['name']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="case-studies-list__stats">
                        <?php foreach ($stats as $stat): ?>
                        <div class="case-studies-list__stat">
                            <p class="case-studies-list__stat-value"><?php echo $stat['value']; ?></p>
                            <p class="case-studies-list__stat-description"><?php echo $stat['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="button btn-secondary">Explore the details<span
                            class="icon"></span></button>
                </div>
            </div>
        </div>
        <div class="case-studies-list__content">
            <div class="case-studies-list__content-list">
                <div class="case-studies-list__image-container">
                    <img src="assets/images/case-studies3.png" width="690" height="781"
                        alt="Laptop with virtual dictionary" class="case-studies-list__laptop-image">
                </div>
                <div class="case-studies-list__details">
                    <p class="tech-field">
                        <span>UI</span>
                        <span>UX</span>
                        <span>Branding</span>
                        <span>Web Design</span>
                        <span>Development</span>
                        <span>3D Design</span>
                    </p>
                    <h3 class="h3">The Interactive Dictionary of Free Speech - WebExperience</h3>
                    <p class="service-text">
                        A virtual reality gaming experience showcasing the wonders of the island of Nisida, intertwining
                        myths, legends, and tourist information with a message of hope and redemption.
                    </p>
                    <div class="case-studies-list__technologies">
                        <?php foreach ($technologies as $tech): ?>
                        <div class="case-studies-list__tech">
                            <div class="grid-image">
                                <img src="<?php echo $tech['src']; ?>" height="45" width="45" alt="<?php echo $tech['name']; ?>">
                            </div>
                            <div class="item-name"><?php echo $tech['name']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="case-studies-list__stats">
                        <?php foreach ($stats as $stat): ?>
                        <div class="case-studies-list__stat">
                            <p class="case-studies-list__stat-value"><?php echo $stat['value']; ?></p>
                            <p class="case-studies-list__stat-description"><?php echo $stat['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="button btn-secondary">Explore the details<span
                            class="icon"></span></button>
                </div>
            </div>
        </div>
        <div class="case-studies-list__content">
            <div class="case-studies-list__content-list">
                <div class="case-studies-list__image-container">
                    <img src="assets/images/case-studies4.png" width="690" height="781"
                        alt="Laptop with virtual dictionary" class="case-studies-list__laptop-image">
                </div>
                <div class="case-studies-list__details">
                    <p class="tech-field">
                        <span>UI</span>
                        <span>UX</span>
                        <span>Branding</span>
                        <span>Web Design</span>
                        <span>Development</span>
                        <span>3D Design</span>
                    </p>
                    <h3 class="h3">The Interactive Dictionary of Free Speech - WebExperience</h3>
                    <p class="service-text">
                        A virtual reality gaming experience showcasing the wonders of the island of Nisida, intertwining
                        myths, legends, and tourist information with a message of hope and redemption.
                    </p>
                    <div class="case-studies-list__technologies">
                        <?php foreach ($technologies as $tech): ?>
                        <div class="case-studies-list__tech">
                            <div class="grid-image">
                                <img src="<?php echo $tech['src']; ?>" height="45" width="45" alt="<?php echo $tech['name']; ?>">
                            </div>
                            <div class="item-name"><?php echo $tech['name']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="case-studies-list__stats">
                        <?php foreach ($stats as $stat): ?>
                        <div class="case-studies-list__stat">
                            <p class="case-studies-list__stat-value"><?php echo $stat['value']; ?></p>
                            <p class="case-studies-list__stat-description"><?php echo $stat['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="button btn-secondary">Explore the details<span
                            class="icon"></span></button>
                </div>
            </div>
        </div>
        <div class="case-studies-list__content">
            <div class="case-studies-list__content-list">
                <div class="case-studies-list__image-container">
                    <img src="assets/images/case-studies5.png" width="690" height="781"
                        alt="Laptop with virtual dictionary" class="case-studies-list__laptop-image">
                </div>
                <div class="case-studies-list__details">
                    <p class="tech-field">
                        <span>UI</span>
                        <span>UX</span>
                        <span>Branding</span>
                        <span>Web Design</span>
                        <span>Development</span>
                        <span>3D Design</span>
                    </p>
                    <h3 class="h3">The Interactive Dictionary of Free Speech - WebExperience</h3>
                    <p class="service-text">
                        A virtual reality gaming experience showcasing the wonders of the island of Nisida, intertwining
                        myths, legends, and tourist information with a message of hope and redemption.
                    </p>
                    <div class="case-studies-list__technologies">
                        <?php foreach ($technologies as $tech): ?>
                        <div class="case-studies-list__tech">
                            <div class="grid-image">
                                <img src="<?php echo $tech['src']; ?>" height="45" width="45" alt="<?php echo $tech['name']; ?>">
                            </div>
                            <div class="item-name"><?php echo $tech['name']; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="case-studies-list__stats">
                        <?php foreach ($stats as $stat): ?>
                        <div class="case-studies-list__stat">
                            <p class="case-studies-list__stat-value"><?php echo $stat['value']; ?></p>
                            <p class="case-studies-list__stat-description"><?php echo $stat['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="button btn-secondary">Explore the details<span
                            class="icon"></span></button>
                </div>
            </div>
        </div>
    </div>
</section>