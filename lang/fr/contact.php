<?php

return [
    // Balises Meta
    'meta' => [
        'title' => 'Nous Contacter | ' . config('app.name'),
        'description' => 'Contactez-nous pour toute question ou demande de support.',
        'keywords' => 'contact, support, demandes, aide, service client',
        'author' => config('app.name'),
    ],
    
    // Section En-tête
    'header' => [
        'title' => 'Nous Contacter',
        'subtitle' => 'Contactez-nous. Nous sommes là pour vous aider avec toutes vos questions ou préoccupations.',
    ],
    
    // Section Formulaire
    'form' => [
        'description' => 'Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.',
        'fields' => [
            'name' => [
                'label' => 'Nom',
                'placeholder' => 'Votre nom complet',
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'votre.email@exemple.com',
            ],
            'subject' => [
                'label' => 'Sujet',
                'placeholder' => 'Concernant quelle question ?',
            ],
            'message' => [
                'label' => 'Message',
                'placeholder' => 'Votre message ici...',
            ],
        ],
        'submit' => 'Envoyer le Message',
        'sending' => 'Envoi en cours...',
        'required_fields' => 'Les champs marqués d\'un * sont obligatoires',
    ],
    
    // Informations de contact
    'info' => [
        'location' => [
            'title' => 'Notre Adresse',
            'address_line1' => '123 Rue Principale',
            'address_line2' => 'Bureau 100',
            'city_state' => 'Ville, Région',
            'zip_code' => '12345',
            'country' => 'France',
        ],
        'phone' => [
            'title' => 'Appelez-nous',
            'primary' => '+33 (0)1 23 45 67 89',
            'secondary' => '+33 (0)9 87 65 43 21',
            'hours' => 'Lun-Ven : 9h-18h heure française',
        ],
        'email' => [
            'title' => 'Envoyez-nous un Email',
            'contact' => 'contact@' . config('app.domain', 'exemple.com'),
            'support' => 'support@' . config('app.domain', 'exemple.com'),
            'response_time' => 'Nous répondons généralement sous 24h',
        ],
    ],
    
    // Messages et alertes
    'messages' => [
        'success' => 'Merci ! Votre message a été envoyé avec succès.',
        'error_title' => 'Veuillez corriger les erreurs suivantes :',
        'validation_error' => 'Il y a eu des erreurs dans votre envoi.',
        'captcha_error' => 'Veuillez compléter la vérification de sécurité.',
        'server_error' => 'Une erreur est survenue. Veuillez réessayer plus tard.',
    ],
    
    // Sections supplémentaires (si ajoutées)
    'faq' => [
        'title' => 'Questions Fréquemment Posées',
        'question1' => 'Combien de temps faut-il pour obtenir une réponse ?',
        'answer1' => 'Nous répondons généralement sous 24h durant les jours ouvrés.',
        'question2' => 'Quelles informations devrais-je inclure ?',
        'answer2' => 'Veuillez inclure vos coordonnées et une description détaillée de votre demande.',
        'question3' => 'Offrez-vous un support téléphonique ?',
        'answer3' => 'Oui, vous pouvez nous joindre au numéro ci-dessus.',
    ],
    
    // Horaires d'ouverture
    'business_hours' => [
        'title' => 'Horaires d\'Ouverture',
        'weekdays' => 'Lundi - Vendredi : 9h00 - 18h00 heure française',
        'weekends' => 'Samedi : 10h00 - 16h00 heure française',
        'closed' => 'Dimanche : Fermé',
        'holidays' => 'Jours fériés : Fermé',
    ],
    
    // Types de support
    'support_types' => [
        'general' => 'Demandes Générales',
        'technical' => 'Support Technique',
        'billing' => 'Questions de Facturation',
        'partnership' => 'Opportunités de Partenariat',
        'feedback' => 'Retours & Suggestions',
    ],
    
    // Réseaux sociaux (si vous ajoutez des liens sociaux)
    'social' => [
        'title' => 'Connectez-vous avec Nous',
        'follow_us' => 'Suivez-nous sur les réseaux sociaux',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],
    
    // Détails carte/adresse
    'map' => [
        'title' => 'Nous Trouver',
        'directions' => 'Obtenir l\'Itinéraire',
        'open_in_maps' => 'Ouvrir dans Google Maps',
        'parking' => 'Informations de Stationnement',
        'public_transport' => 'Transports en Commun',
    ],
    
    // Confidentialité et données
    'privacy' => [
        'title' => 'Confidentialité & Données',
        'description' => 'Vos informations sont sécurisées et seront uniquement utilisées pour répondre à votre demande.',
        'gdpr_compliant' => 'Conforme au RGPD',
        'no_spam' => 'Nous n\'envoyons pas de spam et ne partageons pas vos informations',
    ],
    
    // Délai de réponse
    'response_time' => [
        'title' => 'Délai de Réponse Prévu',
        'instant' => 'Immédiat pour les urgences',
        'within_24h' => 'Sous 24h pour les demandes générales',
        'within_48h' => 'Sous 48h pour les problèmes complexes',
        'emergency' => 'Pour les urgences, appelez le numéro ci-dessus',
    ],
    
    // Messages de validation du formulaire
    'validation' => [
        'name_required' => 'Veuillez entrer votre nom',
        'email_required' => 'Veuillez entrer votre adresse email',
        'email_invalid' => 'Veuillez entrer une adresse email valide',
        'message_required' => 'Veuillez entrer votre message',
        'message_min' => 'Le message doit contenir au moins 10 caractères',
        'message_max' => 'Le message ne peut pas dépasser 2000 caractères',
    ],
    
    // Accessibilité
    'accessibility' => [
        'form_label' => 'Formulaire de Contact',
        'required_indicator' => 'Champ obligatoire',
        'success_announcement' => 'Votre message a été envoyé avec succès',
        'error_announcement' => 'Il y a eu des erreurs dans votre envoi',
    ],
];