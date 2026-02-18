<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'FAQs - ' . config('app.name') . ' Gutscheine & Deals',
        'description' => 'Finden Sie Antworten zur Verwendung von Gutscheinen, zum Verdienen von Cashback, Affiliate-Marketing und mehr bei ' . config('app.name') . '. Ihre erste Adresse für Wohnkultur-Ersparnisse!',
        'keywords' => 'FAQ, Gutscheine, Deals, Cashback, Affiliate-Marketing, Rabattcodes, Wohnkultur sparen',
    ],

    // Hero section
    'hero' => [
        'title' => 'Häufig gestellte Fragen',
        'description' => 'Alles, was Sie wissen müssen, um die besten Gutscheine zu finden, Cashback zu verdienen und Ihre Ersparnisse bei Wohnkultur mit ' . config('app.name') . ' zu maximieren!',
        'badge' => 'Sparen Sie bis zu 70 % mit unseren exklusiven Gutscheinen',
    ],

    // Statistics banner
    'stats' => [
        'active_coupons' => '10.000+',
        'active_coupons_label' => 'Aktive Gutscheine',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Partnermarken',
        'saved_amount' => '2 Mio.+ €',
        'saved_amount_label' => 'Von unseren Nutzern gespart',
        'happy_members' => '100.000+',
        'happy_members_label' => 'Zufriedene Mitglieder',
    ],

    // Search bar
    'search' => [
        'placeholder' => 'Suchen Sie nach Antworten... Versuchen Sie \'Cashback\', \'abgelaufener Gutschein\', \'Affiliate\', \'Verwendung\'...',
        'no_results' => [
            'title' => 'Keine Ergebnisse für ":term" gefunden',
            'description' => 'Versuchen Sie es mit anderen Suchbegriffen oder durchsuchen Sie unsere Kategorien.',
            'show_all' => 'Alle FAQs anzeigen',
        ],
    ],

    // Categories
    'categories' => [
        'all' => 'Alle Fragen',
        'coupons' => 'Gutscheine & Deals',
        'cashback' => 'Cashback & Prämien',
        'affiliate' => 'Affiliate-Programm',
        'account' => 'Konto & Technisches',
        'earning' => 'Geld verdienen',
    ],

    // Questions and answers - Coupons & Deals
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => 'Wie verwende ich Gutscheine von ' . config('app.name') . '?',
                'description' => 'Die Verwendung unserer Gutscheine ist einfach! Folgen Sie diesen Schritten:',
                'steps' => [
                    'Finden Sie einen Gutschein für Ihr Lieblings-Wohnkulturgeschäft',
                    'Klicken Sie auf die Schaltfläche "Code holen" oder "Angebot sichern"',
                    'Sie werden zur Website des Geschäfts weitergeleitet',
                    'Fügen Sie Artikel in Ihren Warenkorb',
                    'Geben Sie an der Kasse den Gutscheincode in das Feld für Aktionscodes ein',
                    'Schließen Sie Ihren Kauf ab und freuen Sie sich über die Ersparnis!',
                ],
                'pro_tip' => [
                    'title' => 'Profitipp',
                    'description' => 'Manche Angebote sind automatisch – klicken Sie einfach durch unseren Link und der Rabatt wird automatisch an der Kasse abgezogen!',
                ],
            ],
            'code_not_working' => [
                'title' => 'Warum hat mein Gutscheincode nicht funktioniert?',
                'description' => 'Wenn ein Gutschein nicht funktioniert, sind hier die häufigsten Gründe:',
                'reasons' => [
                    'Abgelaufener Code' => 'Gutscheine haben ein Ablaufdatum',
                    'Mindestbestellwert' => 'Manche erfordern einen Mindesteinkauf (z.B. 50 €+)',
                    'Ausgeschlossene Artikel' => 'Sale-Artikel oder bestimmte Marken können ausgeschlossen sein',
                    'Einmalige Verwendung' => 'Einmalcodes können nicht wiederverwendet werden',
                    'Regionssperre' => 'Manche Codes funktionieren nur in bestimmten Ländern',
                    'Bereits angewendet' => 'Mehrere Prozentrabatt-Codes können nicht kombiniert werden',
                ],
                'solution' => [
                    'title' => 'Lösung',
                    'description' => 'Prüfen Sie unsere Website für die neuesten Codes. Wenn einer nicht funktioniert, haben wir normalerweise Alternativen verfügbar!',
                ],
            ],
            'update_frequency' => [
                'title' => 'Wie oft aktualisieren Sie Ihre Gutscheine?',
                'description' => 'Wir aktualisieren unsere Gutscheine mehrmals täglich! Hier ist unser Aktualisierungsplan:',
                'schedule' => [
                    'Echtzeit-Überwachung' => 'Neue Angebote werden hinzugefügt, sobald sie entdeckt werden',
                    'Abgelaufene Codes' => 'Innerhalb einer Stunde nach Ablauf entfernt',
                    'Wöchentliche Zusammenfassungen' => 'Die besten Angebote der Woche jeden Montag',
                    'Feiertags-Specials' => 'Black Friday, Cyber Monday stündliche Updates',
                ],
                'get_notified' => [
                    'title' => 'Benachrichtigt werden',
                    'description' => 'Abonnieren Sie unseren Newsletter oder aktivieren Sie Browser-Benachrichtigungen, um sofortige Updates zu neuen Gutscheinen für Ihre Lieblingsgeschäfte zu erhalten!',
                ],
            ],
            'multiple_coupons' => [
                'title' => 'Kann ich mehrere Gutscheine stapeln?',
                'description' => 'Das hängt von der Richtlinie des Geschäfts ab, aber hier ist, was Sie wissen müssen:',
                'policies' => [
                    'Die meisten Geschäfte' => 'Erlauben einen Prozentrabatt-Code + kostenlosen Versand',
                    'Einige Geschäfte' => 'Erlauben das Stapeln mit Cashback-Angeboten',
                    'Selten erlaubt' => 'Mehrere Prozentrabatt-Gutscheine',
                    'Immer prüfen' => 'Die Gutscheinrichtlinien-Seite des Geschäfts',
                ],
                'best_strategy' => [
                    'title' => 'Beste Strategie',
                    'description' => 'Verwenden Sie unseren :code Filter, um den besten Einzelgutschein zu finden, der Ihnen maximale Ersparnisse bringt, ohne stapeln zu müssen.',
                ],
            ],
        ],

        'cashback' => [
            'how_it_works' => [
                'title' => 'Wie funktioniert Cashback?',
                'description' => 'Cashback ist Geld, das Sie für Käufe zurückerhalten, die über unsere Links getätigt wurden:',
                'steps' => [
                    'Registrieren Sie sich für ein kostenloses ' . config('app.name') . '-Konto',
                    'Finden Sie ein Geschäft, das Cashback anbietet',
                    'Klicken Sie auf die Schaltfläche "Cashback aktivieren"',
                    'Kaufen Sie normal auf der Website des Geschäfts ein',
                    'Ihr Kauf wird automatisch verfolgt',
                    'Cashback erscheint innerhalb von 24-48 Stunden in Ihrem Konto',
                    'Auszahlen, sobald Sie das Minimum von 10 € erreicht haben',
                ],
                'example' => [
                    'title' => 'Beispiel',
                    'description' => 'Kaufen Sie eine 200 € Lampe mit 5 % Cashback = 10 € zurück in Ihrer Tasche!',
                ],
            ],
            'timeline' => [
                'title' => 'Wie lange dauert es, bis Cashback erscheint?',
                'description' => 'Hier ist der typische Cashback-Zeitplan:',
                'stages' => [
                    'Ausstehend' => 'Erscheint 24-48 Stunden nach dem Kauf',
                    'Bestätigt' => '30-90 Tage (nach der Rückgabefrist des Geschäfts)',
                    'Auszahlbar' => 'Nach Bestätigung zur Auszahlung verfügbar',
                    'Auszahlung' => 'Wird innerhalb von 3-5 Werktagen bearbeitet',
                ],
                'note' => [
                    'title' => 'Hinweis',
                    'description' => 'Einige Geschäfte haben längere Bestätigungsfristen, besonders bei Möbeln und großen Artikeln mit längeren Rückgabefristen.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => 'Kann ich Cashback mit Gutscheinen kombinieren?',
                'answer' => 'Ja! Hier maximieren Sie Ihre Ersparnisse:',
                'tips' => [
                    'Verwenden Sie immer einen Gutscheincode an der Kasse',
                    'Stellen Sie sicher, dass Cashback aktiviert ist, bevor Sie durchklicken',
                    'Sie sparen sofort mit dem Gutschein UND erhalten Cashback',
                    'Einige Geschäfte bieten Bonus-Cashback mit bestimmten Gutscheinen',
                ],
                'double_dip' => [
                    'title' => 'Doppelt-sparen-Strategie',
                    'description' => 'Verwenden Sie Gutschein :code für 20 % Rabatt + 5 % Cashback = insgesamt 25 % Ersparnis!',
                ],
            ],
        ],

        'affiliate' => [
            'become_affiliate' => [
                'title' => 'Wie werde ich ' . config('app.name') . '-Affiliate?',
                'description' => 'Treten Sie unserem Affiliate-Programm bei und verdienen Sie Provisionen:',
                'steps' => [
                    'Melden Sie sich auf unserem Affiliate-Portal an',
                    'Erhalten Sie eine Genehmigung (normalerweise innerhalb von 24 Stunden)',
                    'Erhalten Sie Zugang zu Ihren einzigartigen Affiliate-Links',
                    'Teilen Sie Links in Ihrem Blog, in sozialen Medien oder auf Ihrer Website',
                    'Verdienen Sie Provisionen für vermittelte Verkäufe',
                    'Erhalten Sie monatliche Zahlungen per PayPal oder Überweisung',
                ],
                'commission_rates' => [
                    'title' => 'Provisionssätze',
                    'description' => 'Verdienen Sie 5-15 % auf Verkäufe, abhängig vom Geschäft und Ihrer Leistungsstufe.',
                ],
            ],
            'requirements' => [
                'title' => 'Welche Voraussetzungen gibt es für die Teilnahme?',
                'description' => 'Grundvoraussetzungen für unser Affiliate-Programm:',
                'list' => [
                    'Aktive Website, Blog oder soziale Medien mit Wohnkultur-/Möbelinhalten',
                    'Mindestens 1.000 monatliche Besucher (oder 5.000 Social-Media-Follower)',
                    'Inhalte müssen familienfreundlich und relevant sein',
                    'Kein Spam oder verbotene Inhalte',
                    'Einhaltung der FTC-Offenlegungspflichten',
                ],
                'bonus' => [
                    'title' => 'Bonus',
                    'description' => 'Wohnkultur-Influencer, Innenarchitektur-Blogger und DIY-Content-Ersteller erhalten Priorität bei der Genehmigung!',
                ],
            ],
            'earnings_potential' => [
                'title' => 'Wie viel kann ich als Affiliate verdienen?',
                'description' => 'Die Einnahmen variieren je nach Traffic und Ihrer Werbestrategie:',
                'types' => [
                    'Standardprovision' => '5 % auf alle vermittelten Verkäufe',
                    'Leistungsboni' => 'Bis zu 15 % für Top-Performer',
                    'Wiederkehrende Provisionen' => '2 % auf Abonnementverlängerungen',
                    'Bonuszahlungen' => 'Sonderaktionen und Wettbewerbe',
                ],
                'top_earners' => [
                    'title' => 'Top-Verdiener',
                    'description' => 'Unsere bestverdienenden Affiliates machen 5.000 €+ pro Monat mit der Bewerbung von Wohnkultur-Angeboten!',
                ],
            ],
        ],

        'account' => [
            'free_account' => [
                'title' => 'Ist die Kontoerstellung kostenlos?',
                'answer' => 'Absolut! 100 % kostenlos für immer.',
                'description' => 'Das erhalten Sie mit einem kostenlosen Konto:',
                'benefits' => [
                    'Verfolgen Sie Ihre Cashback-Einnahmen',
                    'Speichern Sie Lieblingsgutscheine und -geschäfte',
                    'Erhalten Sie personalisierte Angebotsbenachrichtigungen',
                    'Nehmen Sie an unserem Prämienprogramm teil',
                    'Zugang zu exklusiven Mitgliederangeboten',
                    'Verdienen Sie Empfehlungsboni',
                ],
                'conclusion' => 'Keine Kreditkarte erforderlich. Keine versteckten Gebühren. Nur reine Ersparnisse!',
            ],
            'tracking_issues' => [
                'title' => 'Warum wird mein Kauf nicht verfolgt?',
                'description' => 'Wenn Ihr Kauf nicht verfolgt wird, versuchen Sie diese Lösungen:',
                'solutions' => [
                    'Cookies löschen' => 'Klicken Sie immer durch unseren Link - geben Sie URLs nicht direkt ein',
                    'Adblocker deaktivieren' => 'Manche blockieren Tracking-Skripte',
                    'Kauf abschließen' => 'Muss in derselben Browser-Sitzung abgeschlossen werden',
                    'Berechtigung prüfen' => 'Einige Artikel sind vom Cashback ausgeschlossen',
                    '48 Stunden warten' => 'Tracking kann bis zu 2 Tage dauern',
                ],
                'need_help' => [
                    'title' => 'Hilfe benötigt?',
                    'description' => 'Kontaktieren Sie den Support mit Ihren Bestelldetails und wir verfolgen es manuell für Sie!',
                ],
            ],
        ],

        'earning' => [
            'ways_to_earn' => [
                'title' => 'Wie kann ich mit ' . config('app.name') . ' Geld verdienen?',
                'description' => 'Es gibt mehrere Möglichkeiten, bei uns zu verdienen:',
                'methods' => [
                    'Cashback' => 'Verdienen Sie bei Ihren eigenen Einkäufen',
                    'Affiliate-Programm' => 'Verdienen Sie Provisionen durch die Bewerbung von Angeboten',
                    'Empfehlungsprogramm' => 'Verdienen Sie 5 € für jeden Freund, der sich anmeldet und einen Kauf tätigt',
                    'Content-Ersteller' => 'Reichen Sie Angebotstipps ein und verdienen Sie Boni',
                    'Store-Botschafter' => 'Spezielle Programme für Top-Geschäfte',
                ],
                'pro_tip' => [
                    'title' => 'Profitipp',
                    'description' => 'Nehmen Sie gleichzeitig an allen Programmen teil, um Ihr Verdienstpotenzial zu maximieren!',
                ],
            ],
            'payment_details' => [
                'title' => 'Wann und wie werde ich bezahlt?',
                'description' => 'Unser Zahlungsplan und unsere Methoden:',
                'details' => [
                    'Zahlungsplan' => 'Monatlich, um den 15.',
                    'Mindestauszahlung' => '10 € für Cashback, 50 € für Affiliates',
                    'Zahlungsmethoden' => 'PayPal, Überweisung, Geschenkkarten',
                    'Bearbeitungszeit' => '3-5 Werktage nach Antrag',
                    'Steuerformulare' => 'Steuerbescheinigung für Einnahmen über 600 €/Jahr',
                ],
                'conclusion' => 'Alle Zahlungen sind sicher und durch unsere Zahlungsgarantie abgesichert.',
            ],
        ],
    ],

    // How it works section
    'how_it_works' => [
        'title' => 'Wie ' . config('app.name') . ' funktioniert',
        'description' => 'Ihr Leitfaden zur Maximierung der Ersparnisse beim Kauf von Wohnkultur',
        'steps' => [
            [
                'title' => 'Angebote finden',
                'description' => 'Durchsuchen Sie Tausende von Gutscheinen und Cashback-Angeboten von Top-Wohnkulturmarken.',
            ],
            [
                'title' => 'Klicken & Einkaufen',
                'description' => 'Klicken Sie durch unsere Links, um Rabatte zu aktivieren und direkt auf Markenwebsites einzukaufen.',
            ],
            [
                'title' => 'Geld sparen',
                'description' => 'Verwenden Sie Gutscheincodes an der Kasse und verdienen Sie Cashback für berechtigte Käufe.',
            ],
            [
                'title' => 'Prämien verdienen',
                'description' => 'Nehmen Sie an unserem Affiliate-Programm oder Empfehlungsprogramm teil, um noch mehr zu verdienen.',
            ],
        ],
    ],

    // Call to action
    'cta' => [
        'title' => 'Bereit zum Sparen?',
        'description' => 'Schließen Sie sich Tausenden cleveren Käufern an, die täglich bei Wohnkultur sparen. Ob Sie Möbel, Dekoration oder DIY-Bedarf kaufen, ' . config('app.name') . ' hilft Ihnen, die besten Angebote zu bekommen.',
        'join_button' => 'Kostenlos anmelden & sparen',
        'browse_button' => 'Neueste Gutscheine durchstöbern',
        'security_note' => '100 % Sicher • Kein Spam • Jederzeit abbestellbar',
    ],

    // Additional sections (if needed)
    'popular_questions' => [
        'title' => 'Beliebte Fragen',
        'most_viewed' => 'Meistgesehen',
        'recently_added' => 'Kürzlich hinzugefügt',
    ],

    'help_center' => [
        'title' => 'Benötigen Sie weitere Hilfe?',
        'contact_us' => 'Kontaktieren Sie uns',
        'live_chat' => 'Live-Chat',
        'email_support' => 'E-Mail-Support',
        'response_time' => 'Durchschnittliche Antwortzeit: 2 Stunden',
    ],

    'related_topics' => [
        'title' => 'Verwandte Themen',
        'privacy_policy' => 'Datenschutzerklärung',
        'terms_of_service' => 'Nutzungsbedingungen',
        'affiliate_disclosure' => 'Transparenzhinweis',
        'cookie_policy' => 'Cookie-Richtlinie',
    ],

    'accessibility' => [
        'keyboard_navigation' => 'Verwenden Sie die Tabulatortaste, um durch FAQs zu navigieren, die Eingabetaste zum Erweitern, Esc zum Schließen',
        'screen_reader' => 'Screenreader-freundlich',
        'high_contrast' => 'Hoher Kontrastmodus verfügbar',
    ],
];