<?php

return [
    // Balises Meta
    'meta' => [
        'title' => [
            'custom' => ':title | Codes Promo, Offres & Bonnes Affaires :year',
            'default' => ':name | Offres, Promotions & Codes Promo :year',
        ],
        'description' => [
            'default' => 'Trouvez les meilleures offres :name et des codes de réduction vérifiés pour :year. Économisez avec des coupons :lower_name exclusifs, des bons d\'achat et des offres promo mis à jour quotidiennement.',
        ],
        'keywords' => [
            'default' => ':name, coupons :name, codes promo :name, bons d\'achat :name, offres de réduction, bonnes affaires :name, économiser en ligne',
        ],
    ],
    
    // Badges statistiques
    'stats' => [
        'blogs_available' => ':count Articles Disponibles',
        'stores_available' => ':count Boutiques Disponibles',
    ],
    
    // Totaux
    'total' => [
        'blogs' => 'Total Articles',
        'stores' => 'Total Boutiques',
    ],
    
    // Section Blog
    'blog_section' => [
        'title' => 'Astuces Shopping & Conseils d\'Économies',
    ],
    
    // Section Boutiques
    'stores_section' => [
        'title' => 'Boutiques & Marques :name',
    ],
    
    // Pagination
    'pagination' => [
        'blogs_label' => 'Pagination des articles',
        'stores_label' => 'Pagination des boutiques',
    ],
    
    // États vides
    'empty_stores' => [
        'title' => 'Aucune boutique trouvée dans cette catégorie ! Découvrez de nouvelles boutiques',
        'explore_link' => 'Explorer Toutes les Boutiques',
    ],
    
    // Valeurs par défaut boutique
    'store_default_name' => 'Nom de Boutique Non Disponible',
    
    // Contenu associé
    'related_content' => [
        'blogs_title' => 'Articles de Blog Associés',
        'stores_title' => 'Boutiques Associées',
        'no_blogs_found' => 'Aucun article de blog trouvé dans cette catégorie',
        'no_stores_found' => 'Aucune boutique trouvée dans cette catégorie',
    ],
    
    // Options de filtre (si vous ajoutez un filtrage)
    'filter' => [
        'sort_by' => 'Trier par',
        'popularity' => 'Popularité',
        'newest' => 'Plus récentes',
        'alphabetical' => 'Alphabétique',
        'rating' => 'Note',
        'discount' => 'Réduction la plus élevée',
    ],
    
    // Fonctionnalités boutique (si vous ajoutez des badges/icônes)
    'features' => [
        'top_store' => 'Boutique Top',
        'verified' => 'Vérifiée',
        'exclusive' => 'Offre Exclusive',
        'limited_time' => 'Temps Limitée',
        'free_shipping' => 'Livraison Gratuite',
    ],
    
    // Statistiques coupons (si vous ajoutez des compteurs de coupons)
    'coupon_stats' => [
        'active_coupons' => ':count Coupons Actifs',
        'verified_offers' => ':count Offres Vérifiées',
        'success_rate' => 'Taux de Réussite :rate%',
        'last_updated' => 'Mis à jour il y a :time',
    ],
    
    // Newsletter (si vous l'ajoutez)
    'newsletter' => [
        'title' => 'Recevez les Offres :name par Email',
        'description' => 'Abonnez-vous pour recevoir des coupons et offres exclusifs :name',
        'subscribe' => 'S\'abonner',
        'success' => 'Abonnement réussi ! Vérifiez vos emails.',
    ],
    
    // Partage social (si vous l'ajoutez)
    'share' => [
        'title' => 'Partager cette catégorie',
        'facebook' => 'Partager sur Facebook',
        'twitter' => 'Partager sur Twitter',
        'pinterest' => 'Épingler sur Pinterest',
        'email' => 'Partager par Email',
    ],
    
    // Fil d'Ariane (si vous avez besoin d'une version séparée du commun)
    'breadcrumb' => [
        'current' => 'Catégorie :name',
    ],
    
    // Bannières saisonnières/fêtes (si vous les ajoutez)
    'seasonal' => [
        'holiday_sales' => 'Soldes Fêtes',
        'black_friday' => 'Offres Black Friday',
        'cyber_monday' => 'Promotions Cyber Monday',
        'seasonal_savings' => 'Économies Saisonnières',
    ],
    
    // Engagement utilisateur (si vous ajoutez des notes/avis)
    'user_engagement' => [
        'rate_this_category' => 'Noter cette catégorie',
        'user_ratings' => 'Notes des Utilisateurs',
        'average_rating' => 'Note moyenne : :rating/5',
        'based_on' => 'Basé sur :count avis',
        'write_review' => 'Écrire un Avis',
    ],
    
    // CTA Application mobile (si vous l'ajoutez)
    'mobile_app' => [
        'title' => 'Téléchargez Notre Application Mobile',
        'description' => 'Recevez les offres :name en déplacement avec notre application mobile',
        'download' => 'Télécharger Maintenant',
        'available_on' => 'Disponible sur iOS & Android',
    ],
];