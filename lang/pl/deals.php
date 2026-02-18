<?php

return [
    // Meta tagi
    'meta' => [
        'title' => 'Gorące okazje - Oferty limitowane czasowo i ekskluzywne rabaty | ' . config('app.name'),
        'description' => 'Odkryj dzisiejsze najgorętsze okazje i oferty limitowane czasowo z Twoich ulubionych sklepów. Oszczędzaj dużo dzięki naszym ekskluzywnym rabatom!',
        'keywords' => 'gorące okazje, oferty limitowane czasowo, wyprzedaże błyskawiczne, ekskluzywne rabaty, okazje na zakupy online',
    ],
    
    // Sekcja nagłówka
    'header' => [
        'title' => '🔥 ALERT GORĄCYCH OKAZJI!',
        'subtitle' => 'Oferty limitowane czasowo, których nie możesz przegapić - działaj szybko, zanim znikną!',
    ],
    
    // Sekcja kategorii
    'categories' => [
        'title' => 'Kupuj według kategorii:',
        'all' => 'Wszystkie kategorie',
    ],
    
    // Elementy karty okazji
    'deal_badge' => [
        'hot' => 'GORĄCA OKAZJA',
        'featured' => 'POLECANA',
        'exclusive' => 'EKSLUZYWNA',
        'limited_time' => 'OGRANICZONY CZAS',
    ],
    
    'image_alt' => 'Obraz okazji :name',
    'expires' => 'Wygasa',
    'used_count' => 'Użyto :count',
    
    // Przyciski akcji
    'view_deal' => 'Zobacz okazję',
    'more_offers' => 'Więcej ofert',
    
    // Stan pusty
    'empty' => [
        'title' => 'Brak gorących okazji',
        'message' => 'Zaglądaj wkrótce w poszukiwaniu nowych wyprzedaży błyskawicznych i ofert limitowanych czasowo!',
    ],
    
    // Paginacja
    'pagination' => [
        'label' => 'Paginacja okazji',
    ],
    
    // Typy okazji
    'types' => [
        'flash_sale' => 'Wyprzedaż błyskawiczna',
        'limited_time' => 'Ograniczony czas',
        'doorbuster' => 'Okazja dnia',
        'clearance' => 'Wyprzedaż',
        'holiday' => 'Okazja świąteczna',
        'seasonal' => 'Wyprzedaż sezonowa',
    ],
    
    // Licznik czasu (jeśli dodany)
    'countdown' => [
        'expires_in' => 'Wygasa za:',
        'days' => 'dni',
        'hours' => 'godz',
        'minutes' => 'min',
        'seconds' => 'sek',
        'expired' => 'Okazja wygasła!',
    ],
    
    // Statystyki (jeśli dodane)
    'stats' => [
        'total_deals' => 'Wszystkich okazji',
        'active_deals' => 'Aktywnych teraz',
        'ending_soon' => 'Kończących się wkrótce',
        'avg_discount' => 'Średni rabat',
    ],
    
    // Filtrowanie i sortowanie (jeśli dodane)
    'filter' => [
        'title' => 'Filtruj okazje',
        'sort_by' => 'Sortuj według',
        'newest' => 'Najnowsze',
        'ending_soon' => 'Kończące się wkrótce',
        'most_popular' => 'Najpopularniejsze',
        'highest_discount' => 'Najwyższy rabat',
        'category' => 'Kategoria',
        'store' => 'Sklep',
    ],
    
    // Sekcja polecanych okazji (jeśli dodana)
    'featured' => [
        'title' => 'Dzisiejsze polecane okazje',
        'view_all' => 'Zobacz wszystkie okazje',
    ],
    
    // Najlepsze sklepy z okazjami (jeśli dodane)
    'top_stores' => [
        'title' => 'Sklepy z gorącymi okazjami',
        'view_all_stores' => 'Zobacz wszystkie sklepy',
    ],
    
    // Okazje sezonowe/świąteczne (jeśli dodane)
    'seasonal' => [
        'black_friday' => 'Okazje Black Friday',
        'cyber_monday' => 'Okazje Cyber Monday',
        'holiday_sales' => 'Wyprzedaże świąteczne',
        'summer_sales' => 'Wyprzedaże letnie',
        'winter_sales' => 'Wyprzedaże zimowe',
    ],
    
    // Zapisy do newslettera (jeśli dodane)
    'newsletter' => [
        'title' => 'Otrzymuj powiadomienia o gorących okazjach',
        'description' => 'Zapisz się, aby otrzymywać powiadomienia o wyprzedażach błyskawicznych bezpośrednio na swoją skrzynkę',
        'subscribe' => 'Subskrybuj',
        'success' => 'Subskrypcja zakończona sukcesem! Będziesz otrzymywać powiadomienia o gorących okazjach.',
    ],
    
    // Udostępnianie społecznościowe (jeśli dodane)
    'share' => [
        'title' => 'Udostępnij tę okazję',
        'facebook' => 'Udostępnij na Facebooku',
        'twitter' => 'Udostępnij na Twitterze',
        'pinterest' => 'Przypnij na Pinterest',
        'whatsapp' => 'Udostępnij na WhatsApp',
        'email' => 'Udostępnij przez e-mail',
    ],
    
    // Oszczędności
    'savings' => [
        'up_to' => 'Do :percent% taniej',
        'save_amount' => 'Oszczędź :amount',
        'free_shipping' => 'Darmowa wysyłka',
        'bogo' => 'Kup jeden, drugi gratis',
        'extra_off' => 'Dodatkowe :percent% taniej',
    ],
    
    // Wskaźniki pilności okazji
    'urgency' => [
        'almost_gone' => 'Prawie wyprzedane!',
        'selling_fast' => 'Szybko znika!',
        'limited_stock' => 'Ograniczony towar!',
        'last_chance' => 'Ostatnia szansa!',
        'expiring_today' => 'Wygasa dzisiaj!',
    ],
    
    // Akcje użytkownika
    'actions' => [
        'view_deal' => 'Zobacz okazję',
        'get_coupon' => 'Pobierz kupon',
        'shop_now' => 'Kup teraz',
        'save_deal' => 'Zapisz okazję',
        'set_reminder' => 'Ustaw przypomnienie',
        'report_expired' => 'Zgłoś wygasłą',
    ],
    
    // Status weryfikacji
    'verification' => [
        'verified' => 'Zweryfikowana okazja',
        'exclusive' => 'Ekskluzywna okazja',
        'tested' => 'Testowana :time',
        'reported_working' => 'Zgłoszona jako działająca :time temu',
    ],
    
    // Dostępność
    'accessibility' => [
        'deal_card' => 'Karta okazji dla :store',
        'view_deal_button' => 'Zobacz okazję dla :store',
        'more_offers_button' => 'Zobacz więcej ofert z :store',
        'expiration_info' => 'Wygasa :date',
        'usage_info' => 'Użyto :count razy',
    ],
    
    // Stany ładowania
    'loading' => [
        'deals' => 'Ładowanie gorących okazji...',
        'please_wait' => 'Proszę czekać, trwa ładowanie najnowszych okazji',
    ],
    
    // Okresy czasowe dla okazji
    'time_periods' => [
        'today' => 'Okazje dnia',
        'this_week' => 'W tym tygodniu',
        'this_month' => 'W tym miesiącu',
        'upcoming' => 'Nadchodzące okazje',
        'expired' => 'Ostatnio wygasłe',
    ],
];