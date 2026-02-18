<?php

return [
    // Meta tagi
    'meta' => [
        'title' => 'Najnowszy blog z kuponami i poradami zakupowymi :year | :app_name',
        'description' => 'Odkryj nasze niesamowite blogi i oferty. Znajdź najlepsze produkty i usługi w jednym miejscu.',
        'keywords' => 'blogi, oferty, produkty, usługi',
        'author' => 'John Doe',
    ],
    
    // Sekcja nagłówka
    'header' => [
        'title' => 'Nasz blog',
        'subtitle' => 'Odkryj najnowsze spostrzeżenia, porady i nowości na :app_name',
    ],
    
    // Sekcja statystyk
    'stats' => [
        'articles_published' => 'Opublikowane artykuły',
        'expert_writers' => 'Eksperci piszący',
        'latest_updates' => 'Najnowsze aktualizacje',
    ],
    
    // Wartości domyślne
    'defaults' => [
        'author_initials' => 'A',
        'author_name' => 'Administrator',
    ],
    
    // Stan pusty
    'empty' => [
        'title' => 'Nie znaleziono wpisów',
        'message' => 'Zaglądaj wkrótce, aby zobaczyć nowe wpisy na blogu i aktualizacje.',
    ],
    
    // Filtrowanie kategorii (jeśli dodasz filtrowanie po kategoriach)
    'categories' => [
        'all' => 'Wszystkie kategorie',
        'filter_by' => 'Filtruj według kategorii',
        'popular' => 'Popularne kategorie',
    ],
    
    // Opcje sortowania (jeśli dodasz sortowanie)
    'sort' => [
        'latest' => 'Najnowsze',
        'popular' => 'Najpopularniejsze',
        'trending' => 'Na czasie',
        'oldest' => 'Najstarsze',
        'title_az' => 'Tytuł (A-Z)',
        'title_za' => 'Tytuł (Z-A)',
    ],
    
    // Funkcjonalność wyszukiwania (jeśli dodasz wyszukiwanie)
    'search' => [
        'placeholder' => 'Szukaj wpisów na blogu...',
        'no_results' => 'Nie znaleziono wpisów dla ":query"',
        'suggestions' => 'Wypróbuj inne słowa kluczowe lub przeglądaj kategorie',
    ],
    
    // Sekcja polecanych wpisów (jeśli ją dodasz)
    'featured' => [
        'title' => 'Polecane wpisy',
        'view_all' => 'Zobacz wszystkie polecane',
    ],
    
    // Zapisy do newslettera (jeśli dodasz na stronie bloga)
    'newsletter' => [
        'title' => 'Subskrybuj naszego bloga',
        'description' => 'Otrzymuj najnowsze wpisy bezpośrednio na swoją skrzynkę',
        'subscribe' => 'Subskrybuj',
        'success' => 'Subskrypcja zakończona sukcesem! Sprawdź swoją skrzynkę e-mail.',
    ],
    
    // Udostępnianie społecznościowe (jeśli dodasz przyciski udostępniania)
    'share' => [
        'title' => 'Udostępnij ten wpis',
        'facebook' => 'Udostępnij na Facebooku',
        'twitter' => 'Udostępnij na Twitterze',
        'linkedin' => 'Udostępnij na LinkedIn',
        'pinterest' => 'Przypnij na Pinterest',
    ],
    
    // Czas czytania (jeśli go dodasz)
    'reading_time' => [
        'min_read' => 'min czytania',
        'less_than_minute' => 'Mniej niż minuta',
    ],
    
    // Tagi (jeśli dodasz system tagowania)
    'tags' => [
        'title' => 'Popularne tagi',
        'view_all_tags' => 'Zobacz wszystkie tagi',
        'no_tags' => 'Brak dostępnych tagów',
    ],
    
    // Komentarze (jeśli dodasz system komentarzy)
    'comments' => [
        'title' => 'Komentarze',
        'no_comments' => 'Brak komentarzy. Bądź pierwszy, który skomentuje!',
        'leave_comment' => 'Dodaj komentarz',
        'post_comment' => 'Opublikuj komentarz',
        'reply' => 'Odpowiedz',
    ],
    
    // Powiązane wpisy (jeśli dodasz sekcję powiązanych wpisów)
    'related' => [
        'title' => 'Może Ci się również spodobać',
        'read_more' => 'Czytaj więcej',
    ],
    
    // Paginacja
    'pagination' => [
        'showing' => 'Wyświetlanie od :from do :to z :total wpisów',
        'previous' => 'Poprzedni',
        'next' => 'Następny',
        'page' => 'Strona :current z :last',
    ],
    
    // Archiwum (jeśli dodasz funkcjonalność archiwum)
    'archive' => [
        'title' => 'Archiwum bloga',
        'by_month' => 'Wpisy według miesiąca',
        'by_year' => 'Wpisy według roku',
        'by_category' => 'Wpisy według kategorii',
    ],
    
    // Autorzy (jeśli dodasz strony autorów)
    'authors' => [
        'title' => 'Nasi autorzy',
        'view_profile' => 'Zobacz profil',
        'posts_by' => 'Wpisy autorstwa :author',
        'bio' => 'O autorze',
    ],
];