<?php
/**
 * Our Team Section Component
 */
?>

<section class="our-team">
    <div class="container">
        <div class="section-title">
            <div class="title-wrapper">
                <p class="sub-title">our team</p>
                <h2 class="h2">Our People, Our Strength</h2>
            </div>
        </div>
        <div class="our-team__row" data-animate="fade-in-scale" data-animate-delay="0.3">
            <div class="team-card" data-name="Jacob Jones" data-position="Founder" data-description="Bessie Cooper is the visionary Team Leader at Flex Solutions, driving innovative design strategies 
                                    and ensuring seamless project execution. With a background in both design and project management, 
                                    Bessie excels in leading creative teams to deliver exceptional results."
                data-skills="Strategic Planning" data-image="assets/images/team-member1(lg).png">
                <img src="assets/images/team-member1.png" alt="Jacob Jones" width="310" height="300" class="img-border">
                <div class="card-content">
                    <div class="team-card__name">Jacob Jones</div>
                    <div class="team-card__position">Founder</div>
                </div>

            </div>
            <div class="team-card" data-name="Bessie Cooper" data-position="Team Leader" data-description="Bessie Cooper is the visionary Team Leader at Flex Solutions, driving innovative design strategies 
                                    and ensuring seamless project execution. With a background in both design and project management, 
                                    Bessie excels in leading creative teams to deliver exceptional results."
                data-skills="Strategic Planning" data-image="assets/images/team-member2(lg).png">
                <img src="assets/images/team-member2.png" alt="Bessie Cooper" width="310" height="300"
                    class="img-border">
                <div class="card-content">
                    <div class="team-card__name">Bessie Cooper</div>
                    <div class="team-card__position">Team Leader</div>
                </div>
            </div>
            <div class="team-card" data-name="Marvin McKinney" data-position="UI/UX Designer" data-description="Bessie Cooper is the visionary Team Leader at Flex Solutions, driving innovative design strategies 
                                    and ensuring seamless project execution. With a background in both design and project management, 
                                    Bessie excels in leading creative teams to deliver exceptional results."
                data-skills="Strategic Planning" data-image="assets/images/team-member3(lg).png">
                <img src="assets/images/team-member3.png" alt="Marvin McKinney" width="310" height="300"
                    class="img-border">
                <div class="card-content">
                    <div class="team-card__name">Marvin McKinney</div>
                    <div class="team-card__position">UI/UX Designer</div>
                </div>
            </div>
            <div class="team-card" data-name="Savannah Nguyen" data-position="Software Developer" data-description="Bessie Cooper is the visionary Team Leader at Flex Solutions, driving innovative design strategies 
                                    and ensuring seamless project execution. With a background in both design and project management, 
                                    Bessie excels in leading creative teams to deliver exceptional results."
                data-skills="Strategic Planning" data-image="assets/images/team-member4(lg).png">
                <img src="assets/images/team-member4.png" alt="Savannah Nguyen" width="310" height="300"
                    class="img-border">
                <div class="card-content">
                    <div class="team-card__name">Savannah Nguyen</div>
                    <div class="team-card__position">Software Developer</div>
                </div>
            </div>
        </div>
        <div class="modal" id="teamModal">
            <div class="container">
                <div class="profile-card">
                    <span class="close-btn" id="closeModal">&times;</span>
                    <div class="profile-card__image">
                        <img src="assets/images/team-member1(lg).png" alt="Jacob Jones" width="690" height="781"
                            class="img-border">
                    </div>
                    <div class="profile-card__content">

                        <p class="profile-card__position">Team Leader</p>
                        <h3 class="profile-card__name">Bessie Cooper</h3>
                        <p class="description">
                            Bessie Cooper is the visionary Team Leader at Flex Solutions, driving innovative design
                            strategies
                            and ensuring seamless project execution. With a background in both design and project
                            management,
                            Bessie excels in leading creative teams to deliver exceptional results.
                        </p>
                        <div class="profile-card__skills">
                            <p class="skills">Skills</p>
                            <ul class="skills__List">
                                <li class="skills__name">Strategic Planning</li>
                                <li class="skills__name">Team Leadership</li>
                                <li class="skills__name">Creative Direction</li>
                            </ul>
                        </div>
                        <div class="profile-card__experience">
                            <p class="experience">Experience</p>
                            <p class="description">
                                Bessie Cooper is the visionary Team Leader at Flex Solutions, driving innovative design
                                strategies
                                and ensuring seamless project execution. With a background in both design and project
                                management,
                                Bessie excels in leading creative teams to deliver exceptional results.
                            </p>
                        </div>
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
    </div>
    </div>
</section>