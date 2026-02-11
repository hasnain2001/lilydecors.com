<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Hot Deals - Limited-time offers & exclusive discounts | ' . config('app.name'),
        'description' => 'Discover today\'s hottest deals and limited-time offers from your favorite stores. Save big with our exclusive discounts!',
        'keywords' => 'hot deals, limited-time offers, flash sales, exclusive discounts, online shopping deals',
    ],
    
    // Header section
    'header' => [
        'title' => '🔥 FLASH DEALS ALERT!',
        'subtitle' => 'Limited-time offers you won\'t want to miss - act fast before they\'re gone!',
    ],
    
    // Categories section
    'categories' => [
        'title' => 'Shop by Category:',
        'all' => 'All Categories',
    ],
    
    // Deal card elements
    'deal_badge' => [
        'hot' => 'HOT DEAL',
        'featured' => 'FEATURED',
        'exclusive' => 'EXCLUSIVE',
        'limited_time' => 'LIMITED TIME',
    ],
    
    'image_alt' => ':name deal image',
    'expires' => 'Expires',
    'used_count' => ':count used',
    
    // Action buttons
    'view_deal' => 'View Deal',
    'more_offers' => 'More Offers',
    
    // Empty state
    'empty' => [
        'title' => 'No Hot Deals Available',
        'message' => 'Check back soon for new flash deals and limited-time offers!',
    ],
    
    // Pagination
    'pagination' => [
        'label' => 'Deals pagination',
    ],
    
    // Deal types
    'types' => [
        'flash_sale' => 'Flash Sale',
        'limited_time' => 'Limited Time',
        'doorbuster' => 'Doorbuster',
        'clearance' => 'Clearance',
        'holiday' => 'Holiday Deal',
        'seasonal' => 'Seasonal Sale',
    ],
    
    // Timer/Countdown (if added)
    'countdown' => [
        'expires_in' => 'Expires in:',
        'days' => 'days',
        'hours' => 'hours',
        'minutes' => 'minutes',
        'seconds' => 'seconds',
        'expired' => 'Deal expired!',
    ],
    
    // Statistics (if added)
    'stats' => [
        'total_deals' => 'Total Deals',
        'active_deals' => 'Active Now',
        'ending_soon' => 'Ending Soon',
        'avg_discount' => 'Average Discount',
    ],
    
    // Filter and sorting (if added)
    'filter' => [
        'title' => 'Filter Deals',
        'sort_by' => 'Sort By',
        'newest' => 'Newest',
        'ending_soon' => 'Ending Soon',
        'most_popular' => 'Most Popular',
        'highest_discount' => 'Highest Discount',
        'category' => 'Category',
        'store' => 'Store',
    ],
    
    // Featured deals section (if added)
    'featured' => [
        'title' => 'Today\'s Featured Deals',
        'view_all' => 'View All Deals',
    ],
    
    // Top stores with deals (if added)
    'top_stores' => [
        'title' => 'Stores with Hot Deals',
        'view_all_stores' => 'View All Stores',
    ],
    
    // Seasonal/holiday deals (if added)
    'seasonal' => [
        'black_friday' => 'Black Friday Deals',
        'cyber_monday' => 'Cyber Monday Deals',
        'holiday_sales' => 'Holiday Sales',
        'summer_sales' => 'Summer Sales',
        'winter_sales' => 'Winter Sales',
    ],
    
    // Newsletter signup (if added)
    'newsletter' => [
        'title' => 'Get Hot Deal Alerts',
        'description' => 'Subscribe to receive flash deal notifications directly in your inbox',
        'subscribe' => 'Subscribe',
        'success' => 'Successfully subscribed! You\'ll receive hot deal alerts.',
    ],
    
    // Social sharing (if added)
    'share' => [
        'title' => 'Share this deal',
        'facebook' => 'Share on Facebook',
        'twitter' => 'Share on Twitter',
        'pinterest' => 'Pin on Pinterest',
        'whatsapp' => 'Share on WhatsApp',
        'email' => 'Share via Email',
    ],
    
    // Success rate/savings
    'savings' => [
        'up_to' => 'Up to :percent% off',
        'save_amount' => 'Save :amount',
        'free_shipping' => 'Free Shipping',
        'bogo' => 'Buy One Get One',
        'extra_off' => 'Extra :percent% off',
    ],
    
    // Deal urgency indicators
    'urgency' => [
        'almost_gone' => 'Almost gone!',
        'selling_fast' => 'Selling fast!',
        'limited_stock' => 'Limited stock!',
        'last_chance' => 'Last chance!',
        'expiring_today' => 'Expiring today!',
    ],
    
    // User actions
    'actions' => [
        'view_deal' => 'View Deal',
        'get_coupon' => 'Get Coupon',
        'shop_now' => 'Shop Now',
        'save_deal' => 'Save Deal',
        'set_reminder' => 'Set Reminder',
        'report_expired' => 'Report Expired',
    ],
    
    // Verification status
    'verification' => [
        'verified' => 'Verified Deal',
        'exclusive' => 'Exclusive Deal',
        'tested' => 'Tested :time',
        'reported_working' => 'Reported working :time ago',
    ],
    
    // Accessibility
    'accessibility' => [
        'deal_card' => 'Deal card for :store',
        'view_deal_button' => 'View deal for :store',
        'more_offers_button' => 'View more offers from :store',
        'expiration_info' => 'Expires on :date',
        'usage_info' => 'Used :count times',
    ],
    
    // Loading states
    'loading' => [
        'deals' => 'Loading hot deals...',
        'please_wait' => 'Please wait while we load the latest deals',
    ],
    
    // Time periods for deals
    'time_periods' => [
        'today' => 'Today\'s Deals',
        'this_week' => 'This Week',
        'this_month' => 'This Month',
        'upcoming' => 'Upcoming Deals',
        'expired' => 'Recently Expired',
    ],
];