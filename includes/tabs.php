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
            ['name' => 'JavaScript', 'icon' => 'js.svg'],
            ['name' => 'CSS', 'icon' => 'css.svg'],
            ['name' => 'HTML', 'icon' => 'html.svg'],
            ['name' => 'Angular', 'icon' => 'angular.svg'],
            ['name' => 'Vue.js', 'icon' => 'vuejs.svg'],
            ['name' => 'React.js', 'icon' => 'react.svg'],
            ['name' => 'Next.js', 'icon' => 'next.svg'],
            ['name' => 'Nuxt.js', 'icon' => 'nuxt.svg'],
        ]
    ],
    'backend' => [
        'title' => 'Back End',
        'items' => [
            ['name' => 'Codeigniter', 'icon' => 'code.svg'],
            ['name' => 'Python', 'icon' => 'python.svg'],
            ['name' => 'Node.js', 'icon' => 'node.svg'],
            ['name' => 'PHP', 'icon' => 'php.svg'],
            ['name' => 'Laravel', 'icon' => 'laravel.svg'],
        ]
    ],
    'database' => [
        'title' => 'Database',
        'items' => [
            ['name' => 'Firebase', 'icon' => 'firebase.svg'],
            ['name' => 'SQLite', 'icon' => 'sqlite.svg'],
            ['name' => 'PostgreSQL', 'icon' => 'postgre.svg'],
            ['name' => 'MySQL', 'icon' => 'mysql.svg'],
            ['name' => 'MongoDB', 'icon' => 'mongodb.svg'],
        ]
    ],
    'CMS/E-commerce' => [
        'title' => 'CMS/E-commerce',
        'items' => [
            ['name' => 'Bagisto', 'icon' => 'bagisto.svg'],
            ['name' => 'Squarespace', 'icon' => 'squre.svg'],
            ['name' => 'WooCommerce', 'icon' => 'woocom.svg'],
            ['name' => 'Magento', 'icon' => 'magento.svg'],
            ['name' => 'WordPress', 'icon' => 'wordpress.svg'],
            ['name' => 'Shopify', 'icon' => 'shopify.svg'],
            ['name' => 'WebFlow', 'icon' => 'webflow.svg'],
            ['name' => 'WiX Studio', 'icon' => 'wix.svg'],
            ['name' => 'Ghost', 'icon' => 'ghost.svg'],
        ]
    ],
    'UI/UX' => [
        'title' => 'UI/UX',
        'items' => [
            ['name' => 'Marvel', 'icon' => 'marvel.svg'],
            ['name' => 'InVision', 'icon' => 'invision.svg'],
            ['name' => 'Axure', 'icon' => 'axure.svg'],
            ['name' => 'Sketch', 'icon' => 'sketch.svg'],
            ['name' => 'Photoshop', 'icon' => 'photoshop.svg'],
            ['name' => 'Illustrator', 'icon' => 'illustratore.svg'],
            ['name' => 'Figma', 'icon' => 'figma-tab.svg'],
        ]
    ],
    'mobile' => [
        'title' => 'Mobile',
        'items' => [
            ['name' => 'Android', 'icon' => 'android.svg'],
            ['name' => 'Flutter', 'icon' => 'flutter.svg'],
            ['name' => 'Apple', 'icon' => 'apple.svg'],
            ['name' => 'React Native', 'icon' => 'native.svg'],
        ]
    ],
];
?>

<section class="tabs">
    <div class="container"> 
        <div class="tabs__title-wrapper">
            <p class="sub-title">Technologies we use</p>
            <h2 class="tabs__heading">Our Services with Advanced Tools</h2>
        </div>
        <div class="tab-wrapper" data-animate="fade-up" data-animate-delay="0"> 
            <div class="tabs-panel">
                <button class="tab active" data-tab="frontend">Front End</button>
                <button class="tab" data-tab="backend">Back End</button>
                <button class="tab" data-tab="database">Database</button>
                <button class="tab" data-tab="CMS/E-commerce">CMS/E-commerce</button>
                <button class="tab" data-tab="UI/UX">UI/UX</button>
                <button class="tab" data-tab="mobile">Mobile</button>
            </div>
            <div class="tab-panel active" id="frontend">
                <?php foreach ($tabs['frontend']['items'] as $item): ?>
                    <div class="grid">
                        <div class="grid-image">
                            <img src="assets/images/icons/<?php echo $item['icon']; ?>" height="60" width="60" alt="<?php echo $item['name']; ?>">
                        </div>
                        <div class="item-name"><?php echo $item['name']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="tab-panel" id="backend">
                <?php foreach ($tabs['backend']['items'] as $item): ?>
                    <div class="grid">
                        <div class="grid-image">
                            <img src="assets/images/icons/<?php echo $item['icon']; ?>" height="60" width="60" alt="<?php echo $item['name']; ?>">
                        </div>
                        <div class="item-name"><?php echo $item['name']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="tab-panel" id="database">
                <?php foreach ($tabs['database']['items'] as $item): ?>
                    <div class="grid">
                        <div class="grid-image">
                            <img src="assets/images/icons/<?php echo $item['icon']; ?>" height="60" width="60" alt="<?php echo $item['name']; ?>">
                        </div>
                        <div class="item-name"><?php echo $item['name']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="tab-panel" id="CMS/E-commerce">
                <?php foreach ($tabs['CMS/E-commerce']['items'] as $item): ?>
                    <div class="grid">
                        <div class="grid-image">
                            <img src="assets/images/icons/<?php echo $item['icon']; ?>" height="60" width="60" alt="<?php echo $item['name']; ?>">
                        </div>
                        <div class="item-name"><?php echo $item['name']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="tab-panel" id="UI/UX">
                <?php foreach ($tabs['UI/UX']['items'] as $item): ?>
                    <div class="grid">
                        <div class="grid-image">
                            <img src="assets/images/icons/<?php echo $item['icon']; ?>" height="60" width="60" alt="<?php echo $item['name']; ?>">
                        </div>
                        <div class="item-name"><?php echo $item['name']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="tab-panel" id="mobile">
                <?php foreach ($tabs['mobile']['items'] as $item): ?>
                    <div class="grid">
                        <div class="grid-image">
                            <img src="assets/images/icons/<?php echo $item['icon']; ?>" height="60" width="60" alt="<?php echo $item['name']; ?>">
                        </div>
                        <div class="item-name"><?php echo $item['name']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section> 