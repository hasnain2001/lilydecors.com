<?php

return [
    // Meta-taggar
    'meta' => [
        'title' => 'Vanliga Frågor - ' . config('app.name') . ' Kuponger & Erbjudanden',
        'description' => 'Hitta svar om att använda kuponger, tjäna cashback, affiliate-marknadsföring och mer på ' . config('app.name') . '. Din destination för heminredningsbesparingar!',
        'keywords' => 'FAQ, vanliga frågor, kuponger, erbjudanden, cashback, affiliate-marknadsföring, rabattkoder, heminredningsbesparingar',
    ],
    
    // Hero-sektion
    'hero' => [
        'title' => 'Vanliga Frågor',
        'description' => 'Allt du behöver veta om att hitta de bästa kupongerna, tjäna cashback och maximera dina besparingar på heminredning med ' . config('app.name') . '!',
        'badge' => 'Spara upp till 70% med våra exklusiva kuponger',
    ],
    
    // Statistikbanner
    'stats' => [
        'active_coupons' => '10 000+',
        'active_coupons_label' => 'Aktiva Kuponger',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Partnervarumärken',
        'saved_amount' => '2M+ SEK',
        'saved_amount_label' => 'Sparat av våra användare',
        'happy_members' => '100 000+',
        'happy_members_label' => 'Nöjda Medlemmar',
    ],
    
    // Sökfält
    'search' => [
        'placeholder' => 'Sök efter svar... Prova \'cashback\', \'utgången kupong\', \'affiliate\', \'hur man använder\'...',
        'no_results' => [
            'title' => 'Inga resultat hittades för ":term"',
            'description' => 'Försök söka med andra nyckelord eller bläddra bland våra kategorier.',
            'show_all' => 'Visa alla FAQ',
        ],
    ],
    
    // Kategorier
    'categories' => [
        'all' => 'Alla Frågor',
        'coupons' => 'Kuponger & Erbjudanden',
        'cashback' => 'Cashback & Belöningar',
        'affiliate' => 'Affiliate-program',
        'account' => 'Konto & Tekniskt',
        'earning' => 'Tjäna Pengar',
    ],
    
    // Frågor och svar - Kuponger & Erbjudanden
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => 'Hur använder jag kuponger från ' . config('app.name') . '?',
                'description' => 'Att använda våra kuponger är enkelt! Följ dessa steg:',
                'steps' => [
                    'Hitta en kupong för din favoritbutik inom heminredning',
                    'Klicka på "Hämta kod" eller "Hämta erbjudande"',
                    'Du omdirigeras till butikens webbplats',
                    'Lägg varor i varukorgen',
                    'Ange kupongkoden i fältet för kampanjkod i kassan',
                    'Slutför ditt köp och njut av besparingarna!',
                ],
                'pro_tip' => [
                    'title' => 'Proffstips',
                    'description' => 'Vissa erbjudanden är automatiska - klicka bara på vår länk så tillämpas rabatten automatiskt i kassan!',
                ],
            ],
            'code_not_working' => [
                'title' => 'Varför fungerade inte min kupongkod?',
                'description' => 'Om en kupong inte fungerar är här de vanligaste orsakerna:',
                'reasons' => [
                    'Utgången kod' => 'Kuponger har utgångsdatum',
                    'Minsta köpbelopp' => 'Vissa kräver ett minimibelopp (t.ex. 500 kr+)',
                    'Exkluderade varor' => 'Reavaror eller vissa varumärken kan vara undantagna',
                    'Engångsanvändning' => 'Engångskoder kan inte återanvändas',
                    'Regionsspärr' => 'Vissa koder fungerar bara i specifika länder',
                    'Redan använd' => 'Kan inte kombinera flera procentuella rabattkoder',
                ],
                'solution' => [
                    'title' => 'Lösning',
                    'description' => 'Kolla vår webbplats för de senaste koderna. Om en inte fungerar har vi vanligtvis alternativ tillgängliga!',
                ],
            ],
            'update_frequency' => [
                'title' => 'Hur ofta uppdaterar ni era kuponger?',
                'description' => 'Vi uppdaterar våra kuponger flera gånger dagligen! Här är vårt uppdateringsschema:',
                'schedule' => [
                    'Realtidsövervakning' => 'Nya erbjudanden läggs till så snart de upptäcks',
                    'Utgångna koder' => 'Tas bort inom 1 timme efter utgång',
                    'Veckosammanställningar' => 'Veckans bästa erbjudanden varje måndag',
                    'Helgspecialer' => 'Black Friday, Cyber Monday uppdateras varje timme',
                ],
                'get_notified' => [
                    'title' => 'Få notiser',
                    'description' => 'Prenumerera på vårt nyhetsbrev eller aktivera webbläsarnotiser för att få omedelbara uppdateringar om nya kuponger för dina favoritbutiker!',
                ],
            ],
            'multiple_coupons' => [
                'title' => 'Kan jag kombinera flera kuponger?',
                'description' => 'Det beror på butikens policy, men här är vad du behöver veta:',
                'policies' => [
                    'De flesta butiker' => 'Tillåter en procentuell rabattkod + fri frakt',
                    'Vissa butiker' => 'Tillåter kombination med cashback-erbjudanden',
                    'Sällan tillåtet' => 'Flera procentuella rabattkuponger',
                    'Kontrollera alltid' => 'Butikens sida med kupongpolicy',
                ],
                'best_strategy' => [
                    'title' => 'Bästa strategin',
                    'description' => 'Använd vårt :code-filter för att hitta den bästa enskilda kupongen som ger dig maximal besparing utan att behöva kombinera.',
                ],
            ],
        ],
        
        'cashback' => [
            'how_it_works' => [
                'title' => 'Hur fungerar cashback?',
                'description' => 'Cashback är pengar du tjänar tillbaka på köp gjorda via våra länkar:',
                'steps' => [
                    'Registrera dig för ett gratis ' . config('app.name') . '-konto',
                    'Hitta en butik som erbjuder cashback',
                    'Klicka på "Aktivera cashback"-knappen',
                    'Handla som vanligt på butikens webbplats',
                    'Ditt köp spåras automatiskt',
                    'Cashback visas på ditt konto inom 24-48 timmar',
                    'Ta ut när du når 100 kr i minimum',
                ],
                'example' => [
                    'title' => 'Exempel',
                    'description' => 'Köp en lampa för 2000 kr med 5% cashback = 100 kr tillbaka i fickan!',
                ],
            ],
            'timeline' => [
                'title' => 'Hur lång tid tar det för cashback att visas?',
                'description' => 'Här är den typiska cashback-tidslinjen:',
                'stages' => [
                    'Väntande' => 'Visas inom 24-48 timmar efter köp',
                    'Bekräftad' => '30-90 dagar (efter butikens returperiod)',
                    'Uttagbar' => 'Tillgänglig för uttag när den är bekräftad',
                    'Uttag' => 'Behandlas inom 3-5 arbetsdagar',
                ],
                'note' => [
                    'title' => 'Notera',
                    'description' => 'Vissa butiker har längre bekräftelseperioder, särskilt för möbler och större artiklar med längre returtider.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => 'Kan jag kombinera cashback med kuponger?',
                'answer' => 'Ja! Det är här du maximerar besparingarna:',
                'tips' => [
                    'Använd alltid en kupongkod i kassan',
                    'Se till att cashback är aktiverat innan du klickar dig vidare',
                    'Du sparar direkt med kupongen OCH tjänar cashback',
                    'Vissa butiker erbjuder bonus-cashback med specifika kuponger',
                ],
                'double_dip' => [
                    'title' => 'Dubbeldippsstrategi',
                    'description' => 'Använd kupong :code för 20% rabatt + 5% cashback = totalt 25% besparing!',
                ],
            ],
        ],
        
        'affiliate' => [
            'become_affiliate' => [
                'title' => 'Hur blir jag affiliate hos ' . config('app.name') . '?',
                'description' => 'Gå med i vårt affiliate-program och tjäna provision:',
                'steps' => [
                    'Registrera dig på vår affiliateportal',
                    'Bli godkänd (vanligtvis inom 24 timmar)',
                    'Få tillgång till dina unika affiliatelänkar',
                    'Dela länkar på din blogg, sociala medier eller webbplats',
                    'Tjäna provision på hänvisade försäljningar',
                    'Få betalt månadsvis via PayPal eller banköverföring',
                ],
                'commission_rates' => [
                    'title' => 'Provisionsnivåer',
                    'description' => 'Tjäna 5-15% på försäljning beroende på butik och din prestationsnivå.',
                ],
            ],
            'requirements' => [
                'title' => 'Vilka krav finns för att gå med?',
                'description' => 'Grundläggande krav för vårt affiliate-program:',
                'list' => [
                    'Aktiv webbplats, blogg eller sociala medier med heminredningsinnehåll',
                    'Minst 1 000 månatliga besökare (eller 5 000 följare på sociala medier)',
                    'Innehållet måste vara familjevänligt och relevant',
                    'Ingen spam eller förbjudet innehåll',
                    'Efterlevnad av FTC:s krav på informationsgivning',
                ],
                'bonus' => [
                    'title' => 'Bonus',
                    'description' => 'Heminredningsinfluencers, inredningsbloggare och DIY-innehållsskapare får prioriterad godkännande!',
                ],
            ],
            'earnings_potential' => [
                'title' => 'Hur mycket kan jag tjäna som affiliate?',
                'description' => 'Inkomster varierar beroende på din trafik och marknadsföringsstrategi:',
                'types' => [
                    'Standardprovision' => '5% på all hänvisad försäljning',
                    'Prestationsbonusar' => 'Upp till 15% för toppresterande',
                    'Återkommande provision' => '2% på prenumerationsförnyelser',
                    'Bonusutbetalningar' => 'Speciella kampanjer och tävlingar',
                ],
                'top_earners' => [
                    'title' => 'Toppintjänare',
                    'description' => 'Våra högst tjänande affiliates gör 5 000 kr+ per månad genom att marknadsföra heminredningserbjudanden!',
                ],
            ],
        ],
        
        'account' => [
            'free_account' => [
                'title' => 'Är det gratis att skapa ett konto?',
                'answer' => 'Absolut! 100% gratis för alltid.',
                'description' => 'Här är vad du får med ett gratis konto:',
                'benefits' => [
                    'Spåra dina cashback-intäkter',
                    'Spara favoritkuponger och butiker',
                    'Få personliga erbjudandevarningar',
                    'Gå med i vårt belöningsprogram',
                    'Få tillgång till exklusiva medlemserbjudanden',
                    'Tjäna hänvisningsbonusar',
                ],
                'conclusion' => 'Inget kreditkort krävs. Inga dolda avgifter. Bara rena besparingar!',
            ],
            'tracking_issues' => [
                'title' => 'Varför spåras inte mitt köp?',
                'description' => 'Om ditt köp inte spåras, prova dessa lösningar:',
                'solutions' => [
                    'Rensa cookies' => 'Klicka alltid via vår länk - skriv inte in webbadresser direkt',
                    'Inaktivera annonsblockerare' => 'Vissa blockerar spårningsskript',
                    'Slutför köpet' => 'Måste slutföra köpet i samma webbläsarsession',
                    'Kontrollera behörighet' => 'Vissa artiklar är undantagna från cashback',
                    'Vänta 48 timmar' => 'Spårning kan ta upp till 2 dagar att visas',
                ],
                'need_help' => [
                    'title' => 'Behöver du hjälp?',
                    'description' => 'Kontakta support med dina orderdetaljer så spårar vi det manuellt åt dig!',
                ],
            ],
        ],
        
        'earning' => [
            'ways_to_earn' => [
                'title' => 'Hur kan jag tjäna pengar med ' . config('app.name') . '?',
                'description' => 'Det finns flera sätt att tjäna pengar hos oss:',
                'methods' => [
                    'Cashback' => 'Tjäna på dina egna köp',
                    'Affiliate-program' => 'Tjäna provision genom att marknadsföra erbjudanden',
                    'Hänvisningsprogram' => 'Tjäna 50 kr för varje vän som registrerar sig och gör ett köp',
                    'Innehållsskapare' => 'Skicka in erbjudandetips och tjäna bonusar',
                    'Butiksambassadör' => 'Särskilda program för toppbutiker',
                ],
                'pro_tip' => [
                    'title' => 'Proffstips',
                    'description' => 'Gå med i alla program samtidigt för att maximera din intjäningspotential!',
                ],
            ],
            'payment_details' => [
                'title' => 'När och hur får jag betalt?',
                'description' => 'Vårt betalningsschema och metoder:',
                'details' => [
                    'Betalningsschema' => 'Månadsvis, runt den 15:e',
                    'Minsta utbetalning' => '100 kr för cashback, 500 kr för affiliates',
                    'Betalningsmetoder' => 'PayPal, Banköverföring, Presentkort',
                    'Handläggningstid' => '3-5 arbetsdagar efter begäran',
                    'Skatteformulär' => 'Kontrolluppgift utfärdas för intäkter över 100 kr/år',
                ],
                'conclusion' => 'Alla betalningar är säkra och omfattas av vår betalningsgaranti.',
            ],
        ],
    ],
    
    // Så här fungerar det-sektion
    'how_it_works' => [
        'title' => 'Så här fungerar ' . config('app.name'),
        'description' => 'Din guide till att maximera besparingar på heminredningsköp',
        'steps' => [
            [
                'title' => 'Hitta erbjudanden',
                'description' => 'Bläddra bland tusentals kuponger och cashback-erbjudanden från toppmärken inom heminredning.',
            ],
            [
                'title' => 'Klicka & handla',
                'description' => 'Klicka via våra länkar för att aktivera besparingar och handla direkt på varumärkenas webbplatser.',
            ],
            [
                'title' => 'Spara pengar',
                'description' => 'Använd kupongkoder i kassan och tjäna cashback på berättigade köp.',
            ],
            [
                'title' => 'Tjäna belöningar',
                'description' => 'Gå med i vårt affiliate-program eller hänvisningsprogram för att tjäna ännu mer.',
            ],
        ],
    ],
    
    // Uppmaning till handling
    'cta' => [
        'title' => 'Redo att börja spara?',
        'description' => 'Gå med i tusentals smarta shoppare som sparar på heminredning varje dag. Oavsett om du handlar möbler, inredning eller DIY-tillbehör hjälper ' . config('app.name') . ' dig att få de bästa erbjudandena.',
        'join_button' => 'Gå med gratis & börja spara',
        'browse_button' => 'Bläddra bland senaste kupongerna',
        'security_note' => '100% Säker • Ingen Spam • Avsluta prenumeration när som helst',
    ],
    
    // Ytterligare sektioner (om det behövs)
    'popular_questions' => [
        'title' => 'Populära frågor',
        'most_viewed' => 'Mest visade',
        'recently_added' => 'Nyligen tillagda',
    ],
    
    'help_center' => [
        'title' => 'Behöver du fortfarande hjälp?',
        'contact_us' => 'Kontakta oss',
        'live_chat' => 'Livechatt',
        'email_support' => 'E-postsupport',
        'response_time' => 'Genomsnittlig svarstid: 2 timmar',
    ],
    
    'related_topics' => [
        'title' => 'Relaterade ämnen',
        'privacy_policy' => 'Integritetspolicy',
        'terms_of_service' => 'Användarvillkor',
        'affiliate_disclosure' => 'Affiliate-upplysning',
        'cookie_policy' => 'Cookiepolicy',
    ],
    
    'accessibility' => [
        'keyboard_navigation' => 'Använd Tab-tangenten för att navigera i FAQ, Enter för att expandera, Esc för att stänga',
        'screen_reader' => 'Skärmläsarvänlig',
        'high_contrast' => 'Högkontrastläge tillgängligt',
    ],
];