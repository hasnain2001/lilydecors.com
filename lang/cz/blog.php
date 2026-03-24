<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Nejnovější kupóny a tipy na nákupy :year | :app_name',
        'description' => 'Prozkoumejte naše úžasné blogy a nabídky. Najděte ty nejlepší produkty a služby na jednom místě.',
        'keywords' => 'blogy, nabídky, produkty, služby',
        'author' => 'Jan Novák',
    ],
    
    // Header section
    'header' => [
        'title' => 'Náš blog',
        'subtitle' => 'Objevte nejnovější postřehy, tipy a novinky na :app_name',
    ],
    
    // Statistics section
    'stats' => [
        'articles_published' => 'Publikovaných článků',
        'expert_writers' => 'Odborných autorů',
        'latest_updates' => 'Nejnovějších aktualizací',
    ],
    
    // Default values
    'defaults' => [
        'author_initials' => 'A',
        'author_name' => 'Admin',
    ],
    
    // Empty state
    'empty' => [
        'title' => 'Žádné blogy nenalezeny',
        'message' => 'Brzy se vraťte pro nové blogové příspěvky a aktualizace.',
    ],
    
    // Categories filter (if you add category filtering)
    'categories' => [
        'all' => 'Všechny kategorie',
        'filter_by' => 'Filtrovat podle kategorie',
        'popular' => 'Populární kategorie',
    ],
    
    // Sorting options (if you add sorting)
    'sort' => [
        'latest' => 'Nejnovější',
        'popular' => 'Nejpopulárnější',
        'trending' => 'Trendující',
        'oldest' => 'Nejstarší',
        'title_az' => 'Názvu (A-Z)',
        'title_za' => 'Názvu (Z-A)',
    ],
    
    // Search functionality (if you add search)
    'search' => [
        'placeholder' => 'Hledat v blogových příspěvcích...',
        'no_results' => 'Nebyly nalezeny žádné příspěvky pro ":query"',
        'suggestions' => 'Zkuste jiná klíčová slova nebo procházejte kategorie',
    ],
    
    // Featured posts section (if you add it)
    'featured' => [
        'title' => 'Doporučené příspěvky',
        'view_all' => 'Zobrazit všechny doporučené',
    ],
    
    // Newsletter signup (if you add it to blog page)
    'newsletter' => [
        'title' => 'Odebírejte náš blog',
        'description' => 'Získejte nejnovější příspěvky doručené přímo do vaší schránky',
        'subscribe' => 'Odebírat',
        'success' => 'Úspěšně přihlášeno k odběru! Zkontrolujte svůj e-mail.',
    ],
    
    // Social sharing (if you add share buttons)
    'share' => [
        'title' => 'Sdílet tento příspěvek',
        'facebook' => 'Sdílet na Facebooku',
        'twitter' => 'Sdílet na Twitteru',
        'linkedin' => 'Sdílet na LinkedIn',
        'pinterest' => 'Připnout na Pinterest',
    ],
    
    // Reading time (if you add it)
    'reading_time' => [
        'min_read' => 'min čtení',
        'less_than_minute' => 'Méně než minuta',
    ],
    
    // Tags (if you add tagging system)
    'tags' => [
        'title' => 'Populární štítky',
        'view_all_tags' => 'Zobrazit všechny štítky',
        'no_tags' => 'Žádné štítky nejsou k dispozici',
    ],
    
    // Comments (if you add comment system)
    'comments' => [
        'title' => 'Komentáře',
        'no_comments' => 'Zatím žádné komentáře. Buďte první, kdo okomentuje!',
        'leave_comment' => 'Napsat komentář',
        'post_comment' => 'Odeslat komentář',
        'reply' => 'Odpovědět',
    ],
    
    // Related posts (if you add related posts section)
    'related' => [
        'title' => 'Mohlo by se vám také líbit',
        'read_more' => 'Číst více',
    ],
    
    // Pagination
    'pagination' => [
        'showing' => 'Zobrazeno :from až :to z :total příspěvků',
        'previous' => 'Předchozí',
        'next' => 'Další',
        'page' => 'Strana :current z :last',
    ],
    
    // Archive (if you add archive functionality)
    'archive' => [
        'title' => 'Archiv blogu',
        'by_month' => 'Příspěvky podle měsíce',
        'by_year' => 'Příspěvky podle roku',
        'by_category' => 'Příspěvky podle kategorie',
    ],
    
    // Authors (if you add author pages)
    'authors' => [
        'title' => 'Naši autoři',
        'view_profile' => 'Zobrazit profil',
        'posts_by' => 'Příspěvky od :author',
        'bio' => 'O autorovi',
    ],
];