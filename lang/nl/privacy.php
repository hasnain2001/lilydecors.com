<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Privacybeleid | ' . config('app.name'),
        'description' => 'Lees ons privacybeleid om te begrijpen hoe we met uw gegevens omgaan en uw privacy beschermen.',
        'keywords' => 'privacy, beleid, gegevensbescherming, gegevensbeveiliging, AVG, cookies',
        'author' => config('app.name'),
    ],
    
    // Header sectie
    'header' => [
        'title' => 'Privacybeleid',
        'subtitle' => 'Uw privacy is belangrijk voor ons. Lees hoe we uw gegevens beschermen en verwerken.',
        'last_updated' => 'Laatst bijgewerkt op',
    ],
    
    // Hoofdkaart
    'card' => [
        'title' => 'Uw Gegevensbescherming & Privacy',
    ],
    
    // Alert sectie
    'alert' => [
        'title' => 'Transparantie is Belangrijk',
        'description' => 'Dit beleid legt in duidelijke, eenvoudige bewoordingen uit hoe we uw informatie verzamelen, gebruiken en beschermen.',
    ],
    
    // Beleidssecties
    'sections' => [
        'collection' => [
            'title' => 'Informatie Die We Verzamelen',
            'intro' => 'We verzamelen informatie die ons helpt betere diensten te leveren en uw ervaring te verbeteren. Dit omvat:',
            'types' => [
                'Persoonlijke Informatie' => 'Naam, e-mailadres en contactgegevens wanneer u zich registreert of contact met ons opneemt',
                'Gebruiksgegevens' => 'Hoe u met onze website omgaat, bezochte pagina\'s en gebruikte functies',
                'Technische Informatie' => 'Browsertype, apparaatinformatie en IP-adres voor beveiligingsdoeleinden',
                'Communicatiegegevens' => 'Berichten, feedback en vragen die u naar ons stuurt',
            ],
            'conclusion' => 'We verzamelen alleen informatie die nodig is om onze diensten te leveren en uw ervaring te verbeteren.',
        ],
        
        'usage' => [
            'title' => 'Hoe We Uw Informatie Gebruiken',
            'intro' => 'Uw informatie helpt ons uitstekende service te leveren en ons platform te verbeteren. We gebruiken het om:',
            'purposes' => [
                'Te reageren op uw vragen en gepersonaliseerde klantenservice te bieden',
                'Transacties te verwerken en de diensten die u aanvraagt te leveren',
                'Onze websitefunctionaliteit en gebruikerservaring te verbeteren',
                'Belangrijke updates over onze diensten te sturen (u kunt zich altijd afmelden)',
                'Te beschermen tegen fraude en platformbeveiliging te waarborgen',
                'Gebruikspatronen te analyseren om ons aanbod te verbeteren',
            ],
            'important_note' => 'We verkopen uw persoonlijke gegevens niet en zullen dit nooit doen aan derden.',
        ],
        
        'security' => [
            'title' => 'Gegevensbeveiliging & Bescherming',
            'intro' => 'We nemen de beveiliging van uw gegevens serieus en implementeren robuuste maatregelen om deze te beschermen:',
            'measures' => [
                'Encryptie' => 'Alle gevoelige gegevens worden versleuteld tijdens verzending en opslag',
                'Beveiligde Servers' => 'Uw informatie wordt opgeslagen op beschermde servers met beperkte toegang',
                'Toegangscontroles' => 'Strikt intern beleid controleert wie toegang heeft tot uw gegevens',
                'Regelmatige Audits' => 'We voeren beveiligingsbeoordelingen uit om beschermingsnormen te handhaven',
                'Medewerkerstraining' => 'Ons team is getraind in best practices voor gegevensbescherming',
            ],
            'disclaimer' => 'Hoewel we beveiligingsmaatregelen op brancheniveau implementeren, is geen enkele methode van verzending via internet 100% veilig. We raden aan sterke wachtwoorden te gebruiken en uw inloggegevens vertrouwelijk te houden.',
        ],
        
        'cookies' => [
            'title' => 'Cookies & Tracking Technologieën',
            'intro' => 'We gebruiken cookies en vergelijkbare technologieën om uw browse-ervaring te verbeteren:',
            'types' => [
                'Essentiële Cookies' => 'Nodig voor de juiste werking van de website',
                'Prestatiecookies' => 'Helpen ons begrijpen hoe bezoekers onze site gebruiken',
                'Functionele Cookies' => 'Onthouden uw voorkeuren en instellingen',
                'Analytische Cookies' => 'Bieden inzichten om onze diensten te verbeteren',
            ],
            'management' => 'U kunt cookievoorkeuren beheren via uw browserinstellingen. Het uitschakelen van essentiële cookies kan echter de functionaliteit van de website beïnvloeden.',
        ],
        
        'third_party' => [
            'title' => 'Links & Diensten van Derden',
            'intro' => 'Onze website kan links naar externe sites en diensten bevatten. Belangrijke opmerkingen:',
            'notes' => [
                'We selecteren onze partners zorgvuldig maar kunnen hun privacypraktijken niet controleren',
                'Externe sites hebben hun eigen privacybeleid waar we geen controle over hebben',
                'We zijn niet verantwoordelijk voor de inhoud of praktijken van gelinkte websites',
                'We raden aan het privacybeleid van derden te bekijken voordat u informatie deelt',
            ],
            'disclaimer' => 'Wanneer u onze site via deze links verlaat, is ons privacybeleid niet langer van toepassing op uw activiteiten op die externe sites.',
        ],
        
        'updates' => [
            'title' => 'Beleidsupdates & Wijzigingen',
            'intro' => 'We kunnen dit privacybeleid bijwerken om veranderingen in onze praktijken of wettelijke vereisten weer te geven:',
            'procedures' => [
                'Belangrijke wijzigingen worden gemeld via e-mail of prominente websitekennisgeving',
                'Voortgezet gebruik van onze diensten na wijzigingen impliceert acceptatie',
                'We houden versiegeschiedenis bij van alle beleidsupdates',
                'De datum "Laatst bijgewerkt" bovenaan geeft de laatste herziening aan',
            ],
            'recommendation' => 'We raden u aan dit beleid regelmatig te bekijken om op de hoogte te blijven van hoe we uw informatie beschermen.',
        ],
        
        'contact' => [
            'title' => 'Vragen & Contactinformatie',
            'intro' => 'We streven naar transparantie over onze privacypraktijken. Als u vragen of opmerkingen heeft:',
            'details' => [
                'E-mail' => '<a href="mailto:contact@lilydecors.nl" class="contact-email">contact@lilydecors.nl</a>',
                'Functionaris Gegevensbescherming' => 'Jan Jansen',
                'Post' => 'Privacystraat 123, Gegevensstad, GC 12345',
                'Reactietijd' => 'We streven ernaar binnen 48 uur te reageren',
            ],
            'rights' => 'U heeft het recht om uw persoonlijke gegevens in te zien, te corrigeren of te verwijderen. Neem contact met ons op om deze rechten uit te oefenen.',
        ],
    ],
    
    // Terugknop
    'back_button' => 'Terug naar Homepage',
    
    // Aanvullende termen voor cookie-toestemmingsbanner (indien nodig)
    'cookie_consent' => [
        'title' => 'Cookievoorkeuren',
        'message' => 'We gebruiken cookies om uw browse-ervaring te verbeteren en ons verkeer te analyseren.',
        'accept_all' => 'Alles Accepteren',
        'reject_all' => 'Alles Weigeren',
        'manage' => 'Voorkeuren Beheren',
        'necessary' => 'Noodzakelijk',
        'analytics' => 'Analytisch',
        'marketing' => 'Marketing',
        'preferences' => 'Voorkeuren',
        'save' => 'Voorkeuren Opslaan',
    ],
    
    // Gegevensrechten (AVG specifiek)
    'data_rights' => [
        'title' => 'Uw Gegevensrechten',
        'access' => 'Recht op Inzage',
        'rectification' => 'Recht op Rectificatie',
        'erasure' => 'Recht op Verwijdering (Recht om Vergeten te Worden)',
        'restriction' => 'Recht op Beperking van Verwerking',
        'portability' => 'Recht op Gegevensoverdraagbaarheid',
        'object' => 'Recht van Bezwaar',
        'description' => 'Onder de AVG en andere gegevensbeschermingswetten heeft u specifieke rechten met betrekking tot uw persoonlijke gegevens.',
    ],
    
    // Gegevensbewaring
    'retention' => [
        'title' => 'Gegevensbewaring',
        'description' => 'We bewaren uw persoonlijke gegevens alleen zo lang als nodig is om de doeleinden waarvoor ze zijn verzameld te vervullen.',
        'periods' => [
            'account_data' => 'Accountgegevens: Zolang uw account actief is',
            'transaction_data' => 'Transactiegegevens: 7 jaar voor belastingdoeleinden',
            'communication_data' => 'Communicatiegegevens: 3 jaar',
            'analytics_data' => 'Analytische gegevens: 26 maanden',
        ],
    ],
    
    // Internationale gegevensoverdracht
    'international_transfers' => [
        'title' => 'Internationale Gegevensoverdracht',
        'description' => 'Uw informatie kan worden overgedragen naar en verwerkt in andere landen dan uw eigen land.',
        'safeguards' => 'We implementeren passende waarborgen voor internationale gegevensoverdracht.',
    ],
    
    // Privacy van kinderen
    'children' => [
        'title' => 'Privacy van Kinderen',
        'description' => 'Onze diensten zijn niet gericht op kinderen onder de 16 jaar. We verzamelen niet bewust persoonlijke informatie van kinderen.',
        'contact' => 'Als u denkt dat we informatie van een kind hebben verzameld, neem dan onmiddellijk contact met ons op.',
    ],
    
    // Geautomatiseerde besluitvorming
    'automated_decisions' => [
        'title' => 'Geautomatiseerde Besluitvorming',
        'description' => 'We gebruiken geen geautomatiseerde besluitvorming of profilering die rechtsgevolgen heeft.',
    ],
    
    // Melding gegevenslek
    'data_breach' => [
        'title' => 'Melding Gegevenslek',
        'description' => 'In geval van een gegevenslek zullen we getroffen gebruikers en autoriteiten op de hoogte stellen zoals wettelijk vereist.',
    ],
    
    // Do Not Track signalen
    'do_not_track' => [
        'title' => 'Do Not Track Signalen',
        'description' => 'Onze website reageert niet op Do Not Track-signalen van browsers.',
    ],
    
    // Californië privacyrechten (CCPA)
    'ccpa' => [
        'title' => 'Privacyrechten voor Californië',
        'description' => 'Inwoners van Californië hebben aanvullende rechten onder de California Consumer Privacy Act (CCPA).',
        'right_to_know' => 'Recht op Informatie',
        'right_to_delete' => 'Recht op Verwijdering',
        'right_to_opt_out' => 'Recht om Verkoop te Weigeren',
        'non_discrimination' => 'Recht op Non-Discriminatie',
    ],
];