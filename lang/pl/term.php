<?php

return [
    // Meta strony
    'title' => 'Regulamin',
    'description' => 'Przeczytaj nasz regulamin, aby zrozumieć swoje prawa i obowiązki podczas korzystania z naszych usług.',
    'keywords' => 'regulamin, warunki, umowa użytkownika',
    'author' => 'Jan Kowalski',
    
    // Sekcja nagłówka
    'header' => [
        'title' => 'Regulamin',
        'subtitle' => 'Poznaj swoje prawa i obowiązki podczas korzystania z naszych usług',
        'last_updated' => 'Ostatnia aktualizacja',
    ],
    
    // Główna karta
    'card' => [
        'title' => 'Umowa prawna i warunki użytkowania',
    ],
    
    // Sekcja alertu
    'alert' => [
        'title' => 'Ważne:',
        'message' => 'Korzystając z naszych usług, potwierdzasz, że zapoznałeś się i akceptujesz niniejszy regulamin. Przeczytaj go uważnie przed kontynuacją.',
    ],
    
    // Sekcja 1: Akceptacja regulaminu
    'section1' => [
        'title' => 'Akceptacja regulaminu',
        'content' => 'Korzystając z naszej strony internetowej, aplikacji mobilnej lub jakichkolwiek usług świadczonych przez :app_name (zwanych łącznie "Usługami"), potwierdzasz, że zapoznałeś się, zrozumiałeś i zgadzasz się przestrzegać niniejszego Regulaminu.',
        'warning' => 'Jeśli nie zgadzasz się z jakąkolwiek częścią niniejszego regulaminu, musisz natychmiast zaprzestać korzystania z naszych Usług.',
    ],
    
    // Sekcja 2: Obowiązki użytkownika
    'section2' => [
        'title' => 'Obowiązki użytkownika',
        'intro' => 'Jako użytkownik naszych Usług jesteś wyłącznie odpowiedzialny za:',
        'points' => [
            'maintaining_account' => 'Zachowanie poufności i bezpieczeństwa danych logowania do konta',
            'account_activities' => 'Wszystkie działania, transakcje i treści związane z Twoim kontem',
            'accurate_information' => 'Podawanie dokładnych, aktualnych i kompletnych informacji podczas rejestracji',
            'complying_laws' => 'Przestrzeganie wszystkich obowiązujących przepisów lokalnych, krajowych i międzynarodowych',
            'third_party_rights' => 'Zapewnienie, że korzystanie z naszych Usług nie narusza praw osób trzecich',
        ],
        'notification' => 'Zobowiązujesz się niezwłocznie powiadomić nas o każdym nieautoryzowanym dostępie lub wykorzystaniu Twojego konta na adres <strong>:email</strong>.',
    ],
    
    // Sekcja 3: Zakazane działania
    'section3' => [
        'title' => 'Zakazane działania',
        'intro' => 'Podczas korzystania z naszych Usług nie wolno Ci podejmować żadnych z następujących działań:',
        'activities' => [
            'illegal' => [
                'title' => 'Działania niezgodne z prawem',
                'description' => 'Wykorzystywanie naszych Usług do celów niezgodnych z prawem lub naruszających obowiązujące przepisy',
            ],
            'unauthorized_access' => [
                'title' => 'Nieautoryzowany dostęp',
                'description' => 'Próby uzyskania nieautoryzowanego dostępu do systemów, kont lub sieci',
            ],
            'harmful_content' => [
                'title' => 'Szkodliwe treści',
                'description' => 'Publikowanie, przesyłanie lub udostępnianie szkodliwych, obraźliwych lub naruszających prawa treści',
            ],
            'service_disruption' => [
                'title' => 'Zakłócanie usług',
                'description' => 'Zakłócanie, ingerowanie lub przeciążanie wydajności Usług',
            ],
            'automated_access' => [
                'title' => 'Zautomatyzowany dostęp',
                'description' => 'Używanie botów, skrobaków lub innych zautomatyzowanych środków dostępu do naszych Usług',
            ],
            'commercial_use' => [
                'title' => 'Wykorzystanie komercyjne',
                'description' => 'Wykorzystywanie naszych Usług do celów komercyjnych bez wyraźnej zgody',
            ],
        ],
        'warning' => 'Naruszenie tych zakazów może skutkować natychmiastowym zamknięciem Twojego konta i podjęciem kroków prawnych.',
    ],
    
    // Sekcja 4: Własność intelektualna
    'section4' => [
        'title' => 'Własność intelektualna',
        'content' => 'Wszystkie treści, funkcje i funkcjonalności dostępne w naszych Usługach, w tym między innymi teksty, grafiki, logo, ikony, obrazy, klipy audio, cyfrowe pliki do pobrania, kompilacje danych i oprogramowanie, są wyłączną własnością :app_name i jej licencjodawców.',
        'protected' => 'Materiały te są chronione międzynarodowym prawem autorskim, prawem znaków towarowych, patentowym, tajemnicą handlową i innymi prawami własności intelektualnej lub prawami własności.',
        'restrictions' => 'Nie wolno Ci:',
        'restriction_points' => [
            'reproduce' => 'Powielać, rozpowszechniać ani tworzyć dzieł pochodnych',
            'modify' => 'Modyfikować, adaptować ani dekompilować jakiejkolwiek części naszych Usług',
            'remove_notices' => 'Usuwać jakichkolwiek informacji o prawach autorskich, znakach towarowych lub innych prawach',
            'unauthorized_use' => 'Wykorzystywać naszej własności intelektualnej bez wyraźnej pisemnej zgody',
        ],
    ],
    
    // Sekcja 5: Wyłączenie gwarancji
    'section5' => [
        'title' => 'Wyłączenie gwarancji',
        'content' => 'Nasze Usługi są świadczone "tak jak są" i "według dostępności" bez jakichkolwiek gwarancji, wyraźnych lub dorozumianych. W najszerszym zakresie dozwolonym przez prawo, wyłączamy wszelkie gwarancje, w tym między innymi dorozumiane gwarancje przydatności handlowej, przydatności do określonego celu i nienaruszania praw.',
        'guarantees_intro' => 'Nie gwarantujemy, że:',
        'guarantees' => [
            'uninterrupted' => 'Nasze Usługi będą nieprzerwane, bezpieczne lub dostępne w określonym czasie lub miejscu',
            'errors_corrected' => 'Jakiekolwiek błędy lub wady zostaną poprawione',
            'virus_free' => 'Nasze Usługi są wolne od wirusów lub innych szkodliwych komponentów',
            'meet_requirements' => 'Wyniki korzystania z naszych Usług spełnią Twoje wymagania',
        ],
        'risk' => 'Korzystanie z naszych Usług odbywa się wyłącznie na własne ryzyko.',
    ],
    
    // Sekcja 6: Ograniczenie odpowiedzialności
    'section6' => [
        'title' => 'Ograniczenie odpowiedzialności',
        'content' => 'W maksymalnym zakresie dozwolonym przez obowiązujące prawo, :app_name nie ponosi odpowiedzialności za jakiekolwiek pośrednie, przypadkowe, specjalne, wynikowe lub karne szkody, w tym między innymi:',
        'damages' => [
            'loss_profits' => 'Utratę zysków, przychodów lub danych',
            'loss_use' => 'Utratę możliwości korzystania, wartości firmy lub inne straty niematerialne',
            'unauthorized_access' => 'Szkody wynikające z nieautoryzowanego dostępu do lub zmiany Twoich transmisji',
            'third_party_content' => 'Jakiekolwiek działania lub treści osób trzecich w Usługach',
        ],
        'liability_limit' => 'W żadnym wypadku nasza łączna odpowiedzialność nie przekroczy:',
        'liability_amount' => 'lub kwoty, którą nam zapłaciłeś w ciągu ostatnich 12 miesięcy, w zależności od tego, która wartość jest wyższa.',
    ],
    
    // Sekcja 7: Prawo właściwe
    'section7' => [
        'title' => 'Prawo właściwe i jurysdykcja',
        'content' => 'Niniejszy Regulamin podlega prawu :country i jest zgodnie z nim interpretowany, bez względu na jego przepisy dotyczące kolizji norm.',
        'jurisdiction_title' => 'Wyłączna jurysdykcja',
        'jurisdiction_content' => 'Wszelkie postępowania sądowe, działania lub procesy wynikające z niniejszego Regulaminu lub z nim związane będą wnoszone wyłącznie do sądów znajdujących się w :jurisdiction. Wyrażasz zgodę na osobistą jurysdykcję takich sądów.',
    ],
    
    // Sekcja 8: Zmiany w regulaminie
    'section8' => [
        'title' => 'Zmiany w regulaminie',
        'content' => 'Zastrzegamy sobie prawo do modyfikacji niniejszego Regulaminu w dowolnym momencie.',
        'modification_notice' => 'Gdy to zrobimy, zaktualizujemy datę "ostatniej aktualizacji" na górze tej strony. Możemy również dodać dodatkowe powiadomienie (takie jak umieszczenie informacji na naszej stronie głównej lub wysłanie Ci powiadomienia). Dalsze korzystanie z naszych Usług po takich modyfikacjach stanowi akceptację nowego Regulaminu.',
    ],
    
    // Sekcja 9: Dane kontaktowe
    'section9' => [
        'title' => 'Dane kontaktowe',
        'intro' => 'W przypadku pytań, wątpliwości lub powiadomień dotyczących niniejszego Regulaminu, skontaktuj się z nami za pomocą dowolnej z poniższych metod:',
        'buttons' => [
            'email' => 'Wyślij e-mail do zespołu prawnego',
            'contact_form' => 'Formularz kontaktowy',
            'visit_office' => 'Odwiedź nasze biuro',
        ],
        'response_time' => 'Zazwyczaj odpowiadamy na zapytania prawne w ciągu 2-3 dni roboczych.',
    ],
    
    // Przyciski akcji
    'actions' => [
        'back_home' => 'Powrót do strony głównej',
        'print_terms' => 'Drukuj regulamin',
    ],
];