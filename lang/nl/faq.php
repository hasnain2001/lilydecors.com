<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Veelgestelde Vragen (FAQ) - ' . config('app.name') . ' Coupons & Deals',
        'description' => 'Vind antwoorden over het gebruik van coupons, cashback verdienen, affiliate marketing en meer bij ' . config('app.name') . '. Uw bestemming voor besparingen op woondecoratie!',
        'keywords' => 'FAQ, coupons, deals, cashback, affiliate marketing, kortingscodes, woondecoratie besparingen',
    ],
    
    // Hero sectie
    'hero' => [
        'title' => 'Veelgestelde Vragen',
        'description' => 'Alles wat u moet weten over het vinden van de beste coupons, cashback verdienen en uw besparingen op woondecoratie maximaliseren met ' . config('app.name') . '!',
        'badge' => 'Bespaar tot 70% met onze exclusieve coupons',
    ],
    
    // Statistieken banner
    'stats' => [
        'active_coupons' => '10.000+',
        'active_coupons_label' => 'Actieve Coupons',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Partnermerken',
        'saved_amount' => '€2M+',
        'saved_amount_label' => 'Bespaard door Onze Gebruikers',
        'happy_members' => '100K+',
        'happy_members_label' => 'Tevreden Leden',
    ],
    
    // Zoekbalk
    'search' => [
        'placeholder' => 'Zoek naar antwoorden... Probeer \'cashback\', \'verlopen coupon\', \'affiliate\', \'hoe gebruiken\'...',
        'no_results' => [
            'title' => 'Geen resultaten gevonden voor ":term"',
            'description' => 'Probeer te zoeken met andere trefwoorden of blader door onze categorieën.',
            'show_all' => 'Toon Alle Veelgestelde Vragen',
        ],
    ],
    
    // Categorieën
    'categories' => [
        'all' => 'Alle Vragen',
        'coupons' => 'Coupons & Deals',
        'cashback' => 'Cashback & Beloningen',
        'affiliate' => 'Affiliate Programma',
        'account' => 'Account & Technisch',
        'earning' => 'Geld Verdienen',
    ],
    
    // Vragen en antwoorden - Coupons & Deals
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => 'Hoe gebruik ik coupons van ' . config('app.name') . '?',
                'description' => 'Onze coupons gebruiken is eenvoudig! Volg deze stappen:',
                'steps' => [
                    'Vind een coupon voor uw favoriete woondecoratiewinkel',
                    'Klik op de "Code Ontvangen" of "Bekijk Deal" knop',
                    'U wordt doorgestuurd naar de website van de winkel',
                    'Voeg artikelen toe aan uw winkelwagen',
                    'Voer bij het afrekenen de couponcode in het veld voor promotiecodes in',
                    'Rond uw aankoop af en geniet van de besparingen!',
                ],
                'pro_tip' => [
                    'title' => 'Pro Tip',
                    'description' => 'Sommige deals zijn automatisch - klik gewoon door onze link en de korting wordt automatisch toegepast bij het afrekenen!',
                ],
            ],
            'code_not_working' => [
                'title' => 'Waarom werkte mijn couponcode niet?',
                'description' => 'Als een coupon niet werkt, zijn hier de meest voorkomende redenen:',
                'reasons' => [
                    'Verlopen Code' => 'Coupons hebben vervaldata',
                    'Minimale Besteding' => 'Sommige vereisen een minimumbedrag (bijv. €50+)',
                    'Uitgesloten Artikelen' => 'Sale-artikelen of bepaalde merken kunnen zijn uitgesloten',
                    'Eenmalig Gebruik' => 'Eenmalig te gebruiken codes kunnen niet opnieuw worden gebruikt',
                    'Regio Gebonden' => 'Sommige codes werken alleen in specifieke landen',
                    'Al Toegepast' => 'Kan meerdere kortingscodes niet stapelen',
                ],
                'solution' => [
                    'title' => 'Oplossing',
                    'description' => 'Controleer onze website voor de nieuwste codes. Als een code niet werkt, hebben we meestal alternatieven beschikbaar!',
                ],
            ],
            'update_frequency' => [
                'title' => 'Hoe vaak werken jullie coupons bij?',
                'description' => 'We werken onze coupons meerdere keren per dag bij! Hier is ons updateschema:',
                'schedule' => [
                    'Real-time Monitoring' => 'Nieuwe deals toegevoegd zodra ze ontdekt zijn',
                    'Verlopen Codes' => 'Binnen 1 uur na vervaldatum verwijderd',
                    'Wekelijkse Overzichten' => 'Beste deals van de week elke maandag',
                    'Feestdag Specials' => 'Black Friday, Cyber Monday updates per uur',
                ],
                'get_notified' => [
                    'title' => 'Ontvang Meldingen',
                    'description' => 'Abonneer op onze nieuwsbrief of schakel browsermeldingen in om direct updates te ontvangen over nieuwe coupons voor uw favoriete winkels!',
                ],
            ],
            'multiple_coupons' => [
                'title' => 'Kan ik meerdere coupons stapelen?',
                'description' => 'Het hangt af van het beleid van de winkel, maar hier is wat u moet weten:',
                'policies' => [
                    'Meeste Winkels' => 'Staan één kortingscode + gratis verzending toe',
                    'Sommige Winkels' => 'Staan stapelen met cashback aanbiedingen toe',
                    'Zelden Toegestaan' => 'Meerdere kortingscodes',
                    'Controleer Altijd' => 'Het couponbeleid van de winkel',
                ],
                'best_strategy' => [
                    'title' => 'Beste Strategie',
                    'description' => 'Gebruik onze :code filter om de beste enkele coupon te vinden die u maximale besparingen geeft zonder te hoeven stapelen.',
                ],
            ],
        ],
        
        'cashback' => [
            'how_it_works' => [
                'title' => 'Hoe werkt cashback?',
                'description' => 'Cashback is geld dat u terugverdient op aankopen gedaan via onze links:',
                'steps' => [
                    'Maak een gratis ' . config('app.name') . ' account aan',
                    'Vind een winkel die cashback aanbiedt',
                    'Klik op de "Activeer Cashback" knop',
                    'Winkel normaal op de website van de winkel',
                    'Uw aankoop wordt automatisch gevolgd',
                    'Cashback verschijnt binnen 24-48 uur in uw account',
                    'Neem geld op zodra u het minimumbedrag van €10 heeft bereikt',
                ],
                'example' => [
                    'title' => 'Voorbeeld',
                    'description' => 'Koop een lamp van €200 met 5% cashback = €10 terug in uw portemonnee!',
                ],
            ],
            'timeline' => [
                'title' => 'Hoe lang duurt het voordat cashback zichtbaar is?',
                'description' => 'Hier is de typische cashback tijdlijn:',
                'stages' => [
                    'In Afwachting' => 'Verschijnt binnen 24-48 uur na aankoop',
                    'Bevestigd' => '30-90 dagen (na retourperiode van winkel)',
                    'Betaalbaar' => 'Beschikbaar voor opname na bevestiging',
                    'Opname' => 'Verwerkt binnen 3-5 werkdagen',
                ],
                'note' => [
                    'title' => 'Let op',
                    'description' => 'Sommige winkels hebben langere bevestigingsperioden, vooral voor meubels en grote artikelen met langere retourtermijnen.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => 'Kan ik cashback combineren met coupons?',
                'answer' => 'Ja! Dit is waar u besparingen maximaliseert:',
                'tips' => [
                    'Gebruik altijd een couponcode bij het afrekenen',
                    'Zorg ervoor dat cashback is geactiveerd voordat u doorklikt',
                    'U bespaart direct met de coupon EN verdient cashback',
                    'Sommige winkels bieden bonus cashback met specifieke coupons',
                ],
                'double_dip' => [
                    'title' => 'Dubbel Profijt Strategie',
                    'description' => 'Gebruik coupon :code voor 20% korting + 5% cashback = totale besparing van 25%!',
                ],
            ],
        ],
        
        'affiliate' => [
            'become_affiliate' => [
                'title' => 'Hoe word ik een ' . config('app.name') . ' affiliate?',
                'description' => 'Word lid van ons affiliate programma en verdien commissies:',
                'steps' => [
                    'Meld u aan op ons Affiliate Portaal',
                    'Word goedgekeurd (meestal binnen 24 uur)',
                    'Krijg toegang tot uw unieke affiliate links',
                    'Deel links op uw blog, sociale media of website',
                    'Verdien commissies op doorverwezen verkopen',
                    'Ontvang maandelijkse uitbetaling via PayPal of bankoverschrijving',
                ],
                'commission_rates' => [
                    'title' => 'Commissietarieven',
                    'description' => 'Verdien 5-15% op verkopen, afhankelijk van de winkel en uw prestatieniveau.',
                ],
            ],
            'requirements' => [
                'title' => 'Wat zijn de vereisten om lid te worden?',
                'description' => 'Basisvereisten voor ons affiliate programma:',
                'list' => [
                    'Actieve website, blog of sociale media met woondecoratie/meubilair content',
                    'Minimaal 1.000 maandelijkse bezoekers (of 5.000 sociale media volgers)',
                    'Content moet familie-vriendelijk en relevant zijn',
                    'Geen spam of verboden content',
                    'Naleving van FTC openbaarmakingsvereisten',
                ],
                'bonus' => [
                    'title' => 'Bonus',
                    'description' => 'Woondecoratie influencers, interieurdesign bloggers en DIY contentmakers krijgen prioriteit bij goedkeuring!',
                ],
            ],
            'earnings_potential' => [
                'title' => 'Hoeveel kan ik verdienen als affiliate?',
                'description' => 'Verdiensten variëren op basis van uw verkeer en promotiestrategie:',
                'types' => [
                    'Standaard Commissie' => '5% op alle doorverwezen verkopen',
                    'Prestatiebonussen' => 'Tot 15% voor top presteerders',
                    'Terugkerende Commissies' => '2% op abonnementsverlengingen',
                    'Bonus Uitbetalingen' => 'Speciale promoties en wedstrijden',
                ],
                'top_earners' => [
                    'title' => 'Topverdienders',
                    'description' => 'Onze best verdienende affiliates maken €5.000+ per maand met het promoten van woondecoratie deals!',
                ],
            ],
        ],
        
        'account' => [
            'free_account' => [
                'title' => 'Is een account aanmaken gratis?',
                'answer' => 'Absoluut! 100% gratis voor altijd.',
                'description' => 'Dit krijgt u met een gratis account:',
                'benefits' => [
                    'Volg uw cashback verdiensten',
                    'Bewaar favoriete coupons en winkels',
                    'Ontvang gepersonaliseerde deal meldingen',
                    'Word lid van ons beloningsprogramma',
                    'Krijg toegang tot exclusieve leden-only deals',
                    'Verdien verwijzingsbonussen',
                ],
                'conclusion' => 'Geen creditcard vereist. Geen verborgen kosten. Gewoon pure besparingen!',
            ],
            'tracking_issues' => [
                'title' => 'Waarom wordt mijn aankoop niet gevolgd?',
                'description' => 'Als uw aankoop niet wordt gevolgd, probeer dan deze oplossingen:',
                'solutions' => [
                    'Wis Cookies' => 'Klik altijd via onze link - typ URL\'s niet direct in',
                    'Schakel Ad Blockers Uit' => 'Sommige blokkeren trackingscripts',
                    'Rond Aankoop Af' => 'Moet afrekenen in dezelfde browsersessie voltooien',
                    'Controleer Geschiktheid' => 'Sommige artikelen zijn uitgesloten van cashback',
                    'Wacht 48 Uur' => 'Tracking kan tot 2 dagen duren om te verschijnen',
                ],
                'need_help' => [
                    'title' => 'Hulp Nodig?',
                    'description' => 'Neem contact op met ondersteuning met uw bestelgegevens en we zullen het handmatig voor u volgen!',
                ],
            ],
        ],
        
        'earning' => [
            'ways_to_earn' => [
                'title' => 'Hoe kan ik geld verdienen met ' . config('app.name') . '?',
                'description' => 'Er zijn meerdere manieren om te verdienen met ons:',
                'methods' => [
                    'Cashback' => 'Verdien op uw eigen aankopen',
                    'Affiliate Programma' => 'Verdien commissies met het promoten van deals',
                    'Verwijzingsprogramma' => 'Verdien €5 voor elke vriend die zich aanmeldt en een aankoop doet',
                    'Contentmaker' => 'Deel dealtips en verdien bonussen',
                    'Winkel Ambassadeur' => 'Speciale programma\'s voor topwinkels',
                ],
                'pro_tip' => [
                    'title' => 'Pro Tip',
                    'description' => 'Word lid van alle programma\'s tegelijkertijd om uw verdienpotentieel te maximaliseren!',
                ],
            ],
            'payment_details' => [
                'title' => 'Wanneer en hoe word ik uitbetaald?',
                'description' => 'Ons betalingsschema en methoden:',
                'details' => [
                    'Betalingsschema' => 'Maandelijks, rond de 15e',
                    'Minimum Uitbetaling' => '€10 voor cashback, €50 voor affiliates',
                    'Betalingsmethoden' => 'PayPal, Directe Storting, Cadeaubonnen',
                    'Verwerkingstijd' => '3-5 werkdagen na aanvraag',
                    'Belastingformulieren' => 'Jaaropgave voor verdiensten boven €600/jaar',
                ],
                'conclusion' => 'Alle betalingen zijn veilig en gedekt door onze betalingsgarantie.',
            ],
        ],
    ],
    
    // Hoe het werkt sectie
    'how_it_works' => [
        'title' => 'Hoe ' . config('app.name') . ' Werkt',
        'description' => 'Uw gids voor het maximaliseren van besparingen op woondecoratie aankopen',
        'steps' => [
            [
                'title' => 'Vind Deals',
                'description' => 'Blader door duizenden coupons en cashback aanbiedingen van top woondecoratie merken.',
            ],
            [
                'title' => 'Klik & Winkel',
                'description' => 'Klik door onze links om besparingen te activeren en winkel direct op merkwebsites.',
            ],
            [
                'title' => 'Bespaar Geld',
                'description' => 'Gebruik couponcodes bij het afrekenen en verdien cashback op in aanmerking komende aankopen.',
            ],
            [
                'title' => 'Verdien Beloningen',
                'description' => 'Word lid van ons affiliate programma of verwijzingsprogramma om nog meer te verdienen.',
            ],
        ],
    ],
    
    // Call to action
    'cta' => [
        'title' => 'Klaar om te Beginnen met Besparen?',
        'description' => 'Word lid van duizenden slimme shoppers die dagelijks besparen op woondecoratie. Of u nu winkelt voor meubels, decoratie of DIY benodigdheden, ' . config('app.name') . ' helpt u de beste deals te krijgen.',
        'join_button' => 'Word Gratis Lid & Begin met Besparen',
        'browse_button' => 'Bekijk Nieuwste Coupons',
        'security_note' => '100% Veilig • Geen Spam • Altijd Uitschrijfbaar',
    ],
    
    // Aanvullende secties (indien nodig)
    'popular_questions' => [
        'title' => 'Populaire Vragen',
        'most_viewed' => 'Meest Bekeken',
        'recently_added' => 'Recent Toegevoegd',
    ],
    
    'help_center' => [
        'title' => 'Nog Hulp Nodig?',
        'contact_us' => 'Neem Contact Op',
        'live_chat' => 'Live Chat',
        'email_support' => 'E-mail Ondersteuning',
        'response_time' => 'Gemiddelde Reactietijd: 2 uur',
    ],
    
    'related_topics' => [
        'title' => 'Gerelateerde Onderwerpen',
        'privacy_policy' => 'Privacybeleid',
        'terms_of_service' => 'Servicevoorwaarden',
        'affiliate_disclosure' => 'Affiliate Openbaarmaking',
        'cookie_policy' => 'Cookiebeleid',
    ],
    
    'accessibility' => [
        'keyboard_navigation' => 'Gebruik Tab-toets om door veelgestelde vragen te navigeren, Enter om uit te vouwen, Esc om te sluiten',
        'screen_reader' => 'Schermlezer vriendelijk',
        'high_contrast' => 'Hoog contrast modus beschikbaar',
    ],
];