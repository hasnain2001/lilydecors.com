<?php

return [
    // Balises Meta
    'meta' => [
        'title' => 'Politique de Confidentialité | ' . config('app.name'),
        'description' => 'Lisez notre politique de confidentialité pour comprendre comment nous traitons vos données et protégeons votre vie privée.',
        'keywords' => 'confidentialité, politique, protection des données, sécurité des données, RGPD, cookies',
        'author' => config('app.name'),
    ],
    
    // Section En-tête
    'header' => [
        'title' => 'Politique de Confidentialité',
        'subtitle' => 'Votre vie privée est importante pour nous. Apprenez comment nous protégeons et traitons vos données.',
        'last_updated' => 'Dernière mise à jour le',
    ],
    
    // Carte principale
    'card' => [
        'title' => 'Protection de Vos Données & Vie Privée',
    ],
    
    // Section Alerte
    'alert' => [
        'title' => 'La Transparence Compte',
        'description' => 'Cette politique explique comment nous collectons, utilisons et protégeons vos informations en termes clairs et simples.',
    ],
    
    // Sections de la politique
    'sections' => [
        'collection' => [
            'title' => 'Informations que Nous Collectons',
            'intro' => 'Nous collectons des informations qui nous aident à fournir de meilleurs services et améliorer votre expérience. Cela inclut :',
            'types' => [
                'Informations Personnelles' => 'Nom, adresse email et coordonnées lorsque vous vous inscrivez ou nous contactez',
                'Données d\'Utilisation' => 'Comment vous interagissez avec notre site web, pages visitées et fonctionnalités utilisées',
                'Informations Techniques' => 'Type de navigateur, informations sur l\'appareil et adresse IP à des fins de sécurité',
                'Données de Communication' => 'Messages, retours et demandes que vous nous envoyez',
            ],
            'conclusion' => 'Nous ne collectons que les informations nécessaires pour fournir nos services et améliorer votre expérience.',
        ],
        
        'usage' => [
            'title' => 'Comment Nous Utilisons Vos Informations',
            'intro' => 'Vos informations nous aident à offrir un excellent service et améliorer notre plateforme. Nous les utilisons pour :',
            'purposes' => [
                'Répondre à vos demandes et fournir un support client personnalisé',
                'Traiter les transactions et fournir les services que vous demandez',
                'Améliorer la fonctionnalité de notre site web et l\'expérience utilisateur',
                'Envoyer des mises à jour importantes sur nos services (vous pouvez vous désinscrire à tout moment)',
                'Protéger contre la fraude et assurer la sécurité de la plateforme',
                'Analyser les schémas d\'utilisation pour améliorer nos offres',
            ],
            'important_note' => 'Nous ne vendons pas et ne vendrons jamais vos informations personnelles à des tiers.',
        ],
        
        'security' => [
            'title' => 'Sécurité & Protection des Données',
            'intro' => 'Nous prenons la sécurité de vos données au sérieux et mettons en œuvre des mesures robustes pour les protéger :',
            'measures' => [
                'Chiffrement' => 'Toutes les données sensibles sont chiffrées pendant la transmission et le stockage',
                'Serveurs Sécurisés' => 'Vos informations sont stockées sur des serveurs protégés avec accès limité',
                'Contrôles d\'Accès' => 'Des politiques internes strictes contrôlent qui peut accéder à vos données',
                'Audits Réguliers' => 'Nous effectuons des évaluations de sécurité pour maintenir les normes de protection',
                'Formation des Employés' => 'Notre équipe est formée aux meilleures pratiques de protection des données',
            ],
            'disclaimer' => 'Bien que nous mettions en œuvre des mesures de sécurité standard de l\'industrie, aucune méthode de transmission sur Internet n\'est sûre à 100%. Nous recommandons d\'utiliser des mots de passe forts et de garder vos informations de connexion confidentielles.',
        ],
        
        'cookies' => [
            'title' => 'Cookies & Technologies de Suivi',
            'intro' => 'Nous utilisons des cookies et technologies similaires pour améliorer votre expérience de navigation :',
            'types' => [
                'Cookies Essentiels' => 'Nécessaires au bon fonctionnement du site web',
                'Cookies de Performance' => 'Nous aident à comprendre comment les visiteurs utilisent notre site',
                'Cookies Fonctionnels' => 'Mémorisent vos préférences et paramètres',
                'Cookies d\'Analyse' => 'Fournissent des insights pour améliorer nos services',
            ],
            'management' => 'Vous pouvez gérer les préférences de cookies via les paramètres de votre navigateur. Cependant, désactiver les cookies essentiels peut affecter la fonctionnalité du site web.',
        ],
        
        'third_party' => [
            'title' => 'Liens & Services Tiers',
            'intro' => 'Notre site web peut contenir des liens vers des sites et services externes. Notes importantes :',
            'notes' => [
                'Nous sélectionnons soigneusement nos partenaires mais ne pouvons contrôler leurs pratiques de confidentialité',
                'Les sites externes ont leurs propres politiques de confidentialité que nous ne contrôlons pas',
                'Nous ne sommes pas responsables du contenu ou des pratiques des sites web liés',
                'Nous recommandons de consulter les politiques de confidentialité tierces avant de partager des informations',
            ],
            'disclaimer' => 'Lorsque vous quittez notre site via ces liens, notre politique de confidentialité ne s\'applique plus à vos activités sur ces sites externes.',
        ],
        
        'updates' => [
            'title' => 'Mises à Jour & Modifications de la Politique',
            'intro' => 'Nous pouvons mettre à jour cette politique de confidentialité pour refléter les changements dans nos pratiques ou exigences légales :',
            'procedures' => [
                'Les modifications importantes seront notifiées par email ou avis visible sur le site web',
                'L\'utilisation continue de nos services après les modifications constitue une acceptation',
                'Nous conservons l\'historique des versions de toutes les mises à jour de politique',
                'La date "Dernière mise à jour" en haut indique la dernière révision',
            ],
            'recommendation' => 'Nous vous encourageons à consulter cette politique périodiquement pour rester informé sur la manière dont nous protégeons vos informations.',
        ],
        
        'contact' => [
            'title' => 'Questions & Coordonnées',
            'intro' => 'Nous nous engageons à être transparents sur nos pratiques de confidentialité. Si vous avez des questions ou préoccupations :',
            'details' => [
                'Email' => '<a href="mailto:contact@lilydecors.com" class="contact-email">contact@lilydecors.com</a>',
                'Délégué à la Protection des Données' => 'John Smith',
                'Courrier' => '123 Privacy Lane, Data City, DC 12345',
                'Délai de Réponse' => 'Nous visons à répondre sous 48 heures',
            ],
            'rights' => 'Vous avez le droit d\'accéder, corriger ou supprimer vos informations personnelles. Contactez-nous pour exercer ces droits.',
        ],
    ],
    
    // Bouton retour
    'back_button' => 'Retour à l\'Accueil',
    
    // Termes supplémentaires pour la bannière de consentement cookies (si nécessaire)
    'cookie_consent' => [
        'title' => 'Préférences de Cookies',
        'message' => 'Nous utilisons des cookies pour améliorer votre expérience de navigation et analyser notre trafic.',
        'accept_all' => 'Accepter Tout',
        'reject_all' => 'Rejeter Tout',
        'manage' => 'Gérer les Préférences',
        'necessary' => 'Nécessaires',
        'analytics' => 'Analyse',
        'marketing' => 'Marketing',
        'preferences' => 'Préférences',
        'save' => 'Enregistrer les Préférences',
    ],
    
    // Droits sur les données (spécifique RGPD)
    'data_rights' => [
        'title' => 'Vos Droits sur les Données',
        'access' => 'Droit d\'Accès',
        'rectification' => 'Droit de Rectification',
        'erasure' => 'Droit à l\'Effacement (Droit à l\'Oubli)',
        'restriction' => 'Droit à la Limitation du Traitement',
        'portability' => 'Droit à la Portabilité des Données',
        'object' => 'Droit d\'Opposition',
        'description' => 'En vertu du RGPD et autres lois sur la protection des données, vous avez des droits spécifiques concernant vos données personnelles.',
    ],
    
    // Conservation des données
    'retention' => [
        'title' => 'Conservation des Données',
        'description' => 'Nous conservons vos données personnelles uniquement aussi longtemps que nécessaire pour remplir les finalités pour lesquelles elles ont été collectées.',
        'periods' => [
            'données_compte' => 'Données de compte : Tant que votre compte est actif',
            'données_transaction' => 'Données de transaction : 7 ans à des fins fiscales',
            'données_communication' => 'Données de communication : 3 ans',
            'données_analyse' => 'Données d\'analyse : 26 mois',
        ],
    ],
    
    // Transferts internationaux de données
    'international_transfers' => [
        'title' => 'Transferts Internationaux de Données',
        'description' => 'Vos informations peuvent être transférées et traitées dans des pays autres que le vôtre.',
        'safeguards' => 'Nous mettons en œuvre des garanties appropriées pour les transferts internationaux de données.',
    ],
    
    // Confidentialité des enfants
    'children' => [
        'title' => 'Confidentialité des Enfants',
        'description' => 'Nos services ne sont pas destinés aux enfants de moins de 16 ans. Nous ne collectons pas sciemment d\'informations personnelles d\'enfants.',
        'contact' => 'Si vous pensez que nous avons collecté des informations d\'un enfant, veuillez nous contacter immédiatement.',
    ],
    
    // Prise de décision automatisée
    'automated_decisions' => [
        'title' => 'Prise de Décision Automatisée',
        'description' => 'Nous n\'utilisons pas la prise de décision automatisée ou le profilage produisant des effets juridiques.',
    ],
    
    // Notification de violation de données
    'data_breach' => [
        'title' => 'Notification de Violation de Données',
        'description' => 'En cas de violation de données, nous notifierons les utilisateurs concernés et les autorités comme exigé par la loi.',
    ],
    
    // Signaux Ne Pas Suivre (Do Not Track)
    'do_not_track' => [
        'title' => 'Signaux "Ne Pas Suivre"',
        'description' => 'Notre site web ne répond pas aux signaux "Ne Pas Suivre" des navigateurs.',
    ],
    
    // Droits de confidentialité Californie (CCPA)
    'ccpa' => [
        'title' => 'Droits de Confidentialité Californie',
        'description' => 'Les résidents californiens ont des droits supplémentaires en vertu du California Consumer Privacy Act (CCPA).',
        'right_to_know' => 'Droit de Savoir',
        'right_to_delete' => 'Droit de Suppression',
        'right_to_opt_out' => 'Droit de Refuser la Vente',
        'non_discrimination' => 'Droit de Non-Discrimination',
    ],
];