<?php

return [
    // Meta tags
    'meta' => [
        'title' => [
            'custom' => ':title | :year Gutscheine, Deals & Angebote',
            'default' => ':name | :year Deals, Angebote & Aktionscodes',
        ],
        'description' => [
            'default' => 'Finden Sie die besten :name Deals und verifizierte Rabattcodes für :year. Sparen Sie Geld mit exklusiven :lower_name Gutscheinen, Coupons und Sonderangeboten, die täglich aktualisiert werden.',
        ],
        'keywords' => [
            'default' => ':name, :name Gutscheine, :name Aktionscodes, :name Coupons, Rabattangebote, :name Deals, online Geld sparen',
        ],
    ],

    // Statistics badges
    'stats' => [
        'blogs_available' => ':count Blogs verfügbar',
        'stores_available' => ':count Geschäfte verfügbar',
    ],

    // Total counts
    'total' => [
        'blogs' => 'Blogs insgesamt',
        'stores' => 'Geschäfte insgesamt',
    ],

    // Blog section
    'blog_section' => [
        'title' => 'Einkaufs-Hacks & Spartipps & Tricks',
    ],

    // Stores section
    'stores_section' => [
        'title' => ':name Geschäfte & Marken',
    ],

    // Pagination
    'pagination' => [
        'blogs_label' => 'Blogs-Navigation',
        'stores_label' => 'Geschäfte-Navigation',
    ],

    // Empty states
    'empty_stores' => [
        'title' => 'Keine Geschäfte in dieser Kategorie gefunden! Entdecken Sie neue Geschäfte',
        'explore_link' => 'Alle Geschäfte entdecken',
    ],

    // Store default values
    'store_default_name' => 'Geschäftsname nicht verfügbar',

    // Related content
    'related_content' => [
        'blogs_title' => 'Verwandte Blogbeiträge',
        'stores_title' => 'Verwandte Geschäfte',
        'no_blogs_found' => 'Keine Blogbeiträge in dieser Kategorie gefunden',
        'no_stores_found' => 'Keine Geschäfte in dieser Kategorie gefunden',
    ],

    // Filter options (if you add filtering)
    'filter' => [
        'sort_by' => 'Sortieren nach',
        'popularity' => 'Beliebtheit',
        'newest' => 'Neueste',
        'alphabetical' => 'Alphabetisch',
        'rating' => 'Bewertung',
        'discount' => 'Höchster Rabatt',
    ],

    // Store features (if you add badges/icons)
    'features' => [
        'top_store' => 'Top Geschäft',
        'verified' => 'Verifiziert',
        'exclusive' => 'Exklusives Angebot',
        'limited_time' => 'Nur für kurze Zeit',
        'free_shipping' => 'Kostenloser Versand',
    ],

    // Coupon statistics (if you add coupon counts)
    'coupon_stats' => [
        'active_coupons' => ':count aktive Gutscheine',
        'verified_offers' => ':count verifizierte Angebote',
        'success_rate' => ':rate% Erfolgsquote',
        'last_updated' => 'Aktualisiert vor :time',
    ],

    // Newsletter (if you add it)
    'newsletter' => [
        'title' => 'Erhalten Sie :name Deals in Ihrem Postfach',
        'description' => 'Abonnieren Sie, um exklusive :name Gutscheine und Deals zu erhalten',
        'subscribe' => 'Abonnieren',
        'success' => 'Erfolgreich abonniert! Bitte prüfen Sie Ihre E-Mails.',
    ],

    // Social sharing (if you add it)
    'share' => [
        'title' => 'Diese Kategorie teilen',
        'facebook' => 'Auf Facebook teilen',
        'twitter' => 'Auf Twitter teilen',
        'pinterest' => 'Auf Pinterest pinnen',
        'email' => 'Per E-Mail teilen',
    ],

    // Breadcrumb (if you need separate from common)
    'breadcrumb' => [
        'current' => 'Kategorie :name',
    ],

    // Seasonal/holiday banners (if you add them)
    'seasonal' => [
        'holiday_sales' => 'Feiertagsangebote',
        'black_friday' => 'Black Friday Deals',
        'cyber_monday' => 'Cyber Monday Angebote',
        'seasonal_savings' => 'Saisonale Ersparnisse',
    ],

    // User engagement (if you add ratings/reviews)
    'user_engagement' => [
        'rate_this_category' => 'Diese Kategorie bewerten',
        'user_ratings' => 'Nutzerbewertungen',
        'average_rating' => 'Durchschnittliche Bewertung: :rating/5',
        'based_on' => 'Basiert auf :count Bewertungen',
        'write_review' => 'Eine Bewertung schreiben',
    ],

    // Mobile app CTA (if you add it)
    'mobile_app' => [
        'title' => 'Holen Sie sich unsere mobile App',
        'description' => 'Erhalten Sie :name Deals unterwegs mit unserer mobilen App',
        'download' => 'Jetzt herunterladen',
        'available_on' => 'Verfügbar für iOS & Android',
    ],
];