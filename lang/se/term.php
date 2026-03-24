<?php

return [
    // Sidans meta
    'title' => 'Användarvillkor',
    'description' => 'Läs våra användarvillkor för att förstå dina rättigheter och skyldigheter när du använder våra tjänster.',
    'keywords' => 'villkor, användarvillkor, användaravtal',
    'author' => 'John Doe',
    
    // Header-sektion
    'header' => [
        'title' => 'Användarvillkor',
        'subtitle' => 'Förstå dina rättigheter och skyldigheter när du använder våra tjänster',
        'last_updated' => 'Senast uppdaterad',
    ],
    
    // Huvudkort
    'card' => [
        'title' => 'Juridiskt avtal & användarvillkor',
    ],
    
    // Alert-sektion
    'alert' => [
        'title' => 'Viktigt:',
        'message' => 'Genom att använda våra tjänster godkänner du dessa villkor. Läs dem noggrant innan du fortsätter.',
    ],
    
    // Sektion 1: Godkännande av villkor
    'section1' => [
        'title' => 'Godkännande av villkor',
        'content' => 'Genom att använda vår webbplats, mobilapplikation eller några tjänster som tillhandahålls av :app_name (gemensamt kallade "Tjänsterna") bekräftar du att du har läst, förstått och godkänt att följa dessa användarvillkor.',
        'warning' => 'Om du inte godkänner någon del av dessa villkor måste du omedelbart sluta använda våra Tjänster.',
    ],
    
    // Sektion 2: Användarens ansvar
    'section2' => [
        'title' => 'Användarens ansvar',
        'intro' => 'Som användare av våra Tjänster är du ensam ansvarig för:',
        'points' => [
            'maintaining_account' => 'Att upprätthålla konfidentialitet och säkerhet för dina kontouppgifter',
            'account_activities' => 'Alla aktiviteter, transaktioner och innehåll kopplat till ditt konto',
            'accurate_information' => 'Att tillhandahålla korrekt, aktuell och fullständig information vid registrering',
            'complying_laws' => 'Att följa alla tillämpliga lokala, regionala, nationella och internationella lagar',
            'third_party_rights' => 'Att din användning av våra Tjänster inte kränker någon tredje parts rättigheter',
        ],
        'notification' => 'Du godkänner att omedelbart meddela oss om obehörig åtkomst till eller användning av ditt konto via <strong>:email</strong>.',
    ],
    
    // Sektion 3: Förbjudna aktiviteter
    'section3' => [
        'title' => 'Förbjudna aktiviteter',
        'intro' => 'När du använder våra Tjänster får du inte delta i någon av följande aktiviteter:',
        'activities' => [
            'illegal' => [
                'title' => 'Olaga aktiviteter',
                'description' => 'Använda våra Tjänster för olagliga ändamål eller i strid med tillämpliga lagar',
            ],
            'unauthorized_access' => [
                'title' => 'Obehörig åtkomst',
                'description' => 'Försöka få obehörig åtkomst till system, konton eller nätverk',
            ],
            'harmful_content' => [
                'title' => 'Skadligt innehåll',
                'description' => 'Publicera, överföra eller dela skadligt, stötande eller upphovsrättsskyddat innehåll',
            ],
            'service_disruption' => [
                'title' => 'Tjänsteavbrott',
                'description' => 'Störa, påverka eller överbelasta Tjänsternas prestanda',
            ],
            'automated_access' => [
                'title' => 'Automatiserad åtkomst',
                'description' => 'Använda bots, skrapningsverktyg eller andra automatiserade metoder för att få åtkomst till våra Tjänster',
            ],
            'commercial_use' => [
                'title' => 'Kommersiell användning',
                'description' => 'Använda våra Tjänster för kommersiella ändamål utan uttryckligt tillstånd',
            ],
        ],
        'warning' => 'Brott mot dessa förbud kan leda till omedelbar avslutning av ditt konto och rättsliga åtgärder.',
    ],
    
    // Sektion 4: Immateriella rättigheter
    'section4' => [
        'title' => 'Immateriella rättigheter',
        'content' => 'Allt innehåll, funktioner och funktionalitet som finns tillgängligt via våra Tjänster, inklusive men inte begränsat till text, grafik, logotyper, ikoner, bilder, ljudklipp, digitala nedladdningar, datakompileringar och programvara, är den exklusiva egendomen för :app_name och dess licensgivare.',
        'protected' => 'Dessa material är skyddade av internationella upphovsrätts-, varumärkes-, patent-, företagshemlighets- och andra immaterialrättsliga lagar.',
        'restrictions' => 'Du får inte:',
        'restriction_points' => [
            'reproduce' => 'Mångfaldiga, distribuera eller skapa härledda verk',
            'modify' => 'Modifiera, anpassa eller baklängeskonstruera någon del av våra Tjänster',
            'remove_notices' => 'Ta bort upphovsrätts-, varumärkes- eller andra äganderättsmeddelanden',
            'unauthorized_use' => 'Använda vår immateriella egendom utan uttryckligt skriftligt tillstånd',
        ],
    ],
    
    // Sektion 5: Garantifriskrivning
    'section5' => [
        'title' => 'Garantifriskrivning',
        'content' => 'Våra Tjänster tillhandahålls "i befintligt skick" och "som tillgängliga" utan garantier av något slag, vare sig uttryckliga eller underförstådda. I den utsträckning som lagen tillåter frånsäger vi oss alla garantier, inklusive men inte begränsat till underförstådda garantier om säljbarhet, lämplighet för ett visst ändamål och icke-intrång.',
        'guarantees_intro' => 'Vi garanterar inte att:',
        'guarantees' => [
            'uninterrupted' => 'Våra Tjänster kommer att vara oavbrutna, säkra eller tillgängliga vid någon specifik tidpunkt eller plats',
            'errors_corrected' => 'Eventuella fel eller brister kommer att åtgärdas',
            'virus_free' => 'Våra Tjänster är fria från virus eller andra skadliga komponenter',
            'meet_requirements' => 'Resultaten av att använda våra Tjänster kommer att uppfylla dina krav',
        ],
        'risk' => 'Din användning av våra Tjänster sker helt på egen risk.',
    ],
    
    // Sektion 6: Ansvarsbegränsning
    'section6' => [
        'title' => 'Ansvarsbegränsning',
        'content' => 'I den maximala utsträckning som tillåts enligt tillämplig lag ska :app_name inte vara ansvarigt för några indirekta, tillfälliga, särskilda, följd- eller straffskadestånd, inklusive utan begränsning:',
        'damages' => [
            'loss_profits' => 'Förlust av vinst, intäkter eller data',
            'loss_use' => 'Förlust av användning, goodwill eller andra immateriella förluster',
            'unauthorized_access' => 'Skador till följd av obehörig åtkomst till eller ändring av dina överföringar',
            'third_party_content' => 'Någon tredje parts beteende eller innehåll på Tjänsterna',
        ],
        'liability_limit' => 'Vårt totala ansvar ska under inga omständigheter överstiga:',
        'liability_amount' => 'eller det belopp du betalat oss under de senaste 12 månaderna, beroende på vilket som är högst.',
    ],
    
    // Sektion 7: Tillämplig lag
    'section7' => [
        'title' => 'Tillämplig lag & jurisdiktion',
        'content' => 'Dessa villkor ska regleras av och tolkas i enlighet med lagarna i :country, utan hänsyn till dess lagkonfliktbestämmelser.',
        'jurisdiction_title' => 'Exklusiv jurisdiktion',
        'jurisdiction_content' => 'Alla rättsliga åtgärder som härrör från eller relaterar till dessa villkor ska inledas uteslutande vid domstolar i :jurisdiction. Du samtycker till sådana domstolars personliga jurisdiktion.',
    ],
    
    // Sektion 8: Ändringar av villkor
    'section8' => [
        'title' => 'Ändringar av villkor',
        'content' => 'Vi förbehåller oss rätten att när som helst ändra dessa villkor.',
        'modification_notice' => 'När vi gör det kommer vi att revidera datumet "senast uppdaterad" högst upp på denna sida. Vi kan också ge ytterligare meddelande (t.ex. genom att lägga till ett uttalande på vår startsida eller skicka ett meddelande till dig). Din fortsatta användning av våra Tjänster efter sådana ändringar utgör ditt godkännande av de nya villkoren.',
    ],
    
    // Sektion 9: Kontaktinformation
    'section9' => [
        'title' => 'Kontaktinformation',
        'intro' => 'För frågor, funderingar eller meddelanden om dessa användarvillkor, vänligen kontakta oss via någon av följande metoder:',
        'buttons' => [
            'email' => 'Mejla juridiska teamet',
            'contact_form' => 'Kontaktformulär',
            'visit_office' => 'Besök vårt kontor',
        ],
        'response_time' => 'Vi svarar vanligtvis på juridiska förfrågningar inom 2-3 arbetsdagar.',
    ],
    
    // Åtgärdsknappar
    'actions' => [
        'back_home' => 'Tillbaka till startsidan',
        'print_terms' => 'Skriv ut villkor',
    ],
];