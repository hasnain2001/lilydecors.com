<?php

return [
    // Meta-taggar
    'meta' => [
        'title' => 'Kontakta Oss | ' . config('app.name'),
        'description' => 'Kontakta oss för frågor eller support.',
        'keywords' => 'kontakt, support, förfrågningar, hjälp, kundtjänst',
        'author' => config('app.name'),
    ],
    
    // Header-sektion
    'header' => [
        'title' => 'Kontakta Oss',
        'subtitle' => 'Hör av dig till oss. Vi finns här för att hjälpa dig med alla frågor eller funderingar du kan ha.',
    ],
    
    // Formulärsektion
    'form' => [
        'description' => 'Fyll i formuläret nedan så återkommer vi till dig så snart som möjligt.',
        'fields' => [
            'name' => [
                'label' => 'Namn',
                'placeholder' => 'Ditt fullständiga namn',
            ],
            'email' => [
                'label' => 'E-post',
                'placeholder' => 'din.epost@exempel.se',
            ],
            'subject' => [
                'label' => 'Ämne',
                'placeholder' => 'Vad gäller ärendet?',
            ],
            'message' => [
                'label' => 'Meddelande',
                'placeholder' => 'Ditt meddelande här...',
            ],
        ],
        'submit' => 'Skicka Meddelande',
        'sending' => 'Skickar...',
        'required_fields' => 'Fält markerade med * är obligatoriska',
    ],
    
    // Kontaktinformation
    'info' => [
        'location' => [
            'title' => 'Vår Adress',
            'address_line1' => 'Huvudgatan 123',
            'address_line2' => 'Plan 2',
            'city_state' => 'Stad, Län',
            'zip_code' => '123 45',
            'country' => 'Sverige',
        ],
        'phone' => [
            'title' => 'Ring Oss',
            'primary' => '+46 (0)8 123 456 78',
            'secondary' => '+46 (0)70 123 456 78',
            'hours' => 'Mån-Fre: 9-18',
        ],
        'email' => [
            'title' => 'Mejla Oss',
            'contact' => 'kontakt@' . config('app.domain', 'exempel.se'),
            'support' => 'support@' . config('app.domain', 'exempel.se'),
            'response_time' => 'Vi svarar vanligtvis inom 24 timmar',
        ],
    ],
    
    // Meddelanden och notiser
    'messages' => [
        'success' => 'Tack! Ditt meddelande har skickats.',
        'error_title' => 'Åtgärda följande fel:',
        'validation_error' => 'Det uppstod några fel i din inskickning.',
        'captcha_error' => 'Vänligen slutför säkerhetskontrollen.',
        'server_error' => 'Något gick fel. Försök igen senare.',
    ],
    
    // Ytterligare sektioner (om tillagda)
    'faq' => [
        'title' => 'Vanliga Frågor',
        'question1' => 'Hur lång tid tar det att få svar?',
        'answer1' => 'Vi svarar vanligtvis inom 24 timmar under vardagar.',
        'question2' => 'Vilken information bör jag inkludera?',
        'answer2' => 'Vänligen inkludera dina kontaktuppgifter och en detaljerad beskrivning av ditt ärende.',
        'question3' => 'Erbjuder ni telefonsupport?',
        'answer3' => 'Ja, du kan nå oss på telefonnumret som anges ovan.',
    ],
    
    // Öppettider
    'business_hours' => [
        'title' => 'Öppettider',
        'weekdays' => 'Måndag - Fredag: 9:00 - 18:00',
        'weekends' => 'Lördag: 10:00 - 16:00',
        'closed' => 'Söndag: Stängt',
        'holidays' => 'Helgdagar: Stängt',
    ],
    
    // Supporttyper
    'support_types' => [
        'general' => 'Allmänna Frågor',
        'technical' => 'Teknisk Support',
        'billing' => 'Fakturafrågor',
        'partnership' => 'Samarbetsmöjligheter',
        'feedback' => 'Feedback & Förslag',
    ],
    
    // Sociala medier (om du lägger till sociala länkar)
    'social' => [
        'title' => 'Följ Oss',
        'follow_us' => 'Följ oss i sociala medier',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],
    
    // Karta/adressdetaljer
    'map' => [
        'title' => 'Hitta Oss',
        'directions' => 'Hämta Vägbeskrivning',
        'open_in_maps' => 'Öppna i Google Maps',
        'parking' => 'Parkeringsinformation',
        'public_transport' => 'Kollektivtrafik',
    ],
    
    // Integritet och data
    'privacy' => [
        'title' => 'Integritet & Data',
        'description' => 'Din information är säker och kommer endast att användas för att besvara din förfrågan.',
        'gdpr_compliant' => 'GDPR-anpassat',
        'no_spam' => 'Vi skickar inte spam eller delar din information',
    ],
    
    // Svarstid
    'response_time' => [
        'title' => 'Förväntad Svarstid',
        'instant' => 'Omedelbart vid akuta ärenden',
        'within_24h' => 'Inom 24 timmar för allmänna frågor',
        'within_48h' => 'Inom 48 timmar för komplexa ärenden',
        'emergency' => 'Vid akuta ärenden, ring numret ovan',
    ],
    
    // Formulärvalideringsmeddelanden
    'validation' => [
        'name_required' => 'Vänligen ange ditt namn',
        'email_required' => 'Vänligen ange din e-postadress',
        'email_invalid' => 'Vänligen ange en giltig e-postadress',
        'message_required' => 'Vänligen ange ditt meddelande',
        'message_min' => 'Meddelandet måste vara minst 10 tecken',
        'message_max' => 'Meddelandet kan inte överstiga 2000 tecken',
    ],
    
    // Tillgänglighet
    'accessibility' => [
        'form_label' => 'Kontaktformulär',
        'required_indicator' => 'Obligatoriskt fält',
        'success_announcement' => 'Ditt meddelande har skickats',
        'error_announcement' => 'Det uppstod fel i din inskickning',
    ],
];