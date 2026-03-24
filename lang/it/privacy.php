<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Privacy Policy | ' . config('app.name'),
        'description' => 'Leggi la nostra privacy policy per capire come gestiamo i tuoi dati e proteggiamo la tua privacy.',
        'keywords' => 'privacy, policy, protezione dati, sicurezza dati, GDPR, cookie',
        'author' => config('app.name'),
    ],
    
    // Header section
    'header' => [
        'title' => 'Privacy Policy',
        'subtitle' => 'La tua privacy è importante per noi. Scopri come proteggiamo e gestiamo i tuoi dati.',
        'last_updated' => 'Ultimo aggiornamento il',
    ],
    
    // Main card
    'card' => [
        'title' => 'La Tua Protezione Dati e Privacy',
    ],
    
    // Alert section
    'alert' => [
        'title' => 'La Trasparenza Conta',
        'description' => 'Questa policy spiega come raccogliamo, utilizziamo e proteggiamo le tue informazioni in termini chiari e semplici.',
    ],
    
    // Policy sections
    'sections' => [
        'collection' => [
            'title' => 'Informazioni che Raccogliamo',
            'intro' => 'Raccogliamo informazioni che ci aiutano a fornire servizi migliori e migliorare la tua esperienza. Questo include:',
            'types' => [
                'Informazioni Personali' => 'Nome, indirizzo email e dettagli di contatto quando ti registri o ci contatti',
                'Dati di Utilizzo' => 'Come interagisci con il nostro sito web, pagine visitate e funzionalità utilizzate',
                'Informazioni Tecniche' => 'Tipo di browser, informazioni sul dispositivo e indirizzo IP per scopi di sicurezza',
                'Dati di Comunicazione' => 'Messaggi, feedback e richieste che ci invii',
            ],
            'conclusion' => 'Raccogliamo solo le informazioni necessarie per fornire i nostri servizi e migliorare la tua esperienza.',
        ],
        
        'usage' => [
            'title' => 'Come Utilizziamo le Tue Informazioni',
            'intro' => 'Le tue informazioni ci aiutano a fornire un servizio eccellente e migliorare la nostra piattaforma. Le utilizziamo per:',
            'purposes' => [
                'Rispondere alle tue richieste e fornire supporto clienti personalizzato',
                'Elaborare transazioni e fornire i servizi richiesti',
                'Migliorare la funzionalità del sito web e l\'esperienza utente',
                'Inviare aggiornamenti importanti sui nostri servizi (puoi disiscriverti in qualsiasi momento)',
                'Proteggere da frodi e garantire la sicurezza della piattaforma',
                'Analizzare i modelli di utilizzo per migliorare le nostre offerte',
            ],
            'important_note' => 'Non vendiamo e non venderemo mai le tue informazioni personali a terze parti.',
        ],
        
        'security' => [
            'title' => 'Sicurezza e Protezione dei Dati',
            'intro' => 'Prendiamo sul serio la sicurezza dei tuoi dati e implementiamo misure robuste per proteggerli:',
            'measures' => [
                'Crittografia' => 'Tutti i dati sensibili sono crittografati durante la trasmissione e l\'archiviazione',
                'Server Sicuri' => 'Le tue informazioni sono archiviate su server protetti con accesso limitato',
                'Controlli di Accesso' => 'Politiche interne rigorose controllano chi può accedere ai tuoi dati',
                'Audit Regolari' => 'Conduciamo valutazioni di sicurezza per mantenere gli standard di protezione',
                'Formazione dei Dipendenti' => 'Il nostro team è formato sulle migliori pratiche di protezione dei dati',
            ],
            'disclaimer' => 'Sebbene implementiamo misure di sicurezza standard del settore, nessun metodo di trasmissione su Internet è sicuro al 100%. Ti consigliamo di utilizzare password complesse e mantenere riservate le tue informazioni di accesso.',
        ],
        
        'cookies' => [
            'title' => 'Cookie e Tecnologie di Tracciamento',
            'intro' => 'Utilizziamo cookie e tecnologie simili per migliorare la tua esperienza di navigazione:',
            'types' => [
                'Cookie Essenziali' => 'Necessari per il corretto funzionamento del sito web',
                'Cookie di Performance' => 'Ci aiutano a capire come i visitatori utilizzano il nostro sito',
                'Cookie Funzionali' => 'Ricordano le tue preferenze e impostazioni',
                'Cookie Analitici' => 'Forniscono approfondimenti per migliorare i nostri servizi',
            ],
            'management' => 'Puoi gestire le preferenze sui cookie attraverso le impostazioni del tuo browser. Tuttavia, disabilitare i cookie essenziali potrebbe influenzare la funzionalità del sito web.',
        ],
        
        'third_party' => [
            'title' => 'Link e Servizi di Terze Parti',
            'intro' => 'Il nostro sito web può contenere link a siti e servizi esterni. Note importanti:',
            'notes' => [
                'Selezioniamo attentamente i nostri partner ma non possiamo controllare le loro pratiche sulla privacy',
                'I siti esterni hanno le loro politiche sulla privacy che non controlliamo',
                'Non siamo responsabili per il contenuto o le pratiche dei siti collegati',
                'Ti consigliamo di rivedere le politiche sulla privacy di terze parti prima di condividere informazioni',
            ],
            'disclaimer' => 'Quando lasci il nostro sito attraverso questi link, la nostra privacy policy non si applica più alle tue attività su quei siti esterni.',
        ],
        
        'updates' => [
            'title' => 'Aggiornamenti e Modifiche della Policy',
            'intro' => 'Possiamo aggiornare questa privacy policy per riflettere cambiamenti nelle nostre pratiche o requisiti legali:',
            'procedures' => [
                'Le modifiche significative verranno notificate via email o con un avviso prominente sul sito',
                'L\'uso continuato dei nostri servizi dopo le modifiche costituisce accettazione',
                'Manteniamo la cronologia delle versioni di tutti gli aggiornamenti della policy',
                'La data "Ultimo Aggiornamento" in alto indica l\'ultima revisione',
            ],
            'recommendation' => 'Ti incoraggiamo a rivedere periodicamente questa policy per rimanere informato su come proteggiamo le tue informazioni.',
        ],
        
        'contact' => [
            'title' => 'Domande e Informazioni di Contatto',
            'intro' => 'Ci impegniamo ad essere trasparenti sulle nostre pratiche sulla privacy. Se hai domande o preoccupazioni:',
            'details' => [
                'Email' => '<a href="mailto:contact@lilydecors.com" class="contact-email">contact@lilydecors.com</a>',
                'Responsabile Protezione Dati' => 'John Smith',
                'Indirizzo' => '123 Privacy Lane, Data City, DC 12345',
                'Tempi di Risposta' => 'Puntiamo a rispondere entro 48 ore',
            ],
            'rights' => 'Hai il diritto di accedere, correggere o cancellare le tue informazioni personali. Contattaci per esercitare questi diritti.',
        ],
    ],
    
    // Back button
    'back_button' => 'Torna alla Homepage',
    
    // Additional terms for cookie consent banner (if needed)
    'cookie_consent' => [
        'title' => 'Preferenze Cookie',
        'message' => 'Utilizziamo i cookie per migliorare la tua esperienza di navigazione e analizzare il nostro traffico.',
        'accept_all' => 'Accetta Tutti',
        'reject_all' => 'Rifiuta Tutti',
        'manage' => 'Gestisci Preferenze',
        'necessary' => 'Necessari',
        'analytics' => 'Analitici',
        'marketing' => 'Marketing',
        'preferences' => 'Preferenze',
        'save' => 'Salva Preferenze',
    ],
    
    // Data rights (GDPR specific)
    'data_rights' => [
        'title' => 'I Tuoi Diritti sui Dati',
        'access' => 'Diritto di Accesso',
        'rectification' => 'Diritto di Rettifica',
        'erasure' => 'Diritto alla Cancellazione (Diritto all\'Oblio)',
        'restriction' => 'Diritto alla Limitazione del Trattamento',
        'portability' => 'Diritto alla Portabilità dei Dati',
        'object' => 'Diritto di Opposizione',
        'description' => 'Ai sensi del GDPR e di altre leggi sulla protezione dei dati, hai diritti specifici riguardo ai tuoi dati personali.',
    ],
    
    // Data retention
    'retention' => [
        'title' => 'Conservazione dei Dati',
        'description' => 'Conserviamo i tuoi dati personali solo per il tempo necessario a soddisfare gli scopi per cui sono stati raccolti.',
        'periods' => [
            'account_data' => 'Dati dell\'account: Finché il tuo account è attivo',
            'transaction_data' => 'Dati delle transazioni: 7 anni per fini fiscali',
            'communication_data' => 'Dati di comunicazione: 3 anni',
            'analytics_data' => 'Dati analitici: 26 mesi',
        ],
    ],
    
    // International data transfers
    'international_transfers' => [
        'title' => 'Trasferimenti Internazionali di Dati',
        'description' => 'Le tue informazioni possono essere trasferite e trattate in paesi diversi dal tuo.',
        'safeguards' => 'Implementiamo garanzie appropriate per i trasferimenti internazionali di dati.',
    ],
    
    // Children's privacy
    'children' => [
        'title' => 'Privacy dei Minori',
        'description' => 'I nostri servizi non sono rivolti a minori di 16 anni. Non raccogliamo consapevolmente informazioni personali da minori.',
        'contact' => 'Se credi che abbiamo raccolto informazioni da un minore, ti preghiamo di contattarci immediatamente.',
    ],
    
    // Automated decision making
    'automated_decisions' => [
        'title' => 'Processo Decisionale Automatizzato',
        'description' => 'Non utilizziamo processi decisionali automatizzati o profilazione che producano effetti legali.',
    ],
    
    // Data breach notification
    'data_breach' => [
        'title' => 'Notifica di Violazione dei Dati',
        'description' => 'In caso di violazione dei dati, notificheremo gli utenti interessati e le autorità come richiesto dalla legge.',
    ],
    
    // Do Not Track signals
    'do_not_track' => [
        'title' => 'Segnali Do Not Track',
        'description' => 'Il nostro sito web non risponde ai segnali Do Not Track dei browser.',
    ],
    
    // California privacy rights (CCPA)
    'ccpa' => [
        'title' => 'Diritti sulla Privacy in California',
        'description' => 'I residenti in California hanno diritti aggiuntivi ai sensi del California Consumer Privacy Act (CCPA).',
        'right_to_know' => 'Diritto di Conoscere',
        'right_to_delete' => 'Diritto di Cancellare',
        'right_to_opt_out' => 'Diritto di Rinunciare alla Vendita',
        'non_discrimination' => 'Diritto alla Non Discriminazione',
    ],
];