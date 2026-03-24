<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Neuester Blog für Gutscheine & Shopping-Tipps :year | :app_name',
        'description' => 'Entdecken Sie unsere tollen Blogs und Angebote. Finden Sie die besten Produkte und Dienstleistungen an einem Ort.',
        'keywords' => 'Blogs, Angebote, Produkte, Dienstleistungen',
        'author' => 'John Doe',
    ],

    // Header section
    'header' => [
        'title' => 'Unser Blog',
        'subtitle' => 'Entdecken Sie die neuesten Einblicke, Tipps und Neuigkeiten auf :app_name',
    ],

    // Statistics section
    'stats' => [
        'articles_published' => 'Veröffentlichte Artikel',
        'expert_writers' => 'Experten-Autoren',
        'latest_updates' => 'Neueste Updates',
    ],

    // Default values
    'defaults' => [
        'author_initials' => 'A',
        'author_name' => 'Admin',
    ],

    // Empty state
    'empty' => [
        'title' => 'Keine Blogs gefunden',
        'message' => 'Schauen Sie bald wieder vorbei für neue Blogbeiträge und Updates.',
    ],

    // Categories filter (if you add category filtering)
    'categories' => [
        'all' => 'Alle Kategorien',
        'filter_by' => 'Nach Kategorie filtern',
        'popular' => 'Beliebte Kategorien',
    ],

    // Sorting options (if you add sorting)
    'sort' => [
        'latest' => 'Neueste',
        'popular' => 'Am beliebtesten',
        'trending' => 'Trending',
        'oldest' => 'Älteste',
        'title_az' => 'Titel (A-Z)',
        'title_za' => 'Titel (Z-A)',
    ],

    // Search functionality (if you add search)
    'search' => [
        'placeholder' => 'Blogbeiträge durchsuchen...',
        'no_results' => 'Keine Beiträge für ":query" gefunden',
        'suggestions' => 'Probieren Sie andere Suchbegriffe oder durchstöbern Sie die Kategorien',
    ],

    // Featured posts section (if you add it)
    'featured' => [
        'title' => 'Empfohlene Beiträge',
        'view_all' => 'Alle empfohlenen anzeigen',
    ],

    // Newsletter signup (if you add it to blog page)
    'newsletter' => [
        'title' => 'Unseren Blog abonnieren',
        'description' => 'Erhalten Sie die neuesten Beiträge direkt in Ihr Postfach',
        'subscribe' => 'Abonnieren',
        'success' => 'Erfolgreich abonniert! Bitte prüfen Sie Ihre E-Mails.',
    ],

    // Social sharing (if you add share buttons)
    'share' => [
        'title' => 'Diesen Beitrag teilen',
        'facebook' => 'Auf Facebook teilen',
        'twitter' => 'Auf Twitter teilen',
        'linkedin' => 'Auf LinkedIn teilen',
        'pinterest' => 'Auf Pinterest pinnen',
    ],

    // Reading time (if you add it)
    'reading_time' => [
        'min_read' => 'Min. Lesezeit',
        'less_than_minute' => 'Weniger als eine Minute',
    ],

    // Tags (if you add tagging system)
    'tags' => [
        'title' => 'Beliebte Schlagwörter',
        'view_all_tags' => 'Alle Schlagwörter anzeigen',
        'no_tags' => 'Keine Schlagwörter verfügbar',
    ],

    // Comments (if you add comment system)
    'comments' => [
        'title' => 'Kommentare',
        'no_comments' => 'Noch keine Kommentare. Seien Sie der Erste, der kommentiert!',
        'leave_comment' => 'Hinterlassen Sie einen Kommentar',
        'post_comment' => 'Kommentar absenden',
        'reply' => 'Antworten',
    ],

    // Related posts (if you add related posts section)
    'related' => [
        'title' => 'Das könnte Ihnen auch gefallen',
        'read_more' => 'Weiterlesen',
    ],

    // Pagination
    'pagination' => [
        'showing' => 'Zeige :from bis :to von :total Beiträgen',
        'previous' => 'Vorherige',
        'next' => 'Nächste',
        'page' => 'Seite :current von :last',
    ],

    // Archive (if you add archive functionality)
    'archive' => [
        'title' => 'Blog-Archiv',
        'by_month' => 'Beiträge nach Monat',
        'by_year' => 'Beiträge nach Jahr',
        'by_category' => 'Beiträge nach Kategorie',
    ],

    // Authors (if you add author pages)
    'authors' => [
        'title' => 'Unsere Autoren',
        'view_profile' => 'Profil anzeigen',
        'posts_by' => 'Beiträge von :author',
        'bio' => 'Über den Autor',
    ],
];