<?php

return [
    // Meta-taggar
    'meta' => [
        'title' => 'Heta Erbjudanden - Tidsbegränsade erbjudanden & exklusiva rabatter | ' . config('app.name'),
        'description' => 'Upptäck dagens hetaste erbjudanden och tidsbegränsade kampanjer från dina favoritbutiker. Spara stort med våra exklusiva rabatter!',
        'keywords' => 'heta erbjudanden, tidsbegränsade erbjudanden, blixtreor, exklusiva rabatter, online shopping deals',
    ],
    
    // Header-sektion
    'header' => [
        'title' => '🔥 BLIXTREA!',
        'subtitle' => 'Tidsbegränsade erbjudanden du inte vill missa - agera snabbt innan de är slut!',
    ],
    
    // Kategorisektion
    'categories' => [
        'title' => 'Handla efter kategori:',
        'all' => 'Alla Kategorier',
    ],
    
    // Erbjudandekortets element
    'deal_badge' => [
        'hot' => 'HETT ERBJUDANDE',
        'featured' => 'UTVALD',
        'exclusive' => 'EXKLUSIV',
        'limited_time' => 'BEGRÄNSAD TID',
    ],
    
    'image_alt' => ':name erbjudandebild',
    'expires' => 'Går ut',
    'used_count' => ':count använt',
    
    // Åtgärdsknappar
    'view_deal' => 'Visa Erbjudande',
    'more_offers' => 'Fler Erbjudanden',
    
    // Tomt tillstånd
    'empty' => [
        'title' => 'Inga Heta Erbjudanden Tillgängliga',
        'message' => 'Kom tillbaka snart för nya blixtreor och tidsbegränsade erbjudanden!',
    ],
    
    // Paginering
    'pagination' => [
        'label' => 'Erbjudandepaginering',
    ],
    
    // Erbjudandetyper
    'types' => [
        'flash_sale' => 'Blixtrea',
        'limited_time' => 'Begränsad Tid',
        'doorbuster' => 'Dörrknackarpris',
        'clearance' => 'Utförsäljning',
        'holiday' => 'Helgerbjudande',
        'seasonal' => 'Säsongsförsäljning',
    ],
    
    // Timer/Nedräkning (om tillagd)
    'countdown' => [
        'expires_in' => 'Utgår om:',
        'days' => 'dagar',
        'hours' => 'timmar',
        'minutes' => 'minuter',
        'seconds' => 'sekunder',
        'expired' => 'Erbjudandet har gått ut!',
    ],
    
    // Statistik (om tillagd)
    'stats' => [
        'total_deals' => 'Totalt Erbjudanden',
        'active_deals' => 'Aktiva Nu',
        'ending_soon' => 'Slutar Snart',
        'avg_discount' => 'Genomsnittlig Rabatt',
    ],
    
    // Filter och sortering (om tillagt)
    'filter' => [
        'title' => 'Filtrera Erbjudanden',
        'sort_by' => 'Sortera Efter',
        'newest' => 'Nyast',
        'ending_soon' => 'Slutar Snart',
        'most_popular' => 'Mest Populära',
        'highest_discount' => 'Högsta Rabatt',
        'category' => 'Kategori',
        'store' => 'Butik',
    ],
    
    // Utvalda erbjudanden-sektion (om tillagd)
    'featured' => [
        'title' => 'Dagens Utvalda Erbjudanden',
        'view_all' => 'Visa Alla Erbjudanden',
    ],
    
    // Toppbutiker med erbjudanden (om tillagda)
    'top_stores' => [
        'title' => 'Butiker med Heta Erbjudanden',
        'view_all_stores' => 'Visa Alla Butiker',
    ],
    
    // Säsongs-/helgerbjudanden (om tillagda)
    'seasonal' => [
        'black_friday' => 'Black Friday-Erbjudanden',
        'cyber_monday' => 'Cyber Monday-Erbjudanden',
        'holiday_sales' => 'Helgrean',
        'summer_sales' => 'Sommarrea',
        'winter_sales' => 'Vinterrea',
    ],
    
    // Nyhetsbrevsprenumeration (om tillagd)
    'newsletter' => [
        'title' => 'Få Varningar om Heta Erbjudanden',
        'description' => 'Prenumerera för att få notiser om blixtreor direkt i din inkorg',
        'subscribe' => 'Prenumerera',
        'success' => 'Prenumeration lyckades! Du kommer att få varningar om heta erbjudanden.',
    ],
    
    // Social delning (om tillagd)
    'share' => [
        'title' => 'Dela detta erbjudande',
        'facebook' => 'Dela på Facebook',
        'twitter' => 'Dela på Twitter',
        'pinterest' => 'Fäst på Pinterest',
        'whatsapp' => 'Dela på WhatsApp',
        'email' => 'Dela via E-post',
    ],
    
    // Framgångsfrekvens/besparingar
    'savings' => [
        'up_to' => 'Upp till :percent% rabatt',
        'save_amount' => 'Spara :amount',
        'free_shipping' => 'Fri Frakt',
        'bogo' => 'Köp en, få en gratis',
        'extra_off' => 'Extra :percent% rabatt',
    ],
    
    // Brådskande indikatorer för erbjudanden
    'urgency' => [
        'almost_gone' => 'Nästan slut!',
        'selling_fast' => 'Säljer snabbt!',
        'limited_stock' => 'Begränsat lager!',
        'last_chance' => 'Sista chansen!',
        'expiring_today' => 'Utgår idag!',
    ],
    
    // Användaråtgärder
    'actions' => [
        'view_deal' => 'Visa Erbjudande',
        'get_coupon' => 'Hämta Kupong',
        'shop_now' => 'Handla Nu',
        'save_deal' => 'Spara Erbjudande',
        'set_reminder' => 'Ställ In Påminnelse',
        'report_expired' => 'Rapportera Utgånget',
    ],
    
    // Verifieringsstatus
    'verification' => [
        'verified' => 'Verifierat Erbjudande',
        'exclusive' => 'Exklusivt Erbjudande',
        'tested' => 'Testad :time',
        'reported_working' => 'Rapporterats fungera :time sedan',
    ],
    
    // Tillgänglighet
    'accessibility' => [
        'deal_card' => 'Erbjudandekort för :store',
        'view_deal_button' => 'Visa erbjudande för :store',
        'more_offers_button' => 'Se fler erbjudanden från :store',
        'expiration_info' => 'Utgår den :date',
        'usage_info' => 'Använt :count gånger',
    ],
    
    // Laddningstillstånd
    'loading' => [
        'deals' => 'Laddar heta erbjudanden...',
        'please_wait' => 'Vänta medan vi laddar de senaste erbjudandena',
    ],
    
    // Tidsperioder för erbjudanden
    'time_periods' => [
        'today' => 'Dagens Erbjudanden',
        'this_week' => 'Denna Vecka',
        'this_month' => 'Denna Månad',
        'upcoming' => 'Kommande Erbjudanden',
        'expired' => 'Nyligen Utgångna',
    ],
];