<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Contattaci | ' . config('app.name'),
        'description' => 'Mettiti in contatto con noi per qualsiasi richiesta o supporto.',
        'keywords' => 'contatto, supporto, richieste, aiuto, assistenza clienti',
        'author' => config('app.name'),
    ],
    
    // Header section
    'header' => [
        'title' => 'Contattaci',
        'subtitle' => 'Mettiti in contatto con noi. Siamo qui per aiutarti con qualsiasi domanda o dubbio tu possa avere.',
    ],
    
    // Form section
    'form' => [
        'description' => 'Compila il modulo qui sotto e ti risponderemo il prima possibile.',
        'fields' => [
            'name' => [
                'label' => 'Nome',
                'placeholder' => 'Il tuo nome completo',
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'tua.email@esempio.com',
            ],
            'subject' => [
                'label' => 'Oggetto',
                'placeholder' => 'Di cosa si tratta?',
            ],
            'message' => [
                'label' => 'Messaggio',
                'placeholder' => 'Il tuo messaggio qui...',
            ],
        ],
        'submit' => 'Invia Messaggio',
        'sending' => 'Invio in corso...',
        'required_fields' => 'I campi contrassegnati con * sono obbligatori',
    ],
    
    // Contact information
    'info' => [
        'location' => [
            'title' => 'La Nostra Sede',
            'address_line1' => 'Via Main 123',
            'address_line2' => 'Suite 100',
            'city_state' => 'Città, Provincia',
            'zip_code' => '12345',
            'country' => 'Italia',
        ],
        'phone' => [
            'title' => 'Chiamaci',
            'primary' => '+39 123 456 7890',
            'secondary' => '+39 987 654 3210',
            'hours' => 'Lun-Ven: 9:00-18:00',
        ],
        'email' => [
            'title' => 'Scrivici',
            'contact' => 'contatto@' . config('app.domain', 'esempio.com'),
            'support' => 'supporto@' . config('app.domain', 'esempio.com'),
            'response_time' => 'Di solito rispondiamo entro 24 ore',
        ],
    ],
    
    // Messages and alerts
    'messages' => [
        'success' => 'Grazie! Il tuo messaggio è stato inviato con successo.',
        'error_title' => 'Correggi i seguenti errori:',
        'validation_error' => 'Ci sono alcuni errori nell\'invio.',
        'captcha_error' => 'Completa il controllo di sicurezza.',
        'server_error' => 'Qualcosa è andato storto. Riprova più tardi.',
    ],
    
    // Additional sections (if added)
    'faq' => [
        'title' => 'Domande Frequenti',
        'question1' => 'Quanto tempo ci vuole per ricevere una risposta?',
        'answer1' => 'Di solito rispondiamo entro 24 ore durante i giorni lavorativi.',
        'question2' => 'Quali informazioni dovrei includere?',
        'answer2' => 'Includi i tuoi recapiti e una descrizione dettagliata della tua richiesta.',
        'question3' => 'Fornite supporto telefonico?',
        'answer3' => 'Sì, puoi contattarci al numero sopra indicato.',
    ],
    
    // Business hours
    'business_hours' => [
        'title' => 'Orari di Apertura',
        'weekdays' => 'Lunedì - Venerdì: 9:00 - 18:00',
        'weekends' => 'Sabato: 10:00 - 16:00',
        'closed' => 'Domenica: Chiuso',
        'holidays' => 'Festivi: Chiuso',
    ],
    
    // Support types
    'support_types' => [
        'general' => 'Richiesta Generale',
        'technical' => 'Supporto Tecnico',
        'billing' => 'Domande sulla Fatturazione',
        'partnership' => 'Opportunità di Partnership',
        'feedback' => 'Feedback e Suggerimenti',
    ],
    
    // Social media (if you add social links)
    'social' => [
        'title' => 'Seguici',
        'follow_us' => 'Seguici sui social media',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],
    
    // Map/address details
    'map' => [
        'title' => 'Dove Trovarci',
        'directions' => 'Indicazioni Stradali',
        'open_in_maps' => 'Apri in Google Maps',
        'parking' => 'Informazioni Parcheggio',
        'public_transport' => 'Trasporto Pubblico',
    ],
    
    // Privacy and data
    'privacy' => [
        'title' => 'Privacy e Dati',
        'description' => 'Le tue informazioni sono al sicuro e verranno utilizzate solo per rispondere alla tua richiesta.',
        'gdpr_compliant' => 'Conforme al GDPR',
        'no_spam' => 'Non inviamo spam né condividiamo le tue informazioni',
    ],
    
    // Response time
    'response_time' => [
        'title' => 'Tempi di Risposta',
        'instant' => 'Immediato per questioni urgenti',
        'within_24h' => 'Entro 24 ore per richieste generali',
        'within_48h' => 'Entro 48 ore per questioni complesse',
        'emergency' => 'Per emergenze, chiama il numero sopra',
    ],
    
    // Form validation messages
    'validation' => [
        'name_required' => 'Inserisci il tuo nome',
        'email_required' => 'Inserisci il tuo indirizzo email',
        'email_invalid' => 'Inserisci un indirizzo email valido',
        'message_required' => 'Inserisci il tuo messaggio',
        'message_min' => 'Il messaggio deve essere di almeno 10 caratteri',
        'message_max' => 'Il messaggio non può superare i 2000 caratteri',
    ],
    
    // Accessibility
    'accessibility' => [
        'form_label' => 'Modulo di Contatto',
        'required_indicator' => 'Campo obbligatorio',
        'success_announcement' => 'Il tuo messaggio è stato inviato con successo',
        'error_announcement' => 'Ci sono errori nell\'invio',
    ],
];