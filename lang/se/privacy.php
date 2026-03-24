<?php

return [
    // Meta-taggar
    'meta' => [
        'title' => 'Integritetspolicy | ' . config('app.name'),
        'description' => 'Läs vår integritetspolicy för att förstå hur vi hanterar dina data och skyddar din integritet.',
        'keywords' => 'integritet, policy, dataskydd, datasäkerhet, GDPR, cookies',
        'author' => config('app.name'),
    ],
    
    // Header-sektion
    'header' => [
        'title' => 'Integritetspolicy',
        'subtitle' => 'Din integritet är viktig för oss. Lär dig hur vi skyddar och hanterar dina data.',
        'last_updated' => 'Senast uppdaterad',
    ],
    
    // Huvudkort
    'card' => [
        'title' => 'Ditt Dataskydd & Din Integritet',
    ],
    
    // Alert-sektion
    'alert' => [
        'title' => 'Transparens är viktigt',
        'description' => 'Denna policy förklarar hur vi samlar in, använder och skyddar din information på ett tydligt och enkelt sätt.',
    ],
    
    // Policysektioner
    'sections' => [
        'collection' => [
            'title' => 'Information Vi Samlar In',
            'intro' => 'Vi samlar in information som hjälper oss att tillhandahålla bättre tjänster och förbättra din upplevelse. Detta inkluderar:',
            'types' => [
                'Personlig information' => 'Namn, e-postadress och kontaktuppgifter när du registrerar dig eller kontaktar oss',
                'Användningsdata' => 'Hur du interagerar med vår webbplats, besökta sidor och använda funktioner',
                'Teknisk information' => 'Webbläsartyp, enhetsinformation och IP-adress i säkerhetssyfte',
                'Kommunikationsdata' => 'Meddelanden, feedback och förfrågningar du skickar till oss',
            ],
            'conclusion' => 'Vi samlar endast in information som är nödvändig för att tillhandahålla våra tjänster och förbättra din upplevelse.',
        ],
        
        'usage' => [
            'title' => 'Hur Vi Använder Din Information',
            'intro' => 'Din information hjälper oss att leverera utmärkt service och förbättra vår plattform. Vi använder den för att:',
            'purposes' => [
                'Svara på dina förfrågningar och tillhandahålla personlig kundsupport',
                'Behandla transaktioner och leverera de tjänster du begär',
                'Förbättra vår webbplats funktionalitet och användarupplevelse',
                'Skicka viktiga uppdateringar om våra tjänster (du kan avanmäla dig när som helst)',
                'Skydda mot bedrägerier och säkerställa plattformssäkerhet',
                'Analysera användningsmönster för att förbättra våra erbjudanden',
            ],
            'important_note' => 'Vi säljer inte och kommer aldrig att sälja din personliga information till tredje part.',
        ],
        
        'security' => [
            'title' => 'Datasäkerhet & Skydd',
            'intro' => 'Vi tar din datasäkerhet på allvar och implementerar robusta åtgärder för att skydda den:',
            'measures' => [
                'Kryptering' => 'All känslig data är krypterad under överföring och lagring',
                'Säkra servrar' => 'Din information lagras på skyddade servrar med begränsad åtkomst',
                'Åtkomstkontroller' => 'Strikta interna policyer styr vem som kan komma åt dina data',
                'Regelbundna granskningar' => 'Vi genomför säkerhetsbedömningar för att upprätthålla skyddsstandarder',
                'Medarbetarutbildning' => 'Vårt team är utbildat i dataskyddsrutiner',
            ],
            'disclaimer' => 'Även om vi implementerar branschstandard säkerhetsåtgärder är ingen överföringsmetod över internet 100% säker. Vi rekommenderar att du använder starka lösenord och håller din inloggningsinformation konfidentiell.',
        ],
        
        'cookies' => [
            'title' => 'Cookies & Spårningsteknik',
            'intro' => 'Vi använder cookies och liknande teknik för att förbättra din webbupplevelse:',
            'types' => [
                'Nödvändiga cookies' => 'Krävs för att webbplatsen ska fungera korrekt',
                'Prestandacookies' => 'Hjälper oss förstå hur besökare använder vår webbplats',
                'Funktionella cookies' => 'Kommer ihåg dina preferenser och inställningar',
                'Analytics-cookies' => 'Ger insikter för att förbättra våra tjänster',
            ],
            'management' => 'Du kan hantera cookie-preferenser via dina webbläsarinställningar. Att inaktivera nödvändiga cookies kan dock påverka webbplatsens funktionalitet.',
        ],
        
        'third_party' => [
            'title' => 'Tredjepartslänkar & Tjänster',
            'intro' => 'Vår webbplats kan innehålla länkar till externa webbplatser och tjänster. Viktiga noteringar:',
            'notes' => [
                'Vi väljer noggrant våra partners men kan inte kontrollera deras integritetspraxis',
                'Externa webbplatser har sina egna integritetspolicyer som vi inte kontrollerar',
                'Vi ansvarar inte för innehåll eller praxis på länkade webbplatser',
                'Vi rekommenderar att du granskar tredje parts integritetspolicyer innan du delar information',
            ],
            'disclaimer' => 'När du lämnar vår webbplats via dessa länkar gäller inte längre vår integritetspolicy för dina aktiviteter på dessa externa webbplatser.',
        ],
        
        'updates' => [
            'title' => 'Policyuppdateringar & Ändringar',
            'intro' => 'Vi kan uppdatera denna integritetspolicy för att återspegla förändringar i vår praxis eller juridiska krav:',
            'procedures' => [
                'Betydande ändringar kommer att meddelas via e-post eller framträdande webbplatsmeddelande',
                'Fortsatt användning av våra tjänster efter ändringar utgör godkännande',
                'Vi upprätthåller versionshistorik över alla policyuppdateringar',
                'Datumet "Senast uppdaterad" längst upp indikerar den senaste revisionen',
            ],
            'recommendation' => 'Vi uppmuntrar dig att regelbundet granska denna policy för att hålla dig informerad om hur vi skyddar din information.',
        ],
        
        'contact' => [
            'title' => 'Frågor & Kontaktinformation',
            'intro' => 'Vi är engagerade i att vara transparenta om vår integritetspraxis. Om du har frågor eller funderingar:',
            'details' => [
                'E-post' => '<a href="mailto:kontakt@lilydecors.se" class="contact-email">kontakt@lilydecors.se</a>',
                'Dataskyddsombud' => 'Johan Svensson',
                'Postadress' => 'Integritetsgatan 123, 112 34 Stockholm',
                'Svarstid' => 'Vi strävar efter att svara inom 48 timmar',
            ],
            'rights' => 'Du har rätt att få tillgång till, korrigera eller radera din personliga information. Kontakta oss för att utöva dessa rättigheter.',
        ],
    ],
    
    // Tillbaka-knapp
    'back_button' => 'Tillbaka till startsidan',
    
    // Ytterligare termer för cookie-medgivandebanner (om det behövs)
    'cookie_consent' => [
        'title' => 'Cookie-inställningar',
        'message' => 'Vi använder cookies för att förbättra din webbupplevelse och analysera vår trafik.',
        'accept_all' => 'Acceptera alla',
        'reject_all' => 'Avvisa alla',
        'manage' => 'Hantera inställningar',
        'necessary' => 'Nödvändiga',
        'analytics' => 'Analytics',
        'marketing' => 'Marknadsföring',
        'preferences' => 'Preferenser',
        'save' => 'Spara inställningar',
    ],
    
    // Datarättigheter (GDPR-specifikt)
    'data_rights' => [
        'title' => 'Dina Datarättigheter',
        'access' => 'Rätt till tillgång',
        'rectification' => 'Rätt till rättelse',
        'erasure' => 'Rätt till radering (rätten att bli bortglömd)',
        'restriction' => 'Rätt till begränsning av behandling',
        'portability' => 'Rätt till dataportabilitet',
        'object' => 'Rätt att invända',
        'description' => 'Enligt GDPR och andra dataskyddslagar har du specifika rättigheter gällande dina personuppgifter.',
    ],
    
    // Datalagring
    'retention' => [
        'title' => 'Datalagring',
        'description' => 'Vi behåller dina personuppgifter endast så länge som är nödvändigt för att uppfylla de ändamål för vilka de samlades in.',
        'periods' => [
            'account_data' => 'Kontodata: Så länge ditt konto är aktivt',
            'transaction_data' => 'Transaktionsdata: 7 år i skattesyfte',
            'communication_data' => 'Kommunikationsdata: 3 år',
            'analytics_data' => 'Analysdata: 26 månader',
        ],
    ],
    
    // Internationella dataöverföringar
    'international_transfers' => [
        'title' => 'Internationella Dataöverföringar',
        'description' => 'Din information kan överföras till och behandlas i andra länder än ditt eget.',
        'safeguards' => 'Vi implementerar lämpliga skyddsåtgärder för internationella dataöverföringar.',
    ],
    
    // Barns integritet
    'children' => [
        'title' => 'Barns Integritet',
        'description' => 'Våra tjänster riktar sig inte till barn under 16 år. Vi samlar inte medvetet in personlig information från barn.',
        'contact' => 'Om du tror att vi har samlat in information från ett barn, vänligen kontakta oss omedelbart.',
    ],
    
    // Automatiserat beslutsfattande
    'automated_decisions' => [
        'title' => 'Automatiserat Beslutsfattande',
        'description' => 'Vi använder inte automatiskt beslutsfattande eller profilering som har rättslig verkan.',
    ],
    
    // Dataintrångsmeddelande
    'data_breach' => [
        'title' => 'Meddelande om Dataintrång',
        'description' => 'Vid ett dataintrång kommer vi att meddela berörda användare och myndigheter enligt lag.',
    ],
    
    // Spåra inte-signaler
    'do_not_track' => [
        'title' => 'Spåra inte-signaler',
        'description' => 'Vår webbplats svarar inte på Spåra inte-signaler från webbläsare.',
    ],
    
    // Kaliforniska integritetsrättigheter (CCPA)
    'ccpa' => [
        'title' => 'Integritetsrättigheter i Kalifornien',
        'description' => 'Invånare i Kalifornien har ytterligare rättigheter enligt California Consumer Privacy Act (CCPA).',
        'right_to_know' => 'Rätt att veta',
        'right_to_delete' => 'Rätt att radera',
        'right_to_opt_out' => 'Rätt att välja bort försäljning',
        'non_discrimination' => 'Rätt till icke-diskriminering',
    ],
];