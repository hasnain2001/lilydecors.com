<?php

return [
    // Balises Meta
    'meta' => [
        'title' => 'Blog des Derniers Codes Promo & Astuces Shopping :year | :app_name',
        'description' => 'Découvrez nos articles et offres exceptionnels. Trouvez les meilleurs produits et services en un seul endroit.',
        'keywords' => 'blogs, offres, produits, services',
        'author' => 'John Doe',
    ],
    
    // Section En-tête
    'header' => [
        'title' => 'Notre Blog',
        'subtitle' => 'Découvrez les derniers conseils, astuces et actualités sur :app_name',
    ],
    
    // Section Statistiques
    'stats' => [
        'articles_published' => 'Articles Publiés',
        'expert_writers' => 'Rédacteurs Experts',
        'latest_updates' => 'Mises à Jour Récentes',
    ],
    
    // Valeurs par défaut
    'defaults' => [
        'author_initials' => 'A',
        'author_name' => 'Admin',
    ],
    
    // État vide
    'empty' => [
        'title' => 'Aucun Blog Trouvé',
        'message' => 'Revenez bientôt pour de nouveaux articles et mises à jour.',
    ],
    
    // Filtre par catégories (si vous ajoutez un filtrage par catégorie)
    'categories' => [
        'all' => 'Toutes les Catégories',
        'filter_by' => 'Filtrer par Catégorie',
        'popular' => 'Catégories Populaires',
    ],
    
    // Options de tri (si vous ajoutez un tri)
    'sort' => [
        'latest' => 'Plus Récents',
        'popular' => 'Plus Populaires',
        'trending' => 'Tendance',
        'oldest' => 'Plus Anciens',
        'title_az' => 'Titre (A-Z)',
        'title_za' => 'Titre (Z-A)',
    ],
    
    // Fonctionnalité de recherche (si vous ajoutez une recherche)
    'search' => [
        'placeholder' => 'Rechercher des articles...',
        'no_results' => 'Aucun article trouvé pour ":query"',
        'suggestions' => 'Essayez d\'autres mots-clés ou parcourez les catégories',
    ],
    
    // Section Articles en vedette (si vous l'ajoutez)
    'featured' => [
        'title' => 'Articles à la Une',
        'view_all' => 'Voir Tous les Articles en Vedette',
    ],
    
    // Inscription à la newsletter (si vous l'ajoutez à la page du blog)
    'newsletter' => [
        'title' => 'Abonnez-vous à Notre Blog',
        'description' => 'Recevez les derniers articles directement dans votre boîte mail',
        'subscribe' => 'S\'abonner',
        'success' => 'Abonnement réussi ! Vérifiez vos emails.',
    ],
    
    // Partage social (si vous ajoutez des boutons de partage)
    'share' => [
        'title' => 'Partager cet article',
        'facebook' => 'Partager sur Facebook',
        'twitter' => 'Partager sur Twitter',
        'linkedin' => 'Partager sur LinkedIn',
        'pinterest' => 'Épingler sur Pinterest',
    ],
    
    // Temps de lecture (si vous l'ajoutez)
    'reading_time' => [
        'min_read' => 'min de lecture',
        'less_than_minute' => 'Moins d\'une minute',
    ],
    
    // Étiquettes (si vous ajoutez un système d'étiquettes)
    'tags' => [
        'title' => 'Étiquettes Populaires',
        'view_all_tags' => 'Voir Toutes les Étiquettes',
        'no_tags' => 'Aucune étiquette disponible',
    ],
    
    // Commentaires (si vous ajoutez un système de commentaires)
    'comments' => [
        'title' => 'Commentaires',
        'no_comments' => 'Aucun commentaire pour le moment. Soyez le premier à commenter !',
        'leave_comment' => 'Laisser un Commentaire',
        'post_comment' => 'Publier le Commentaire',
        'reply' => 'Répondre',
    ],
    
    // Articles similaires (si vous ajoutez une section d'articles similaires)
    'related' => [
        'title' => 'Vous Pourriez Aussi Aimé',
        'read_more' => 'Lire la Suite',
    ],
    
    // Pagination
    'pagination' => [
        'showing' => 'Affichage de :from à :to sur :total articles',
        'previous' => 'Précédent',
        'next' => 'Suivant',
        'page' => 'Page :current sur :last',
    ],
    
    // Archives (si vous ajoutez une fonctionnalité d'archives)
    'archive' => [
        'title' => 'Archives du Blog',
        'by_month' => 'Articles par Mois',
        'by_year' => 'Articles par Année',
        'by_category' => 'Articles par Catégorie',
    ],
    
    // Auteurs (si vous ajoutez des pages d'auteur)
    'authors' => [
        'title' => 'Nos Rédacteurs',
        'view_profile' => 'Voir le Profil',
        'posts_by' => 'Articles de :author',
        'bio' => 'À propos de l\'Auteur',
    ],
];