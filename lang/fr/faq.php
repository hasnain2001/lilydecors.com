<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'FAQs - ' . config('app.name') . ' Coupons & Deals',
        'description' => 'Find answers about using coupons, earning cashback, affiliate marketing, and more at ' . config('app.name') . '. Your go-to destination for home decor savings!',
        'keywords' => 'FAQ, coupons, deals, cashback, affiliate marketing, discount codes, home decor savings',
    ],
    
    // Hero section
    'hero' => [
        'title' => 'Frequently Asked Questions',
        'description' => 'Everything you need to know about finding the best coupons, earning cashback, and maximizing your savings on home decor with ' . config('app.name') . '!',
        'badge' => 'Save up to 70% with our exclusive coupons',
    ],
    
    // Statistics banner
    'stats' => [
        'active_coupons' => '10,000+',
        'active_coupons_label' => 'Active Coupons',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Partner Brands',
        'saved_amount' => '$2M+',
        'saved_amount_label' => 'Saved by Our Users',
        'happy_members' => '100K+',
        'happy_members_label' => 'Happy Members',
    ],
    
    // Search bar
    'search' => [
        'placeholder' => 'Search for answers... Try \'cashback\', \'expired coupon\', \'affiliate\', \'how to use\'...',
        'no_results' => [
            'title' => 'No results found for ":term"',
            'description' => 'Try searching for different keywords or browse our categories.',
            'show_all' => 'Show All FAQs',
        ],
    ],
    
    // Categories
    'categories' => [
        'all' => 'All Questions',
        'coupons' => 'Coupons & Deals',
        'cashback' => 'Cashback & Rewards',
        'affiliate' => 'Affiliate Program',
        'account' => 'Account & Technical',
        'earning' => 'Earning Money',
    ],
    
    // Questions and answers - Coupons & Deals
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => 'How do I use coupons from ' . config('app.name') . '?',
                'description' => 'Using our coupons is easy! Follow these steps:',
                'steps' => [
                    'Find a coupon for your favorite home decor store',
                    'Click the "Get Code" or "Get Deal" button',
                    'You\'ll be redirected to the store\'s website',
                    'Add items to your cart',
                    'At checkout, enter the coupon code in the promo code field',
                    'Complete your purchase and enjoy the savings!',
                ],
                'pro_tip' => [
                    'title' => 'Pro Tip',
                    'description' => 'Some deals are automatic - just click through our link and the discount will be applied automatically at checkout!',
                ],
            ],
            'code_not_working' => [
                'title' => 'Why didn\'t my coupon code work?',
                'description' => 'If a coupon isn\'t working, here are the most common reasons:',
                'reasons' => [
                    'Expired Code' => 'Coupons have expiration dates',
                    'Minimum Purchase' => 'Some require a minimum spend (e.g., $50+)',
                    'Excluded Items' => 'Sale items or certain brands may be excluded',
                    'One-Time Use' => 'Single-use codes can\'t be reused',
                    'Region Locked' => 'Some codes work only in specific countries',
                    'Already Applied' => 'Can\'t stack multiple percentage-off codes',
                ],
                'solution' => [
                    'title' => 'Solution',
                    'description' => 'Check our website for the latest codes. If one doesn\'t work, we usually have alternatives available!',
                ],
            ],
            'update_frequency' => [
                'title' => 'How often do you update your coupons?',
                'description' => 'We update our coupons multiple times daily! Here\'s our update schedule:',
                'schedule' => [
                    'Real-time Monitoring' => 'New deals added as soon as they\'re discovered',
                    'Expired Codes' => 'Removed within 1 hour of expiration',
                    'Weekly Roundups' => 'Best deals of the week every Monday',
                    'Holiday Specials' => 'Black Friday, Cyber Monday updates hourly',
                ],
                'get_notified' => [
                    'title' => 'Get Notified',
                    'description' => 'Subscribe to our newsletter or enable browser notifications to get instant updates on new coupons for your favorite stores!',
                ],
            ],
            'multiple_coupons' => [
                'title' => 'Can I stack multiple coupons?',
                'description' => 'It depends on the store\'s policy, but here\'s what you need to know:',
                'policies' => [
                    'Most Stores' => 'Allow one percentage-off code + free shipping',
                    'Some Stores' => 'Allow stacking with cashback offers',
                    'Rarely Allowed' => 'Multiple percentage-off coupons',
                    'Always Check' => 'Store\'s coupon policy page',
                ],
                'best_strategy' => [
                    'title' => 'Best Strategy',
                    'description' => 'Use our :code filter to find the single best coupon that gives you maximum savings without needing to stack.',
                ],
            ],
        ],
        
        'cashback' => [
            'how_it_works' => [
                'title' => 'How does cashback work?',
                'description' => 'Cashback is money you earn back on purchases made through our links:',
                'steps' => [
                    'Sign up for a free ' . config('app.name') . ' account',
                    'Find a store offering cashback',
                    'Click the "Activate Cashback" button',
                    'Shop normally on the store\'s website',
                    'Your purchase is tracked automatically',
                    'Cashback appears in your account within 24-48 hours',
                    'Withdraw when you reach $10 minimum',
                ],
                'example' => [
                    'title' => 'Example',
                    'description' => 'Buy a $200 lamp with 5% cashback = $10 back in your pocket!',
                ],
            ],
            'timeline' => [
                'title' => 'How long does cashback take to appear?',
                'description' => 'Here\'s the typical cashback timeline:',
                'stages' => [
                    'Pending' => 'Appears in 24-48 hours after purchase',
                    'Confirmed' => '30-90 days (after store\'s return period)',
                    'Payable' => 'Available for withdrawal once confirmed',
                    'Withdrawal' => 'Processed within 3-5 business days',
                ],
                'note' => [
                    'title' => 'Note',
                    'description' => 'Some stores have longer confirmation periods, especially for furniture and large items with longer return windows.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => 'Can I combine cashback with coupons?',
                'answer' => 'Yes! This is where you maximize savings:',
                'tips' => [
                    'Always use a coupon code at checkout',
                    'Make sure cashback is activated before clicking through',
                    'You\'ll save upfront with the coupon AND earn cashback',
                    'Some stores offer bonus cashback with specific coupons',
                ],
                'double_dip' => [
                    'title' => 'Double Dip Strategy',
                    'description' => 'Use coupon :code for 20% off + 5% cashback = total 25% savings!',
                ],
            ],
        ],
        
        'affiliate' => [
            'become_affiliate' => [
                'title' => 'How do I become a ' . config('app.name') . ' affiliate?',
                'description' => 'Join our affiliate program and earn commissions:',
                'steps' => [
                    'Sign up on our Affiliate Portal',
                    'Get approved (usually within 24 hours)',
                    'Access your unique affiliate links',
                    'Share links on your blog, social media, or website',
                    'Earn commissions on referred sales',
                    'Get paid monthly via PayPal or bank transfer',
                ],
                'commission_rates' => [
                    'title' => 'Commission Rates',
                    'description' => 'Earn 5-15% on sales depending on the store and your performance tier.',
                ],
            ],
            'requirements' => [
                'title' => 'What are the requirements to join?',
                'description' => 'Basic requirements for our affiliate program:',
                'list' => [
                    'Active website, blog, or social media with home decor/furniture content',
                    'Minimum 1,000 monthly visitors (or 5,000 social media followers)',
                    'Content must be family-friendly and relevant',
                    'No spam or prohibited content',
                    'Compliance with FTC disclosure requirements',
                ],
                'bonus' => [
                    'title' => 'Bonus',
                    'description' => 'Home decor influencers, interior design bloggers, and DIY content creators get priority approval!',
                ],
            ],
            'earnings_potential' => [
                'title' => 'How much can I earn as an affiliate?',
                'description' => 'Earnings vary based on your traffic and promotion strategy:',
                'types' => [
                    'Standard Commission' => '5% on all referred sales',
                    'Performance Bonuses' => 'Up to 15% for top performers',
                    'Recurring Commissions' => '2% on subscription renewals',
                    'Bonus Payouts' => 'Special promotions and contests',
                ],
                'top_earners' => [
                    'title' => 'Top Earners',
                    'description' => 'Our highest-earning affiliates make $5,000+ per month promoting home decor deals!',
                ],
            ],
        ],
        
        'account' => [
            'free_account' => [
                'title' => 'Is creating an account free?',
                'answer' => 'Absolutely! 100% free forever.',
                'description' => 'Here\'s what you get with a free account:',
                'benefits' => [
                    'Track your cashback earnings',
                    'Save favorite coupons and stores',
                    'Get personalized deal alerts',
                    'Join our rewards program',
                    'Access exclusive member-only deals',
                    'Earn referral bonuses',
                ],
                'conclusion' => 'No credit card required. No hidden fees. Just pure savings!',
            ],
            'tracking_issues' => [
                'title' => 'Why isn\'t my purchase tracking?',
                'description' => 'If your purchase isn\'t tracking, try these solutions:',
                'solutions' => [
                    'Clear Cookies' => 'Always click through our link - don\'t type URLs directly',
                    'Disable Ad Blockers' => 'Some block tracking scripts',
                    'Complete Purchase' => 'Must finish checkout in same browser session',
                    'Check Eligibility' => 'Some items are excluded from cashback',
                    'Wait 48 Hours' => 'Tracking can take up to 2 days to appear',
                ],
                'need_help' => [
                    'title' => 'Need Help?',
                    'description' => 'Contact support with your order details and we\'ll manually track it for you!',
                ],
            ],
        ],
        
        'earning' => [
            'ways_to_earn' => [
                'title' => 'How can I earn money with ' . config('app.name') . '?',
                'description' => 'There are multiple ways to earn with us:',
                'methods' => [
                    'Cashback' => 'Earn on your own purchases',
                    'Affiliate Program' => 'Earn commissions promoting deals',
                    'Referral Program' => 'Earn $5 for every friend who signs up and makes a purchase',
                    'Content Creator' => 'Submit deal tips and earn bonuses',
                    'Store Ambassador' => 'Special programs for top stores',
                ],
                'pro_tip' => [
                    'title' => 'Pro Tip',
                    'description' => 'Join all programs simultaneously to maximize your earnings potential!',
                ],
            ],
            'payment_details' => [
                'title' => 'When and how do I get paid?',
                'description' => 'Our payment schedule and methods:',
                'details' => [
                    'Payment Schedule' => 'Monthly, around the 15th',
                    'Minimum Payout' => '$10 for cashback, $50 for affiliates',
                    'Payment Methods' => 'PayPal, Direct Deposit, Gift Cards',
                    'Processing Time' => '3-5 business days after request',
                    'Tax Forms' => '1099 issued for earnings over $600/year',
                ],
                'conclusion' => 'All payments are secure and backed by our payment guarantee.',
            ],
        ],
    ],
    
    // How it works section
    'how_it_works' => [
        'title' => 'How ' . config('app.name') . ' Works',
        'description' => 'Your guide to maximizing savings on home decor purchases',
        'steps' => [
            [
                'title' => 'Find Deals',
                'description' => 'Browse thousands of coupons and cashback offers from top home decor brands.',
            ],
            [
                'title' => 'Click & Shop',
                'description' => 'Click through our links to activate savings and shop directly on brand websites.',
            ],
            [
                'title' => 'Save Money',
                'description' => 'Use coupon codes at checkout and earn cashback on eligible purchases.',
            ],
            [
                'title' => 'Earn Rewards',
                'description' => 'Join our affiliate program or referral program to earn even more.',
            ],
        ],
    ],
    
    // Call to action
    'cta' => [
        'title' => 'Ready to Start Saving?',
        'description' => 'Join thousands of smart shoppers who save on home decor every day. Whether you\'re shopping for furniture, decor, or DIY supplies, ' . config('app.name') . ' helps you get the best deals.',
        'join_button' => 'Join Free & Start Saving',
        'browse_button' => 'Browse Latest Coupons',
        'security_note' => '100% Secure • No Spam • Unsubscribe Anytime',
    ],
    
    // Additional sections (if needed)
    'popular_questions' => [
        'title' => 'Popular Questions',
        'most_viewed' => 'Most Viewed',
        'recently_added' => 'Recently Added',
    ],
    
    'help_center' => [
        'title' => 'Still Need Help?',
        'contact_us' => 'Contact Us',
        'live_chat' => 'Live Chat',
        'email_support' => 'Email Support',
        'response_time' => 'Average Response Time: 2 hours',
    ],
    
    'related_topics' => [
        'title' => 'Related Topics',
        'privacy_policy' => 'Privacy Policy',
        'terms_of_service' => 'Terms of Service',
        'affiliate_disclosure' => 'Affiliate Disclosure',
        'cookie_policy' => 'Cookie Policy',
    ],
    
    'accessibility' => [
        'keyboard_navigation' => 'Use Tab key to navigate FAQs, Enter to expand, Esc to close',
        'screen_reader' => 'Screen reader friendly',
        'high_contrast' => 'High contrast mode available',
    ],
];