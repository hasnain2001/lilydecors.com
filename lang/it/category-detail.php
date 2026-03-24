<?php

return [
    // Meta tags
    'meta' => [
        'title' => [
            'custom' => ':title | Coupon, Offerte e Occasioni :year',
            'default' => ':name | Offerte, Occasioni e Codici Promo :year',
        ],
        'description' => [
            'default' => 'Trova le migliori occasioni :name e codici sconto verificati per :year. Risparmia con coupon, voucher e offerte promozionali esclusivi :lower_name aggiornati quotidianamente.',
        ],
        'keywords' => [
            'default' => ':name, coupon :name, codici promozionali :name, voucher :name, offerte sconto, occasioni :name, risparmia online',
        ],
    ],
    
    // Statistics badges
    'stats' => [
        'blogs_available' => ':count Blog Disponibili',
        'stores_available' => ':count Negozi Disponibili',
    ],
    
    // Total counts
    'total' => [
        'blogs' => 'Blog Totali',
        'stores' => 'Negozi Totali',
    ],
    
    // Blog section
    'blog_section' => [
        'title' => 'Consigli per lo Shopping e Trucchi per Risparmiare',
    ],
    
    // Stores section
    'stores_section' => [
        'title' => 'Negozi e Marchi :name',
    ],
    
    // Pagination
    'pagination' => [
        'blogs_label' => 'Paginazione blog',
        'stores_label' => 'Paginazione negozi',
    ],
    
    // Empty states
    'empty_stores' => [
        'title' => 'Nessun negozio trovato in questa categoria! Esplora nuovi negozi',
        'explore_link' => 'Esplora Tutti i Negozi',
    ],
    
    // Store default values
    'store_default_name' => 'Nome Negozio Non Disponibile',
    
    // Related content
    'related_content' => [
        'blogs_title' => 'Articoli del Blog Correlati',
        'stores_title' => 'Negozi Correlati',
        'no_blogs_found' => 'Nessun articolo del blog trovato in questa categoria',
        'no_stores_found' => 'Nessun negozio trovato in questa categoria',
    ],
    
    // Filter options (if you add filtering)
    'filter' => [
        'sort_by' => 'Ordina Per',
        'popularity' => 'Popolarità',
        'newest' => 'Più Recenti',
        'alphabetical' => 'Alfabetico',
        'rating' => 'Valutazione',
        'discount' => 'Sconto Maggiore',
    ],
    
    // Store features (if you add badges/icons)
    'features' => [
        'top_store' => 'Negozio Top',
        'verified' => 'Verificato',
        'exclusive' => 'Offerta Esclusiva',
        'limited_time' => 'Tempo Limitato',
        'free_shipping' => 'Spedizione Gratuita',
    ],
    
    // Coupon statistics (if you add coupon counts)
    'coupon_stats' => [
        'active_coupons' => ':count Coupon Attivi',
        'verified_offers' => ':count Offerte Verificate',
        'success_rate' => ':rate% Tasso di Successo',
        'last_updated' => 'Aggiornato :time fa',
    ],
    
    // Newsletter (if you add it)
    'newsletter' => [
        'title' => 'Ricevi le Offerte :name nella Tua Casella di Posta',
        'description' => 'Iscriviti per ricevere coupon e offerte esclusivi :name',
        'subscribe' => 'Iscriviti',
        'success' => 'Iscrizione riuscita! Controlla la tua email.',
    ],
    
    // Social sharing (if you add it)
    'share' => [
        'title' => 'Condividi questa categoria',
        'facebook' => 'Condividi su Facebook',
        'twitter' => 'Condividi su Twitter',
        'pinterest' => 'Pinna su Pinterest',
        'email' => 'Condividi via Email',
    ],
    
    // Breadcrumb (if you need separate from common)
    'breadcrumb' => [
        'current' => 'Categoria :name',
    ],
    
    // Seasonal/holiday banners (if you add them)
    'seasonal' => [
        'holiday_sales' => 'Saldi per le Feste',
        'black_friday' => 'Offerte Black Friday',
        'cyber_monday' => 'Offerte Cyber Monday',
        'seasonal_savings' => 'Risparmi Stagionali',
    ],
    
    // User engagement (if you add ratings/reviews)
    'user_engagement' => [
        'rate_this_category' => 'Valuta questa categoria',
        'user_ratings' => 'Valutazioni degli Utenti',
        'average_rating' => 'Valutazione Media: :rating/5',
        'based_on' => 'Basato su :count valutazioni',
        'write_review' => 'Scrivi una Recensione',
    ],
    
    // Mobile app CTA (if you add it)
    'mobile_app' => [
        'title' => 'Scarica la Nostra App Mobile',
        'description' => 'Ricevi le offerte :name in movimento con la nostra app mobile',
        'download' => 'Scarica Ora',
        'available_on' => 'Disponibile su iOS e Android',
    ],
];