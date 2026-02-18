<?php

return [
    // Balises Meta
    'meta' => [
        'title' => 'FAQ - ' . config('app.name') . ' Coupons & Bonnes Affaires',
        'description' => 'Trouvez des réponses sur l\'utilisation des coupons, le cashback, le marketing d\'affiliation et plus encore sur ' . config('app.name') . '. Votre destination pour économiser sur la décoration !',
        'keywords' => 'FAQ, coupons, bonnes affaires, cashback, marketing d\'affiliation, codes de réduction, économies décoration intérieure',
    ],
    
    // Section Héro
    'hero' => [
        'title' => 'Questions Fréquemment Posées',
        'description' => 'Tout ce que vous devez savoir pour trouver les meilleurs coupons, gagner du cashback et maximiser vos économies sur la décoration avec ' . config('app.name') . ' !',
        'badge' => 'Économisez jusqu\'à 70% avec nos coupons exclusifs',
    ],
    
    // Bannière statistiques
    'stats' => [
        'active_coupons' => '10 000+',
        'active_coupons_label' => 'Coupons Actifs',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Marques Partenaires',
        'saved_amount' => '2M$+',
        'saved_amount_label' => 'Économisé par nos Utilisateurs',
        'happy_members' => '100K+',
        'happy_members_label' => 'Membres Satisfaits',
    ],
    
    // Barre de recherche
    'search' => [
        'placeholder' => 'Rechercher des réponses... Essayez "cashback", "coupon expiré", "affiliation", "comment utiliser"...',
        'no_results' => [
            'title' => 'Aucun résultat trouvé pour ":term"',
            'description' => 'Essayez d\'autres mots-clés ou parcourez nos catégories.',
            'show_all' => 'Afficher Toutes les FAQ',
        ],
    ],
    
    // Catégories
    'categories' => [
        'all' => 'Toutes les Questions',
        'coupons' => 'Coupons & Offres',
        'cashback' => 'Cashback & Récompenses',
        'affiliate' => 'Programme d\'Affiliation',
        'account' => 'Compte & Technique',
        'earning' => 'Gagner de l\'Argent',
    ],
    
    // Questions et réponses - Coupons & Offres
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => 'Comment utiliser les coupons de ' . config('app.name') . ' ?',
                'description' => 'Utiliser nos coupons est facile ! Suivez ces étapes :',
                'steps' => [
                    'Trouvez un coupon pour votre boutique de décoration préférée',
                    'Cliquez sur le bouton "Obtenir le Code" ou "Voir l\'Offre"',
                    'Vous serez redirigé vers le site de la boutique',
                    'Ajoutez des articles à votre panier',
                    'Au paiement, entrez le code promo dans le champ dédié',
                    'Finalisez votre achat et profitez des économies !',
                ],
                'pro_tip' => [
                    'title' => 'Astuce Pro',
                    'description' => 'Certaines offres sont automatiques - cliquez simplement sur notre lien et la réduction sera appliquée automatiquement au paiement !',
                ],
            ],
            'code_not_working' => [
                'title' => 'Pourquoi mon code promo ne fonctionne-t-il pas ?',
                'description' => 'Si un coupon ne fonctionne pas, voici les raisons les plus courantes :',
                'reasons' => [
                    'Code Expiré' => 'Les coupons ont des dates d\'expiration',
                    'Achat Minimum' => 'Certains nécessitent un montant minimum (ex : 50€+)',
                    'Articles Exclus' => 'Les articles en solde ou certaines marques peuvent être exclus',
                    'Usage Unique' => 'Les codes à usage unique ne peuvent être réutilisés',
                    'Région Limitée' => 'Certains codes fonctionnent uniquement dans des pays spécifiques',
                    'Déjà Appliqué' => 'Impossible de combiner plusieurs codes de pourcentage',
                ],
                'solution' => [
                    'title' => 'Solution',
                    'description' => 'Consultez notre site pour les derniers codes. Si un ne fonctionne pas, nous avons généralement des alternatives disponibles !',
                ],
            ],
            'update_frequency' => [
                'title' => 'À quelle fréquence mettez-vous à jour vos coupons ?',
                'description' => 'Nous mettons à jour nos coupons plusieurs fois par jour ! Voici notre planning de mise à jour :',
                'schedule' => [
                    'Surveillance en Temps Réel' => 'Nouvelles offres ajoutées dès leur découverte',
                    'Codes Expirés' => 'Supprimés dans l\'heure suivant l\'expiration',
                    'Récapitulatifs Hebdomadaires' => 'Meilleures offres de la semaine chaque lundi',
                    'Spéciales Fêtes' => 'Mises à jour horaires pour le Black Friday, Cyber Monday',
                ],
                'get_notified' => [
                    'title' => 'Soyez Notifié',
                    'description' => 'Abonnez-vous à notre newsletter ou activez les notifications navigateur pour recevoir des mises à jour instantanées sur les nouveaux coupons de vos boutiques préférées !',
                ],
            ],
            'multiple_coupons' => [
                'title' => 'Puis-je cumuler plusieurs coupons ?',
                'description' => 'Cela dépend de la politique de la boutique, mais voici ce que vous devez savoir :',
                'policies' => [
                    'La Plupart des Boutiques' => 'Autorisent un code de pourcentage + livraison gratuite',
                    'Certaines Boutiques' => 'Autorisent le cumul avec des offres cashback',
                    'Rarement Autorisé' => 'Plusieurs coupons de pourcentage',
                    'Toujours Vérifier' => 'Page de politique des coupons de la boutique',
                ],
                'best_strategy' => [
                    'title' => 'Meilleure Stratégie',
                    'description' => 'Utilisez notre filtre :code pour trouver le meilleur coupon unique qui vous offre un maximum d\'économies sans avoir besoin de cumuler.',
                ],
            ],
        ],
        
        'cashback' => [
            'how_it_works' => [
                'title' => 'Comment fonctionne le cashback ?',
                'description' => 'Le cashback est l\'argent que vous récupérez sur les achats effectués via nos liens :',
                'steps' => [
                    'Inscrivez-vous gratuitement sur ' . config('app.name'),
                    'Trouvez une boutique offrant du cashback',
                    'Cliquez sur le bouton "Activer le Cashback"',
                    'Achetez normalement sur le site de la boutique',
                    'Votre achat est suivi automatiquement',
                    'Le cashback apparaît dans votre compte sous 24-48 heures',
                    'Retirez quand vous atteignez le minimum de 10$',
                ],
                'example' => [
                    'title' => 'Exemple',
                    'description' => 'Achetez une lampe à 200€ avec 5% de cashback = 10€ récupérés !',
                ],
            ],
            'timeline' => [
                'title' => 'Combien de temps faut-il pour que le cashback apparaisse ?',
                'description' => 'Voici le délai typique du cashback :',
                'stages' => [
                    'En Attente' => 'Apparaît sous 24-48 heures après l\'achat',
                    'Confirmé' => '30-90 jours (après la période de retour de la boutique)',
                    'Payable' => 'Disponible pour retrait une fois confirmé',
                    'Retrait' => 'Traité sous 3-5 jours ouvrés',
                ],
                'note' => [
                    'title' => 'Note',
                    'description' => 'Certaines boutiques ont des périodes de confirmation plus longues, surtout pour les meubles et articles volumineux avec des délais de retour plus longs.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => 'Puis-je cumuler cashback et coupons ?',
                'answer' => 'Oui ! C\'est là que vous maximisez vos économies :',
                'tips' => [
                    'Utilisez toujours un code promo au paiement',
                    'Assurez-vous que le cashback est activé avant de cliquer',
                    'Vous économisez immédiatement avec le coupon ET gagnez du cashback',
                    'Certaines boutiques offrent du cashback bonus avec des coupons spécifiques',
                ],
                'double_dip' => [
                    'title' => 'Stratégie Double Gain',
                    'description' => 'Utilisez le coupon :code pour 20% de réduction + 5% de cashback = 25% d\'économies totales !',
                ],
            ],
        ],
        
        'affiliate' => [
            'become_affiliate' => [
                'title' => 'Comment devenir affilié ' . config('app.name') . ' ?',
                'description' => 'Rejoignez notre programme d\'affiliation et gagnez des commissions :',
                'steps' => [
                    'Inscrivez-vous sur notre Portail d\'Affiliation',
                    'Obtenez l\'approbation (généralement sous 24 heures)',
                    'Accédez à vos liens d\'affiliation uniques',
                    'Partagez les liens sur votre blog, réseaux sociaux ou site web',
                    'Gagnez des commissions sur les ventes référées',
                    'Soyez payé mensuellement via PayPal ou virement bancaire',
                ],
                'commission_rates' => [
                    'title' => 'Taux de Commission',
                    'description' => 'Gagnez 5-15% sur les ventes selon la boutique et votre niveau de performance.',
                ],
            ],
            'requirements' => [
                'title' => 'Quelles sont les conditions pour rejoindre ?',
                'description' => 'Conditions de base pour notre programme d\'affiliation :',
                'list' => [
                    'Site web, blog ou réseaux sociaux actifs avec contenu décoration/ameublement',
                    'Minimum 1 000 visiteurs mensuels (ou 5 000 abonnés sur les réseaux)',
                    'Le contenu doit être familial et pertinent',
                    'Pas de spam ou de contenu interdit',
                    'Conformité aux exigences de divulgation FTC',
                ],
                'bonus' => [
                    'title' => 'Bonus',
                    'description' => 'Les influenceurs déco, blogueurs design d\'intérieur et créateurs de contenu DIY obtiennent une approbation prioritaire !',
                ],
            ],
            'earnings_potential' => [
                'title' => 'Combien puis-je gagner en tant qu\'affilié ?',
                'description' => 'Les gains varient selon votre trafic et stratégie de promotion :',
                'types' => [
                    'Commission Standard' => '5% sur toutes les ventes référées',
                    'Bonus de Performance' => 'Jusqu\'à 15% pour les meilleurs performeurs',
                    'Commissions Récurrentes' => '2% sur les renouvellements d\'abonnement',
                    'Paiements Bonus' => 'Promotions spéciales et concours',
                ],
                'top_earners' => [
                    'title' => 'Meilleurs Gagnants',
                    'description' => 'Nos affiliés les plus performants gagnent 5 000$+ par mois en promouvant des offres déco !',
                ],
            ],
        ],
        
        'account' => [
            'free_account' => [
                'title' => 'Créer un compte est-il gratuit ?',
                'answer' => 'Absolument ! 100% gratuit pour toujours.',
                'description' => 'Voici ce que vous obtenez avec un compte gratuit :',
                'benefits' => [
                    'Suivez vos gains cashback',
                    'Sauvegardez vos coupons et boutiques préférés',
                    'Recevez des alertes d\'offres personnalisées',
                    'Rejoignez notre programme de récompenses',
                    'Accédez aux offres réservées aux membres',
                    'Gagnez des bonus de parrainage',
                ],
                'conclusion' => 'Aucune carte de crédit requise. Aucuns frais cachés. Juste des économies pures !',
            ],
            'tracking_issues' => [
                'title' => 'Pourquoi mon achat n\'est-il pas suivi ?',
                'description' => 'Si votre achat n\'est pas suivi, essayez ces solutions :',
                'solutions' => [
                    'Cliquez via nos Liens' => 'Toujours cliquer via notre lien - ne tapez pas les URLs directement',
                    'Désactivez les Bloqueurs' => 'Certains bloquent les scripts de suivi',
                    'Finalisez l\'Achat' => 'Doit terminer le paiement dans la même session navigateur',
                    'Vérifiez l\'Éligibilité' => 'Certains articles sont exclus du cashback',
                    'Attendez 48 Heures' => 'Le suivi peut prendre jusqu\'à 2 jours pour apparaître',
                ],
                'need_help' => [
                    'title' => 'Besoin d\'Aide ?',
                    'description' => 'Contactez le support avec vos détails de commande et nous le suivrons manuellement pour vous !',
                ],
            ],
        ],
        
        'earning' => [
            'ways_to_earn' => [
                'title' => 'Comment puis-je gagner de l\'argent avec ' . config('app.name') . ' ?',
                'description' => 'Il existe plusieurs façons de gagner avec nous :',
                'methods' => [
                    'Cashback' => 'Gagnez sur vos propres achats',
                    'Programme d\'Affiliation' => 'Gagnez des commissions en promouvant des offres',
                    'Programme de Parrainage' => 'Gagnez 5€ pour chaque ami qui s\'inscrit et achète',
                    'Créateur de Contenu' => 'Soumettez des astuces d\'offres et gagnez des bonus',
                    'Ambassadeur de Boutique' => 'Programmes spéciaux pour les meilleures boutiques',
                ],
                'pro_tip' => [
                    'title' => 'Astuce Pro',
                    'description' => 'Rejoignez tous les programmes simultanément pour maximiser votre potentiel de gains !',
                ],
            ],
            'payment_details' => [
                'title' => 'Quand et comment suis-je payé ?',
                'description' => 'Notre planning de paiement et méthodes :',
                'details' => [
                    'Planning de Paiement' => 'Mensuel, vers le 15 du mois',
                    'Paiement Minimum' => '10€ pour le cashback, 50€ pour les affiliés',
                    'Méthodes de Paiement' => 'PayPal, Virement Bancaire, Cartes Cadeaux',
                    'Délai de Traitement' => '3-5 jours ouvrés après la demande',
                    'Documents Fiscaux' => 'Formulaire 1099 émis pour les gains > 600€/an',
                ],
                'conclusion' => 'Tous les paiements sont sécurisés et garantis par notre assurance paiement.',
            ],
        ],
    ],
    
    // Section Fonctionnement
    'how_it_works' => [
        'title' => 'Comment fonctionne ' . config('app.name'),
        'description' => 'Votre guide pour maximiser les économies sur vos achats décoration',
        'steps' => [
            [
                'title' => 'Trouvez des Offres',
                'description' => 'Parcourez des milliers de coupons et offres cashback des meilleures marques de décoration.',
            ],
            [
                'title' => 'Cliquez & Achetez',
                'description' => 'Cliquez via nos liens pour activer les économies et achetez directement sur les sites des marques.',
            ],
            [
                'title' => 'Économisez',
                'description' => 'Utilisez les codes promo au paiement et gagnez du cashback sur les achats éligibles.',
            ],
            [
                'title' => 'Gagnez des Récompenses',
                'description' => 'Rejoignez notre programme d\'affiliation ou de parrainage pour gagner encore plus.',
            ],
        ],
    ],
    
    // Appel à l'action
    'cta' => [
        'title' => 'Prêt à Commencer à Économiser ?',
        'description' => 'Rejoignez des milliers d\'acheteurs avisés qui économisent sur la décoration chaque jour. Que vous achetiez des meubles, de la décoration ou des fournitures DIY, ' . config('app.name') . ' vous aide à obtenir les meilleures offres.',
        'join_button' => 'Rejoignez Gratuitement & Économisez',
        'browse_button' => 'Parcourez les Derniers Coupons',
        'security_note' => '100% Sécurisé • Pas de Spam • Désabonnement à Tout Moment',
    ],
    
    // Sections supplémentaires (si nécessaire)
    'popular_questions' => [
        'title' => 'Questions Populaires',
        'most_viewed' => 'Les Plus Consultées',
        'recently_added' => 'Récemment Ajoutées',
    ],
    
    'help_center' => [
        'title' => 'Toujours Besoin d\'Aide ?',
        'contact_us' => 'Contactez-nous',
        'live_chat' => 'Chat en Direct',
        'email_support' => 'Support par Email',
        'response_time' => 'Délai de réponse moyen : 2 heures',
    ],
    
    'related_topics' => [
        'title' => 'Sujets Connexes',
        'privacy_policy' => 'Politique de Confidentialité',
        'terms_of_service' => 'Conditions d\'Utilisation',
        'affiliate_disclosure' => 'Divulgation Affiliation',
        'cookie_policy' => 'Politique des Cookies',
    ],
    
    'accessibility' => [
        'keyboard_navigation' => 'Utilisez Tab pour naviguer dans les FAQ, Entrée pour développer, Échap pour fermer',
        'screen_reader' => 'Adapté aux lecteurs d\'écran',
        'high_contrast' => 'Mode contraste élevé disponible',
    ],
];