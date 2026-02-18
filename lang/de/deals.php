<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Heiße Angebote - Zeitlich begrenzte Angebote & exklusive Rabatte | ' . config('app.name'),
        'description' => 'Entdecken Sie die heißesten Angebote und zeitlich begrenzten Aktionen Ihrer Lieblingsgeschäfte. Sparen Sie kräftig mit unseren exklusiven Rabatten!',
        'keywords' => 'heiße Angebote, zeitlich begrenzte Angebote, Blitzangebote, exklusive Rabatte, Online-Shopping Deals',
    ],

    // Header section
    'header' => [
        'title' => '🔥 BLITZANGEBOTE ALARM!',
        'subtitle' => 'Zeitlich begrenzte Angebote, die Sie nicht verpassen sollten – schnell zuschlagen, bevor sie weg sind!',
    ],

    // Categories section
    'categories' => [
        'title' => 'Nach Kategorie stöbern:',
        'all' => 'Alle Kategorien',
    ],

    // Deal card elements
    'deal_badge' => [
        'hot' => 'HEISSES ANGEBOT',
        'featured' => 'EMPFOHLEN',
        'exclusive' => 'EXKLUSIV',
        'limited_time' => 'NUR FÜR KURZE ZEIT',
    ],

    'image_alt' => ':name Angebotsbild',
    'expires' => 'Gültig bis',
    'used_count' => ':count Mal genutzt',

    // Action buttons
    'view_deal' => 'Angebot ansehen',
    'more_offers' => 'Weitere Angebote',

    // Empty state
    'empty' => [
        'title' => 'Keine heißen Angebote verfügbar',
        'message' => 'Schauen Sie bald wieder vorbei für neue Blitzangebote und zeitlich begrenzte Aktionen!',
    ],

    // Pagination
    'pagination' => [
        'label' => 'Angebots-Navigation',
    ],

    // Deal types
    'types' => [
        'flash_sale' => 'Blitzangebot',
        'limited_time' => 'Zeitlich begrenzt',
        'doorbuster' => 'Sonderangebot',
        'clearance' => 'Räumungsverkauf',
        'holiday' => 'Feiertagsangebot',
        'seasonal' => 'Saisonaler Sale',
    ],

    // Timer/Countdown (if added)
    'countdown' => [
        'expires_in' => 'Gültig für:',
        'days' => 'Tage',
        'hours' => 'Stunden',
        'minutes' => 'Minuten',
        'seconds' => 'Sekunden',
        'expired' => 'Angebot abgelaufen!',
    ],

    // Statistics (if added)
    'stats' => [
        'total_deals' => 'Angebote insgesamt',
        'active_deals' => 'Jetzt aktiv',
        'ending_soon' => 'Endet bald',
        'avg_discount' => 'Durchschnittlicher Rabatt',
    ],

    // Filter and sorting (if added)
    'filter' => [
        'title' => 'Angebote filtern',
        'sort_by' => 'Sortieren nach',
        'newest' => 'Neueste',
        'ending_soon' => 'Endet bald',
        'most_popular' => 'Beliebteste',
        'highest_discount' => 'Höchster Rabatt',
        'category' => 'Kategorie',
        'store' => 'Geschäft',
    ],

    // Featured deals section (if added)
    'featured' => [
        'title' => 'Heutige Top-Angebote',
        'view_all' => 'Alle Angebote anzeigen',
    ],

    // Top stores with deals (if added)
    'top_stores' => [
        'title' => 'Geschäfte mit heißen Angeboten',
        'view_all_stores' => 'Alle Geschäfte anzeigen',
    ],

    // Seasonal/holiday deals (if added)
    'seasonal' => [
        'black_friday' => 'Black Friday Angebote',
        'cyber_monday' => 'Cyber Monday Angebote',
        'holiday_sales' => 'Feiertags-Sales',
        'summer_sales' => 'Sommer-Sales',
        'winter_sales' => 'Winter-Sales',
    ],

    // Newsletter signup (if added)
    'newsletter' => [
        'title' => 'Heiße Angebots-Benachrichtigungen erhalten',
        'description' => 'Abonnieren Sie, um Blitzangebot-Benachrichtigungen direkt in Ihr Postfach zu erhalten',
        'subscribe' => 'Abonnieren',
        'success' => 'Erfolgreich abonniert! Sie erhalten Benachrichtigungen zu heißen Angeboten.',
    ],

    // Social sharing (if added)
    'share' => [
        'title' => 'Dieses Angebot teilen',
        'facebook' => 'Auf Facebook teilen',
        'twitter' => 'Auf Twitter teilen',
        'pinterest' => 'Auf Pinterest pinnen',
        'whatsapp' => 'Auf WhatsApp teilen',
        'email' => 'Per E-Mail teilen',
    ],

    // Success rate/savings
    'savings' => [
        'up_to' => 'Bis zu :percent% Rabatt',
        'save_amount' => ':amount sparen',
        'free_shipping' => 'Kostenloser Versand',
        'bogo' => 'Zweite Ware gratis',
        'extra_off' => 'Extra :percent% Rabatt',
    ],

    // Deal urgency indicators
    'urgency' => [
        'almost_gone' => 'Fast vergriffen!',
        'selling_fast' => 'Wird schnell gekauft!',
        'limited_stock' => 'Begrenzter Lagerbestand!',
        'last_chance' => 'Letzte Chance!',
        'expiring_today' => 'Läuft heute ab!',
    ],

    // User actions
    'actions' => [
        'view_deal' => 'Angebot ansehen',
        'get_coupon' => 'Gutschein holen',
        'shop_now' => 'Jetzt einkaufen',
        'save_deal' => 'Angebot speichern',
        'set_reminder' => 'Erinnerung einstellen',
        'report_expired' => 'Als abgelaufen melden',
    ],

    // Verification status
    'verification' => [
        'verified' => 'Verifiziertes Angebot',
        'exclusive' => 'Exklusives Angebot',
        'tested' => 'Getestet :time',
        'reported_working' => 'Als funktionierend gemeldet vor :time',
    ],

    // Accessibility
    'accessibility' => [
        'deal_card' => 'Angebotskarte für :store',
        'view_deal_button' => 'Angebot von :store ansehen',
        'more_offers_button' => 'Weitere Angebote von :store anzeigen',
        'expiration_info' => 'Gültig bis :date',
        'usage_info' => ':count Mal genutzt',
    ],

    // Loading states
    'loading' => [
        'deals' => 'Heiße Angebote werden geladen...',
        'please_wait' => 'Bitte warten Sie, während wir die neuesten Angebote laden',
    ],

    // Time periods for deals
    'time_periods' => [
        'today' => 'Angebote von heute',
        'this_week' => 'Diese Woche',
        'this_month' => 'Diesen Monat',
        'upcoming' => 'Bevorstehende Angebote',
        'expired' => 'Kürzlich abgelaufen',
    ],
];