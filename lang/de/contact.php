<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Kontakt | ' . config('app.name'),
        'description' => 'Nehmen Sie Kontakt mit uns auf für Anfragen oder Support.',
        'keywords' => 'Kontakt, Support, Anfragen, Hilfe, Kundenservice',
        'author' => config('app.name'),
    ],

    // Header section
    'header' => [
        'title' => 'Kontakt',
        'subtitle' => 'Nehmen Sie Kontakt mit uns auf. Wir sind für Sie da, um Ihre Fragen zu beantworten oder Anliegen zu klären.',
    ],

    // Form section
    'form' => [
        'description' => 'Füllen Sie das untenstehende Formular aus, und wir werden uns so schnell wie möglich bei Ihnen melden.',
        'fields' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Ihr vollständiger Name',
            ],
            'email' => [
                'label' => 'E-Mail',
                'placeholder' => 'ihre.email@beispiel.de',
            ],
            'subject' => [
                'label' => 'Betreff',
                'placeholder' => 'Worum geht es?',
            ],
            'message' => [
                'label' => 'Nachricht',
                'placeholder' => 'Ihre Nachricht hier...',
            ],
        ],
        'submit' => 'Nachricht senden',
        'sending' => 'Wird gesendet...',
        'required_fields' => 'Mit * markierte Felder sind Pflichtfelder',
    ],

    // Contact information
    'info' => [
        'location' => [
            'title' => 'Unser Standort',
            'address_line1' => 'Hauptstraße 123',
            'address_line2' => 'Suite 100',
            'city_state' => 'Stadt, Bundesland',
            'zip_code' => '12345',
            'country' => 'Deutschland',
        ],
        'phone' => [
            'title' => 'Rufen Sie uns an',
            'primary' => '+49 (123) 4567890',
            'secondary' => '+49 (987) 6543210',
            'hours' => 'Mo-Fr: 9-18 Uhr MEZ',
        ],
        'email' => [
            'title' => 'E-Mail an uns',
            'contact' => 'kontakt@' . config('app.domain', 'beispiel.de'),
            'support' => 'support@' . config('app.domain', 'beispiel.de'),
            'response_time' => 'Wir antworten in der Regel innerhalb von 24 Stunden',
        ],
    ],

    // Messages and alerts
    'messages' => [
        'success' => 'Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet.',
        'error_title' => 'Bitte beheben Sie die folgenden Fehler:',
        'validation_error' => 'Bei Ihrer Übermittlung sind einige Fehler aufgetreten.',
        'captcha_error' => 'Bitte führen Sie die Sicherheitsprüfung durch.',
        'server_error' => 'Etwas ist schiefgelaufen. Bitte versuchen Sie es später erneut.',
    ],

    // Additional sections (if added)
    'faq' => [
        'title' => 'Häufig gestellte Fragen',
        'question1' => 'Wie lange dauert es, bis ich eine Antwort erhalte?',
        'answer1' => 'Wir antworten in der Regel innerhalb von 24 Stunden an Werktagen.',
        'question2' => 'Welche Informationen sollte ich angeben?',
        'answer2' => 'Bitte geben Sie Ihre Kontaktdaten und eine detaillierte Beschreibung Ihres Anliegens an.',
        'question3' => 'Bieten Sie telefonischen Support an?',
        'answer3' => 'Ja, Sie erreichen uns unter der oben angegebenen Telefonnummer.',
    ],

    // Business hours
    'business_hours' => [
        'title' => 'Geschäftszeiten',
        'weekdays' => 'Montag - Freitag: 9:00 - 18:00 Uhr MEZ',
        'weekends' => 'Samstag: 10:00 - 16:00 Uhr MEZ',
        'closed' => 'Sonntag: Geschlossen',
        'holidays' => 'Feiertage: Geschlossen',
    ],

    // Support types
    'support_types' => [
        'general' => 'Allgemeine Anfragen',
        'technical' => 'Technischer Support',
        'billing' => 'Fragen zur Abrechnung',
        'partnership' => 'Partnerschaftsmöglichkeiten',
        'feedback' => 'Feedback & Vorschläge',
    ],

    // Social media (if you add social links)
    'social' => [
        'title' => 'Verbinden Sie sich mit uns',
        'follow_us' => 'Folgen Sie uns in den sozialen Medien',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],

    // Map/address details
    'map' => [
        'title' => 'Finden Sie uns',
        'directions' => 'Wegbeschreibung',
        'open_in_maps' => 'In Google Maps öffnen',
        'parking' => 'Parkinformationen',
        'public_transport' => 'Öffentliche Verkehrsmittel',
    ],

    // Privacy and data
    'privacy' => [
        'title' => 'Datenschutz & Daten',
        'description' => 'Ihre Informationen sind sicher und werden nur zur Beantwortung Ihrer Anfrage verwendet.',
        'gdpr_compliant' => 'DSGVO-konform',
        'no_spam' => 'Wir versenden kein Spam und geben Ihre Daten nicht weiter',
    ],

    // Response time
    'response_time' => [
        'title' => 'Erwartete Antwortzeit',
        'instant' => 'Sofort für dringende Angelegenheiten',
        'within_24h' => 'Innerhalb von 24 Stunden für allgemeine Anfragen',
        'within_48h' => 'Innerhalb von 48 Stunden für komplexe Probleme',
        'emergency' => 'Für Notfälle rufen Sie die obige Nummer an',
    ],

    // Form validation messages
    'validation' => [
        'name_required' => 'Bitte geben Sie Ihren Namen ein',
        'email_required' => 'Bitte geben Sie Ihre E-Mail-Adresse ein',
        'email_invalid' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein',
        'message_required' => 'Bitte geben Sie Ihre Nachricht ein',
        'message_min' => 'Die Nachricht muss mindestens 10 Zeichen lang sein',
        'message_max' => 'Die Nachricht darf 2000 Zeichen nicht überschreiten',
    ],

    // Accessibility
    'accessibility' => [
        'form_label' => 'Kontaktformular',
        'required_indicator' => 'Pflichtfeld',
        'success_announcement' => 'Ihre Nachricht wurde erfolgreich gesendet',
        'error_announcement' => 'Bei Ihrer Übermittlung sind Fehler aufgetreten',
    ],
];