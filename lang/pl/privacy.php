<?php

return [
    // Meta tagi
    'meta' => [
        'title' => 'Polityka prywatności | ' . config('app.name'),
        'description' => 'Przeczytaj naszą politykę prywatności, aby dowiedzieć się, jak przetwarzamy Twoje dane i chronimy Twoją prywatność.',
        'keywords' => 'polityka prywatności, ochrona danych, bezpieczeństwo danych, RODO, pliki cookie',
        'author' => config('app.name'),
    ],
    
    // Sekcja nagłówka
    'header' => [
        'title' => 'Polityka prywatności',
        'subtitle' => 'Twoja prywatność jest dla nas ważna. Dowiedz się, jak chronimy i przetwarzamy Twoje dane.',
        'last_updated' => 'Ostatnia aktualizacja',
    ],
    
    // Główna karta
    'card' => [
        'title' => 'Ochrona danych i prywatność',
    ],
    
    // Sekcja alertu
    'alert' => [
        'title' => 'Przejrzystość jest ważna',
        'description' => 'Niniejsza polityka wyjaśnia, w jaki sposób gromadzimy, wykorzystujemy i chronimy Twoje informacje w jasny i prosty sposób.',
    ],
    
    // Sekcje polityki
    'sections' => [
        'collection' => [
            'title' => 'Informacje, które gromadzimy',
            'intro' => 'Gromadzimy informacje, które pomagają nam świadczyć lepsze usługi i ulepszać Twoje doświadczenia. Obejmuje to:',
            'types' => [
                'Dane osobowe' => 'Imię, nazwisko, adres e-mail i dane kontaktowe podczas rejestracji lub kontaktu z nami',
                'Dane o użytkowaniu' => 'Sposób interakcji z naszą stroną, odwiedzane strony i używane funkcje',
                'Informacje techniczne' => 'Typ przeglądarki, informacje o urządzeniu i adres IP w celach bezpieczeństwa',
                'Dane komunikacji' => 'Wiadomości, opinie i zapytania wysyłane do nas',
            ],
            'conclusion' => 'Gromadzimy tylko informacje niezbędne do świadczenia naszych usług i ulepszania Twoich doświadczeń.',
        ],
        
        'usage' => [
            'title' => 'Jak wykorzystujemy Twoje informacje',
            'intro' => 'Twoje informacje pomagają nam świadczyć doskonałe usługi i ulepszać naszą platformę. Wykorzystujemy je do:',
            'purposes' => [
                'Odpowiadania na zapytania i zapewniania spersonalizowanego wsparcia klienta',
                'Przetwarzania transakcji i dostarczania zamówionych usług',
                'Ulepszania funkcjonalności strony i doświadczeń użytkownika',
                'Wysyłania ważnych aktualizacji dotyczących naszych usług (możesz zrezygnować w każdej chwili)',
                'Ochrony przed oszustwami i zapewniania bezpieczeństwa platformy',
                'Analizy wzorców użytkowania w celu ulepszenia naszej oferty',
            ],
            'important_note' => 'Nie sprzedajemy i nigdy nie będziemy sprzedawać Twoich danych osobowych stronom trzecim.',
        ],
        
        'security' => [
            'title' => 'Bezpieczeństwo i ochrona danych',
            'intro' => 'Poważnie traktujemy bezpieczeństwo Twoich danych i wdrażamy solidne środki ochrony:',
            'measures' => [
                'Szyfrowanie' => 'Wszystkie wrażliwe dane są szyfrowane podczas przesyłania i przechowywania',
                'Bezpieczne serwery' => 'Twoje informacje są przechowywane na chronionych serwerach z ograniczonym dostępem',
                'Kontrola dostępu' => 'Ścisłe wewnętrzne procedury kontrolują, kto może uzyskać dostęp do Twoich danych',
                'Regularne audyty' => 'Przeprowadzamy oceny bezpieczeństwa, aby utrzymać standardy ochrony',
                'Szkolenia pracowników' => 'Nasz zespół jest przeszkolony w zakresie najlepszych praktyk ochrony danych',
            ],
            'disclaimer' => 'Chociaż wdrażamy standardowe środki bezpieczeństwa, żadna metoda przesyłania danych przez internet nie jest w 100% bezpieczna. Zalecamy używanie silnych haseł i zachowanie poufności danych logowania.',
        ],
        
        'cookies' => [
            'title' => 'Pliki cookie i technologie śledzące',
            'intro' => 'Używamy plików cookie i podobnych technologii, aby ulepszyć Twoje doświadczenia z przeglądania:',
            'types' => [
                'Niezbędne pliki cookie' => 'Wymagane do prawidłowego funkcjonowania strony',
                'Wydajnościowe pliki cookie' => 'Pomagają nam zrozumieć, jak odwiedzający korzystają z naszej strony',
                'Funkcjonalne pliki cookie' => 'Zapamiętują Twoje preferencje i ustawienia',
                'Analityczne pliki cookie' => 'Dostarczają informacji do ulepszania naszych usług',
            ],
            'management' => 'Możesz zarządzać preferencjami dotyczącymi plików cookie w ustawieniach przeglądarki. Wyłączenie niezbędnych plików cookie może jednak wpłynąć na funkcjonalność strony.',
        ],
        
        'third_party' => [
            'title' => 'Linki i usługi stron trzecich',
            'intro' => 'Nasza strona może zawierać linki do zewnętrznych witryn i usług. Ważne uwagi:',
            'notes' => [
                'Starannie wybieramy partnerów, ale nie mamy kontroli nad ich praktykami prywatności',
                'Zewnętrzne strony mają własne polityki prywatności, na które nie mamy wpływu',
                'Nie ponosimy odpowiedzialności za treść lub praktyki linkowanych stron',
                'Zalecamy zapoznanie się z politykami prywatności stron trzecich przed udostępnieniem im danych',
            ],
            'disclaimer' => 'Po opuszczeniu naszej strony za pośrednictwem tych linków, nasza polityka prywatności przestaje mieć zastosowanie do Twoich działań na tych zewnętrznych stronach.',
        ],
        
        'updates' => [
            'title' => 'Aktualizacje i zmiany polityki',
            'intro' => 'Możemy aktualizować tę politykę prywatności, aby odzwierciedlić zmiany w naszych praktykach lub wymogach prawnych:',
            'procedures' => [
                'Istotne zmiany będą komunikowane przez e-mail lub widoczne powiadomienie na stronie',
                'Kontynuacja korzystania z naszych usług po zmianach stanowi ich akceptację',
                'Prowadzimy historię wersji wszystkich aktualizacji polityki',
                'Data "Ostatniej aktualizacji" na górze wskazuje najnowszą wersję',
            ],
            'recommendation' => 'Zalecamy okresowe przeglądanie tej polityki, aby być na bieżąco z tym, jak chronimy Twoje informacje.',
        ],
        
        'contact' => [
            'title' => 'Pytania i dane kontaktowe',
            'intro' => 'Jesteśmy zobowiązani do przejrzystości w kwestii naszych praktyk prywatności. Jeśli masz pytania lub wątpliwości:',
            'details' => [
                'E-mail' => '<a href="mailto:kontakt@lilydecors.pl" class="contact-email">kontakt@lilydecors.pl</a>',
                'Inspektor ochrony danych' => 'Jan Kowalski',
                'Adres korespondencyjny' => 'ul. Prywatności 123, 00-001 Warszawa',
                'Czas odpowiedzi' => 'Staramy się odpowiedzieć w ciągu 48 godzin',
            ],
            'rights' => 'Masz prawo dostępu, poprawiania lub usuwania swoich danych osobowych. Skontaktuj się z nami, aby skorzystać z tych praw.',
        ],
    ],
    
    // Przycisk powrotu
    'back_button' => 'Powrót do strony głównej',
    
    // Dodatkowe terminy dla banera zgody na pliki cookie (jeśli potrzebne)
    'cookie_consent' => [
        'title' => 'Preferencje plików cookie',
        'message' => 'Używamy plików cookie, aby ulepszyć Twoje doświadczenia z przeglądania i analizować nasz ruch.',
        'accept_all' => 'Akceptuj wszystkie',
        'reject_all' => 'Odrzuć wszystkie',
        'manage' => 'Zarządzaj preferencjami',
        'necessary' => 'Niezbędne',
        'analytics' => 'Analityczne',
        'marketing' => 'Marketingowe',
        'preferences' => 'Preferencyjne',
        'save' => 'Zapisz preferencje',
    ],
    
    // Prawa do danych (RODO)
    'data_rights' => [
        'title' => 'Twoje prawa do danych',
        'access' => 'Prawo dostępu',
        'rectification' => 'Prawo do sprostowania',
        'erasure' => 'Prawo do usunięcia (prawo do bycia zapomnianym)',
        'restriction' => 'Prawo do ograniczenia przetwarzania',
        'portability' => 'Prawo do przenoszenia danych',
        'object' => 'Prawo do sprzeciwu',
        'description' => 'Zgodnie z RODO i innymi przepisami o ochronie danych, masz określone prawa dotyczące swoich danych osobowych.',
    ],
    
    // Przechowywanie danych
    'retention' => [
        'title' => 'Przechowywanie danych',
        'description' => 'Przechowujemy Twoje dane osobowe tylko tak długo, jak jest to niezbędne do realizacji celów, dla których zostały zebrane.',
        'periods' => [
            'account_data' => 'Dane konta: Przez czas aktywności konta',
            'transaction_data' => 'Dane transakcyjne: 7 lat dla celów podatkowych',
            'communication_data' => 'Dane komunikacji: 3 lata',
            'analytics_data' => 'Dane analityczne: 26 miesięcy',
        ],
    ],
    
    // Międzynarodowe transfery danych
    'international_transfers' => [
        'title' => 'Międzynarodowe transfery danych',
        'description' => 'Twoje informacje mogą być przekazywane i przetwarzane w krajach innych niż Twój własny.',
        'safeguards' => 'Wdrażamy odpowiednie zabezpieczenia dla międzynarodowych transferów danych.',
    ],
    
    // Prywatność dzieci
    'children' => [
        'title' => 'Prywatność dzieci',
        'description' => 'Nasze usługi nie są skierowane do dzieci poniżej 16 roku życia. Nie gromadzimy świadomie danych osobowych dzieci.',
        'contact' => 'Jeśli uważasz, że zebraliśmy informacje od dziecka, skontaktuj się z nami natychmiast.',
    ],
    
    // Zautomatyzowane podejmowanie decyzji
    'automated_decisions' => [
        'title' => 'Zautomatyzowane podejmowanie decyzji',
        'description' => 'Nie stosujemy zautomatyzowanego podejmowania decyzji ani profilowania, które wywołuje skutki prawne.',
    ],
    
    // Powiadomienie o naruszeniu danych
    'data_breach' => [
        'title' => 'Powiadomienie o naruszeniu danych',
        'description' => 'W przypadku naruszenia danych powiadomimy dotkniętych użytkowników i organy zgodnie z wymogami prawa.',
    ],
    
    // Sygnały Do Not Track
    'do_not_track' => [
        'title' => 'Sygnały Do Not Track',
        'description' => 'Nasza strona nie reaguje na sygnały Do Not Track z przeglądarek.',
    ],
    
    // Prawa konsumentów w Kalifornii (CCPA)
    'ccpa' => [
        'title' => 'Prawa konsumentów w Kalifornii',
        'description' => 'Mieszkańcy Kalifornii mają dodatkowe prawa wynikające z California Consumer Privacy Act (CCPA).',
        'right_to_know' => 'Prawo do informacji',
        'right_to_delete' => 'Prawo do usunięcia',
        'right_to_opt_out' => 'Prawo do rezygnacji ze sprzedaży danych',
        'non_discrimination' => 'Prawo do niedyskryminacji',
    ],
];