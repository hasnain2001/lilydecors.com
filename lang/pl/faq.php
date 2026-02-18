<?php

return [
    // Meta tagi
    'meta' => [
        'title' => 'FAQ - ' . config('app.name') . ' Kupony i Okazje',
        'description' => 'Znajdź odpowiedzi na pytania dotyczące używania kuponów, zarabiania cashbacku, marketingu afiliacyjnego i więcej na ' . config('app.name') . '. Twoje miejsce na oszczędności w wystroju wnętrz!',
        'keywords' => 'FAQ, kupony, okazje, cashback, marketing afiliacyjny, kody rabatowe, oszczędności na wystroju wnętrz',
    ],
    
    // Sekcja hero
    'hero' => [
        'title' => 'Często zadawane pytania',
        'description' => 'Wszystko, co musisz wiedzieć o znajdowaniu najlepszych kuponów, zarabianiu cashbacku i maksymalizowaniu oszczędności na wystroju wnętrz z ' . config('app.name') . '!',
        'badge' => 'Oszczędzaj do 70% dzięki naszym ekskluzywnym kuponom',
    ],
    
    // Baner statystyk
    'stats' => [
        'active_coupons' => '10 000+',
        'active_coupons_label' => 'Aktywnych kuponów',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Marki partnerskie',
        'saved_amount' => '2 mln zł+',
        'saved_amount_label' => 'Zaoszczędzone przez użytkowników',
        'happy_members' => '100 tys.+',
        'happy_members_label' => 'Zadowolonych członków',
    ],
    
    // Pasek wyszukiwania
    'search' => [
        'placeholder' => 'Szukaj odpowiedzi... Spróbuj \'cashback\', \'wygasły kupon\', \'afiliacja\', \'jak użyć\'...',
        'no_results' => [
            'title' => 'Brak wyników dla ":term"',
            'description' => 'Spróbuj innych słów kluczowych lub przeglądaj nasze kategorie.',
            'show_all' => 'Pokaż wszystkie FAQ',
        ],
    ],
    
    // Kategorie
    'categories' => [
        'all' => 'Wszystkie pytania',
        'coupons' => 'Kupony i okazje',
        'cashback' => 'Cashback i nagrody',
        'affiliate' => 'Program afiliacyjny',
        'account' => 'Konto i kwestie techniczne',
        'earning' => 'Zarabianie pieniędzy',
    ],
    
    // Pytania i odpowiedzi - Kupony i okazje
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => 'Jak używać kuponów z ' . config('app.name') . '?',
                'description' => 'Korzystanie z naszych kuponów jest proste! Wykonaj te kroki:',
                'steps' => [
                    'Znajdź kupon dla swojego ulubionego sklepu z wystrojem wnętrz',
                    'Kliknij przycisk "Pobierz kod" lub "Zobacz ofertę"',
                    'Zostaniesz przekierowany na stronę sklepu',
                    'Dodaj produkty do koszyka',
                    'Przy kasie wpisz kod kuponu w polu kodu promocyjnego',
                    'Dokończ zakupy i ciesz się oszczędnościami!',
                ],
                'pro_tip' => [
                    'title' => 'Porada eksperta',
                    'description' => 'Niektóre oferty są automatyczne - wystarczy kliknąć nasz link, a rabat zostanie zastosowany automatycznie przy kasie!',
                ],
            ],
            'code_not_working' => [
                'title' => 'Dlaczego mój kod kuponu nie działa?',
                'description' => 'Jeśli kupon nie działa, oto najczęstsze przyczyny:',
                'reasons' => [
                    'Wygasły kod' => 'Kupony mają daty ważności',
                    'Minimalna wartość zakupów' => 'Niektóre wymagają minimalnej kwoty (np. 100 zł+)',
                    'Wykluczone produkty' => 'Produkty przecenione lub niektóre marki mogą być wykluczone',
                    'Jednorazowe użycie' => 'Kody jednorazowego użytku nie mogą być użyte ponownie',
                    'Ograniczenie regionalne' => 'Niektóre kody działają tylko w określonych krajach',
                    'Już zastosowany' => 'Nie można łączyć kilku kodów procentowych',
                ],
                'solution' => [
                    'title' => 'Rozwiązanie',
                    'description' => 'Sprawdź naszą stronę w poszukiwaniu najnowszych kodów. Jeśli jeden nie działa, zazwyczaj mamy dostępne alternatywy!',
                ],
            ],
            'update_frequency' => [
                'title' => 'Jak często aktualizujecie swoje kupony?',
                'description' => 'Aktualizujemy nasze kupony wiele razy dziennie! Oto nasz harmonogram aktualizacji:',
                'schedule' => [
                    'Monitoring na żywo' => 'Nowe okazje dodawane natychmiast po odkryciu',
                    'Wygasłe kody' => 'Usuwane w ciągu 1 godziny od wygaśnięcia',
                    'Tygodniowe zestawienia' => 'Najlepsze okazje tygodnia w każdy poniedziałek',
                    'Oferty świąteczne' => 'Aktualizacje co godzinę podczas Black Friday i Cyber Monday',
                ],
                'get_notified' => [
                    'title' => 'Otrzymuj powiadomienia',
                    'description' => 'Zapisz się do naszego newslettera lub włącz powiadomienia przeglądarki, aby otrzymywać natychmiastowe aktualizacje o nowych kuponach do Twoich ulubionych sklepów!',
                ],
            ],
            'multiple_coupons' => [
                'title' => 'Czy mogę łączyć wiele kuponów?',
                'description' => 'To zależy od polityki sklepu, ale oto co musisz wiedzieć:',
                'policies' => [
                    'Większość sklepów' => 'Pozwala na jeden kod procentowy + darmowa wysyłka',
                    'Niektóre sklepy' => 'Pozwalają na łączenie z ofertami cashback',
                    'Rzadko dozwolone' => 'Łączenie wielu kuponów procentowych',
                    'Zawsze sprawdzaj' => 'Stronę z polityką kuponów sklepu',
                ],
                'best_strategy' => [
                    'title' => 'Najlepsza strategia',
                    'description' => 'Użyj naszego filtra :code, aby znaleźć pojedynczy najlepszy kupon, który zapewni maksymalne oszczędności bez konieczności łączenia.',
                ],
            ],
        ],
        
        'cashback' => [
            'how_it_works' => [
                'title' => 'Jak działa cashback?',
                'description' => 'Cashback to pieniądze, które odzyskujesz za zakupy dokonane przez nasze linki:',
                'steps' => [
                    'Zarejestruj darmowe konto na ' . config('app.name'),
                    'Znajdź sklep oferujący cashback',
                    'Kliknij przycisk "Aktywuj cashback"',
                    'Rób zakupy normalnie na stronie sklepu',
                    'Twój zakup jest automatycznie śledzony',
                    'Cashback pojawia się na koncie w ciągu 24-48 godzin',
                    'Wypłać środki po osiągnięciu minimalnej kwoty 50 zł',
                ],
                'example' => [
                    'title' => 'Przykład',
                    'description' => 'Kup lampę za 200 zł z 5% cashbackiem = 10 zł z powrotem na Twoje konto!',
                ],
            ],
            'timeline' => [
                'title' => 'Ile czasu zajmuje pojawienie się cashbacku?',
                'description' => 'Oto typowy harmonogram cashbacku:',
                'stages' => [
                    'Oczekujący' => 'Pojawia się w ciągu 24-48 godzin po zakupie',
                    'Potwierdzony' => '30-90 dni (po okresie zwrotów sklepu)',
                    'Do wypłaty' => 'Dostępny do wypłaty po potwierdzeniu',
                    'Wypłata' => 'Realizowana w ciągu 3-5 dni roboczych',
                ],
                'note' => [
                    'title' => 'Uwaga',
                    'description' => 'Niektóre sklepy mają dłuższe okresy potwierdzenia, szczególnie w przypadku mebli i dużych przedmiotów z dłuższym terminem zwrotu.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => 'Czy mogę łączyć cashback z kuponami?',
                'answer' => 'Tak! To tutaj maksymalizujesz oszczędności:',
                'tips' => [
                    'Zawsze używaj kodu kuponu przy kasie',
                    'Upewnij się, że cashback jest aktywowany przed kliknięciem',
                    'Oszczędzasz od razu dzięki kuponowi I zarabiasz cashback',
                    'Niektóre sklepy oferują bonusowy cashback z konkretnymi kuponami',
                ],
                'double_dip' => [
                    'title' => 'Strategia podwójnego zysku',
                    'description' => 'Użyj kuponu :code na 20% zniżki + 5% cashbacku = łącznie 25% oszczędności!',
                ],
            ],
        ],
        
        'affiliate' => [
            'become_affiliate' => [
                'title' => 'Jak zostać afiliantem ' . config('app.name') . '?',
                'description' => 'Dołącz do naszego programu afiliacyjnego i zarabiaj prowizje:',
                'steps' => [
                    'Zarejestruj się w naszym Portalu Afiliacyjnym',
                    'Zostań zatwierdzony (zwykle w ciągu 24 godzin)',
                    'Uzyskaj dostęp do swoich unikalnych linków afiliacyjnych',
                    'Udostępniaj linki na swoim blogu, w mediach społecznościowych lub na stronie',
                    'Zarabiaj prowizje od sprzedaży poleconych',
                    'Otrzymuj płatności miesięcznie przez PayPal lub przelew bankowy',
                ],
                'commission_rates' => [
                    'title' => 'Stawki prowizji',
                    'description' => 'Zarabiaj 5-15% od sprzedaży w zależności od sklepu i Twojego poziomu wyników.',
                ],
            ],
            'requirements' => [
                'title' => 'Jakie są wymagania, aby dołączyć?',
                'description' => 'Podstawowe wymagania dla naszego programu afiliacyjnego:',
                'list' => [
                    'Aktywna strona internetowa, blog lub media społecznościowe z treściami o wystroju wnętrz/meblach',
                    'Minimum 1000 odwiedzających miesięcznie (lub 5000 obserwujących w mediach społecznościowych)',
                    'Treści muszą być przyjazne rodzinie i odpowiednie',
                    'Brak spamu lub zabronionych treści',
                    'Zgodność z wymogami ujawniania informacji FTC',
                ],
                'bonus' => [
                    'title' => 'Bonus',
                    'description' => 'Influencerzy wnętrzarscy, blogerzy projektowania wnętrz i twórcy treści DIY otrzymują priorytetową akceptację!',
                ],
            ],
            'earnings_potential' => [
                'title' => 'Ile mogę zarobić jako afiliant?',
                'description' => 'Zarobki różnią się w zależności od ruchu i strategii promocji:',
                'types' => [
                    'Standardowa prowizja' => '5% od wszystkich poleconych sprzedaży',
                    'Bonusy za wyniki' => 'Do 15% dla najlepszych',
                    'Prowizje cykliczne' => '2% od odnowień subskrypcji',
                    'Dodatkowe wypłaty' => 'Specjalne promocje i konkursy',
                ],
                'top_earners' => [
                    'title' => 'Najlepiej zarabiający',
                    'description' => 'Nasi najlepiej zarabiający afilianci osiągają 5000 zł+ miesięcznie promując okazje wnętrzarskie!',
                ],
            ],
        ],
        
        'account' => [
            'free_account' => [
                'title' => 'Czy utworzenie konta jest darmowe?',
                'answer' => 'Oczywiście! 100% darmowe na zawsze.',
                'description' => 'Oto co zyskujesz z darmowym kontem:',
                'benefits' => [
                    'Śledź swoje zarobki z cashbacku',
                    'Zapisuj ulubione kupony i sklepy',
                    'Otrzymuj spersonalizowane alerty o okazjach',
                    'Dołącz do programu nagród',
                    'Uzyskaj dostęp do ekskluzywnych ofert tylko dla członków',
                    'Zarabiaj bonusy za polecenia',
                ],
                'conclusion' => 'Bez karty kredytowej. Bez ukrytych opłat. Czyste oszczędności!',
            ],
            'tracking_issues' => [
                'title' => 'Dlaczego mój zakup nie jest śledzony?',
                'description' => 'Jeśli Twój zakup nie jest śledzony, wypróbuj te rozwiązania:',
                'solutions' => [
                    'Wyczyść pliki cookie' => 'Zawsze klikaj nasz link - nie wpisuj adresów URL bezpośrednio',
                    'Wyłącz blokery reklam' => 'Niektóre blokują skrypty śledzące',
                    'Dokończ zakup' => 'Musisz sfinalizować zakup w tej samej sesji przeglądarki',
                    'Sprawdź kwalifikowalność' => 'Niektóre produkty są wykluczone z cashbacku',
                    'Odczekaj 48 godzin' => 'Śledzenie może zająć do 2 dni',
                ],
                'need_help' => [
                    'title' => 'Potrzebujesz pomocy?',
                    'description' => 'Skontaktuj się z pomocą techniczną z danymi zamówienia, a my ręcznie je dla Ciebie wyśledzimy!',
                ],
            ],
        ],
        
        'earning' => [
            'ways_to_earn' => [
                'title' => 'Jak mogę zarabiać pieniądze z ' . config('app.name') . '?',
                'description' => 'Istnieje wiele sposobów na zarabianie z nami:',
                'methods' => [
                    'Cashback' => 'Zarabiaj na własnych zakupach',
                    'Program afiliacyjny' => 'Zarabiaj prowizje promując okazje',
                    'Program poleceń' => 'Zarabiaj 10 zł za każdego znajomego, który się zarejestruje i dokona zakupu',
                    'Twórca treści' => 'Przesyłaj wskazówki o okazjach i zarabiaj bonusy',
                    'Ambasador sklepu' => 'Specjalne programy dla najlepszych sklepów',
                ],
                'pro_tip' => [
                    'title' => 'Porada eksperta',
                    'description' => 'Dołącz do wszystkich programów jednocześnie, aby zmaksymalizować potencjał zarobkowy!',
                ],
            ],
            'payment_details' => [
                'title' => 'Kiedy i jak otrzymuję płatność?',
                'description' => 'Nasz harmonogram płatności i metody:',
                'details' => [
                    'Harmonogram płatności' => 'Miesięcznie, około 15-go dnia',
                    'Minimalna wypłata' => '50 zł dla cashbacku, 200 zł dla afiliantów',
                    'Metody płatności' => 'PayPal, Przelew bankowy, Karty podarunkowe',
                    'Czas realizacji' => '3-5 dni roboczych po zgłoszeniu',
                    'Formularze podatkowe' => 'PIT wystawiany dla zarobków powyżej 2000 zł/rok',
                ],
                'conclusion' => 'Wszystkie płatności są bezpieczne i objęte gwarancją płatności.',
            ],
        ],
    ],
    
    // Sekcja Jak to działa
    'how_it_works' => [
        'title' => 'Jak działa ' . config('app.name'),
        'description' => 'Twój przewodnik po maksymalizacji oszczędności na zakupach wystroju wnętrz',
        'steps' => [
            [
                'title' => 'Znajdź okazje',
                'description' => 'Przeglądaj tysiące kuponów i ofert cashback od najlepszych marek wnętrzarskich.',
            ],
            [
                'title' => 'Kliknij i kupuj',
                'description' => 'Kliknij nasze linki, aby aktywować oszczędności i kupuj bezpośrednio na stronach marek.',
            ],
            [
                'title' => 'Oszczędzaj pieniądze',
                'description' => 'Używaj kodów kuponów przy kasie i zarabiaj cashback na kwalifikujących się zakupach.',
            ],
            [
                'title' => 'Zarabiaj nagrody',
                'description' => 'Dołącz do naszego programu afiliacyjnego lub programu poleceń, aby zarabiać jeszcze więcej.',
            ],
        ],
    ],
    
    // Wezwanie do działania
    'cta' => [
        'title' => 'Gotowy, by zacząć oszczędzać?',
        'description' => 'Dołącz do tysięcy mądrych klientów, którzy oszczędzają na wystroju wnętrz każdego dnia. Niezależnie od tego, czy kupujesz meble, dekoracje czy artykuły DIY, ' . config('app.name') . ' pomoże Ci znaleźć najlepsze okazje.',
        'join_button' => 'Dołącz za darmo i zacznij oszczędzać',
        'browse_button' => 'Przeglądaj najnowsze kupony',
        'security_note' => '100% bezpieczne • Bez spamu • Rezygnacja w każdej chwili',
    ],
    
    // Dodatkowe sekcje (jeśli potrzebne)
    'popular_questions' => [
        'title' => 'Popularne pytania',
        'most_viewed' => 'Najczęściej oglądane',
        'recently_added' => 'Ostatnio dodane',
    ],
    
    'help_center' => [
        'title' => 'Nadal potrzebujesz pomocy?',
        'contact_us' => 'Skontaktuj się z nami',
        'live_chat' => 'Czat na żywo',
        'email_support' => 'Wsparcie e-mail',
        'response_time' => 'Średni czas odpowiedzi: 2 godziny',
    ],
    
    'related_topics' => [
        'title' => 'Powiązane tematy',
        'privacy_policy' => 'Polityka prywatności',
        'terms_of_service' => 'Regulamin',
        'affiliate_disclosure' => 'Informacja o afiliacji',
        'cookie_policy' => 'Polityka cookies',
    ],
    
    'accessibility' => [
        'keyboard_navigation' => 'Użyj klawisza Tab do nawigacji po FAQ, Enter aby rozwinąć, Esc aby zamknąć',
        'screen_reader' => 'Przyjazny dla czytników ekranu',
        'high_contrast' => 'Dostępny tryb wysokiego kontrastu',
    ],
];