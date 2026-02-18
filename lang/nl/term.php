<?php

return [
    // Page Meta
    'title' => 'Terms and Conditions',
    'description' => 'Read our terms and conditions to understand your rights and responsibilities while using our services.',
    'keywords' => 'terms, conditions, user agreement',
    'author' => 'John Doe',
    
    // Header Section
    'header' => [
        'title' => 'Terms and Conditions',
        'subtitle' => 'Understand your rights and responsibilities when using our services',
        'last_updated' => 'Last updated on',
    ],
    
    // Main Card
    'card' => [
        'title' => 'Legal Agreement & User Terms',
    ],
    
    // Alert Section
    'alert' => [
        'title' => 'Important:',
        'message' => 'By accessing or using our services, you agree to be bound by these terms. Please read them carefully before proceeding.',
    ],
    
    // Section 1: Acceptance of Terms
    'section1' => [
        'title' => 'Acceptance of Terms',
        'content' => 'By accessing or using our website, mobile application, or any services provided by :app_name (collectively, the "Services"), you confirm that you have read, understood, and agree to be bound by these Terms and Conditions.',
        'warning' => 'If you do not agree with any part of these terms, you must immediately discontinue your use of our Services.',
    ],
    
    // Section 2: User Responsibilities
    'section2' => [
        'title' => 'User Responsibilities',
        'intro' => 'As a user of our Services, you are solely responsible for:',
        'points' => [
            'maintaining_account' => 'Maintaining the confidentiality and security of your account credentials',
            'account_activities' => 'All activities, transactions, and content associated with your account',
            'accurate_information' => 'Providing accurate, current, and complete information during registration',
            'complying_laws' => 'Complying with all applicable local, state, national, and international laws',
            'third_party_rights' => 'Ensuring that your use of our Services does not violate any third-party rights',
        ],
        'notification' => 'You agree to notify us immediately of any unauthorized access to or use of your account at <strong>:email</strong>.',
    ],
    
    // Section 3: Prohibited Activities
    'section3' => [
        'title' => 'Prohibited Activities',
        'intro' => 'When using our Services, you must not engage in any of the following activities:',
        'activities' => [
            'illegal' => [
                'title' => 'Illegal Activities',
                'description' => 'Use our Services for any unlawful purpose or in violation of any applicable laws',
            ],
            'unauthorized_access' => [
                'title' => 'Unauthorized Access',
                'description' => 'Attempt to gain unauthorized access to systems, accounts, or networks',
            ],
            'harmful_content' => [
                'title' => 'Harmful Content',
                'description' => 'Post, transmit, or share harmful, offensive, or infringing content',
            ],
            'service_disruption' => [
                'title' => 'Service Disruption',
                'description' => 'Disrupt, interfere with, or overload the Services\' performance',
            ],
            'automated_access' => [
                'title' => 'Automated Access',
                'description' => 'Use bots, scrapers, or other automated means to access our Services',
            ],
            'commercial_use' => [
                'title' => 'Commercial Use',
                'description' => 'Use our Services for commercial purposes without explicit authorization',
            ],
        ],
        'warning' => 'Violation of these prohibitions may result in immediate termination of your account and legal action.',
    ],
    
    // Section 4: Intellectual Property
    'section4' => [
        'title' => 'Intellectual Property',
        'content' => 'All content, features, and functionality available through our Services, including but not limited to text, graphics, logos, icons, images, audio clips, digital downloads, data compilations, and software, are the exclusive property of :app_name and its licensors.',
        'protected' => 'These materials are protected by international copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws.',
        'restrictions' => 'You may not:',
        'restriction_points' => [
            'reproduce' => 'Reproduce, distribute, or create derivative works',
            'modify' => 'Modify, adapt, or reverse engineer any portion of our Services',
            'remove_notices' => 'Remove any copyright, trademark, or other proprietary notices',
            'unauthorized_use' => 'Use our intellectual property without express written permission',
        ],
    ],
    
    // Section 5: Disclaimer of Warranties
    'section5' => [
        'title' => 'Disclaimer of Warranties',
        'content' => 'Our Services are provided "as is" and "as available" without warranties of any kind, either express or implied. To the fullest extent permissible by law, we disclaim all warranties, including but not limited to implied warranties of merchantability, fitness for a particular purpose, and non-infringement.',
        'guarantees_intro' => 'We do not guarantee that:',
        'guarantees' => [
            'uninterrupted' => 'Our Services will be uninterrupted, secure, or available at any particular time or location',
            'errors_corrected' => 'Any errors or defects will be corrected',
            'virus_free' => 'Our Services are free of viruses or other harmful components',
            'meet_requirements' => 'The results of using our Services will meet your requirements',
        ],
        'risk' => 'Your use of our Services is solely at your own risk.',
    ],
    
    // Section 6: Limitation of Liability
    'section6' => [
        'title' => 'Limitation of Liability',
        'content' => 'To the maximum extent permitted by applicable law, :app_name shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation:',
        'damages' => [
            'loss_profits' => 'Loss of profits, revenue, or data',
            'loss_use' => 'Loss of use, goodwill, or other intangible losses',
            'unauthorized_access' => 'Damages resulting from unauthorized access to or alteration of your transmissions',
            'third_party_content' => 'Any conduct or content of any third party on the Services',
        ],
        'liability_limit' => 'In no event shall our total liability exceed:',
        'liability_amount' => 'or the amount you paid us in the last 12 months, whichever is greater.',
    ],
    
    // Section 7: Governing Law
    'section7' => [
        'title' => 'Governing Law & Jurisdiction',
        'content' => 'These Terms shall be governed by and construed in accordance with the laws of :country, without regard to its conflict of law provisions.',
        'jurisdiction_title' => 'Exclusive Jurisdiction',
        'jurisdiction_content' => 'Any legal suit, action, or proceeding arising out of or related to these Terms shall be instituted exclusively in the courts located in :jurisdiction. You consent to the personal jurisdiction of such courts.',
    ],
    
    // Section 8: Changes to Terms
    'section8' => [
        'title' => 'Changes to Terms',
        'content' => 'We reserve the right to modify these Terms at any time.',
        'modification_notice' => 'When we do, we will revise the "last updated" date at the top of this page. We may also provide additional notice (such as adding a statement to our homepage or sending you a notification). Your continued use of our Services after such modifications constitutes your acceptance of the new Terms.',
    ],
    
    // Section 9: Contact Information
    'section9' => [
        'title' => 'Contact Information',
        'intro' => 'For questions, concerns, or notices about these Terms and Conditions, please contact us through any of the following methods:',
        'buttons' => [
            'email' => 'Email Legal Team',
            'contact_form' => 'Contact Form',
            'visit_office' => 'Visit Our Office',
        ],
        'response_time' => 'We typically respond to legal inquiries within 2-3 business days.',
    ],
    
    // Action Buttons
    'actions' => [
        'back_home' => 'Back to Homepage',
        'print_terms' => 'Print Terms',
    ],
];