<?php

return [
    // Meta-taggar
    'meta' => [
        'title' => [
            'custom' => ':title | :year Kuponger, Deals & Erbjudanden',
            'default' => ':name | :year Deals, Erbjudanden & Rabattkoder',
        ],
        'description' => [
            'default' => 'Hitta de bästa :name dealsen och verifierade rabattkoderna för :year. Spara pengar med exklusiva :lower_name kuponger, vouchers och kampanjerbjudanden som uppdateras dagligen.',
        ],
        'keywords' => [
            'default' => ':name, :name kuponger, :name rabattkoder, :name vouchers, rabatterbjudanden, :name deals, spara pengar online',
        ],
    ],
    
    // Statistikmärken
    'stats' => [
        'blogs_available' => ':count Bloggar Tillgängliga',
        'stores_available' => ':count Butiker Tillgängliga',
    ],
    
    // Totala antal
    'total' => [
        'blogs' => 'Totalt Bloggar',
        'stores' => 'Totalt Butiker',
    ],
    
    // Bloggsektion
    'blog_section' => [
        'title' => 'Shoppinghacks & Spartips & Tricks',
    ],
    
    // Butikssektion
    'stores_section' => [
        'title' => ':name Butiker & Varumärken',
    ],
    
    // Paginering
    'pagination' => [
        'blogs_label' => 'Bloggpaginering',
        'stores_label' => 'Butikspaginering',
    ],
    
    // Tomma tillstånd
    'empty_stores' => [
        'title' => 'Inga butiker hittades i denna kategori! Upptäck nya butiker',
        'explore_link' => 'Utforska Alla Butiker',
    ],
    
    // Standardvärden för butik
    'store_default_name' => 'Butiksnamn Inte Tillgängligt',
    
    // Relaterat innehåll
    'related_content' => [
        'blogs_title' => 'Relaterade Blogginlägg',
        'stores_title' => 'Relaterade Butiker',
        'no_blogs_found' => 'Inga blogginlägg hittades i denna kategori',
        'no_stores_found' => 'Inga butiker hittades i denna kategori',
    ],
    
    // Filteralternativ (om du lägger till filtrering)
    'filter' => [
        'sort_by' => 'Sortera Efter',
        'popularity' => 'Popularitet',
        'newest' => 'Nyast',
        'alphabetical' => 'Alfabetisk',
        'rating' => 'Betyg',
        'discount' => 'Högsta Rabatt',
    ],
    
    // Butiksfunktioner (om du lägger till märken/ikoner)
    'features' => [
        'top_store' => 'Toppbutik',
        'verified' => 'Verifierad',
        'exclusive' => 'Exklusivt Erbjudande',
        'limited_time' => 'Begränsad Tid',
        'free_shipping' => 'Fri Frakt',
    ],
    
    // Kupongstatistik (om du lägger till kupongräknare)
    'coupon_stats' => [
        'active_coupons' => ':count Aktiva Kuponger',
        'verified_offers' => ':count Verifierade Erbjudanden',
        'success_rate' => ':rate% Framgångsfrekvens',
        'last_updated' => 'Uppdaterades :time sedan',
    ],
    
    // Nyhetsbrev (om du lägger till det)
    'newsletter' => [
        'title' => 'Få :name-Erbjudanden i Din Inbox',
        'description' => 'Prenumerera för att få exklusiva :name-kuponger och erbjudanden',
        'subscribe' => 'Prenumerera',
        'success' => 'Prenumeration lyckades! Kontrollera din e-post.',
    ],
    
    // Social delning (om du lägger till det)
    'share' => [
        'title' => 'Dela denna kategori',
        'facebook' => 'Dela på Facebook',
        'twitter' => 'Dela på Twitter',
        'pinterest' => 'Fäst på Pinterest',
        'email' => 'Dela via E-post',
    ],
    
    // Brödsmula (om du behöver separat från gemensam)
    'breadcrumb' => [
        'current' => ':name-kategorin',
    ],
    
    // Säsongs-/helgbanderoller (om du lägger till dem)
    'seasonal' => [
        'holiday_sales' => 'Helgrean',
        'black_friday' => 'Black Friday-Erbjudanden',
        'cyber_monday' => 'Cyber Monday-Erbjudanden',
        'seasonal_savings' => 'Säsongsbesparingar',
    ],
    
    // Användarengagemang (om du lägger till betyg/recensioner)
    'user_engagement' => [
        'rate_this_category' => 'Betygsätt denna kategori',
        'user_ratings' => 'Användarbetyg',
        'average_rating' => 'Genomsnittligt betyg: :rating/5',
        'based_on' => 'Baserat på :count betyg',
        'write_review' => 'Skriv en Recension',
    ],
    
    // Mobilapp-CTA (om du lägger till den)
    'mobile_app' => [
        'title' => 'Hämta Vår Mobilapp',
        'description' => 'Få :name-erbjudanden när du är på språng med vår mobilapp',
        'download' => 'Ladda Ner Nu',
        'available_on' => 'Tillgänglig på iOS & Android',
    ],
];