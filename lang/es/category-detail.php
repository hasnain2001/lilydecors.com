
<?php

return [
    // Meta tags
    'meta' => [
        'title' => [
            'custom' => ':title | Cupones, Ofertas y Promociones :year',
            'default' => ':name | Ofertas, Promociones y Códigos :year',
        ],
        'description' => [
            'default' => 'Encuentra las mejores ofertas de :name y códigos de descuento verificados para :year. Ahorra dinero con cupones, vales y promociones exclusivas de :lower_name actualizadas diariamente.',
        ],
        'keywords' => [
            'default' => ':name, cupones :name, códigos promocionales :name, vales :name, ofertas de descuento, ofertas :name, ahorrar dinero en línea',
        ],
    ],
    
    // Statistics badges
    'stats' => [
        'blogs_available' => ':count Blogs Disponibles',
        'stores_available' => ':count Tiendas Disponibles',
    ],
    
    // Total counts
    'total' => [
        'blogs' => 'Total Blogs',
        'stores' => 'Total Tiendas',
    ],
    
    // Blog section
    'blog_section' => [
        'title' => 'Trucos de Compras y Consejos de Ahorro',
    ],
    
    // Stores section
    'stores_section' => [
        'title' => 'Tiendas y Marcas de :name',
    ],
    
    // Pagination
    'pagination' => [
        'blogs_label' => 'Paginación de blogs',
        'stores_label' => 'Paginación de tiendas',
    ],
    
    // Empty states
    'empty_stores' => [
        'title' => '¡No se encontraron tiendas en esta categoría! Explora nuevas tiendas',
        'explore_link' => 'Explorar Todas las Tiendas',
    ],
    
    // Store default values
    'store_default_name' => 'Nombre de Tienda No Disponible',
    
    // Related content
    'related_content' => [
        'blogs_title' => 'Publicaciones de Blog Relacionadas',
        'stores_title' => 'Tiendas Relacionadas',
        'no_blogs_found' => 'No se encontraron publicaciones de blog en esta categoría',
        'no_stores_found' => 'No se encontraron tiendas en esta categoría',
    ],
    
    // Filter options (if you add filtering)
    'filter' => [
        'sort_by' => 'Ordenar Por',
        'popularity' => 'Popularidad',
        'newest' => 'Más Recientes',
        'alphabetical' => 'Alfabético',
        'rating' => 'Calificación',
        'discount' => 'Mayor Descuento',
    ],
    
    // Store features (if you add badges/icons)
    'features' => [
        'top_store' => 'Tienda Destacada',
        'verified' => 'Verificado',
        'exclusive' => 'Oferta Exclusiva',
        'limited_time' => 'Tiempo Limitado',
        'free_shipping' => 'Envío Gratis',
    ],
    
    // Coupon statistics (if you add coupon counts)
    'coupon_stats' => [
        'active_coupons' => ':count Cupones Activos',
        'verified_offers' => ':count Ofertas Verificadas',
        'success_rate' => ':rate% Tasa de Éxito',
        'last_updated' => 'Actualizado hace :time',
    ],
    
    // Newsletter (if you add it)
    'newsletter' => [
        'title' => 'Recibe Ofertas de :name en tu Bandeja de Entrada',
        'description' => 'Suscríbete para recibir cupones y ofertas exclusivas de :name',
        'subscribe' => 'Suscribirse',
        'success' => '¡Suscrito exitosamente! Revisa tu correo electrónico.',
    ],
    
    // Social sharing (if you add it)
    'share' => [
        'title' => 'Compartir esta categoría',
        'facebook' => 'Compartir en Facebook',
        'twitter' => 'Compartir en Twitter',
        'pinterest' => 'Pinear en Pinterest',
        'email' => 'Compartir por Correo',
    ],
    
    // Breadcrumb (if you need separate from common)
    'breadcrumb' => [
        'current' => 'Categoría :name',
    ],
    
    // Seasonal/holiday banners (if you add them)
    'seasonal' => [
        'holiday_sales' => 'Ventas de Vacaciones',
        'black_friday' => 'Ofertas de Black Friday',
        'cyber_monday' => 'Promociones de Cyber Monday',
        'seasonal_savings' => 'Ahorros de Temporada',
    ],
    
    // User engagement (if you add ratings/reviews)
    'user_engagement' => [
        'rate_this_category' => 'Califica esta categoría',
        'user_ratings' => 'Calificaciones de Usuarios',
        'average_rating' => 'Calificación Promedio: :rating/5',
        'based_on' => 'Basado en :count calificaciones',
        'write_review' => 'Escribir una Reseña',
    ],
    
    // Mobile app CTA (if you add it)
    'mobile_app' => [
        'title' => 'Obtén Nuestra App Móvil',
        'description' => 'Obtén ofertas de :name sobre la marcha con nuestra aplicación móvil',
        'download' => 'Descargar Ahora',
        'available_on' => 'Disponible en iOS y Android',
    ],
];
