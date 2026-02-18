<?php

return [
    // Meta tagi
    'meta' => [
        'title' => 'Kontakt z nami | ' . config('app.name'),
        'description' => 'Skontaktuj się z nami w przypadku pytań lub wsparcia.',
        'keywords' => 'kontakt, wsparcie, zapytania, pomoc, obsługa klienta',
        'author' => config('app.name'),
    ],
    
    // Sekcja nagłówka
    'header' => [
        'title' => 'Skontaktuj się z nami',
        'subtitle' => 'Skontaktuj się z nami. Jesteśmy tutaj, aby pomóc w przypadku pytań lub wątpliwości.',
    ],
    
    // Sekcja formularza
    'form' => [
        'description' => 'Wypełnij poniższy formularz, a my odpowiemy najszybciej jak to możliwe.',
        'fields' => [
            'name' => [
                'label' => 'Imię i nazwisko',
                'placeholder' => 'Twoje pełne imię i nazwisko',
            ],
            'email' => [
                'label' => 'Adres e-mail',
                'placeholder' => 'twoj.email@przyklad.pl',
            ],
            'subject' => [
                'label' => 'Temat',
                'placeholder' => 'Czego dotyczy sprawa?',
            ],
            'message' => [
                'label' => 'Wiadomość',
                'placeholder' => 'Twoja wiadomość...',
            ],
        ],
        'submit' => 'Wyślij wiadomość',
        'sending' => 'Wysyłanie...',
        'required_fields' => 'Pola oznaczone * są wymagane',
    ],
    
    // Informacje kontaktowe
    'info' => [
        'location' => [
            'title' => 'Nasza lokalizacja',
            'address_line1' => 'ul. Główna 123',
            'address_line2' => 'lokal 100',
            'city_state' => 'Miasto, Województwo',
            'zip_code' => '00-001',
            'country' => 'Polska',
        ],
        'phone' => [
            'title' => 'Zadzwoń do nas',
            'primary' => '+48 123 456 789',
            'secondary' => '+48 987 654 321',
            'hours' => 'Pon-Pt: 9:00-18:00',
        ],
        'email' => [
            'title' => 'Napisz do nas',
            'contact' => 'kontakt@' . config('app.domain', 'example.com'),
            'support' => 'wsparcie@' . config('app.domain', 'example.com'),
            'response_time' => 'Odpowiadamy zazwyczaj w ciągu 24 godzin',
        ],
    ],
    
    // Wiadomości i alerty
    'messages' => [
        'success' => 'Dziękujemy! Twoja wiadomość została wysłana pomyślnie.',
        'error_title' => 'Proszę poprawić następujące błędy:',
        'validation_error' => 'Wystąpiły błędy podczas wysyłania formularza.',
        'captcha_error' => 'Proszę ukończyć weryfikację bezpieczeństwa.',
        'server_error' => 'Coś poszło nie tak. Spróbuj ponownie później.',
    ],
    
    // Dodatkowe sekcje (jeśli dodane)
    'faq' => [
        'title' => 'Często zadawane pytania',
        'question1' => 'Jak długo czeka się na odpowiedź?',
        'answer1' => 'Odpowiadamy zazwyczaj w ciągu 24 godzin w dni robocze.',
        'question2' => 'Jakie informacje powinienem podać?',
        'answer2' => 'Prosimy o podanie danych kontaktowych i szczegółowy opis zapytania.',
        'question3' => 'Czy oferujecie wsparcie telefoniczne?',
        'answer3' => 'Tak, możesz się z nami skontaktować pod numerem telefonu podanym powyżej.',
    ],
    
    // Godziny pracy
    'business_hours' => [
        'title' => 'Godziny pracy',
        'weekdays' => 'Poniedziałek - Piątek: 9:00 - 18:00',
        'weekends' => 'Sobota: 10:00 - 14:00',
        'closed' => 'Niedziela: Nieczynne',
        'holidays' => 'Święta: Nieczynne',
    ],
    
    // Typy wsparcia
    'support_types' => [
        'general' => 'Zapytania ogólne',
        'technical' => 'Wsparcie techniczne',
        'billing' => 'Pytania dotyczące płatności',
        'partnership' => 'Współpraca',
        'feedback' => 'Opinie i sugestie',
    ],
    
    // Media społecznościowe (jeśli dodasz linki społecznościowe)
    'social' => [
        'title' => 'Bądź z nami w kontakcie',
        'follow_us' => 'Obserwuj nas w mediach społecznościowych',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],
    
    // Szczegóły mapy/adresu
    'map' => [
        'title' => 'Znajdź nas',
        'directions' => 'Jak dojechać',
        'open_in_maps' => 'Otwórz w Google Maps',
        'parking' => 'Informacje o parkingu',
        'public_transport' => 'Transport publiczny',
    ],
    
    // Prywatność i dane
    'privacy' => [
        'title' => 'Prywatność i dane',
        'description' => 'Twoje dane są bezpieczne i zostaną użyte wyłącznie do odpowiedzi na Twoje zapytanie.',
        'gdpr_compliant' => 'Zgodne z RODO',
        'no_spam' => 'Nie wysyłamy spamu ani nie udostępniamy Twoich danych',
    ],
    
    // Czas odpowiedzi
    'response_time' => [
        'title' => 'Przewidywany czas odpowiedzi',
        'instant' => 'Natychmiastowy w pilnych sprawach',
        'within_24h' => 'W ciągu 24 godzin dla ogólnych zapytań',
        'within_48h' => 'W ciągu 48 godzin dla złożonych spraw',
        'emergency' => 'W nagłych przypadkach zadzwoń pod powyższy numer',
    ],
    
    // Komunikaty walidacji formularza
    'validation' => [
        'name_required' => 'Proszę podać imię i nazwisko',
        'email_required' => 'Proszę podać adres e-mail',
        'email_invalid' => 'Proszę podać poprawny adres e-mail',
        'message_required' => 'Proszę wpisać wiadomość',
        'message_min' => 'Wiadomość musi mieć co najmniej 10 znaków',
        'message_max' => 'Wiadomość nie może przekraczać 2000 znaków',
    ],
    
    // Dostępność
    'accessibility' => [
        'form_label' => 'Formularz kontaktowy',
        'required_indicator' => 'Pole wymagane',
        'success_announcement' => 'Twoja wiadomość została wysłana pomyślnie',
        'error_announcement' => 'Wystąpiły błędy w formularzu',
    ],
];