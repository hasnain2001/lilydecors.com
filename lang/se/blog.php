<?php

return [
    // Meta-taggar
    'meta' => [
        'title' => 'Senaste Kupong- & Shoppingtipsbloggen :year | :app_name',
        'description' => 'Utforska våra fantastiska bloggar och erbjudanden. Hitta de bästa produkterna och tjänsterna på ett ställe.',
        'keywords' => 'bloggar, erbjudanden, produkter, tjänster',
        'author' => 'John Doe',
    ],
    
    // Header-sektion
    'header' => [
        'title' => 'Vår Blogg',
        'subtitle' => 'Upptäck de senaste insikterna, tipsen och nyheterna på :app_name',
    ],
    
    // Statistiksektion
    'stats' => [
        'articles_published' => 'Publicerade Artiklar',
        'expert_writers' => 'Expertskribenter',
        'latest_updates' => 'Senaste Uppdateringarna',
    ],
    
    // Standardvärden
    'defaults' => [
        'author_initials' => 'A',
        'author_name' => 'Admin',
    ],
    
    // Tomt tillstånd
    'empty' => [
        'title' => 'Inga Bloggar Hittades',
        'message' => 'Kom tillbaka snart för nya blogginlägg och uppdateringar.',
    ],
    
    // Kategorifilter (om du lägger till kategorifiltering)
    'categories' => [
        'all' => 'Alla Kategorier',
        'filter_by' => 'Filtrera efter Kategori',
        'popular' => 'Populära Kategorier',
    ],
    
    // Sorteringsalternativ (om du lägger till sortering)
    'sort' => [
        'latest' => 'Senaste',
        'popular' => 'Mest Populära',
        'trending' => 'Trendande',
        'oldest' => 'Äldsta',
        'title_az' => 'Titel (A-Ö)',
        'title_za' => 'Titel (Ö-A)',
    ],
    
    // Sökfunktion (om du lägger till sökning)
    'search' => [
        'placeholder' => 'Sök blogginlägg...',
        'no_results' => 'Inga inlägg hittades för ":query"',
        'suggestions' => 'Prova andra sökord eller bläddra bland kategorier',
    ],
    
    // Utvalda inlägg-sektion (om du lägger till den)
    'featured' => [
        'title' => 'Utvalda Inlägg',
        'view_all' => 'Se Alla Utvalda',
    ],
    
    // Nyhetsbrevsprenumeration (om du lägger till det på bloggsidan)
    'newsletter' => [
        'title' => 'Prenumerera på Vår Blogg',
        'description' => 'Få de senaste inläggen direkt levererade till din inkorg',
        'subscribe' => 'Prenumerera',
        'success' => 'Prenumeration lyckades! Kontrollera din e-post.',
    ],
    
    // Social delning (om du lägger till delningsknappar)
    'share' => [
        'title' => 'Dela det här inlägget',
        'facebook' => 'Dela på Facebook',
        'twitter' => 'Dela på Twitter',
        'linkedin' => 'Dela på LinkedIn',
        'pinterest' => 'Fäst på Pinterest',
    ],
    
    // Lästid (om du lägger till det)
    'reading_time' => [
        'min_read' => 'min läsning',
        'less_than_minute' => 'Mindre än en minut',
    ],
    
    // Taggar (om du lägger till taggningssystem)
    'tags' => [
        'title' => 'Populära Taggar',
        'view_all_tags' => 'Visa Alla Taggar',
        'no_tags' => 'Inga taggar tillgängliga',
    ],
    
    // Kommentarer (om du lägger till kommentarssystem)
    'comments' => [
        'title' => 'Kommentarer',
        'no_comments' => 'Inga kommentarer än. Var först med att kommentera!',
        'leave_comment' => 'Lämna en Kommentar',
        'post_comment' => 'Publicera Kommentar',
        'reply' => 'Svara',
    ],
    
    // Relaterade inlägg (om du lägger till relaterade inlägg-sektion)
    'related' => [
        'title' => 'Du Kanske Också Gillar',
        'read_more' => 'Läs Mer',
    ],
    
    // Paginering
    'pagination' => [
        'showing' => 'Visar :from till :to av :total inlägg',
        'previous' => 'Föregående',
        'next' => 'Nästa',
        'page' => 'Sida :current av :last',
    ],
    
    // Arkiv (om du lägger till arkivfunktionalitet)
    'archive' => [
        'title' => 'Bloggarkiv',
        'by_month' => 'Inlägg per Månad',
        'by_year' => 'Inlägg per År',
        'by_category' => 'Inlägg per Kategori',
    ],
    
    // Författare (om du lägger till författarsidor)
    'authors' => [
        'title' => 'Våra Författare',
        'view_profile' => 'Visa Profil',
        'posts_by' => 'Inlägg av :author',
        'bio' => 'Om Författaren',
    ],
];