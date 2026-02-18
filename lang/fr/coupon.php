<?php

return [
    // Balises Meta
    'meta' => [
        'title' => 'Codes Promo - Trouvez les derniers codes promo et offres pour vos boutiques préférées',
        'description' => 'Trouvez les derniers codes promo et offres pour vos boutiques préférées. Économisez sur vos achats en ligne avec nos codes de réduction exclusifs.',
        'keywords' => 'codes promo, codes de réduction, coupons, offres, bonnes affaires, bons d\'achat, réductions, économies, shopping en ligne',
    ],
    
    // Section En-tête
    'header' => [
        'title' => 'Codes Promo Exclusifs',
        'subtitle' => 'Économisez avec nos codes de réduction vérifiés pour vos boutiques en ligne préférées',
    ],
    
    // Éléments de carte coupon
    'store_logo_alt' => 'Logo :name',
    'expires' => 'Expire',
    'used_count' => 'Utilisé :count fois',
    
    // Boutons d'action
    'get_code' => 'Obtenir le Code',
    'view_deal' => 'Voir l\'Offre',
    'more_offers' => 'Plus d\'Offres',
    
    // État vide
    'empty' => [
        'title' => 'Aucun Coupon Disponible',
        'message' => 'Aucun coupon trouvé. Veuillez revenir plus tard pour de nouvelles offres.',
    ],
    
    // Pagination
    'pagination' => [
        'label' => 'Pagination des coupons',
    ],
    
    // Fenêtre modale
    'modal' => [
        'exclusive_offer' => 'OFFRE EXCLUSIVE',
        'store_logo_alt' => 'Logo de la Boutique',
        'your_coupon_code' => 'VOTRE CODE PROMO',
        'copy' => 'Copier',
        'copied' => 'Copié dans le presse-papiers !',
        'instructions' => 'Utilisez ce code au paiement sur :store',
        'go_to_store' => 'Aller à la Boutique',
    ],
    
    // Badges d'authentification
    'auth_badges' => [
        'verified' => 'Vérifié',
        'exclusive' => 'Exclusif',
        'limited_time' => 'Temps Limité',
        'free_shipping' => 'Livraison Gratuite',
    ],
    
    // Filtre et tri (si ajoutés)
    'filter' => [
        'title' => 'Filtrer les Coupons',
        'sort_by' => 'Trier par',
        'newest' => 'Plus Récents',
        'expiring_soon' => 'Expire Bientôt',
        'most_popular' => 'Plus Populaires',
        'highest_discount' => 'Plus Haute Réduction',
        'store' => 'Boutique',
        'category' => 'Catégorie',
        'type' => 'Type',
    ],
    
    // Types de coupons
    'types' => [
        'code' => 'Code',
        'deal' => 'Offre',
        'free_shipping' => 'Livraison Gratuite',
        'percentage' => 'Pourcentage de Réduction',
        'amount' => 'Montant de Réduction',
        'bogo' => 'Achetez un - Recevez un',
    ],
    
    // Statistiques (si ajoutées)
    'stats' => [
        'total_coupons' => 'Total Coupons',
        'active_today' => 'Actifs Aujourd\'hui',
        'success_rate' => 'Taux de Réussite',
        'avg_savings' => 'Économies Moyennes',
    ],
    
    // Fonctionnalité de recherche (si ajoutée)
    'search' => [
        'placeholder' => 'Rechercher des coupons par boutique ou mot-clé...',
        'no_results' => 'Aucun coupon trouvé pour ":query"',
        'suggestions' => 'Essayez d\'autres mots-clés ou parcourez toutes les boutiques',
    ],
    
    // Coupons en vedette (si ajoutés)
    'featured' => [
        'title' => 'Coupons à la Une',
        'view_all' => 'Voir Tous les Coupons',
    ],
    
    // Top boutiques avec coupons (si ajoutées)
    'top_stores' => [
        'title' => 'Meilleures Boutiques avec Coupons',
        'view_all_stores' => 'Voir Toutes les Boutiques',
    ],
    
    // Catégories avec coupons (si ajoutées)
    'top_categories' => [
        'title' => 'Catégories Populaires',
        'view_all_categories' => 'Voir Toutes les Catégories',
    ],
    
    // Inscription à la newsletter (si ajoutée)
    'newsletter' => [
        'title' => 'Recevez des Alertes de Nouveaux Coupons',
        'description' => 'Abonnez-vous pour recevoir de nouveaux codes promo et offres directement dans votre boîte mail',
        'subscribe' => 'S\'abonner',
        'success' => 'Abonnement réussi ! Vous recevrez des alertes de nouveaux coupons.',
    ],
    
    // Partage social (si ajouté)
    'share' => [
        'title' => 'Partager ce coupon',
        'facebook' => 'Partager sur Facebook',
        'twitter' => 'Partager sur Twitter',
        'pinterest' => 'Épingler sur Pinterest',
        'email' => 'Partager par Email',
    ],
    
    // Indicateur de taux de réussite
    'success_rate' => [
        'excellent' => 'Excellent taux de réussite',
        'good' => 'Bon taux de réussite',
        'average' => 'Taux de réussite moyen',
        'low' => 'Faible taux de réussite',
        'new' => 'Nouveau coupon',
    ],
    
    // Avertissements d'expiration
    'expiration' => [
        'expiring_soon' => 'Expire bientôt !',
        'expired' => 'Expiré',
        'expires_today' => 'Expire aujourd\'hui !',
        'valid_until' => 'Valide jusqu\'au :date',
    ],
    
    // Actions utilisateur
    'actions' => [
        'reveal_code' => 'Révéler le Code',
        'copy_code' => 'Copier le Code',
        'get_deal' => 'Obtenir l\'Offre',
        'visit_store' => 'Visiter la Boutique',
        'save_coupon' => 'Sauvegarder le Coupon',
        'report_expired' => 'Signaler comme Expiré',
    ],
    
    // Statut de vérification
    'verification' => [
        'verified' => 'Vérifié',
        'unverified' => 'Non vérifié',
        'tested' => 'Testé :time',
        'reported_working' => 'Signalé comme fonctionnel il y a :time',
    ],
    
    // Accessibilité
    'accessibility' => [
        'coupon_card' => 'Carte coupon pour :store',
        'reveal_button' => 'Révéler le code promo pour :store',
        'deal_button' => 'Obtenir l\'offre pour :store',
        'more_offers_button' => 'Voir plus d\'offres de :store',
        'expiration_info' => 'Expire le :date',
        'usage_info' => 'Utilisé :count fois',
    ],
    
    // États de chargement
    'loading' => [
        'coupons' => 'Chargement des coupons...',
        'please_wait' => 'Veuillez patienter pendant le chargement des coupons disponibles',
    ],
];