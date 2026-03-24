<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Offerte Imperdibili - Offerte a tempo limitato e sconti esclusivi | ' . config('app.name'),
        'description' => 'Scopri le offerte più calde di oggi e le promozioni a tempo limitato dai tuoi negozi preferiti. Risparmia con i nostri sconti esclusivi!',
        'keywords' => 'offerte imperdibili, offerte a tempo limitato, flash sales, sconti esclusivi, offerte shopping online',
    ],
    
    // Header section
    'header' => [
        'title' => '🔥 ALLERTA FLASH DEALS!',
        'subtitle' => 'Offerte a tempo limitato da non perdere - affrettati prima che finiscano!',
    ],
    
    // Categories section
    'categories' => [
        'title' => 'Acquista per Categoria:',
        'all' => 'Tutte le Categorie',
    ],
    
    // Deal card elements
    'deal_badge' => [
        'hot' => 'OFFERTA IMPERDIBILE',
        'featured' => 'IN EVIDENZA',
        'exclusive' => 'ESCLUSIVO',
        'limited_time' => 'TEMPO LIMITATO',
    ],
    
    'image_alt' => 'Immagine offerta :name',
    'expires' => 'Scade il',
    'used_count' => ':count usi',
    
    // Action buttons
    'view_deal' => 'Vedi Offerta',
    'more_offers' => 'Altre Offerte',
    
    // Empty state
    'empty' => [
        'title' => 'Nessuna Offerta Imperdibile Disponibile',
        'message' => 'Controlla presto per nuove offerte lampo e promozioni a tempo limitato!',
    ],
    
    // Pagination
    'pagination' => [
        'label' => 'Paginazione offerte',
    ],
    
    // Deal types
    'types' => [
        'flash_sale' => 'Flash Sale',
        'limited_time' => 'Tempo Limitato',
        'doorbuster' => 'Offerta Imperdibile',
        'clearance' => 'Svendita',
        'holiday' => 'Offerta per le Feste',
        'seasonal' => 'Saldi Stagionali',
    ],
    
    // Timer/Countdown (if added)
    'countdown' => [
        'expires_in' => 'Scade tra:',
        'days' => 'giorni',
        'hours' => 'ore',
        'minutes' => 'minuti',
        'seconds' => 'secondi',
        'expired' => 'Offerta scaduta!',
    ],
    
    // Statistics (if added)
    'stats' => [
        'total_deals' => 'Offerte Totali',
        'active_deals' => 'Attive Ora',
        'ending_soon' => 'In Scadenza',
        'avg_discount' => 'Sconto Medio',
    ],
    
    // Filter and sorting (if added)
    'filter' => [
        'title' => 'Filtra Offerte',
        'sort_by' => 'Ordina Per',
        'newest' => 'Più Recenti',
        'ending_soon' => 'In Scadenza',
        'most_popular' => 'Più Popolari',
        'highest_discount' => 'Sconto Maggiore',
        'category' => 'Categoria',
        'store' => 'Negozio',
    ],
    
    // Featured deals section (if added)
    'featured' => [
        'title' => 'Offerte in Evidenza di Oggi',
        'view_all' => 'Vedi Tutte le Offerte',
    ],
    
    // Top stores with deals (if added)
    'top_stores' => [
        'title' => 'Negozi con Offerte Imperdibili',
        'view_all_stores' => 'Vedi Tutti i Negozi',
    ],
    
    // Seasonal/holiday deals (if added)
    'seasonal' => [
        'black_friday' => 'Offerte Black Friday',
        'cyber_monday' => 'Offerte Cyber Monday',
        'holiday_sales' => 'Saldi per le Feste',
        'summer_sales' => 'Saldi Estivi',
        'winter_sales' => 'Saldi Invernali',
    ],
    
    // Newsletter signup (if added)
    'newsletter' => [
        'title' => 'Ricevi Avvisi sulle Offerte Imperdibili',
        'description' => 'Iscriviti per ricevere notifiche sulle offerte lampo direttamente nella tua casella di posta',
        'subscribe' => 'Iscriviti',
        'success' => 'Iscrizione riuscita! Riceverai avvisi sulle offerte imperdibili.',
    ],
    
    // Social sharing (if added)
    'share' => [
        'title' => 'Condividi questa offerta',
        'facebook' => 'Condividi su Facebook',
        'twitter' => 'Condividi su Twitter',
        'pinterest' => 'Pinna su Pinterest',
        'whatsapp' => 'Condividi su WhatsApp',
        'email' => 'Condividi via Email',
    ],
    
    // Success rate/savings
    'savings' => [
        'up_to' => 'Fino al :percent% di sconto',
        'save_amount' => 'Risparmia :amount',
        'free_shipping' => 'Spedizione Gratuita',
        'bogo' => 'Prendi Uno, Ricevi Uno Gratis',
        'extra_off' => 'Extra :percent% di sconto',
    ],
    
    // Deal urgency indicators
    'urgency' => [
        'almost_gone' => 'Quasi finito!',
        'selling_fast' => 'Vendita rapida!',
        'limited_stock' => 'Scorte limitate!',
        'last_chance' => 'Ultima occasione!',
        'expiring_today' => 'Scade oggi!',
    ],
    
    // User actions
    'actions' => [
        'view_deal' => 'Vedi Offerta',
        'get_coupon' => 'Ottieni Coupon',
        'shop_now' => 'Acquista Ora',
        'save_deal' => 'Salva Offerta',
        'set_reminder' => 'Imposta Promemoria',
        'report_expired' => 'Segnala Scaduta',
    ],
    
    // Verification status
    'verification' => [
        'verified' => 'Offerta Verificata',
        'exclusive' => 'Offerta Esclusiva',
        'tested' => 'Testata :time',
        'reported_working' => 'Segnalata funzionante :time fa',
    ],
    
    // Accessibility
    'accessibility' => [
        'deal_card' => 'Scheda offerta per :store',
        'view_deal_button' => 'Vedi offerta per :store',
        'more_offers_button' => 'Vedi altre offerte da :store',
        'expiration_info' => 'Scade il :date',
        'usage_info' => 'Usata :count volte',
    ],
    
    // Loading states
    'loading' => [
        'deals' => 'Caricamento offerte imperdibili...',
        'please_wait' => 'Attendi mentre carichiamo le ultime offerte',
    ],
    
    // Time periods for deals
    'time_periods' => [
        'today' => 'Offerte di Oggi',
        'this_week' => 'Questa Settimana',
        'this_month' => 'Questo Mese',
        'upcoming' => 'Prossime Offerte',
        'expired' => 'Scadute di Recente',
    ],
];