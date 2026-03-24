<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Horké nabídky - Časově omezené akce a exkluzivní slevy | ' . config('app.name'),
        'description' => 'Objevte dnešní nejžhavější nabídky a časově omezené akce z vašich oblíbených obchodů. Ušetřete s našimi exkluzivními slevami!',
        'keywords' => 'horké nabídky, časově omezené akce, bleskové výprodeje, exkluzivní slevy, online nákupní nabídky',
    ],
    
    // Header section
    'header' => [
        'title' => '🔥 UPOZORNĚNÍ NA BLESKOVÉ AKCE!',
        'subtitle' => 'Časově omezené nabídky, které si nechcete nechat ujít - jednejte rychle, než vyprší!',
    ],
    
    // Categories section
    'categories' => [
        'title' => 'Nakupujte podle kategorie:',
        'all' => 'Všechny kategorie',
    ],
    
    // Deal card elements
    'deal_badge' => [
        'hot' => 'HORKÁ NABÍDKA',
        'featured' => 'DOPORUČENÉ',
        'exclusive' => 'EXKLUZIVNÍ',
        'limited_time' => 'ČASOVĚ OMEZENÉ',
    ],
    
    'image_alt' => 'Obrázek nabídky :name',
    'expires' => 'Platnost do',
    'used_count' => 'Použito :count',
    
    // Action buttons
    'view_deal' => 'Zobrazit nabídku',
    'more_offers' => 'Další nabídky',
    
    // Empty state
    'empty' => [
        'title' => 'Žádné horké nabídky',
        'message' => 'Brzy se vraťte pro nové bleskové akce a časově omezené nabídky!',
    ],
    
    // Pagination
    'pagination' => [
        'label' => 'Stránkování nabídek',
    ],
    
    // Deal types
    'types' => [
        'flash_sale' => 'Blesková akce',
        'limited_time' => 'Časově omezené',
        'doorbuster' => 'Průlomová cena',
        'clearance' => 'Výprodej',
        'holiday' => 'Prázdninová nabídka',
        'seasonal' => 'Sezónní výprodej',
    ],
    
    // Timer/Countdown (if added)
    'countdown' => [
        'expires_in' => 'Vyprší za:',
        'days' => 'dní',
        'hours' => 'hodin',
        'minutes' => 'minut',
        'seconds' => 'sekund',
        'expired' => 'Nabídka vypršela!',
    ],
    
    // Statistics (if added)
    'stats' => [
        'total_deals' => 'Celkem nabídek',
        'active_deals' => 'Aktivních nyní',
        'ending_soon' => 'Brzy končí',
        'avg_discount' => 'Průměrná sleva',
    ],
    
    // Filter and sorting (if added)
    'filter' => [
        'title' => 'Filtrovat nabídky',
        'sort_by' => 'Seřadit podle',
        'newest' => 'Nejnovější',
        'ending_soon' => 'Brzy končí',
        'most_popular' => 'Nejpopulárnější',
        'highest_discount' => 'Nejvyšší sleva',
        'category' => 'Kategorie',
        'store' => 'Obchod',
    ],
    
    // Featured deals section (if added)
    'featured' => [
        'title' => 'Dnešní doporučené nabídky',
        'view_all' => 'Zobrazit všechny nabídky',
    ],
    
    // Top stores with deals (if added)
    'top_stores' => [
        'title' => 'Obchody s horkými nabídkami',
        'view_all_stores' => 'Zobrazit všechny obchody',
    ],
    
    // Seasonal/holiday deals (if added)
    'seasonal' => [
        'black_friday' => 'Black Friday nabídky',
        'cyber_monday' => 'Cyber Monday nabídky',
        'holiday_sales' => 'Prázdninové výprodeje',
        'summer_sales' => 'Letní výprodeje',
        'winter_sales' => 'Zimní výprodeje',
    ],
    
    // Newsletter signup (if added)
    'newsletter' => [
        'title' => 'Získejte upozornění na horké nabídky',
        'description' => 'Přihlaste se k odběru upozornění na bleskové akce přímo do vaší schránky',
        'subscribe' => 'Odebírat',
        'success' => 'Úspěšně přihlášeno! Budete dostávat upozornění na horké nabídky.',
    ],
    
    // Social sharing (if added)
    'share' => [
        'title' => 'Sdílet tuto nabídku',
        'facebook' => 'Sdílet na Facebooku',
        'twitter' => 'Sdílet na Twitteru',
        'pinterest' => 'Připnout na Pinterest',
        'whatsapp' => 'Sdílet na WhatsApp',
        'email' => 'Sdílet e-mailem',
    ],
    
    // Success rate/savings
    'savings' => [
        'up_to' => 'Až :percent% sleva',
        'save_amount' => 'Ušetřete :amount',
        'free_shipping' => 'Doprava zdarma',
        'bogo' => 'Jeden druhý zdarma',
        'extra_off' => 'Extra :percent% sleva',
    ],
    
    // Deal urgency indicators
    'urgency' => [
        'almost_gone' => 'Téměř vyprodáno!',
        'selling_fast' => 'Rychle mizí!',
        'limited_stock' => 'Omezená zásoba!',
        'last_chance' => 'Poslední šance!',
        'expiring_today' => 'Vyprší dnes!',
    ],
    
    // User actions
    'actions' => [
        'view_deal' => 'Zobrazit nabídku',
        'get_coupon' => 'Získat kupón',
        'shop_now' => 'Nakupovat nyní',
        'save_deal' => 'Uložit nabídku',
        'set_reminder' => 'Nastavit připomínku',
        'report_expired' => 'Nahlásit vypršení',
    ],
    
    // Verification status
    'verification' => [
        'verified' => 'Ověřená nabídka',
        'exclusive' => 'Exkluzivní nabídka',
        'tested' => 'Testováno :time',
        'reported_working' => 'Nahlášeno jako funkční před :time',
    ],
    
    // Accessibility
    'accessibility' => [
        'deal_card' => 'Karta nabídky pro :store',
        'view_deal_button' => 'Zobrazit nabídku pro :store',
        'more_offers_button' => 'Zobrazit více nabídek od :store',
        'expiration_info' => 'Platnost do :date',
        'usage_info' => 'Použito :count krát',
    ],
    
    // Loading states
    'loading' => [
        'deals' => 'Načítání horkých nabídek...',
        'please_wait' => 'Prosím čekejte, než načteme nejnovější nabídky',
    ],
    
    // Time periods for deals
    'time_periods' => [
        'today' => 'Dnešní nabídky',
        'this_week' => 'Tento týden',
        'this_month' => 'Tento měsíc',
        'upcoming' => 'Nadcházející nabídky',
        'expired' => 'Nedávno vypršelo',
    ],
];