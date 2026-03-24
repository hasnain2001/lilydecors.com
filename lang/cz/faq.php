<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Často kladené dotazy - ' . config('app.name') . ' Kupóny a nabídky',
        'description' => 'Najděte odpovědi na otázky o používání kupónů, získávání cashbacku, affiliate marketingu a další na ' . config('app.name') . '. Vaše cílová destinace pro úspory při zařizování domova!',
        'keywords' => 'FAQ, kupóny, nabídky, cashback, affiliate marketing, slevové kódy, úspory při bydlení',
    ],
    
    // Hero section
    'hero' => [
        'title' => 'Často kladené dotazy',
        'description' => 'Vše, co potřebujete vědět o hledání nejlepších kupónů, získávání cashbacku a maximalizaci úspor při zařizování domova s ' . config('app.name') . '!',
        'badge' => 'Ušetřete až 70 % s našimi exkluzivními kupóny',
    ],
    
    // Statistics banner
    'stats' => [
        'active_coupons' => '10 000+',
        'active_coupons_label' => 'Aktivních kupónů',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Partnerských značek',
        'saved_amount' => '2 000 000 Kč+',
        'saved_amount_label' => 'Ušetřeno našimi uživateli',
        'happy_members' => '100 000+',
        'happy_members_label' => 'Spokojených členů',
    ],
    
    // Search bar
    'search' => [
        'placeholder' => 'Hledat odpovědi... Zkuste \'cashback\', \'prošlý kupón\', \'affiliate\', \'jak použít\'...',
        'no_results' => [
            'title' => 'Pro ":term" nebyly nalezeny žádné výsledky',
            'description' => 'Zkuste hledat s jinými klíčovými slovy nebo procházejte naše kategorie.',
            'show_all' => 'Zobrazit všechny FAQ',
        ],
    ],
    
    // Categories
    'categories' => [
        'all' => 'Všechny otázky',
        'coupons' => 'Kupóny a nabídky',
        'cashback' => 'Cashback a odměny',
        'affiliate' => 'Affiliate program',
        'account' => 'Účet a technika',
        'earning' => 'Vydělávání peněz',
    ],
    
    // Questions and answers - Coupons & Deals
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => 'Jak používat kupóny z ' . config('app.name') . '?',
                'description' => 'Používání našich kupónů je snadné! Postupujte podle těchto kroků:',
                'steps' => [
                    'Najděte kupón pro váš oblíbený obchod s bydlením',
                    'Klikněte na tlačítko "Získat kód" nebo "Zobrazit nabídku"',
                    'Budete přesměrováni na web obchodu',
                    'Přidejte zboží do košíku',
                    'Při placení zadejte kupónový kód do pole pro propagační kód',
                    'Dokončete nákup a užijte si úspory!',
                ],
                'pro_tip' => [
                    'title' => 'Profesionální tip',
                    'description' => 'Některé nabídky jsou automatické - stačí kliknout na náš odkaz a sleva se uplatní automaticky při placení!',
                ],
            ],
            'code_not_working' => [
                'title' => 'Proč můj kupónový kód nefungoval?',
                'description' => 'Pokud kupón nefunguje, zde jsou nejčastější důvody:',
                'reasons' => [
                    'Prošlý kód' => 'Kupóny mají data expirace',
                    'Minimální nákup' => 'Některé vyžadují minimální útratu (např. 500 Kč+)',
                    'Vyloučené položky' => 'Výprodejové zboží nebo některé značky mohou být vyloučeny',
                    'Jednorázové použití' => 'Kódy pro jedno použití nelze znovu použít',
                    'Regionální omezení' => 'Některé kódy fungují jen v určitých zemích',
                    'Již uplatněno' => 'Nelze kombinovat více procentuálních slev',
                ],
                'solution' => [
                    'title' => 'Řešení',
                    'description' => 'Zkontrolujte naše webové stránky pro nejnovější kódy. Pokud jeden nefunguje, obvykle máme k dispozici alternativy!',
                ],
            ],
            'update_frequency' => [
                'title' => 'Jak často aktualizujete své kupóny?',
                'description' => 'Naše kupóny aktualizujeme několikrát denně! Zde je náš harmonogram aktualizací:',
                'schedule' => [
                    'Sledování v reálném čase' => 'Nové nabídky přidávány, jakmile jsou objeveny',
                    'Prošlé kódy' => 'Odstraněny do 1 hodiny od vypršení',
                    'Týdenní přehledy' => 'Nejlepší nabídky týdne každé pondělí',
                    'Prázdninové speciály' => 'Black Friday, Cyber Monday aktualizace každou hodinu',
                ],
                'get_notified' => [
                    'title' => 'Dostávejte upozornění',
                    'description' => 'Přihlaste se k odběru našeho newsletteru nebo povolte upozornění prohlížeče a získejte okamžité informace o nových kupónech pro vaše oblíbené obchody!',
                ],
            ],
            'multiple_coupons' => [
                'title' => 'Mohu kombinovat více kupónů?',
                'description' => 'Záleží na pravidlech obchodu, ale zde je to, co potřebujete vědět:',
                'policies' => [
                    'Většina obchodů' => 'Povoluje jeden procentuální slevový kód + dopravu zdarma',
                    'Některé obchody' => 'Povolují kombinaci s cashback nabídkami',
                    'Zřídka povoleno' => 'Více procentuálních slevových kupónů',
                    'Vždy zkontrolujte' => 'Stránku s pravidly pro kupóny daného obchodu',
                ],
                'best_strategy' => [
                    'title' => 'Nejlepší strategie',
                    'description' => 'Použijte náš filtr :code k nalezení jediného nejlepšího kupónu, který vám poskytne maximální úsporu bez nutnosti kombinování.',
                ],
            ],
        ],
        
        'cashback' => [
            'how_it_works' => [
                'title' => 'Jak funguje cashback?',
                'description' => 'Cashback jsou peníze, které získáte zpět za nákupy provedené prostřednictvím našich odkazů:',
                'steps' => [
                    'Zaregistrujte si bezplatný účet ' . config('app.name'),
                    'Najděte obchod nabízející cashback',
                    'Klikněte na tlačítko "Aktivovat cashback"',
                    'Nakupujte běžně na webu obchodu',
                    'Váš nákup je automaticky sledován',
                    'Cashback se objeví na vašem účtu do 24-48 hodin',
                    'Vyberte peníze po dosažení minimální částky 500 Kč',
                ],
                'example' => [
                    'title' => 'Příklad',
                    'description' => 'Kupte si lampu za 2 000 Kč s 5% cashbackem = 100 Kč zpět do vaší kapsy!',
                ],
            ],
            'timeline' => [
                'title' => 'Jak dlouho trvá, než se cashback objeví?',
                'description' => 'Zde je typický harmonogram cashbacku:',
                'stages' => [
                    'Čeká na zpracování' => 'Objeví se do 24-48 hodin po nákupu',
                    'Potvrzeno' => '30-90 dní (po uplynutí lhůty pro vrácení obchodu)',
                    'K výplatě' => 'K dispozici k výběru po potvrzení',
                    'Výběr' => 'Zpracováno do 3-5 pracovních dnů',
                ],
                'note' => [
                    'title' => 'Poznámka',
                    'description' => 'Některé obchody mají delší dobu potvrzování, zejména u nábytku a velkých položek s delší lhůtou pro vrácení.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => 'Mohu kombinovat cashback s kupóny?',
                'answer' => 'Ano! Zde maximalizujete úspory:',
                'tips' => [
                    'Vždy použijte kupónový kód při placení',
                    'Ujistěte se, že je cashback aktivován před kliknutím na odkaz',
                    'Ušetříte okamžitě s kupónem A získáte cashback',
                    'Některé obchody nabízejí bonusový cashback se specifickými kupóny',
                ],
                'double_dip' => [
                    'title' => 'Strategie dvojité úspory',
                    'description' => 'Použijte kupón :code pro 20% slevu + 5% cashback = celková úspora 25%!',
                ],
            ],
        ],
        
        'affiliate' => [
            'become_affiliate' => [
                'title' => 'Jak se stát affiliate partnerem ' . config('app.name') . '?',
                'description' => 'Připojte se k našemu affiliate programu a vydělávejte provize:',
                'steps' => [
                    'Zaregistrujte se na našem Affiliate portálu',
                    'Získejte schválení (obvykle do 24 hodin)',
                    'Získejte přístup ke svým jedinečným affiliate odkazům',
                    'Sdílejte odkazy na svém blogu, sociálních sítích nebo webu',
                    'Vydělávejte provize z doporučených prodejů',
                    'Dostávejte měsíční platby přes PayPal nebo bankovní převod',
                ],
                'commission_rates' => [
                    'title' => 'Provizní sazby',
                    'description' => 'Vydělávejte 5-15 % z prodejů v závislosti na obchodě a vaší výkonnostní úrovni.',
                ],
            ],
            'requirements' => [
                'title' => 'Jaké jsou požadavky pro připojení?',
                'description' => 'Základní požadavky pro náš affiliate program:',
                'list' => [
                    'Aktivní web, blog nebo sociální sítě s obsahem o bydlení/nábytku',
                    'Minimálně 1 000 měsíčních návštěvníků (nebo 5 000 sledujících na sociálních sítích)',
                    'Obsah musí být vhodný pro rodiny a relevantní',
                    'Žádný spam nebo zakázaný obsah',
                    'Dodržování požadavků FTC na zveřejňování informací',
                ],
                'bonus' => [
                    'title' => 'Bonus',
                    'description' => 'Influenceři v oblasti bydlení, blogeři o interiérovém designu a tvůrci DIY obsahu získávají přednostní schválení!',
                ],
            ],
            'earnings_potential' => [
                'title' => 'Kolik mohu vydělat jako affiliate partner?',
                'description' => 'Výdělky se liší v závislosti na vaší návštěvnosti a propagační strategii:',
                'types' => [
                    'Standardní provize' => '5 % ze všech doporučených prodejů',
                    'Výkonnostní bonusy' => 'Až 15 % pro nejlepší partnery',
                    'Opakované provize' => '2 % z obnovení předplatného',
                    'Bonusové výplaty' => 'Speciální akce a soutěže',
                ],
                'top_earners' => [
                    'title' => 'Nejlepší partneři',
                    'description' => 'Naši nejvýdělečnější partneři vydělávají 50 000 Kč+ měsíčně propagací nabídek bydlení!',
                ],
            ],
        ],
        
        'account' => [
            'free_account' => [
                'title' => 'Je vytvoření účtu zdarma?',
                'answer' => 'Rozhodně! 100% zdarma navždy.',
                'description' => 'Zde je to, co získáte s bezplatným účtem:',
                'benefits' => [
                    'Sledujte své cashback výdělky',
                    'Ukládejte oblíbené kupóny a obchody',
                    'Získejte personalizovaná upozornění na nabídky',
                    'Připojte se k našemu věrnostnímu programu',
                    'Přístup k exkluzivním nabídkám pouze pro členy',
                    'Vydělávejte referral bonusy',
                ],
                'conclusion' => 'Není vyžadována žádná kreditní karta. Žádné skryté poplatky. Jen čisté úspory!',
            ],
            'tracking_issues' => [
                'title' => 'Proč se můj nákup nesleduje?',
                'description' => 'Pokud se váš nákup nesleduje, zkuste tato řešení:',
                'solutions' => [
                    'Vymažte cookies' => 'Vždy klikněte na náš odkaz - nezadávejte URL přímo',
                    'Vypněte blokování reklam' => 'Některé blokují sledovací skripty',
                    'Dokončete nákup' => 'Musíte dokončit nákup ve stejné relaci prohlížeče',
                    'Zkontrolujte způsobilost' => 'Některé položky jsou z cashbacku vyloučeny',
                    'Počkejte 48 hodin' => 'Sledování může trvat až 2 dny, než se objeví',
                ],
                'need_help' => [
                    'title' => 'Potřebujete pomoc?',
                    'description' => 'Kontaktujte podporu s podrobnostmi o objednávce a my jej pro vás ručně dohledáme!',
                ],
            ],
        ],
        
        'earning' => [
            'ways_to_earn' => [
                'title' => 'Jak mohu vydělávat peníze s ' . config('app.name') . '?',
                'description' => 'Existuje několik způsobů, jak u nás vydělávat:',
                'methods' => [
                    'Cashback' => 'Vydělávejte na vlastních nákupech',
                    'Affiliate program' => 'Vydělávejte provize propagací nabídek',
                    'Referral program' => 'Vydělejte 100 Kč za každého přítele, který se zaregistruje a nakoupí',
                    'Tvůrce obsahu' => 'Zasílejte tipy na nabídky a vydělávejte bonusy',
                    'Store Ambassador' => 'Speciální programy pro nejlepší obchody',
                ],
                'pro_tip' => [
                    'title' => 'Profesionální tip',
                    'description' => 'Připojte se ke všem programům současně a maximalizujte svůj výdělečný potenciál!',
                ],
            ],
            'payment_details' => [
                'title' => 'Kdy a jak dostanu zaplaceno?',
                'description' => 'Náš platební harmonogram a metody:',
                'details' => [
                    'Platební harmonogram' => 'Měsíčně, kolem 15. dne',
                    'Minimální výplata' => '500 Kč pro cashback, 1 500 Kč pro affiliate',
                    'Platební metody' => 'PayPal, Bankovní převod, Dárkové karty',
                    'Doba zpracování' => '3-5 pracovních dnů po požadavku',
                    'Daňové formuláře' => 'Vydáváme potvrzení pro výdělky nad 15 000 Kč/rok',
                ],
                'conclusion' => 'Všechny platby jsou bezpečné a zajištěny naší platební zárukou.',
            ],
        ],
    ],
    
    // How it works section
    'how_it_works' => [
        'title' => 'Jak ' . config('app.name') . ' funguje',
        'description' => 'Váš průvodce maximalizací úspor při nákupech bydlení',
        'steps' => [
            [
                'title' => 'Najděte nabídky',
                'description' => 'Procházejte tisíce kupónů a cashback nabídek od předních značek pro bydlení.',
            ],
            [
                'title' => 'Klikněte a nakupujte',
                'description' => 'Klikněte na naše odkazy pro aktivaci úspor a nakupujte přímo na webech značek.',
            ],
            [
                'title' => 'Ušetřete peníze',
                'description' => 'Použijte kupónové kódy při placení a získejte cashback za způsobilé nákupy.',
            ],
            [
                'title' => 'Vydělávejte odměny',
                'description' => 'Připojte se k našemu affiliate nebo referral programu a vydělávejte ještě více.',
            ],
        ],
    ],
    
    // Call to action
    'cta' => [
        'title' => 'Připraveni začít šetřit?',
        'description' => 'Přidejte se k tisícům chytrých nakupujících, kteří denně šetří na bydlení. Ať už nakupujete nábytek, dekorace nebo DIY potřeby, ' . config('app.name') . ' vám pomůže získat nejlepší nabídky.',
        'join_button' => 'Připojte se zdarma a začněte šetřit',
        'browse_button' => 'Prohlédněte si nejnovější kupóny',
        'security_note' => '100% bezpečné • Žádný spam • Kdykoli se odhlaste',
    ],
    
    // Additional sections (if needed)
    'popular_questions' => [
        'title' => 'Populární otázky',
        'most_viewed' => 'Nejčastěji prohlížené',
        'recently_added' => 'Nedávno přidané',
    ],
    
    'help_center' => [
        'title' => 'Stále potřebujete pomoc?',
        'contact_us' => 'Kontaktujte nás',
        'live_chat' => 'Živý chat',
        'email_support' => 'E-mailová podpora',
        'response_time' => 'Průměrná doba odezvy: 2 hodiny',
    ],
    
    'related_topics' => [
        'title' => 'Související témata',
        'privacy_policy' => 'Zásady ochrany osobních údajů',
        'terms_of_service' => 'Obchodní podmínky',
        'affiliate_disclosure' => 'Affiliate disclosure',
        'cookie_policy' => 'Zásady používání cookies',
    ],
    
    'accessibility' => [
        'keyboard_navigation' => 'Pro procházení FAQ použijte klávesu Tab, Enter pro rozbalení, Esc pro zavření',
        'screen_reader' => 'Přátelské pro screen reader',
        'high_contrast' => 'K dispozici režim vysokého kontrastu',
    ],
];