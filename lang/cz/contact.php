<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Kontaktujte nás | ' . config('app.name'),
        'description' => 'Spojte se s námi pro jakékoli dotazy nebo podporu.',
        'keywords' => 'kontakt, podpora, dotazy, pomoc, zákaznický servis',
        'author' => config('app.name'),
    ],
    
    // Header section
    'header' => [
        'title' => 'Kontaktujte nás',
        'subtitle' => 'Spojte se s námi. Jsme tu, abychom vám pomohli s jakýmikoli otázkami nebo problémy.',
    ],
    
    // Form section
    'form' => [
        'description' => 'Vyplňte níže uvedený formulář a my se vám ozveme co nejdříve.',
        'fields' => [
            'name' => [
                'label' => 'Jméno',
                'placeholder' => 'Vaše celé jméno',
            ],
            'email' => [
                'label' => 'E-mail',
                'placeholder' => 'vas.email@example.com',
            ],
            'subject' => [
                'label' => 'Předmět',
                'placeholder' => 'Čeho se to týká?',
            ],
            'message' => [
                'label' => 'Zpráva',
                'placeholder' => 'Vaše zpráva...',
            ],
        ],
        'submit' => 'Odeslat zprávu',
        'sending' => 'Odesílání...',
        'required_fields' => 'Pole označená * jsou povinná',
    ],
    
    // Contact information
    'info' => [
        'location' => [
            'title' => 'Naše adresa',
            'address_line1' => 'Hlavní ulice 123',
            'address_line2' => 'Budova 100',
            'city_state' => 'Město, Stát',
            'zip_code' => '12345',
            'country' => 'Česká republika',
        ],
        'phone' => [
            'title' => 'Zavolejte nám',
            'primary' => '+420 123 456 789',
            'secondary' => '+420 987 654 321',
            'hours' => 'Po-Pá: 9-18 hodin',
        ],
        'email' => [
            'title' => 'Napište nám',
            'contact' => 'kontakt@' . config('app.domain', 'example.com'),
            'support' => 'podpora@' . config('app.domain', 'example.com'),
            'response_time' => 'Obvykle odpovídáme do 24 hodin',
        ],
    ],
    
    // Messages and alerts
    'messages' => [
        'success' => 'Děkujeme! Vaše zpráva byla úspěšně odeslána.',
        'error_title' => 'Prosím opravte následující chyby:',
        'validation_error' => 'Ve vašem odeslání se vyskytly některé chyby.',
        'captcha_error' => 'Prosím dokončete bezpečnostní kontrolu.',
        'server_error' => 'Něco se pokazilo. Prosím zkuste to znovu později.',
    ],
    
    // Additional sections (if added)
    'faq' => [
        'title' => 'Často kladené otázky',
        'question1' => 'Jak dlouho trvá, než dostanu odpověď?',
        'answer1' => 'Obvykle odpovídáme do 24 hodin během pracovních dnů.',
        'question2' => 'Jaké informace bych měl uvést?',
        'answer2' => 'Prosím uveďte své kontaktní údaje a podrobný popis vašeho dotazu.',
        'question3' => 'Poskytujete telefonickou podporu?',
        'answer3' => 'Ano, můžete nás zastihnout na výše uvedeném telefonním čísle.',
    ],
    
    // Business hours
    'business_hours' => [
        'title' => 'Provozní doba',
        'weekdays' => 'Pondělí - Pátek: 9:00 - 18:00',
        'weekends' => 'Sobota: 10:00 - 16:00',
        'closed' => 'Neděle: Zavřeno',
        'holidays' => 'Svátky: Zavřeno',
    ],
    
    // Support types
    'support_types' => [
        'general' => 'Obecné dotazy',
        'technical' => 'Technická podpora',
        'billing' => 'Fakturační otázky',
        'partnership' => 'Možnosti partnerství',
        'feedback' => 'Zpětná vazba a návrhy',
    ],
    
    // Social media (if you add social links)
    'social' => [
        'title' => 'Spojte se s námi',
        'follow_us' => 'Sledujte nás na sociálních sítích',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],
    
    // Map/address details
    'map' => [
        'title' => 'Najděte nás',
        'directions' => 'Jak k nám',
        'open_in_maps' => 'Otevřít v Mapách Google',
        'parking' => 'Informace o parkování',
        'public_transport' => 'Městská hromadná doprava',
    ],
    
    // Privacy and data
    'privacy' => [
        'title' => 'Soukromí a data',
        'description' => 'Vaše informace jsou v bezpečí a budou použity pouze k zodpovězení vašeho dotazu.',
        'gdpr_compliant' => 'V souladu s GDPR',
        'no_spam' => 'Neposíláme spam a nesdílíme vaše informace',
    ],
    
    // Response time
    'response_time' => [
        'title' => 'Předpokládaná doba odezvy',
        'instant' => 'Okamžitě pro naléhavé záležitosti',
        'within_24h' => 'Do 24 hodin pro obecné dotazy',
        'within_48h' => 'Do 48 hodin pro složité problémy',
        'emergency' => 'V naléhavých případech volejte na výše uvedené číslo',
    ],
    
    // Form validation messages
    'validation' => [
        'name_required' => 'Prosím zadejte své jméno',
        'email_required' => 'Prosím zadejte svou e-mailovou adresu',
        'email_invalid' => 'Prosím zadejte platnou e-mailovou adresu',
        'message_required' => 'Prosím napište svou zprávu',
        'message_min' => 'Zpráva musí mít alespoň 10 znaků',
        'message_max' => 'Zpráva nesmí přesáhnout 2000 znaků',
    ],
    
    // Accessibility
    'accessibility' => [
        'form_label' => 'Kontaktní formulář',
        'required_indicator' => 'Povinné pole',
        'success_announcement' => 'Vaše zpráva byla úspěšně odeslána',
        'error_announcement' => 'Ve vašem odeslání se vyskytly chyby',
    ],
];