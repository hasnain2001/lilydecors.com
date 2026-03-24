<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'FAQ - Domande Frequenti | ' . config('app.name') . ' Coupon e Offerte',
        'description' => 'Trova risposte sull\'uso dei coupon, guadagnare cashback, marketing di affiliazione e altro su ' . config('app.name') . '. La tua destinazione per risparmiare sull\'arredamento!',
        'keywords' => 'FAQ, domande frequenti, coupon, offerte, cashback, marketing di affiliazione, codici sconto, risparmio arredamento',
    ],
    
    // Hero section
    'hero' => [
        'title' => 'Domande Frequenti',
        'description' => 'Tutto ciò che devi sapere su come trovare i migliori coupon, guadagnare cashback e massimizzare i tuoi risparmi sull\'arredamento con ' . config('app.name') . '!',
        'badge' => 'Risparmia fino al 70% con i nostri coupon esclusivi',
    ],
    
    // Statistics banner
    'stats' => [
        'active_coupons' => '10.000+',
        'active_coupons_label' => 'Coupon Attivi',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Marchi Partner',
        'saved_amount' => '2M€+',
        'saved_amount_label' => 'Risparmiati dai Nostri Utenti',
        'happy_members' => '100K+',
        'happy_members_label' => 'Membri Soddisfatti',
    ],
    
    // Search bar
    'search' => [
        'placeholder' => 'Cerca risposte... Prova \'cashback\', \'coupon scaduto\', \'affiliato\', \'come usare\'...',
        'no_results' => [
            'title' => 'Nessun risultato trovato per ":term"',
            'description' => 'Prova a cercare con parole chiave diverse o sfoglia le nostre categorie.',
            'show_all' => 'Mostra Tutte le FAQ',
        ],
    ],
    
    // Categories
    'categories' => [
        'all' => 'Tutte le Domande',
        'coupons' => 'Coupon e Offerte',
        'cashback' => 'Cashback e Ricompense',
        'affiliate' => 'Programma Affiliati',
        'account' => 'Account e Assistenza Tecnica',
        'earning' => 'Guadagnare',
    ],
    
    // Questions and answers - Coupons & Deals
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => 'Come si usano i coupon di ' . config('app.name') . '?',
                'description' => 'Usare i nostri coupon è facile! Segui questi passaggi:',
                'steps' => [
                    'Trova un coupon per il tuo negozio di arredamento preferito',
                    'Clicca il pulsante "Ottieni Codice" o "Vedi Offerta"',
                    'Verrai reindirizzato al sito del negozio',
                    'Aggiungi gli articoli al carrello',
                    'Al checkout, inserisci il codice coupon nel campo apposito',
                    'Completa l\'acquisto e goditi il risparmio!',
                ],
                'pro_tip' => [
                    'title' => 'Consiglio Utile',
                    'description' => 'Alcune offerte sono automatiche - basta cliccare sul nostro link e lo sconto verrà applicato automaticamente al checkout!',
                ],
            ],
            'code_not_working' => [
                'title' => 'Perché il mio codice coupon non funziona?',
                'description' => 'Se un coupon non funziona, ecco i motivi più comuni:',
                'reasons' => [
                    'Codice Scaduto' => 'I coupon hanno date di scadenza',
                    'Importo Minimo' => 'Alcuni richiedono una spesa minima (es. 50€+)',
                    'Articoli Esclusi' => 'Articoli in saldo o certe marche potrebbero essere escluse',
                    'Uso Singolo' => 'I codici monouso non possono essere riutilizzati',
                    'Limitazione Geografica' => 'Alcuni codici funzionano solo in determinati paesi',
                    'Già Applicato' => 'Non è possibile cumulare più codici percentuale',
                ],
                'solution' => [
                    'title' => 'Soluzione',
                    'description' => 'Controlla il nostro sito per i codici più recenti. Se uno non funziona, di solito abbiamo alternative disponibili!',
                ],
            ],
            'update_frequency' => [
                'title' => 'Con quale frequenza aggiornate i vostri coupon?',
                'description' => 'Aggiorniamo i nostri coupon più volte al giorno! Ecco il nostro programma di aggiornamento:',
                'schedule' => [
                    'Monitoraggio in Tempo Reale' => 'Nuove offerte aggiunte appena scoperte',
                    'Codici Scaduti' => 'Rimossi entro 1 ora dalla scadenza',
                    'Riepiloghi Settimanali' => 'Le migliori offerte della settimana ogni lunedì',
                    'Offerte per le Feste' => 'Aggiornamenti orari per Black Friday, Cyber Monday',
                ],
                'get_notified' => [
                    'title' => 'Ricevi Notifiche',
                    'description' => 'Iscriviti alla nostra newsletter o attiva le notifiche del browser per ricevere aggiornamenti istantanei sui nuovi coupon per i tuoi negozi preferiti!',
                ],
            ],
            'multiple_coupons' => [
                'title' => 'Posso usare più coupon insieme?',
                'description' => 'Dipende dalla politica del negozio, ma ecco cosa devi sapere:',
                'policies' => [
                    'La Maggior Parte dei Negozi' => 'Permettono un codice percentuale + spedizione gratuita',
                    'Alcuni Negozi' => 'Permettono di cumulare con offerte cashback',
                    'Raramente Permesso' => 'Più coupon percentuale insieme',
                    'Controlla Sempre' => 'La pagina delle politiche coupon del negozio',
                ],
                'best_strategy' => [
                    'title' => 'Miglior Strategia',
                    'description' => 'Usa il nostro filtro :code per trovare il singolo miglior coupon che ti dà il massimo risparmio senza bisogno di cumularli.',
                ],
            ],
        ],
        
        'cashback' => [
            'how_it_works' => [
                'title' => 'Come funziona il cashback?',
                'description' => 'Il cashback è denaro che guadagni sugli acquisti effettuati attraverso i nostri link:',
                'steps' => [
                    'Registrati gratuitamente a ' . config('app.name'),
                    'Trova un negozio che offre cashback',
                    'Clicca il pulsante "Attiva Cashback"',
                    'Fai acquisti normalmente sul sito del negozio',
                    'Il tuo acquisto viene tracciato automaticamente',
                    'Il cashback appare nel tuo account entro 24-48 ore',
                    'Preleva quando raggiungi il minimo di 10€',
                ],
                'example' => [
                    'title' => 'Esempio',
                    'description' => 'Acquista una lampada da 200€ con il 5% di cashback = 10€ di ritorno nelle tue tasche!',
                ],
            ],
            'timeline' => [
                'title' => 'Quanto tempo impiega il cashback per apparire?',
                'description' => 'Ecco la tempistica tipica del cashback:',
                'stages' => [
                    'In Attesa' => 'Appare in 24-48 ore dopo l\'acquisto',
                    'Confermato' => '30-90 giorni (dopo il periodo di reso del negozio)',
                    'Pagabile' => 'Disponibile per il prelievo una volta confermato',
                    'Prelievo' => 'Elaborato in 3-5 giorni lavorativi',
                ],
                'note' => [
                    'title' => 'Nota',
                    'description' => 'Alcuni negozi hanno periodi di conferma più lunghi, specialmente per mobili e articoli di grandi dimensioni con finestre di reso più estese.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => 'Posso combinare cashback e coupon?',
                'answer' => 'Sì! È qui che massimizzi i risparmi:',
                'tips' => [
                    'Usa sempre un codice coupon al checkout',
                    'Assicurati che il cashback sia attivato prima di cliccare',
                    'Risparmi subito con il coupon E guadagni cashback',
                    'Alcuni negozi offrono cashback bonus con coupon specifici',
                ],
                'double_dip' => [
                    'title' => 'Strategia Doppio Risparmio',
                    'description' => 'Usa il coupon :code per il 20% di sconto + 5% di cashback = 25% di risparmio totale!',
                ],
            ],
        ],
        
        'affiliate' => [
            'become_affiliate' => [
                'title' => 'Come posso diventare affiliato di ' . config('app.name') . '?',
                'description' => 'Unisciti al nostro programma affiliati e guadagna commissioni:',
                'steps' => [
                    'Registrati sul nostro Portale Affiliati',
                    'Ricevi approvazione (di solito entro 24 ore)',
                    'Accedi ai tuoi link affiliati unici',
                    'Condividi i link sul tuo blog, social media o sito web',
                    'Guadagna commissioni sulle vendite referral',
                    'Ricevi pagamenti mensili via PayPal o bonifico',
                ],
                'commission_rates' => [
                    'title' => 'Tassi di Commissione',
                    'description' => 'Guadagna dal 5% al 15% sulle vendite a seconda del negozio e del tuo livello di performance.',
                ],
            ],
            'requirements' => [
                'title' => 'Quali sono i requisiti per partecipare?',
                'description' => 'Requisiti base per il nostro programma affiliati:',
                'list' => [
                    'Sito web attivo, blog o social media con contenuti di arredamento/casa',
                    'Minimo 1.000 visitatori mensili (o 5.000 follower sui social)',
                    'I contenuti devono essere adatti alle famiglie e pertinenti',
                    'Niente spam o contenuti proibiti',
                    'Conformità ai requisiti di trasparenza FTC',
                ],
                'bonus' => [
                    'title' => 'Bonus',
                    'description' => 'Influencer di arredamento, blogger di interior design e creatori di contenuti DIY ottengono approvazione prioritaria!',
                ],
            ],
            'earnings_potential' => [
                'title' => 'Quanto posso guadagnare come affiliato?',
                'description' => 'I guadagni variano in base al tuo traffico e alla strategia di promozione:',
                'types' => [
                    'Commissione Standard' => '5% su tutte le vendite referral',
                    'Bonus di Performance' => 'Fino al 15% per i migliori performer',
                    'Commissioni Ricorrenti' => '2% sui rinnovi di abbonamento',
                    'Bonus Speciali' => 'Promozioni e concorsi speciali',
                ],
                'top_earners' => [
                    'title' => 'Top Earners',
                    'description' => 'I nostri affiliati con guadagni più alti fanno 5.000€+ al mese promuovendo offerte di arredamento!',
                ],
            ],
        ],
        
        'account' => [
            'free_account' => [
                'title' => 'Creare un account è gratuito?',
                'answer' => 'Assolutamente sì! Gratuito per sempre al 100%.',
                'description' => 'Ecco cosa ottieni con un account gratuito:',
                'benefits' => [
                    'Traccia i tuoi guadagni cashback',
                    'Salva coupon e negozi preferiti',
                    'Ricevi avvisi personalizzati sulle offerte',
                    'Partecipa al nostro programma fedeltà',
                    'Accedi a offerte esclusive per membri',
                    'Guadagna bonus referral',
                ],
                'conclusion' => 'Nessuna carta di credito richiesta. Nessuna tassa nascosta. Solo puro risparmio!',
            ],
            'tracking_issues' => [
                'title' => 'Perché il mio acquisto non viene tracciato?',
                'description' => 'Se il tuo acquisto non viene tracciato, prova queste soluzioni:',
                'solutions' => [
                    'Cancella Cookie' => 'Clicca sempre il nostro link - non digitare gli URL direttamente',
                    'Disabilita Blocca Pubblicità' => 'Alcuni bloccano gli script di tracciamento',
                    'Completa Acquisto' => 'Devi completare il checkout nella stessa sessione del browser',
                    'Controlla Eleggibilità' => 'Alcuni articoli sono esclusi dal cashback',
                    'Attendi 48 Ore' => 'Il tracciamento può richiedere fino a 2 giorni per apparire',
                ],
                'need_help' => [
                    'title' => 'Hai Bisogno di Aiuto?',
                    'description' => 'Contatta il supporto con i dettagli del tuo ordine e lo tracceremo manualmente per te!',
                ],
            ],
        ],
        
        'earning' => [
            'ways_to_earn' => [
                'title' => 'Come posso guadagnare con ' . config('app.name') . '?',
                'description' => 'Ci sono diversi modi per guadagnare con noi:',
                'methods' => [
                    'Cashback' => 'Guadagna sui tuoi acquisti',
                    'Programma Affiliati' => 'Guadagna commissioni promuovendo offerte',
                    'Programma Referral' => 'Guadagna 5€ per ogni amico che si iscrive e fa un acquisto',
                    'Creatore di Contenuti' => 'Invia consigli sulle offerte e guadagna bonus',
                    'Ambasciatore di Negozio' => 'Programmi speciali per i migliori negozi',
                ],
                'pro_tip' => [
                    'title' => 'Consiglio Utile',
                    'description' => 'Partecipa a tutti i programmi simultaneamente per massimizzare il tuo potenziale di guadagno!',
                ],
            ],
            'payment_details' => [
                'title' => 'Quando e come vengo pagato?',
                'description' => 'Il nostro calendario e metodi di pagamento:',
                'details' => [
                    'Calendario Pagamenti' => 'Mensile, intorno al 15',
                    'Importo Minimo' => '10€ per cashback, 50€ per affiliati',
                    'Metodi di Pagamento' => 'PayPal, Bonifico Diretto, Carte Regalo',
                    'Tempi di Elaborazione' => '3-5 giorni lavorativi dopo la richiesta',
                    'Moduli Fiscali' => 'Certificazione unica per guadagni oltre 600€/anno',
                ],
                'conclusion' => 'Tutti i pagamenti sono sicuri e garantiti dalla nostra garanzia di pagamento.',
            ],
        ],
    ],
    
    // How it works section
    'how_it_works' => [
        'title' => 'Come Funziona ' . config('app.name'),
        'description' => 'La tua guida per massimizzare i risparmi sugli acquisti di arredamento',
        'steps' => [
            [
                'title' => 'Trova Offerte',
                'description' => 'Sfoglia migliaia di coupon e offerte cashback dai migliori marchi di arredamento.',
            ],
            [
                'title' => 'Clicca e Acquista',
                'description' => 'Clicca i nostri link per attivare i risparmi e acquista direttamente sui siti dei marchi.',
            ],
            [
                'title' => 'Risparmia',
                'description' => 'Usa i codici coupon al checkout e guadagna cashback sugli acquisti eleggibili.',
            ],
            [
                'title' => 'Guadagna Ricompense',
                'description' => 'Unisciti al nostro programma affiliati o al programma referral per guadagnare ancora di più.',
            ],
        ],
    ],
    
    // Call to action
    'cta' => [
        'title' => 'Pronto a Iniziare a Risparmiare?',
        'description' => 'Unisciti a migliaia di acquirenti smart che risparmiano sull\'arredamento ogni giorno. Che tu stia acquistando mobili, decorazioni o forniture per il fai-da-te, ' . config('app.name') . ' ti aiuta a ottenere le migliori offerte.',
        'join_button' => 'Iscriviti Gratis e Inizia a Risparmiare',
        'browse_button' => 'Sfoglia gli Ultimi Coupon',
        'security_note' => '100% Sicuro • No Spam • Disiscrizione in Qualsiasi Momento',
    ],
    
    // Additional sections (if needed)
    'popular_questions' => [
        'title' => 'Domande Popolari',
        'most_viewed' => 'Più Viste',
        'recently_added' => 'Aggiunte di Recente',
    ],
    
    'help_center' => [
        'title' => 'Hai Ancora Bisogno di Aiuto?',
        'contact_us' => 'Contattaci',
        'live_chat' => 'Chat dal Vivo',
        'email_support' => 'Supporto Email',
        'response_time' => 'Tempo Medio di Risposta: 2 ore',
    ],
    
    'related_topics' => [
        'title' => 'Argomenti Correlati',
        'privacy_policy' => 'Privacy Policy',
        'terms_of_service' => 'Termini di Servizio',
        'affiliate_disclosure' => 'Informativa sugli Affiliati',
        'cookie_policy' => 'Cookie Policy',
    ],
    
    'accessibility' => [
        'keyboard_navigation' => 'Usa il tasto Tab per navigare le FAQ, Invio per espandere, Esc per chiudere',
        'screen_reader' => 'Compatibile con lettori di schermo',
        'high_contrast' => 'Modalità ad alto contrasto disponibile',
    ],
];