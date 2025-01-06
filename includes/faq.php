<?php
/**
 * FAQ Section Component
 */

$faqs = [
    [
        'question' => 'What services does Flex Solutions offer?',
        'answer' => 'Flex Solutions specializes in website development, mobile app creation, and custom software solutions personalized to your business needs.',
        'is_open' => true
    ],
    [
        'question' => 'How long does it take to develop a website?',
        'answer' => 'The timeline for website development varies based on complexity, but we aim to deliver within 4-8 weeks.',
        'is_open' => false
    ],
    [
        'question' => 'Do you provide ongoing support after the website or app is launched?',
        'answer' => 'Yes, we offer maintenance and support packages to ensure your project runs smoothly.',
        'is_open' => false
    ],
    [
        'question' => 'Can you help with search engine optimization (SEO)?',
        'answer' => 'Absolutely! Our team can implement SEO best practices to improve your site’s visibility.',
        'is_open' => false
    ],
    [
        'question' => 'What platforms do you use for app development?',
        'answer' => 'We use various platforms including React Native, Flutter, and native development for iOS and Android.',
        'is_open' => false
    ],
    [
        'question' => 'Do you offer custom solutions for unique business needs?',
        'answer' => 'Yes, we tailor our solutions to meet the specific requirements of your business.',
        'is_open' => false
    ],
];
?>

<section class="faq">
    <div class="container">
        <div class="faq__row"> 
            <div class="faq__column-1">
                <p class="sub-title">FAQ</p>
                <h2 class="faq__heading">Frequently Asked Questions</h2>
                <p class="faq__content">Find quick answers to common questions in our FAQ section. For more help, contact our support team anytime—we're here to assist.</p>
                <button type="button" class="button btn-secondary">Contact Us<span class="icon"></span></button>
            </div>
            <div class="faq__column-2">
                <?php foreach ($faqs as $faq): ?>
                    <div class="accordion-item <?php echo $faq['is_open'] ? 'open' : ''; ?>">
                        <div class="accordion-header <?php echo $faq['is_open'] ? 'active' : ''; ?>">
                            <?php echo $faq['question']; ?>
                        </div>
                        <div class="accordion-content"><?php echo $faq['answer']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>