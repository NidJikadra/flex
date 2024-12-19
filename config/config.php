<?php
/**
 * Site Configuration
 */

// Site Information
define('SITE_NAME', 'Flex');
define('SITE_URL', '');  // Empty for relative paths in local development
define('SITE_DESCRIPTION', 'Modern WordPress Development and Digital Solutions');
define('COMPANY_ADDRESS', '521, 5th Floor, Laxmi Enclave-2, near Gajera School, Katargam, Surat, Gujarat 395004');

// Social Media Icons (SVG strings)
define('SOCIAL_ICONS', [
    'instagram' => '<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
        <path d="M15.75 38.5039H26.25C35 38.5039 38.5 35.0039 38.5 26.2539V15.7539C38.5 7.00391 35 3.50391 26.25 3.50391H15.75C7 3.50391 3.5 7.00391 3.5 15.7539V26.2539C3.5 35.0039 7 38.5039 15.75 38.5039Z" stroke="#FBFBFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M21 27.1289C24.3827 27.1289 27.125 24.3867 27.125 21.0039C27.125 17.6212 24.3827 14.8789 21 14.8789C17.6173 14.8789 14.875 17.6212 14.875 21.0039C14.875 24.3867 17.6173 27.1289 21 27.1289Z" stroke="#FBFBFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M30.8633 12.2539H30.8836" stroke="#FBFBFB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>',
    'facebook' => '<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M21 0.00390625C9.40078 0.00390625 0 9.40469 0 21.0039C0 32.6031 9.40078 42.0039 21 42.0039C32.5992 42.0039 42 32.6031 42 21.0039C42 9.40469 32.5992 0.00390625 21 0.00390625Z" fill="#FBFBFB"/>
        <path d="M23.7719 13.8425C24.6168 13.8425 25.5191 14.105 25.5191 14.105L26.0605 10.8894C26.0605 10.8894 24.9121 10.4956 22.1723 10.4956C20.4906 10.4956 19.5145 11.1355 18.8008 12.0788C18.1281 12.973 18.1035 14.4085 18.1035 15.3354V17.4437H15.9297V20.5855H18.1035V31.4956H22.1723V20.5855H25.3961L25.634 17.4437H22.1723V14.9909C22.1723 14.146 22.927 13.8425 23.7719 13.8425Z" fill="#FBFBFB"/>
    </svg>',
    'linkedin' => '<svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M21 0.00390625C9.40078 0.00390625 0 9.40469 0 21.0039C0 32.6031 9.40078 42.0039 21 42.0039C32.5992 42.0039 42 32.6031 42 21.0039C42 9.40469 32.5992 0.00390625 21 0.00390625Z" fill="#FBFBFB"/>
        <path d="M15.1266 16.689H11.0332V29.7894H15.1266V16.689Z" fill="#FBFBFB"/>
        <path d="M12.9941 10.5039C11.4848 10.5039 10.4922 11.4801 10.4922 12.7762C10.4922 14.0477 11.452 15.0484 12.9367 15.0484H12.9695C14.5117 15.0484 15.4715 14.0395 15.4633 12.7762C15.4305 11.4801 14.5035 10.5039 12.9941 10.5039Z" fill="#FBFBFB"/>
        <path d="M26.3082 16.5659C23.9621 16.5659 22.4938 17.8456 22.223 18.7479V16.689H17.6211C17.6785 17.78 17.6211 29.7894 17.6211 29.7894H22.223V22.7101C22.223 22.3081 22.2066 21.9144 22.3215 21.6355C22.6332 20.848 23.3141 20.0276 24.5363 20.0276C26.1359 20.0276 26.8578 21.2417 26.8578 23.0136V29.7894H31.5008V22.505C31.5008 18.4526 29.2203 16.5659 26.3082 16.5659Z" fill="#FBFBFB"/>
    </svg>'
]);

// Social Media Links
define('SOCIAL_LINKS', [
    [
        'platform' => 'Instagram',
        'url' => '#',
        'icon' => SOCIAL_ICONS['instagram']
    ],
    [
        'platform' => 'Facebook',
        'url' => '#',
        'icon' => SOCIAL_ICONS['facebook']
    ],
    [
        'platform' => 'LinkedIn',
        'url' => '#',
        'icon' => SOCIAL_ICONS['linkedin']
    ]
]);

// Footer Links
define('FOOTER_LINKS', [
    [
        'title' => 'Company',
        'links' => [
            ['text' => 'About Us', 'url' => '#'],
            ['text' => 'Case Studies', 'url' => '#'],
            ['text' => 'Blog', 'url' => '#'],
            ['text' => 'Careers', 'url' => '#']
        ]
    ],
    [
        'title' => 'Service',
        'links' => [
            ['text' => 'Platform Migration', 'url' => '#'],
            ['text' => 'Managed Services', 'url' => '#'],
            ['text' => 'Staff Augmentation', 'url' => '#'],
            ['text' => 'Decoupled Architecture', 'url' => '#']
        ]
    ],
    [
        'title' => 'Case Studies',
        'links' => [
            ['text' => 'Insights', 'url' => '#'],
            ['text' => 'Awards', 'url' => '#'],
            ['text' => 'Contact', 'url' => '#']
        ]
    ],
    [
        'title' => 'Links',
        'links' => [
            ['text' => 'Privacy Policy', 'url' => '#'],
            ['text' => 'Terms of Conditions', 'url' => '#'],
            ['text' => 'Website Terms of Use', 'url' => '#']
        ]
    ]
]);

// Legal Links
define('LEGAL_LINKS', [
    ['text' => 'Privacy Policy', 'url' => '#'],
    ['text' => 'Terms of Conditions', 'url' => '#'],
    ['text' => 'Website Terms of Use', 'url' => '#']
]); 