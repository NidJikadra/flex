<?php
/**
 * Tech Stack Component
 */
?>

<section class="tech-stack">
    <div class="container">
        <div class="section-title">
            <div class="title-wrapper">
                <p class="sub-title">Tech Stack</p>
                <h2 class="tech-stack__main-title">Our Advanced Tech Stack</h2>
            </div>
        </div>

        <div class="tech-stack__skills">
            <ul class="tech-stack__skills-list">
                <li class="tech-stack__skills-button" data-tab="programming-language">Programming Language</li>
                <li class="tech-stack__skills-button tech-stack__skills-button--active" data-tab="frontend">Frontend
                </li>
                <li class="tech-stack__skills-button" data-tab="backend">Backend</li>
                <li class="tech-stack__skills-button" data-tab="version-control">Version Control</li>
                <li class="tech-stack__skills-button" data-tab="database">Database</li>
                <li class="tech-stack__skills-button" data-tab="cloud-devops">Cloud & DevOps</li>
                <li class="tech-stack__skills-button" data-tab="additional-tools">Additional Tools</li>
            </ul>

            <ul class="tech-stack__skills-tab tech-stack__skills-tab--active" id="frontend">
                <li class="tech-stack__skills-tab--list">
                    <ul class="tech-stack__skills-tab--list-item">
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/html.svg" height="60" width="60" alt="HTML">
                            </span>
                            <span class="item-name">HTML</span>
                        </li>
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/css.svg" height="60" width="60" alt="CSS">
                            </span>
                            <span class="item-name">CSS</span>
                        </li>
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/js.svg" height="60" width="60" alt="JavaScript">
                            </span>
                            <span class="item-name">JavaScript</span>
                        </li>
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/react.svg" height="60" width="60" alt="React.js">
                            </span>
                            <span class="item-name">React.js</span>
                        </li>
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/next.svg" height="60" width="60" alt="Next.js">
                            </span>
                            <span class="item-name">Next.js</span>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="tech-stack__skills-tab" id="backend">
                <li class="tech-stack__skills-tab--list">
                    <ul class="tech-stack__skills-tab--list-item">
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/react.svg" height="60" width="60" alt="React.js">
                            </span>
                            <span class="item-name">React.js</span>
                        </li>
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/next.svg" height="60" width="60" alt="Next.js">
                            </span>
                            <span class="item-name">Next.js</span>
                        </li>
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/js.svg" height="60" width="60" alt="JavaScript">
                            </span>
                            <span class="item-name">JavaScript</span>
                        </li>
                        <li class="grid">
                            <span class="grid-image">
                                <img src="assets/images/icons/html.svg" height="60" width="60" alt="HTML">
                            </span>
                            <span class="item-name">HTML</span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <?php
            include 'includes/horizontal-tech-stack.php';
        ?>
    </div>
</section>