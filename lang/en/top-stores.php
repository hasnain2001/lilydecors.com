<?php

return [
    'title' => 'Top Stores Coupons, Promo Codes & Best Deals ' . date('Y') . ' | ' . config('app.name'),
    'description' => 'Explore our top stores with exclusive offers and discounts. Find the best deals from trusted brands and save big on your shopping.',
    'keywords' => 'stores, offers, discounts, coupons, deals, shopping, brands, savings',
    
    'top-stores' => [],
    
    // Header Section
    'header' => [
        'title' => 'Top Stores',
        'subtitle' => 'Discover amazing stores with exclusive offers and discounts. Find the best deals from trusted brands.',
    ],
    
    // Stats Bar Section
    'stores' => 'Stores',
    'latest_deals' => 'Latest :year Deals',
    'verified_offers' => 'Verified Offers',
    
    // Store Badge
    'store_badge' => [
        'top_store' => 'Top Store',
    ],
    
    // Offers Count
    'offers_count' => 'Offers',
    
    // Default Store Name (fallback)
    'store_default_name' => 'Store Name',
    
    // Empty State
    'empty' => [
        'title' => 'No Stores Found',
        'message' => 'We couldn\'t find any stores at the moment. Please check back later for amazing deals and offers.',
    ],
    
    // Pagination
    'pagination' => [
        'label' => 'Store listings pagination',
    ],
];