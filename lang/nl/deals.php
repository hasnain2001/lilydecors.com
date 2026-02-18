<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Hot Deals - Tijdelijke aanbiedingen & exclusieve kortingen | ' . config('app.name'),
        'description' => 'Ontdek de heetste deals van vandaag en tijdelijke aanbiedingen van uw favoriete winkels. Bespaar veel met onze exclusieve kortingen!',
    ],
    
    // Header sectie
    'header' => [
        'title' => '🔥 FLASH DEALS ALERT!',
        'subtitle' => 'Tijdelijke aanbiedingen die u niet wilt missen - wees er snel bij voordat ze weg zijn!',
    ],
    
    // Categorieën sectie
    'categories' => [
        'title' => 'Winkel per Categorie:',
        'all' => 'Alle Categorieën',
    ],
    
    // Deal kaart elementen
    'deal_badge' => [
        'hot' => 'HOT DEAL',
        'featured' => 'UITGELICHT',
        'exclusive' => 'EXCLUSIEF',
        'limited_time' => 'BEPERKTE TIJD',
    ],
    
    'image_alt' => ':name deal afbeelding',
    'expires' => 'Verloopt',
    'used_count' => ':count gebruikt',
    
    // Actieknoppen
    'view_deal' => 'Bekijk Deal',
    'more_offers' => 'Meer Aanbiedingen',
    
    // Lege staat
    'empty' => [
        'title' => 'Geen Hot Deals Beschikbaar',
        'message' => 'Kom binnenkort terug voor nieuwe flash deals en tijdelijke aanbiedingen!',
    ],
    
    // Paginering
    'pagination' => [
        'label' => 'Deals paginering',
    ],
    
    // Deal types
    'types' => [
        'flash_sale' => 'Flash Sale',
        'limited_time' => 'Beperkte Tijd',
        'doorbuster' => 'Dagaanbieding',
        'clearance' => 'Opruiming',
        'holiday' => 'Feestdag Deal',
        'seasonal' => 'Seizoensuitverkoop',
    ],
    
    // Timer/Aftelling (indien toegevoegd)
    'countdown' => [
        'expires_in' => 'Verloopt over:',
        'days' => 'dagen',
        'hours' => 'uren',
        'minutes' => 'minuten',
        'seconds' => 'seconden',
        'expired' => 'Deal verlopen!',
    ],
    
    // Statistieken (indien toegevoegd)
    'stats' => [
        'total_deals' => 'Totaal Deals',
        'active_deals' => 'Nu Actief',
        'ending_soon' => 'Eindigt Binnenkort',
        'avg_discount' => 'Gemiddelde Korting',
    ],
    
    // Filter en sortering (indien toegevoegd)
    'filter' => [
        'title' => 'Filter Deals',
        'sort_by' => 'Sorteer Op',
        'newest' => 'Nieuwste',
        'ending_soon' => 'Eindigt Binnenkort',
        'most_popular' => 'Meest Populair',
        'highest_discount' => 'Hoogste Korting',
        'category' => 'Categorie',
        'store' => 'Winkel',
    ],
    
    // Uitgelichte deals sectie (indien toegevoegd)
    'featured' => [
        'title' => 'Uitgelichte Deals van Vandaag',
        'view_all' => 'Bekijk Alle Deals',
    ],
    
    // Topwinkels met deals (indien toegevoegd)
    'top_stores' => [
        'title' => 'Winkels met Hot Deals',
        'view_all_stores' => 'Bekijk Alle Winkels',
    ],
    
    // Seizoens-/feestdagdeals (indien toegevoegd)
    'seasonal' => [
        'black_friday' => 'Black Friday Deals',
        'cyber_monday' => 'Cyber Monday Deals',
        'holiday_sales' => 'Feestdagen Uitverkoop',
        'summer_sales' => 'Zomer Uitverkoop',
        'winter_sales' => 'Winter Uitverkoop',
    ],
    
    // Nieuwsbrief aanmelding (indien toegevoegd)
    'newsletter' => [
        'title' => 'Ontvang Hot Deal Meldingen',
        'description' => 'Abonneer om flash deal meldingen direct in uw inbox te ontvangen',
        'subscribe' => 'Abonneren',
        'success' => 'Succesvol geabonneerd! U ontvangt hot deal meldingen.',
    ],
    
    // Sociaal delen (indien toegevoegd)
    'share' => [
        'title' => 'Deel deze deal',
        'facebook' => 'Delen op Facebook',
        'twitter' => 'Delen op Twitter',
        'pinterest' => 'Pinnen op Pinterest',
        'whatsapp' => 'Delen op WhatsApp',
        'email' => 'Delen via E-mail',
    ],
    
    // Succespercentage/besparingen
    'savings' => [
        'up_to' => 'Tot :percent% korting',
        'save_amount' => 'Bespaar :amount',
        'free_shipping' => 'Gratis Verzending',
        'bogo' => '1+1 Gratis',
        'extra_off' => 'Extra :percent% korting',
    ],
    
    // Urgentie-indicatoren voor deals
    'urgency' => [
        'almost_gone' => 'Bijna weg!',
        'selling_fast' => 'Gaat snel!',
        'limited_stock' => 'Beperkte voorraad!',
        'last_chance' => 'Laatste kans!',
        'expiring_today' => 'Verloopt vandaag!',
    ],
    
    // Gebruikersacties
    'actions' => [
        'view_deal' => 'Bekijk Deal',
        'get_coupon' => 'Ontvang Coupon',
        'shop_now' => 'Nu Winkelen',
        'save_deal' => 'Deal Opslaan',
        'set_reminder' => 'Herinnering Instellen',
        'report_expired' => 'Meld Verlopen',
    ],
    
    // Verificatiestatus
    'verification' => [
        'verified' => 'Geverifieerde Deal',
        'exclusive' => 'Exclusieve Deal',
        'tested' => 'Getest :time',
        'reported_working' => 'Gemeld werkend :time geleden',
    ],
    
    // Toegankelijkheid
    'accessibility' => [
        'deal_card' => 'Dealkaart voor :store',
        'view_deal_button' => 'Bekijk deal voor :store',
        'more_offers_button' => 'Bekijk meer aanbiedingen van :store',
        'expiration_info' => 'Verloopt op :date',
        'usage_info' => ':count keer gebruikt',
    ],
    
    // Laadstatussen
    'loading' => [
        'deals' => 'Hot deals laden...',
        'please_wait' => 'Een ogenblik geduld terwijl we de nieuwste deals laden',
    ],
    
    // Tijdsperioden voor deals
    'time_periods' => [
        'today' => 'Deals van Vandaag',
        'this_week' => 'Deze Week',
        'this_month' => 'Deze Maand',
        'upcoming' => 'Aankomende Deals',
        'expired' => 'Recent Verlopen',
    ],
];