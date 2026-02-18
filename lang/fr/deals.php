<?php

return [
    // Balises Meta
    'meta' => [
        'title' => 'Offres Chaudes - Promotions temporaires & réductions exclusives | ' . config('app.name'),
        'description' => 'Découvrez les offres les plus chaudes du jour et les promotions limitées de vos boutiques préférées. Économisez gros avec nos réductions exclusives !',
        'keywords' => 'offres chaudes, promotions limitées, ventes flash, réductions exclusives, bonnes affaires en ligne',
    ],
    
    // Section En-tête
    'header' => [
        'title' => '🔥 ALERTE VENTES FLASH !',
        'subtitle' => 'Offres limitées à ne pas manquer - agissez vite avant qu\'elles ne disparaissent !',
    ],
    
    // Section Catégories
    'categories' => [
        'title' => 'Acheter par Catégorie :',
        'all' => 'Toutes les Catégories',
    ],
    
    // Éléments de carte offre
    'deal_badge' => [
        'hot' => 'OFFRE CHAUDE',
        'featured' => 'À LA UNE',
        'exclusive' => 'EXCLUSIF',
        'limited_time' => 'TEMPS LIMITÉ',
    ],
    
    'image_alt' => 'Image de l\'offre :name',
    'expires' => 'Expire',
    'used_count' => ':count utilisations',
    
    // Boutons d'action
    'view_deal' => 'Voir l\'Offre',
    'more_offers' => 'Plus d\'Offres',
    
    // État vide
    'empty' => [
        'title' => 'Aucune Offre Chaude Disponible',
        'message' => 'Revenez bientôt pour de nouvelles ventes flash et offres limitées !',
    ],
    
    // Pagination
    'pagination' => [
        'label' => 'Pagination des offres',
    ],
    
    // Types d'offres
    'types' => [
        'flash_sale' => 'Vente Flash',
        'limited_time' => 'Temps Limité',
        'doorbuster' => 'Offre Éclair',
        'clearance' => 'Liquidation',
        'holiday' => 'Offre Fêtes',
        'seasonal' => 'Soldes Saisonniers',
    ],
    
    // Compte à rebours (si ajouté)
    'countdown' => [
        'expires_in' => 'Expire dans :',
        'days' => 'jours',
        'hours' => 'heures',
        'minutes' => 'minutes',
        'seconds' => 'secondes',
        'expired' => 'Offre expirée !',
    ],
    
    // Statistiques (si ajoutées)
    'stats' => [
        'total_deals' => 'Total des Offres',
        'active_deals' => 'Actives Maintenant',
        'ending_soon' => 'Se Terminent Bientôt',
        'avg_discount' => 'Réduction Moyenne',
    ],
    
    // Filtre et tri (si ajoutés)
    'filter' => [
        'title' => 'Filtrer les Offres',
        'sort_by' => 'Trier par',
        'newest' => 'Plus Récentes',
        'ending_soon' => 'Se Terminent Bientôt',
        'most_popular' => 'Plus Populaires',
        'highest_discount' => 'Plus Haute Réduction',
        'category' => 'Catégorie',
        'store' => 'Boutique',
    ],
    
    // Section offres en vedette (si ajoutée)
    'featured' => [
        'title' => 'Offres à la Une du Jour',
        'view_all' => 'Voir Toutes les Offres',
    ],
    
    // Top boutiques avec offres (si ajoutées)
    'top_stores' => [
        'title' => 'Boutiques avec Offres Chaudes',
        'view_all_stores' => 'Voir Toutes les Boutiques',
    ],
    
    // Offres saisonnières/fêtes (si ajoutées)
    'seasonal' => [
        'black_friday' => 'Offres Black Friday',
        'cyber_monday' => 'Promotions Cyber Monday',
        'holiday_sales' => 'Soldes Fêtes',
        'summer_sales' => 'Soldes d\'Été',
        'winter_sales' => 'Soldes d\'Hiver',
    ],
    
    // Inscription à la newsletter (si ajoutée)
    'newsletter' => [
        'title' => 'Recevez des Alertes d\'Offres Chaudes',
        'description' => 'Abonnez-vous pour recevoir des notifications de ventes flash directement dans votre boîte mail',
        'subscribe' => 'S\'abonner',
        'success' => 'Abonnement réussi ! Vous recevrez des alertes d\'offres chaudes.',
    ],
    
    // Partage social (si ajouté)
    'share' => [
        'title' => 'Partager cette offre',
        'facebook' => 'Partager sur Facebook',
        'twitter' => 'Partager sur Twitter',
        'pinterest' => 'Épingler sur Pinterest',
        'whatsapp' => 'Partager sur WhatsApp',
        'email' => 'Partager par Email',
    ],
    
    // Taux de réussite/économies
    'savings' => [
        'up_to' => 'Jusqu\'à :percent% de réduction',
        'save_amount' => 'Économisez :amount',
        'free_shipping' => 'Livraison Gratuite',
        'bogo' => 'Achetez un - Recevez un',
        'extra_off' => ':percent% supplémentaire de réduction',
    ],
    
    // Indicateurs d'urgence des offres
    'urgency' => [
        'almost_gone' => 'Presque épuisé !',
        'selling_fast' => 'Part vite !',
        'limited_stock' => 'Stock limité !',
        'last_chance' => 'Dernière chance !',
        'expiring_today' => 'Expire aujourd\'hui !',
    ],
    
    // Actions utilisateur
    'actions' => [
        'view_deal' => 'Voir l\'Offre',
        'get_coupon' => 'Obtenir le Coupon',
        'shop_now' => 'Acheter Maintenant',
        'save_deal' => 'Sauvegarder l\'Offre',
        'set_reminder' => 'Programmer un Rappel',
        'report_expired' => 'Signaler comme Expirée',
    ],
    
    // Statut de vérification
    'verification' => [
        'verified' => 'Offre Vérifiée',
        'exclusive' => 'Offre Exclusive',
        'tested' => 'Testée :time',
        'reported_working' => 'Signalée comme fonctionnelle il y a :time',
    ],
    
    // Accessibilité
    'accessibility' => [
        'deal_card' => 'Carte d\'offre pour :store',
        'view_deal_button' => 'Voir l\'offre pour :store',
        'more_offers_button' => 'Voir plus d\'offres de :store',
        'expiration_info' => 'Expire le :date',
        'usage_info' => 'Utilisée :count fois',
    ],
    
    // États de chargement
    'loading' => [
        'deals' => 'Chargement des offres chaudes...',
        'please_wait' => 'Veuillez patienter pendant le chargement des dernières offres',
    ],
    
    // Périodes temporelles pour les offres
    'time_periods' => [
        'today' => 'Offres du Jour',
        'this_week' => 'Cette Semaine',
        'this_month' => 'Ce Mois',
        'upcoming' => 'Offres à Venir',
        'expired' => 'Récemment Expirées',
    ],
];