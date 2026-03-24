<?php

return [
    // Meta tags
    'meta' => [
        'title' => [
            'custom' => ':title | :year Kupóny, Nabídky a Slevy',
            'default' => ':name | :year Slevy, Nabídky a Propagační Kódy',
        ],
        'description' => [
            'default' => 'Najděte nejlepší :name nabídky a ověřené slevové kódy pro rok :year. Ušetřete peníze s exkluzivními :lower_name kupóny, poukazy a propagačními nabídkami aktualizovanými denně.',
        ],
        'keywords' => [
            'default' => ':name, :name kupóny, :name propagační kódy, :name poukazy, slevové nabídky, :name slevy, šetřete peníze online',
        ],
    ],
    
    // Statistics badges
    'stats' => [
        'blogs_available' => ':count Blogů K Dispozici',
        'stores_available' => ':count Obchodů K Dispozici',
    ],
    
    // Total counts
    'total' => [
        'blogs' => 'Celkem Blogů',
        'stores' => 'Celkem Obchodů',
    ],
    
    // Blog section
    'blog_section' => [
        'title' => 'Tipy a Triky pro Chytré Nakupování a Úspory',
    ],
    
    // Stores section
    'stores_section' => [
        'title' => ':name Obchody a Značky',
    ],
    
    // Pagination
    'pagination' => [
        'blogs_label' => 'Stránkování blogů',
        'stores_label' => 'Stránkování obchodů',
    ],
    
    // Empty states
    'empty_stores' => [
        'title' => 'V této kategorii nebyly nalezeny žádné obchody! Objevte nové obchody',
        'explore_link' => 'Prozkoumat Všechny Obchody',
    ],
    
    // Store default values
    'store_default_name' => 'Název Obchodu Není K Dispozici',
    
    // Related content
    'related_content' => [
        'blogs_title' => 'Související Blogové Příspěvky',
        'stores_title' => 'Související Obchody',
        'no_blogs_found' => 'V této kategorii nebyly nalezeny žádné blogové příspěvky',
        'no_stores_found' => 'V této kategorii nebyly nalezeny žádné obchody',
    ],
    
    // Filter options (if you add filtering)
    'filter' => [
        'sort_by' => 'Seřadit Podle',
        'popularity' => 'Populárnosti',
        'newest' => 'Nejnovější',
        'alphabetical' => 'Abecedně',
        'rating' => 'Hodnocení',
        'discount' => 'Nejvyšší Slevy',
    ],
    
    // Store features (if you add badges/icons)
    'features' => [
        'top_store' => 'Top Obchod',
        'verified' => 'Ověřeno',
        'exclusive' => 'Exkluzivní Nabídka',
        'limited_time' => 'Časově Omezené',
        'free_shipping' => 'Doprava Zdarma',
    ],
    
    // Coupon statistics (if you add coupon counts)
    'coupon_stats' => [
        'active_coupons' => ':count Aktivních Kupónů',
        'verified_offers' => ':count Ověřených Nabídek',
        'success_rate' => ':rate% Úspěšnost',
        'last_updated' => 'Aktualizováno před :time',
    ],
    
    // Newsletter (if you add it)
    'newsletter' => [
        'title' => 'Získejte :name Nabídky do Vaší Schránky',
        'description' => 'Přihlaste se k odběru exkluzivních :name kupónů a nabídek',
        'subscribe' => 'Odebírat',
        'success' => 'Úspěšně přihlášeno k odběru! Zkontrolujte svůj e-mail.',
    ],
    
    // Social sharing (if you add it)
    'share' => [
        'title' => 'Sdílet tuto kategorii',
        'facebook' => 'Sdílet na Facebooku',
        'twitter' => 'Sdílet na Twitteru',
        'pinterest' => 'Připnout na Pinterest',
        'email' => 'Sdílet e-mailem',
    ],
    
    // Breadcrumb (if you need separate from common)
    'breadcrumb' => [
        'current' => 'Kategorie :name',
    ],
    
    // Seasonal/holiday banners (if you add them)
    'seasonal' => [
        'holiday_sales' => 'Prázdninové Výprodeje',
        'black_friday' => 'Black Friday Nabídky',
        'cyber_monday' => 'Cyber Monday Nabídky',
        'seasonal_savings' => 'Sezónní Úspory',
    ],
    
    // User engagement (if you add ratings/reviews)
    'user_engagement' => [
        'rate_this_category' => 'Ohodnotit tuto kategorii',
        'user_ratings' => 'Hodnocení Uživatelů',
        'average_rating' => 'Průměrné Hodnocení: :rating/5',
        'based_on' => 'Na základě :count hodnocení',
        'write_review' => 'Napsat Recenzi',
    ],
    
    // Mobile app CTA (if you add it)
    'mobile_app' => [
        'title' => 'Získejte Naši Mobilní Aplikaci',
        'description' => 'Získejte :name nabídky na cestách s naší mobilní aplikací',
        'download' => 'Stáhnout Nyní',
        'available_on' => 'Dostupné pro iOS a Android',
    ],
];