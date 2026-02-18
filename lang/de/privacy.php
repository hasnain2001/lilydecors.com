<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Datenschutzerklärung | ' . config('app.name'),
        'description' => 'Lesen Sie unsere Datenschutzerklärung, um zu verstehen, wie wir mit Ihren Daten umgehen und Ihre Privatsphäre schützen.',
        'keywords' => 'Datenschutz, Richtlinie, Datensicherheit, Datenschutz, DSGVO, Cookies',
        'author' => config('app.name'),
    ],

    // Header section
    'header' => [
        'title' => 'Datenschutzerklärung',
        'subtitle' => 'Ihre Privatsphäre ist uns wichtig. Erfahren Sie, wie wir Ihre Daten schützen und handhaben.',
        'last_updated' => 'Zuletzt aktualisiert am',
    ],

    // Main card
    'card' => [
        'title' => 'Ihr Datenschutz & Ihre Privatsphäre',
    ],

    // Alert section
    'alert' => [
        'title' => 'Transparenz ist wichtig',
        'description' => 'Diese Richtlinie erklärt in klaren, einfachen Worten, wie wir Ihre Informationen sammeln, verwenden und schützen.',
    ],

    // Policy sections
    'sections' => [
        'collection' => [
            'title' => 'Informationen, die wir sammeln',
            'intro' => 'Wir sammeln Informationen, die uns helfen, bessere Dienste anzubieten und Ihr Erlebnis zu verbessern. Dazu gehören:',
            'types' => [
                'Persönliche Informationen' => 'Name, E-Mail-Adresse und Kontaktdaten, wenn Sie sich registrieren oder uns kontaktieren',
                'Nutzungsdaten' => 'Wie Sie mit unserer Website interagieren, besuchte Seiten und genutzte Funktionen',
                'Technische Informationen' => 'Browsertyp, Geräteinformationen und IP-Adresse zu Sicherheitszwecken',
                'Kommunikationsdaten' => 'Nachrichten, Feedback und Anfragen, die Sie an uns senden',
            ],
            'conclusion' => 'Wir sammeln nur Informationen, die notwendig sind, um unsere Dienste bereitzustellen und Ihr Erlebnis zu verbessern.',
        ],

        'usage' => [
            'title' => 'Wie wir Ihre Informationen verwenden',
            'intro' => 'Ihre Informationen helfen uns, exzellenten Service zu bieten und unsere Plattform zu verbessern. Wir verwenden sie, um:',
            'purposes' => [
                'Auf Ihre Anfragen zu antworten und personalisierten Kundensupport zu bieten',
                'Transaktionen zu verarbeiten und die von Ihnen angeforderten Dienste bereitzustellen',
                'Die Funktionalität unserer Website und das Nutzererlebnis zu verbessern',
                'Wichtige Updates zu unseren Diensten zu senden (Sie können sich jederzeit abmelden)',
                'Vor Betrug zu schützen und die Plattformsicherheit zu gewährleisten',
                'Nutzungsmuster zu analysieren, um unsere Angebote zu verbessern',
            ],
            'important_note' => 'Wir verkaufen Ihre persönlichen Daten nicht und werden dies niemals tun.',
        ],

        'security' => [
            'title' => 'Datensicherheit & Schutz',
            'intro' => 'Wir nehmen die Sicherheit Ihrer Daten ernst und ergreifen robuste Maßnahmen zu deren Schutz:',
            'measures' => [
                'Verschlüsselung' => 'Alle sensiblen Daten werden während der Übertragung und Speicherung verschlüsselt',
                'Sichere Server' => 'Ihre Informationen werden auf geschützten Servern mit eingeschränktem Zugriff gespeichert',
                'Zugangskontrollen' => 'Strenge interne Richtlinien kontrollieren den Zugriff auf Ihre Daten',
                'Regelmäßige Audits' => 'Wir führen Sicherheitsbewertungen durch, um Schutzstandards aufrechtzuerhalten',
                'Mitarbeiterschulung' => 'Unser Team wird in bewährten Datenschutzpraktiken geschult',
            ],
            'disclaimer' => 'Obwohl wir branchenübliche Sicherheitsmaßnahmen implementieren, ist keine Übertragungsmethode über das Internet 100% sicher. Wir empfehlen die Verwendung sicherer Passwörter und die vertrauliche Behandlung Ihrer Anmeldeinformationen.',
        ],

        'cookies' => [
            'title' => 'Cookies & Tracking-Technologien',
            'intro' => 'Wir verwenden Cookies und ähnliche Technologien, um Ihr Surferlebnis zu verbessern:',
            'types' => [
                'Notwendige Cookies' => 'Erforderlich für die ordnungsgemäße Funktion der Website',
                'Performance-Cookies' => 'Helfen uns zu verstehen, wie Besucher unsere Seite nutzen',
                'Funktionale Cookies' => 'Merken sich Ihre Präferenzen und Einstellungen',
                'Analyse-Cookies' => 'Liefern Erkenntnisse zur Verbesserung unserer Dienste',
            ],
            'management' => 'Sie können Ihre Cookie-Präferenzen über Ihre Browsereinstellungen verwalten. Die Deaktivierung notwendiger Cookies kann jedoch die Funktionalität der Website beeinträchtigen.',
        ],

        'third_party' => [
            'title' => 'Links zu Drittanbietern & externe Dienste',
            'intro' => 'Unsere Website kann Links zu externen Seiten und Diensten enthalten. Wichtige Hinweise:',
            'notes' => [
                'Wir wählen unsere Partner sorgfältig aus, können aber deren Datenschutzpraktiken nicht kontrollieren',
                'Externe Seiten haben eigene Datenschutzrichtlinien, die wir nicht beeinflussen können',
                'Wir sind nicht verantwortlich für Inhalte oder Praktiken verlinkter Websites',
                'Wir empfehlen, die Datenschutzerklärungen Dritter zu lesen, bevor Sie Informationen teilen',
            ],
            'disclaimer' => 'Wenn Sie unsere Seite über diese Links verlassen, gilt unsere Datenschutzerklärung nicht mehr für Ihre Aktivitäten auf diesen externen Seiten.',
        ],

        'updates' => [
            'title' => 'Aktualisierungen & Änderungen der Richtlinie',
            'intro' => 'Wir können diese Datenschutzerklärung aktualisieren, um Änderungen in unseren Praktiken oder rechtlichen Anforderungen widerzuspiegeln:',
            'procedures' => [
                'Wesentliche Änderungen werden per E-Mail oder durch einen deutlichen Hinweis auf der Website mitgeteilt',
                'Die fortgesetzte Nutzung unserer Dienste nach Änderungen gilt als Zustimmung',
                'Wir führen eine Versionsgeschichte aller Richtlinienaktualisierungen',
                'Das Datum "Zuletzt aktualisiert" oben zeigt die neueste Überarbeitung an',
            ],
            'recommendation' => 'Wir empfehlen Ihnen, diese Richtlinie regelmäßig zu überprüfen, um über den Schutz Ihrer Informationen informiert zu bleiben.',
        ],

        'contact' => [
            'title' => 'Fragen & Kontaktinformationen',
            'intro' => 'Wir sind bestrebt, transparent über unsere Datenschutzpraktiken zu sein. Wenn Sie Fragen oder Bedenken haben:',
            'details' => [
                'E-Mail' => '<a href="mailto:contact@lilydecors.com" class="contact-email">contact@lilydecors.com</a>',
                'Datenschutzbeauftragter' => 'John Smith',
                'Postanschrift' => '123 Privacy Lane, Data City, DC 12345',
                'Antwortzeit' => 'Wir bemühen uns, innerhalb von 48 Stunden zu antworten',
            ],
            'rights' => 'Sie haben das Recht, auf Ihre persönlichen Daten zuzugreifen, sie zu berichtigen oder zu löschen. Kontaktieren Sie uns, um diese Rechte auszuüben.',
        ],
    ],

    // Back button
    'back_button' => 'Zurück zur Startseite',

    // Additional terms for cookie consent banner (if needed)
    'cookie_consent' => [
        'title' => 'Cookie-Einstellungen',
        'message' => 'Wir verwenden Cookies, um Ihr Surferlebnis zu verbessern und unseren Traffic zu analysieren.',
        'accept_all' => 'Alle akzeptieren',
        'reject_all' => 'Alle ablehnen',
        'manage' => 'Einstellungen verwalten',
        'necessary' => 'Notwendig',
        'analytics' => 'Analyse',
        'marketing' => 'Marketing',
        'preferences' => 'Präferenzen',
        'save' => 'Einstellungen speichern',
    ],

    // Data rights (GDPR specific)
    'data_rights' => [
        'title' => 'Ihre Datenschutzrechte',
        'access' => 'Recht auf Auskunft',
        'rectification' => 'Recht auf Berichtigung',
        'erasure' => 'Recht auf Löschung (Recht auf Vergessenwerden)',
        'restriction' => 'Recht auf Einschränkung der Verarbeitung',
        'portability' => 'Recht auf Datenübertragbarkeit',
        'object' => 'Widerspruchsrecht',
        'description' => 'Gemäß der DSGVO und anderen Datenschutzgesetzen haben Sie spezifische Rechte in Bezug auf Ihre personenbezogenen Daten.',
    ],

    // Data retention
    'retention' => [
        'title' => 'Datenspeicherung',
        'description' => 'Wir speichern Ihre personenbezogenen Daten nur so lange, wie es zur Erfüllung der Zwecke, für die sie erhoben wurden, erforderlich ist.',
        'periods' => [
            'account_data' => 'Kontodaten: Solange Ihr Konto aktiv ist',
            'transaction_data' => 'Transaktionsdaten: 7 Jahre aus steuerlichen Gründen',
            'communication_data' => 'Kommunikationsdaten: 3 Jahre',
            'analytics_data' => 'Analysedaten: 26 Monate',
        ],
    ],

    // International data transfers
    'international_transfers' => [
        'title' => 'Internationale Datenübermittlungen',
        'description' => 'Ihre Informationen können in andere Länder als Ihr eigenes übermittelt und dort verarbeitet werden.',
        'safeguards' => 'Wir implementieren geeignete Schutzmaßnahmen für internationale Datenübermittlungen.',
    ],

    // Children's privacy
    'children' => [
        'title' => 'Datenschutz für Kinder',
        'description' => 'Unsere Dienste richten sich nicht an Kinder unter 16 Jahren. Wir sammeln wissentlich keine persönlichen Daten von Kindern.',
        'contact' => 'Wenn Sie glauben, dass wir Daten eines Kindes gesammelt haben, kontaktieren Sie uns bitte umgehend.',
    ],

    // Automated decision making
    'automated_decisions' => [
        'title' => 'Automatisierte Entscheidungsfindung',
        'description' => 'Wir verwenden keine automatisierte Entscheidungsfindung oder Profiling, die rechtliche Auswirkungen haben.',
    ],

    // Data breach notification
    'data_breach' => [
        'title' => 'Benachrichtigung bei Datenschutzverletzungen',
        'description' => 'Im Falle einer Datenschutzverletzung werden wir betroffene Nutzer und Behörden gemäß den gesetzlichen Vorschriften benachrichtigen.',
    ],

    // Do Not Track signals
    'do_not_track' => [
        'title' => 'Do-Not-Track-Signale',
        'description' => 'Unsere Website reagiert nicht auf Do-Not-Track-Signale von Browsern.',
    ],

    // California privacy rights (CCPA)
    'ccpa' => [
        'title' => 'Datenschutzrechte für Kalifornier',
        'description' => 'Einwohner Kaliforniens haben zusätzliche Rechte gemäß dem California Consumer Privacy Act (CCPA).',
        'right_to_know' => 'Recht auf Auskunft',
        'right_to_delete' => 'Recht auf Löschung',
        'right_to_opt_out' => 'Recht auf Widerspruch gegen den Verkauf',
        'non_discrimination' => 'Recht auf Nichtdiskriminierung',
    ],
];