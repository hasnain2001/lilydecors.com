<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Contact Opnemen | ' . config('app.name'),
        'description' => 'Neem contact met ons op voor vragen of ondersteuning.',
        'keywords' => 'contact, ondersteuning, vragen, hulp, klantenservice',
        'author' => config('app.name'),
    ],
    
    // Header sectie
    'header' => [
        'title' => 'Contact Opnemen',
        'subtitle' => 'Neem contact met ons op. We staan klaar om u te helpen met al uw vragen of opmerkingen.',
    ],
    
    // Formulier sectie
    'form' => [
        'description' => 'Vul onderstaand formulier in en we nemen zo snel mogelijk contact met u op.',
        'fields' => [
            'name' => [
                'label' => 'Naam',
                'placeholder' => 'Uw volledige naam',
            ],
            'email' => [
                'label' => 'E-mail',
                'placeholder' => 'uw.email@voorbeeld.com',
            ],
            'subject' => [
                'label' => 'Onderwerp',
                'placeholder' => 'Waar gaat het over?',
            ],
            'message' => [
                'label' => 'Bericht',
                'placeholder' => 'Uw bericht hier...',
            ],
        ],
        'submit' => 'Verstuur Bericht',
        'sending' => 'Verzenden...',
        'required_fields' => 'Velden gemarkeerd met * zijn verplicht',
    ],
    
    // Contactinformatie
    'info' => [
        'location' => [
            'title' => 'Onze Locatie',
            'address_line1' => 'Hoofdstraat 123',
            'address_line2' => 'Suite 100',
            'city_state' => 'Stad, Staat',
            'zip_code' => '12345',
            'country' => 'Nederland',
        ],
        'phone' => [
            'title' => 'Bel Ons',
            'primary' => '+31 (0)123 456789',
            'secondary' => '+31 (0)987 654321',
            'hours' => 'Ma-Vr: 9:00-18:00 uur',
        ],
        'email' => [
            'title' => 'E-mail Ons',
            'contact' => 'contact@' . config('app.domain', 'voorbeeld.nl'),
            'support' => 'ondersteuning@' . config('app.domain', 'voorbeeld.nl'),
            'response_time' => 'We reageren meestal binnen 24 uur',
        ],
    ],
    
    // Berichten en meldingen
    'messages' => [
        'success' => 'Bedankt! Uw bericht is succesvol verzonden.',
        'error_title' => 'Corrigeer de volgende fouten:',
        'validation_error' => 'Er waren enkele fouten in uw inzending.',
        'captcha_error' => 'Voltooi de veiligheidscontrole.',
        'server_error' => 'Er is iets misgegaan. Probeer het later opnieuw.',
    ],
    
    // Aanvullende secties (indien toegevoegd)
    'faq' => [
        'title' => 'Veelgestelde Vragen',
        'question1' => 'Hoe lang duurt het voordat ik een reactie krijg?',
        'answer1' => 'We reageren meestal binnen 24 uur op werkdagen.',
        'question2' => 'Welke informatie moet ik meesturen?',
        'answer2' => 'Voeg uw contactgegevens en een gedetailleerde beschrijving van uw vraag toe.',
        'question3' => 'Bieden jullie telefonische ondersteuning?',
        'answer3' => 'Ja, u kunt ons bereiken op het bovenstaande telefoonnummer.',
    ],
    
    // Kantooruren
    'business_hours' => [
        'title' => 'Kantooruren',
        'weekdays' => 'Maandag - Vrijdag: 9:00 - 18:00 uur',
        'weekends' => 'Zaterdag: 10:00 - 16:00 uur',
        'closed' => 'Zondag: Gesloten',
        'holidays' => 'Feestdagen: Gesloten',
    ],
    
    // Ondersteuningstypes
    'support_types' => [
        'general' => 'Algemene Vragen',
        'technical' => 'Technische Ondersteuning',
        'billing' => 'Facturatie Vragen',
        'partnership' => 'Samenwerkingsmogelijkheden',
        'feedback' => 'Feedback & Suggesties',
    ],
    
    // Sociale media (indien u sociale links toevoegt)
    'social' => [
        'title' => 'Volg Ons',
        'follow_us' => 'Volg ons op sociale media',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],
    
    // Kaart/adres details
    'map' => [
        'title' => 'Vind Ons',
        'directions' => 'Routebeschrijving',
        'open_in_maps' => 'Open in Google Maps',
        'parking' => 'Parkeerinformatie',
        'public_transport' => 'Openbaar Vervoer',
    ],
    
    // Privacy en gegevens
    'privacy' => [
        'title' => 'Privacy & Gegevens',
        'description' => 'Uw informatie is veilig en wordt alleen gebruikt om uw vraag te beantwoorden.',
        'gdpr_compliant' => 'AVG Conform',
        'no_spam' => 'We sturen geen spam en delen uw informatie niet',
    ],
    
    // Reactietijd
    'response_time' => [
        'title' => 'Verwachte Reactietijd',
        'instant' => 'Direct voor urgente zaken',
        'within_24h' => 'Binnen 24 uur voor algemene vragen',
        'within_48h' => 'Binnen 48 uur voor complexe problemen',
        'emergency' => 'Voor noodgevallen, bel het bovenstaande nummer',
    ],
    
    // Formuliervalidatie berichten
    'validation' => [
        'name_required' => 'Voer uw naam in',
        'email_required' => 'Voer uw e-mailadres in',
        'email_invalid' => 'Voer een geldig e-mailadres in',
        'message_required' => 'Voer uw bericht in',
        'message_min' => 'Bericht moet minimaal 10 tekens bevatten',
        'message_max' => 'Bericht mag niet meer dan 2000 tekens bevatten',
    ],
    
    // Toegankelijkheid
    'accessibility' => [
        'form_label' => 'Contactformulier',
        'required_indicator' => 'Verplicht veld',
        'success_announcement' => 'Uw bericht is succesvol verzonden',
        'error_announcement' => 'Er waren fouten in uw inzending',
    ],
];