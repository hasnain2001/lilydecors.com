<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Zásady ochrany osobních údajů | ' . config('app.name'),
        'description' => 'Přečtěte si naše zásady ochrany osobních údajů, abyste porozuměli tomu, jak zacházíme s vašimi údaji a chráníme vaše soukromí.',
        'keywords' => 'soukromí, zásady, ochrana údajů, bezpečnost údajů, GDPR, cookies',
        'author' => config('app.name'),
    ],
    
    // Header section
    'header' => [
        'title' => 'Zásady ochrany osobních údajů',
        'subtitle' => 'Vaše soukromí je pro nás důležité. Zjistěte, jak chráníme a zpracováváme vaše údaje.',
        'last_updated' => 'Naposledy aktualizováno',
    ],
    
    // Main card
    'card' => [
        'title' => 'Vaše ochrana údajů a soukromí',
    ],
    
    // Alert section
    'alert' => [
        'title' => 'Na transparentnosti záleží',
        'description' => 'Tyto zásady jasně a jednoduše vysvětlují, jak shromažďujeme, používáme a chráníme vaše informace.',
    ],
    
    // Policy sections
    'sections' => [
        'collection' => [
            'title' => 'Informace, které shromažďujeme',
            'intro' => 'Shromažďujeme informace, které nám pomáhají poskytovat lepší služby a zlepšovat váš zážitek. Patří sem:',
            'types' => [
                'Osobní údaje' => 'Jméno, e-mailová adresa a kontaktní údaje při registraci nebo kontaktování nás',
                'Údaje o používání' => 'Jak interagujete s naším webem, navštívené stránky a použité funkce',
                'Technické informace' => 'Typ prohlížeče, informace o zařízení a IP adresa pro bezpečnostní účely',
                'Komunikační údaje' => 'Zprávy, zpětná vazba a dotazy, které nám zasíláte',
            ],
            'conclusion' => 'Shromažďujeme pouze informace nezbytné pro poskytování našich služeb a zlepšení vašeho zážitku.',
        ],
        
        'usage' => [
            'title' => 'Jak používáme vaše informace',
            'intro' => 'Vaše informace nám pomáhají poskytovat vynikající služby a zlepšovat naši platformu. Používáme je k:',
            'purposes' => [
                'Odpovídání na vaše dotazy a poskytování personalizované zákaznické podpory',
                'Zpracování transakcí a poskytování služeb, které požadujete',
                'Zlepšování funkčnosti a uživatelského zážitku našeho webu',
                'Zasílání důležitých aktualizací o našich službách (kdykoli se můžete odhlásit)',
                'Ochraně před podvody a zajištění bezpečnosti platformy',
                'Analýze vzorců používání pro vylepšení našich nabídek',
            ],
            'important_note' => 'Vaše osobní údaje neprodáváme a nikdy nebudeme prodávat třetím stranám.',
        ],
        
        'security' => [
            'title' => 'Bezpečnost a ochrana údajů',
            'intro' => 'Bezpečnost vašich údajů bereme vážně a zavádíme robustní opatření k jejich ochraně:',
            'measures' => [
                'Šifrování' => 'Všechny citlivé údaje jsou šifrovány během přenosu a ukládání',
                'Zabezpečené servery' => 'Vaše informace jsou uloženy na chráněných serverech s omezeným přístupem',
                'Omezení přístupu' => 'Přísné interní zásady řídí, kdo může přistupovat k vašim údajům',
                'Pravidelné audity' => 'Provádíme bezpečnostní hodnocení pro udržení standardů ochrany',
                'Školení zaměstnanců' => 'Náš tým je školen v osvědčených postupech ochrany údajů',
            ],
            'disclaimer' => 'Ačkoli zavádíme bezpečnostní opatření na úrovni průmyslového standardu, žádný způsob přenosu přes internet není 100% bezpečný. Doporučujeme používat silná hesla a uchovávat své přihlašovací údaje v tajnosti.',
        ],
        
        'cookies' => [
            'title' => 'Cookies a sledovací technologie',
            'intro' => 'Používáme cookies a podobné technologie pro vylepšení vašeho prohlížení:',
            'types' => [
                'Nezbytné cookies' => 'Vyžadované pro správné fungování webu',
                'Výkonnostní cookies' => 'Pomáhají nám pochopit, jak návštěvníci používají náš web',
                'Funkční cookies' => 'Ukládají vaše preference a nastavení',
                'Analytické cookies' => 'Poskytují informace pro zlepšení našich služeb',
            ],
            'management' => 'Svá nastavení cookies můžete spravovat v nastavení prohlížeče. Vypnutí nezbytných cookies však může ovlivnit funkčnost webu.',
        ],
        
        'third_party' => [
            'title' => 'Odkazy na třetí strany a služby',
            'intro' => 'Náš web může obsahovat odkazy na externí stránky a služby. Důležité informace:',
            'notes' => [
                'Pečlivě vybíráme naše partnery, ale nemůžeme kontrolovat jejich postupy ochrany soukromí',
                'Externí stránky mají vlastní zásady ochrany soukromí, které nekontrolujeme',
                'Neodpovídáme za obsah nebo postupy odkazovaných webů',
                'Doporučujeme přečíst si zásady ochrany soukromí třetích stran před poskytnutím informací',
            ],
            'disclaimer' => 'Jakmile opustíte náš web prostřednictvím těchto odkazů, naše zásady ochrany osobních údajů se již nevztahují na vaše aktivity na těchto externích stránkách.',
        ],
        
        'updates' => [
            'title' => 'Aktualizace a změny zásad',
            'intro' => 'Tyto zásady můžeme aktualizovat, aby odrážely změny v našich postupech nebo zákonných požadavcích:',
            'procedures' => [
                'Významné změny budou oznámeny e-mailem nebo výrazným oznámením na webu',
                'Další používání našich služeb po změnách představuje souhlas',
                'Udržujeme historii verzí všech aktualizací zásad',
                'Datum "Naposledy aktualizováno" v záhlaví označuje nejnovější revizi',
            ],
            'recommendation' => 'Doporučujeme pravidelně kontrolovat tyto zásady, abyste byli informováni o tom, jak chráníme vaše informace.',
        ],
        
        'contact' => [
            'title' => 'Dotazy a kontaktní informace',
            'intro' => 'Zavazujeme se k transparentnosti ohledně našich postupů ochrany soukromí. Pokud máte dotazy nebo obavy:',
            'details' => [
                'E-mail' => '<a href="mailto:contact@lilydecors.com" class="contact-email">contact@lilydecors.com</a>',
                'Pověřenec pro ochranu osobních údajů' => 'Jan Novák',
                'Poštovní adresa' => '123 Privacy Lane, Data City, DC 12345',
                'Doba odezvy' => 'Snažíme se odpovědět do 48 hodin',
            ],
            'rights' => 'Máte právo na přístup, opravu nebo vymazání svých osobních údajů. Kontaktujte nás pro uplatnění těchto práv.',
        ],
    ],
    
    // Back button
    'back_button' => 'Zpět na hlavní stránku',
    
    // Additional terms for cookie consent banner (if needed)
    'cookie_consent' => [
        'title' => 'Nastavení cookies',
        'message' => 'Používáme cookies pro vylepšení vašeho prohlížení a analýzu návštěvnosti.',
        'accept_all' => 'Přijmout vše',
        'reject_all' => 'Odmítnout vše',
        'manage' => 'Spravovat nastavení',
        'necessary' => 'Nezbytné',
        'analytics' => 'Analytické',
        'marketing' => 'Marketingové',
        'preferences' => 'Preference',
        'save' => 'Uložit nastavení',
    ],
    
    // Data rights (GDPR specific)
    'data_rights' => [
        'title' => 'Vaše práva k údajům',
        'access' => 'Právo na přístup',
        'rectification' => 'Právo na opravu',
        'erasure' => 'Právo na výmaz (právo být zapomenut)',
        'restriction' => 'Právo na omezení zpracování',
        'portability' => 'Právo na přenositelnost údajů',
        'object' => 'Právo vznést námitku',
        'description' => 'Podle GDPR a dalších zákonů o ochraně údajů máte specifická práva týkající se vašich osobních údajů.',
    ],
    
    // Data retention
    'retention' => [
        'title' => 'Uchovávání údajů',
        'description' => 'Vaše osobní údaje uchováváme pouze po dobu nezbytnou pro splnění účelů, pro které byly shromážděny.',
        'periods' => [
            'account_data' => 'Údaje o účtu: Po dobu aktivity účtu',
            'transaction_data' => 'Transakční údaje: 7 let pro daňové účely',
            'communication_data' => 'Komunikační údaje: 3 roky',
            'analytics_data' => 'Analytické údaje: 26 měsíců',
        ],
    ],
    
    // International data transfers
    'international_transfers' => [
        'title' => 'Mezinárodní přenosy údajů',
        'description' => 'Vaše informace mohou být přeneseny a zpracovávány v zemích mimo vaši zemi.',
        'safeguards' => 'Pro mezinárodní přenosy údajů zavádíme vhodné záruky.',
    ],
    
    // Children's privacy
    'children' => [
        'title' => 'Soukromí dětí',
        'description' => 'Naše služby nejsou určeny dětem mladším 16 let. Vědomě neshromažďujeme osobní údaje od dětí.',
        'contact' => 'Pokud se domníváte, že jsme shromáždili informace od dítěte, neprodleně nás kontaktujte.',
    ],
    
    // Automated decision making
    'automated_decisions' => [
        'title' => 'Automatizované rozhodování',
        'description' => 'Nepoužíváme automatizované rozhodování nebo profilování, které by mělo právní účinky.',
    ],
    
    // Data breach notification
    'data_breach' => [
        'title' => 'Oznámení o narušení údajů',
        'description' => 'V případě narušení údajů oznámíme dotčené uživatele a úřady, jak vyžaduje zákon.',
    ],
    
    // Do Not Track signals
    'do_not_track' => [
        'title' => 'Signály Do Not Track',
        'description' => 'Náš web nereaguje na signály Do Not Track z prohlížečů.',
    ],
    
    // California privacy rights (CCPA)
    'ccpa' => [
        'title' => 'Práva na ochranu soukromí v Kalifornii',
        'description' => 'Obyvatelé Kalifornie mají další práva podle zákona CCPA.',
        'right_to_know' => 'Právo vědět',
        'right_to_delete' => 'Právo na vymazání',
        'right_to_opt_out' => 'Právo odhlásit se z prodeje',
        'non_discrimination' => 'Právo na nediskriminaci',
    ],
];