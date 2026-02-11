<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Privacy Policy | ' . config('app.name'),
        'description' => 'Read our privacy policy to understand how we handle your data and protect your privacy.',
        'keywords' => 'privacy, policy, data protection, data security, GDPR, cookies',
        'author' => config('app.name'),
    ],
    
    // Header section
    'header' => [
        'title' => 'Privacy Policy',
        'subtitle' => 'Your privacy is important to us. Learn how we protect and handle your data.',
        'last_updated' => 'Last updated on',
    ],
    
    // Main card
    'card' => [
        'title' => 'Your Data Protection & Privacy',
    ],
    
    // Alert section
    'alert' => [
        'title' => 'Transparency Matters',
        'description' => 'This policy explains how we collect, use, and protect your information in clear, simple terms.',
    ],
    
    // Policy sections
    'sections' => [
        'collection' => [
            'title' => 'Information We Collect',
            'intro' => 'We collect information that helps us provide better services and improve your experience. This includes:',
            'types' => [
                'Personal Information' => 'Name, email address, and contact details when you register or contact us',
                'Usage Data' => 'How you interact with our website, pages visited, and features used',
                'Technical Information' => 'Browser type, device information, and IP address for security purposes',
                'Communication Data' => 'Messages, feedback, and inquiries you send to us',
            ],
            'conclusion' => 'We only collect information that\'s necessary to provide our services and enhance your experience.',
        ],
        
        'usage' => [
            'title' => 'How We Use Your Information',
            'intro' => 'Your information helps us deliver excellent service and improve our platform. We use it to:',
            'purposes' => [
                'Respond to your inquiries and provide personalized customer support',
                'Process transactions and deliver the services you request',
                'Improve our website functionality and user experience',
                'Send important updates about our services (you can opt-out anytime)',
                'Protect against fraud and ensure platform security',
                'Analyze usage patterns to enhance our offerings',
            ],
            'important_note' => 'We do not and will never sell your personal information to third parties.',
        ],
        
        'security' => [
            'title' => 'Data Security & Protection',
            'intro' => 'We take your data security seriously and implement robust measures to protect it:',
            'measures' => [
                'Encryption' => 'All sensitive data is encrypted during transmission and storage',
                'Secure Servers' => 'Your information is stored on protected servers with limited access',
                'Access Controls' => 'Strict internal policies control who can access your data',
                'Regular Audits' => 'We conduct security assessments to maintain protection standards',
                'Employee Training' => 'Our team is trained in data protection best practices',
            ],
            'disclaimer' => 'While we implement industry-standard security measures, no method of transmission over the internet is 100% secure. We recommend using strong passwords and keeping your login information confidential.',
        ],
        
        'cookies' => [
            'title' => 'Cookies & Tracking Technologies',
            'intro' => 'We use cookies and similar technologies to enhance your browsing experience:',
            'types' => [
                'Essential Cookies' => 'Required for the website to function properly',
                'Performance Cookies' => 'Help us understand how visitors use our site',
                'Functional Cookies' => 'Remember your preferences and settings',
                'Analytics Cookies' => 'Provide insights to improve our services',
            ],
            'management' => 'You can manage cookie preferences through your browser settings. However, disabling essential cookies may affect website functionality.',
        ],
        
        'third_party' => [
            'title' => 'Third-Party Links & Services',
            'intro' => 'Our website may contain links to external sites and services. Important notes:',
            'notes' => [
                'We carefully select our partners but cannot control their privacy practices',
                'External sites have their own privacy policies we don\'t control',
                'We\'re not responsible for content or practices of linked websites',
                'We recommend reviewing third-party privacy policies before sharing information',
            ],
            'disclaimer' => 'When you leave our site through these links, our privacy policy no longer applies to your activities on those external sites.',
        ],
        
        'updates' => [
            'title' => 'Policy Updates & Changes',
            'intro' => 'We may update this privacy policy to reflect changes in our practices or legal requirements:',
            'procedures' => [
                'Significant changes will be notified via email or prominent website notice',
                'Continued use of our services after changes constitutes acceptance',
                'We maintain version history of all policy updates',
                'The "Last Updated" date at the top indicates the latest revision',
            ],
            'recommendation' => 'We encourage you to review this policy periodically to stay informed about how we\'re protecting your information.',
        ],
        
        'contact' => [
            'title' => 'Questions & Contact Information',
            'intro' => 'We\'re committed to being transparent about our privacy practices. If you have questions or concerns:',
            'details' => [
                'Email' => '<a href="mailto:contact@lilydecors.com" class="contact-email">contact@lilydecors.com</a>',
                'Data Protection Officer' => 'John Smith',
                'Mail' => '123 Privacy Lane, Data City, DC 12345',
                'Response Time' => 'We aim to respond within 48 hours',
            ],
            'rights' => 'You have the right to access, correct, or delete your personal information. Contact us to exercise these rights.',
        ],
    ],
    
    // Back button
    'back_button' => 'Return to Homepage',
    
    // Additional terms for cookie consent banner (if needed)
    'cookie_consent' => [
        'title' => 'Cookie Preferences',
        'message' => 'We use cookies to enhance your browsing experience and analyze our traffic.',
        'accept_all' => 'Accept All',
        'reject_all' => 'Reject All',
        'manage' => 'Manage Preferences',
        'necessary' => 'Necessary',
        'analytics' => 'Analytics',
        'marketing' => 'Marketing',
        'preferences' => 'Preferences',
        'save' => 'Save Preferences',
    ],
    
    // Data rights (GDPR specific)
    'data_rights' => [
        'title' => 'Your Data Rights',
        'access' => 'Right to Access',
        'rectification' => 'Right to Rectification',
        'erasure' => 'Right to Erasure (Right to be Forgotten)',
        'restriction' => 'Right to Restrict Processing',
        'portability' => 'Right to Data Portability',
        'object' => 'Right to Object',
        'description' => 'Under GDPR and other data protection laws, you have specific rights regarding your personal data.',
    ],
    
    // Data retention
    'retention' => [
        'title' => 'Data Retention',
        'description' => 'We retain your personal data only for as long as necessary to fulfill the purposes for which it was collected.',
        'periods' => [
            'account_data' => 'Account data: While your account is active',
            'transaction_data' => 'Transaction data: 7 years for tax purposes',
            'communication_data' => 'Communication data: 3 years',
            'analytics_data' => 'Analytics data: 26 months',
        ],
    ],
    
    // International data transfers
    'international_transfers' => [
        'title' => 'International Data Transfers',
        'description' => 'Your information may be transferred to and processed in countries other than your own.',
        'safeguards' => 'We implement appropriate safeguards for international data transfers.',
    ],
    
    // Children's privacy
    'children' => [
        'title' => 'Children\'s Privacy',
        'description' => 'Our services are not directed to children under 16. We do not knowingly collect personal information from children.',
        'contact' => 'If you believe we have collected information from a child, please contact us immediately.',
    ],
    
    // Automated decision making
    'automated_decisions' => [
        'title' => 'Automated Decision Making',
        'description' => 'We do not use automated decision-making or profiling that produces legal effects.',
    ],
    
    // Data breach notification
    'data_breach' => [
        'title' => 'Data Breach Notification',
        'description' => 'In the event of a data breach, we will notify affected users and authorities as required by law.',
    ],
    
    // Do Not Track signals
    'do_not_track' => [
        'title' => 'Do Not Track Signals',
        'description' => 'Our website does not respond to Do Not Track signals from browsers.',
    ],
    
    // California privacy rights (CCPA)
    'ccpa' => [
        'title' => 'California Privacy Rights',
        'description' => 'California residents have additional rights under the California Consumer Privacy Act (CCPA).',
        'right_to_know' => 'Right to Know',
        'right_to_delete' => 'Right to Delete',
        'right_to_opt_out' => 'Right to Opt-Out of Sale',
        'non_discrimination' => 'Right to Non-Discrimination',
    ],
];