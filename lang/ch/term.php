<?php

return [
    // Page Meta
    'title' => 'Allgemeine Geschäftsbedingungen',
    'description' => 'Lesen Sie unsere Allgemeinen Geschäftsbedingungen, um Ihre Rechte und Pflichten bei der Nutzung unserer Dienste zu verstehen.',
    'keywords' => 'AGB, Bedingungen, Nutzungsbedingungen, Nutzungsvereinbarung',
    'author' => 'John Doe',

    // Header Section
    'header' => [
        'title' => 'Allgemeine Geschäftsbedingungen',
        'subtitle' => 'Verstehen Sie Ihre Rechte und Pflichten bei der Nutzung unserer Dienste',
        'last_updated' => 'Zuletzt aktualisiert am',
    ],

    // Main Card
    'card' => [
        'title' => 'Rechtliche Vereinbarung & Nutzungsbedingungen',
    ],

    // Alert Section
    'alert' => [
        'title' => 'Wichtig:',
        'message' => 'Durch den Zugriff auf oder die Nutzung unserer Dienste erklären Sie sich mit diesen Bedingungen einverstanden. Bitte lesen Sie sie sorgfältig durch, bevor Sie fortfahren.',
    ],

    // Section 1: Acceptance of Terms
    'section1' => [
        'title' => 'Annahme der Bedingungen',
        'content' => 'Durch den Zugriff auf oder die Nutzung unserer Website, mobilen Anwendung oder anderer von :app_name bereitgestellter Dienste (zusammen die "Dienste") bestätigen Sie, dass Sie diese Allgemeinen Geschäftsbedingungen gelesen, verstanden haben und ihnen zustimmen.',
        'warning' => 'Wenn Sie mit einem Teil dieser Bedingungen nicht einverstanden sind, müssen Sie die Nutzung unserer Dienste sofort einstellen.',
    ],

    // Section 2: User Responsibilities
    'section2' => [
        'title' => 'Pflichten des Nutzers',
        'intro' => 'Als Nutzer unserer Dienste sind Sie allein verantwortlich für:',
        'points' => [
            'maintaining_account' => 'Die Wahrung der Vertraulichkeit und Sicherheit Ihrer Kontozugangsdaten',
            'account_activities' => 'Alle Aktivitäten, Transaktionen und Inhalte, die mit Ihrem Konto verbunden sind',
            'accurate_information' => 'Die Bereitstellung korrekter, aktueller und vollständiger Informationen während der Registrierung',
            'complying_laws' => 'Die Einhaltung aller geltenden lokalen, regionalen, nationalen und internationalen Gesetze',
            'third_party_rights' => 'Die Sicherstellung, dass Ihre Nutzung unserer Dienste keine Rechte Dritter verletzt',
        ],
        'notification' => 'Sie verpflichten sich, uns unverzüglich über jeden unbefugten Zugriff auf oder jede unbefugte Nutzung Ihres Kontos unter <strong>:email</strong> zu informieren.',
    ],

    // Section 3: Prohibited Activities
    'section3' => [
        'title' => 'Verbotene Aktivitäten',
        'intro' => 'Bei der Nutzung unserer Dienste ist es Ihnen untersagt, folgende Aktivitäten durchzuführen:',
        'activities' => [
            'illegal' => [
                'title' => 'Illegale Aktivitäten',
                'description' => 'Nutzung unserer Dienste für rechtswidrige Zwecke oder unter Verstoß gegen geltendes Recht',
            ],
            'unauthorized_access' => [
                'title' => 'Unbefugter Zugriff',
                'description' => 'Versuch, unbefugten Zugriff auf Systeme, Konten oder Netzwerke zu erlangen',
            ],
            'harmful_content' => [
                'title' => 'Schädliche Inhalte',
                'description' => 'Veröffentlichung, Übermittlung oder Teilung schädlicher, anstößiger oder rechtsverletzender Inhalte',
            ],
            'service_disruption' => [
                'title' => 'Dienstunterbrechung',
                'description' => 'Störung, Beeinträchtigung oder Überlastung der Dienste-Leistung',
            ],
            'automated_access' => [
                'title' => 'Automatisierter Zugriff',
                'description' => 'Verwendung von Bots, Scrapern oder anderen automatisierten Mitteln für den Zugriff auf unsere Dienste',
            ],
            'commercial_use' => [
                'title' => 'Kommerzielle Nutzung',
                'description' => 'Nutzung unserer Dienste für kommerzielle Zwecke ohne ausdrückliche Genehmigung',
            ],
        ],
        'warning' => 'Ein Verstoß gegen diese Verbote kann zur sofortigen Kündigung Ihres Kontos und zu rechtlichen Schritten führen.',
    ],

    // Section 4: Intellectual Property
    'section4' => [
        'title' => 'Geistiges Eigentum',
        'content' => 'Alle über unsere Dienste verfügbaren Inhalte, Funktionen und Funktionalitäten, einschließlich, aber nicht beschränkt auf Texte, Grafiken, Logos, Symbole, Bilder, Audioclips, digitale Downloads, Datensammlungen und Software, sind das ausschließliche Eigentum von :app_name und seinen Lizenzgebern.',
        'protected' => 'Diese Materialien sind durch internationale Urheberrechts-, Marken-, Patent-, Geschäftsgeheimnis- und andere Gesetze zum Schutz geistigen Eigentums oder Eigentumsrechte geschützt.',
        'restrictions' => 'Sie dürfen nicht:',
        'restriction_points' => [
            'reproduce' => 'Vervielfältigen, verbreiten oder abgeleitete Werke erstellen',
            'modify' => 'Teile unserer Dienste verändern, anpassen oder zurückentwickeln',
            'remove_notices' => 'Urheberrechts-, Marken- oder andere Eigentumshinweise entfernen',
            'unauthorized_use' => 'Unser geistiges Eigentum ohne ausdrückliche schriftliche Genehmigung nutzen',
        ],
    ],

    // Section 5: Disclaimer of Warranties
    'section5' => [
        'title' => 'Gewährleistungsausschluss',
        'content' => 'Unsere Dienste werden "wie gesehen" und "wie verfügbar" ohne jegliche ausdrückliche oder stillschweigende Gewährleistung bereitgestellt. Im größtmöglichen gesetzlich zulässigen Umfang lehnen wir alle Gewährleistungen ab, einschließlich, aber nicht beschränkt auf stillschweigende Gewährleistungen der Marktgängigkeit, der Eignung für einen bestimmten Zweck und der Nichtverletzung von Rechten.',
        'guarantees_intro' => 'Wir garantieren nicht, dass:',
        'guarantees' => [
            'uninterrupted' => 'Unsere Dienste ununterbrochen, sicher oder zu einer bestimmten Zeit oder an einem bestimmten Ort verfügbar sind',
            'errors_corrected' => 'Fehler oder Mängel behoben werden',
            'virus_free' => 'Unsere Dienste frei von Viren oder anderen schädlichen Bestandteilen sind',
            'meet_requirements' => 'Die Ergebnisse der Nutzung unserer Dienste Ihren Anforderungen entsprechen',
        ],
        'risk' => 'Die Nutzung unserer Dienste erfolgt ausschließlich auf Ihr eigenes Risiko.',
    ],

    // Section 6: Limitation of Liability
    'section6' => [
        'title' => 'Haftungsbeschränkung',
        'content' => 'Im größtmöglichen gesetzlich zulässigen Umfang haftet :app_name nicht für indirekte, zufällige, besondere, Folge- oder Strafschäden, einschließlich, aber nicht beschränkt auf:',
        'damages' => [
            'loss_profits' => 'Verlust von Gewinnen, Einnahmen oder Daten',
            'loss_use' => 'Nutzungsausfall, Verlust von Firmenwert oder andere immaterielle Verluste',
            'unauthorized_access' => 'Schäden, die aus unbefugtem Zugriff auf oder Veränderung Ihrer Übermittlungen resultieren',
            'third_party_content' => 'Verhalten oder Inhalte Dritter auf den Diensten',
        ],
        'liability_limit' => 'Unsere Gesamthaftung übersteigt in keinem Fall:',
        'liability_amount' => 'oder den Betrag, den Sie uns in den letzten 12 Monaten gezahlt haben, je nachdem, welcher Betrag höher ist.',
    ],

    // Section 7: Governing Law
    'section7' => [
        'title' => 'Geltendes Recht & Gerichtsstand',
        'content' => 'Diese Bedingungen unterliegen dem Recht von :country und sind nach diesem auszulegen, unter Ausschluss seiner Kollisionsnormen.',
        'jurisdiction_title' => 'Ausschließlicher Gerichtsstand',
        'jurisdiction_content' => 'Rechtsstreitigkeiten, Klagen oder Verfahren, die sich aus oder im Zusammenhang mit diesen Bedingungen ergeben, sind ausschließlich vor den Gerichten in :jurisdiction zu erheben. Sie unterwerfen sich der persönlichen Gerichtsbarkeit solcher Gerichte.',
    ],

    // Section 8: Changes to Terms
    'section8' => [
        'title' => 'Änderungen der Bedingungen',
        'content' => 'Wir behalten uns das Recht vor, diese Bedingungen jederzeit zu ändern.',
        'modification_notice' => 'Wenn wir dies tun, werden wir das Datum "Zuletzt aktualisiert" oben auf dieser Seite überarbeiten. Wir können auch zusätzliche Hinweise geben (z.B. durch einen Hinweis auf unserer Startseite oder durch Senden einer Benachrichtigung). Ihre fortgesetzte Nutzung unserer Dienste nach solchen Änderungen stellt Ihre Zustimmung zu den neuen Bedingungen dar.',
    ],

    // Section 9: Contact Information
    'section9' => [
        'title' => 'Kontaktinformationen',
        'intro' => 'Für Fragen, Bedenken oder Mitteilungen zu diesen Allgemeinen Geschäftsbedingungen kontaktieren Sie uns bitte über eine der folgenden Methoden:',
        'buttons' => [
            'email' => 'E-Mail an Rechtsteam',
            'contact_form' => 'Kontaktformular',
            'visit_office' => 'Besuchen Sie unser Büro',
        ],
        'response_time' => 'Wir antworten auf rechtliche Anfragen in der Regel innerhalb von 2-3 Werktagen.',
    ],

    // Action Buttons
    'actions' => [
        'back_home' => 'Zurück zur Startseite',
        'print_terms' => 'AGB drucken',
    ],
];