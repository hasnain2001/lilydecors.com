<?php

return [
    // Meta tagi
    'meta' => [
        'title' => [
            'custom' => ':title | Kupony, okazje i oferty :year',
            'default' => ':name | Okazje, oferty i kody promocyjne :year',
        ],
        'description' => [
            'default' => 'Znajdź najlepsze okazje :name i zweryfikowane kody rabatowe na :year. Oszczędzaj pieniądze z ekskluzywnymi kuponami :lower_name, bonami i promocjami aktualizowanymi codziennie.',
        ],
        'keywords' => [
            'default' => ':name, kupony :name, kody promocyjne :name, bony :name, oferty rabatowe, okazje :name, oszczędzaj pieniądze online',
        ],
    ],
    
    // Odznaki statystyk
    'stats' => [
        'blogs_available' => 'Dostępnych blogów: :count',
        'stores_available' => 'Dostępnych sklepów: :count',
    ],
    
    // Łączne liczby
    'total' => [
        'blogs' => 'Łącznie blogów',
        'stores' => 'Łącznie sklepów',
    ],
    
    // Sekcja bloga
    'blog_section' => [
        'title' => 'Porady zakupowe i wskazówki oszczędzania',
    ],
    
    // Sekcja sklepów
    'stores_section' => [
        'title' => 'Sklepy i marki :name',
    ],
    
    // Paginacja
    'pagination' => [
        'blogs_label' => 'Paginacja blogów',
        'stores_label' => 'Paginacja sklepów',
    ],
    
    // Stany puste
    'empty_stores' => [
        'title' => 'Nie znaleziono sklepów w tej kategorii! Odkryj nowe sklepy',
        'explore_link' => 'Przeglądaj wszystkie sklepy',
    ],
    
    // Domyślne wartości sklepów
    'store_default_name' => 'Nazwa sklepu niedostępna',
    
    // Powiązane treści
    'related_content' => [
        'blogs_title' => 'Powiązane wpisy na blogu',
        'stores_title' => 'Powiązane sklepy',
        'no_blogs_found' => 'Nie znaleziono wpisów na blogu w tej kategorii',
        'no_stores_found' => 'Nie znaleziono sklepów w tej kategorii',
    ],
    
    // Opcje filtrowania (jeśli dodasz filtrowanie)
    'filter' => [
        'sort_by' => 'Sortuj według',
        'popularity' => 'Popularności',
        'newest' => 'Najnowsze',
        'alphabetical' => 'Alfabetycznie',
        'rating' => 'Oceny',
        'discount' => 'Najwyższego rabatu',
    ],
    
    // Funkcje sklepów (jeśli dodasz odznaki/ikony)
    'features' => [
        'top_store' => 'Najlepszy sklep',
        'verified' => 'Zweryfikowany',
        'exclusive' => 'Ekskluzywna oferta',
        'limited_time' => 'Ograniczony czas',
        'free_shipping' => 'Darmowa wysyłka',
    ],
    
    // Statystyki kuponów (jeśli dodasz liczniki kuponów)
    'coupon_stats' => [
        'active_coupons' => 'Aktywnych kuponów: :count',
        'verified_offers' => 'Zweryfikowanych ofert: :count',
        'success_rate' => ':rate% skuteczności',
        'last_updated' => 'Zaktualizowano :time temu',
    ],
    
    // Newsletter (jeśli dodasz)
    'newsletter' => [
        'title' => 'Otrzymuj oferty :name na swoją skrzynkę',
        'description' => 'Zapisz się, aby otrzymywać ekskluzywne kupony i oferty :name',
        'subscribe' => 'Subskrybuj',
        'success' => 'Subskrypcja zakończona sukcesem! Sprawdź swoją skrzynkę e-mail.',
    ],
    
    // Udostępnianie społecznościowe (jeśli dodasz)
    'share' => [
        'title' => 'Udostępnij tę kategorię',
        'facebook' => 'Udostępnij na Facebooku',
        'twitter' => 'Udostępnij na Twitterze',
        'pinterest' => 'Przypnij na Pinterest',
        'email' => 'Udostępnij przez e-mail',
    ],
    
    // Ścieżka nawigacyjna (jeśli potrzebujesz oddzielnej od wspólnej)
    'breadcrumb' => [
        'current' => 'Kategoria :name',
    ],
    
    // Banery sezonowe/świąteczne (jeśli dodasz)
    'seasonal' => [
        'holiday_sales' => 'Wyprzedaże świąteczne',
        'black_friday' => 'Okazje Black Friday',
        'cyber_monday' => 'Oferty Cyber Monday',
        'seasonal_savings' => 'Oszczędności sezonowe',
    ],
    
    // Zaangażowanie użytkowników (jeśli dodasz oceny/recenzje)
    'user_engagement' => [
        'rate_this_category' => 'Oceń tę kategorię',
        'user_ratings' => 'Oceny użytkowników',
        'average_rating' => 'Średnia ocena: :rating/5',
        'based_on' => 'Na podstawie :count ocen',
        'write_review' => 'Napisz opinię',
    ],
    
    // CTA aplikacji mobilnej (jeśli dodasz)
    'mobile_app' => [
        'title' => 'Pobierz naszą aplikację mobilną',
        'description' => 'Korzystaj z ofert :name w podróży dzięki naszej aplikacji mobilnej',
        'download' => 'Pobierz teraz',
        'available_on' => 'Dostępne na iOS i Android',
    ],
];