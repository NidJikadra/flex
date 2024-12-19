<?php
/**
 * Tabs Section Component
 */

$tabs = [
    'frontend' => [
        'title' => 'Front End',
        'items' => [
            ['name' => 'Tailwind', 'icon' => 'tailwind.svg'],
            ['name' => 'Sass', 'icon' => 'scss.svg'],
            ['name' => 'Bootstrap', 'icon' => 'bootstrap.svg'],
            // Add more items
        ]
    ],
    'backend' => [
        'title' => 'Back End',
        'items' => [
            ['name' => 'Codeigniter', 'icon' => 'code.svg'],
            ['name' => 'Python', 'icon' => 'python.svg'],
            // Add more items
        ]
    ],
    // Add more tabs
];
?>

<section class="tab-section">
            <div class="container">
                <div class="title-wrapper">
                    <h3 class="sub-title">Technologies we use</h3>
                    <h2 class="h2">Our Services with Advanced Tools</h2>
                </div>
                <div class="tab-wrapper"> 
                    <div class="tabs">
                        <button class="tab active" data-tab="frontend">Front End</button>
                        <button class="tab" data-tab="backend">Back End</button>
                        <button class="tab" data-tab="database">Database</button>
                        <button class="tab" data-tab="CMS/E-commerce">CMS/E-commerce</button>
                        <button class="tab" data-tab="UI/UX">UI/UX</button>
                        <button class="tab" data-tab="mobile">Mobile</button>
                    </div>
                    <div class="tab-panel active" id="frontend">
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/tailwind.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Tailwind</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/scss.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Sass</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/bootstrap.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Bootstrap</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/js.svg" height="60" width="60">
                            </div>
                            <div class="item-name">JavaScript</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/css.svg" height="60" width="60">
                            </div>
                            <div class="item-name">CSS</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/html.svg" height="60" width="60">
                            </div>
                            <div class="item-name">HTML</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/angular.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Angular</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/vuejs.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Vue.js</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/react.svg" height="60" width="60">
                            </div>
                            <div class="item-name">React.js</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/next.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Next.js</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/nuxt.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Nuxt.js</div>
                        </div>
                    </div>
                    <div class="tab-panel" id="backend">
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/code.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Codeigniter</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/python.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Python</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/node.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Node Js</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/php.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Php</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/laravel.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Laravel</div>
                        </div>
                    </div>
                    <div class="tab-panel" id="database">
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/firebase.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Firebase</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/sqlite.svg" height="60" width="60">
                            </div>
                            <div class="item-name">SQLite</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/postgre.svg" height="60" width="60">
                            </div>
                            <div class="item-name">PostgreSQL</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/mysql.svg" height="60" width="60">
                            </div>
                            <div class="item-name">MySQL</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/mongodb.svg" height="60" width="60">
                            </div>
                            <div class="item-name">MongoDB</div>
                        </div>
                    </div>
                    <div class="tab-panel" id="CMS/E-commerce">
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/bagisto.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Bagisto</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/squre.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Squarespace</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/woocom.svg" height="60" width="60">
                            </div>
                            <div class="item-name">WooCommerce</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/magento.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Magento</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/wordpress.svg" height="60" width="60">
                            </div>
                            <div class="item-name">WordPress</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/shopify.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Shopify</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/webflow.svg" height="60" width="60">
                            </div>
                            <div class="item-name">WebFlow</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/wix.svg" height="60" width="60">
                            </div>
                            <div class="item-name">WiX Studio</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/ghost.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Ghost</div>
                        </div>
                    </div>
                    <div class="tab-panel" id="UI/UX">
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/marvel.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Marvel</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/invision.svg" height="60" width="60">
                            </div>
                            <div class="item-name">InVision</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/axure.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Axure</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/sketch.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Sketch</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/photoshop.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Photoshop</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/illustratore.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Illustratore</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/figma-tab.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Figma</div>
                        </div>
                    </div>
                    <div class="tab-panel" id="mobile">
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/android.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Android</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/flutter.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Flutter</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/apple.svg" height="60" width="60">
                            </div>
                            <div class="item-name">Apple</div>
                        </div>
                        <div class="grid">
                            <div class="grid-image">
                                <img src="assets/images/icons/native.svg" height="60" width="60">
                            </div>
                            <div class="item-name">React Native</div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 