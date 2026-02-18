<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Ofertas Destacadas - Promociones por tiempo limitado y descuentos exclusivos | ' . config('app.name'),
        'description' => 'Descubre las ofertas más destacadas de hoy y promociones por tiempo limitado de tus tiendas favoritas. ¡Ahorra mucho con nuestros descuentos exclusivos!',
    ],
    
    // Header section
    'header' => [
        'title' => '🔥 ¡ALERTA DE OFERTAS RELÁMPAGO!',
        'subtitle' => 'Ofertas por tiempo limitado que no querrás perderte - ¡actúa rápido antes de que se acaben!',
    ],
    
    // Categories section
    'categories' => [
        'title' => 'Comprar por Categoría:',
        'all' => 'Todas las Categorías',
    ],
    
    // Deal card elements
    'deal_badge' => [
        'hot' => 'OFERTA DESTACADA',
        'featured' => 'DESTACADA',
        'exclusive' => 'EXCLUSIVA',
        'limited_time' => 'TIEMPO LIMITADO',
    ],
    
    'image_alt' => 'Imagen de oferta de :name',
    'expires' => 'Vence',
    'used_count' => ':count usadas',
    
    // Action buttons
    'view_deal' => 'Ver Oferta',
    'more_offers' => 'Más Ofertas',
    
    // Empty state
    'empty' => [
        'title' => 'No hay Ofertas Destacadas Disponibles',
        'message' => '¡Vuelve pronto para nuevas ofertas relámpago y promociones por tiempo limitado!',
    ],
    
    // Pagination
    'pagination' => [
        'label' => 'Paginación de ofertas',
    ],
    
    // Deal types
    'types' => [
        'flash_sale' => 'Oferta Relámpago',
        'limited_time' => 'Tiempo Limitado',
        'doorbuster' => 'Oferta Imbatible',
        'clearance' => 'Liquidación',
        'holiday' => 'Oferta de Temporada',
        'seasonal' => 'Venta de Temporada',
    ],
    
    // Timer/Countdown (if added)
    'countdown' => [
        'expires_in' => 'Vence en:',
        'days' => 'días',
        'hours' => 'horas',
        'minutes' => 'minutos',
        'seconds' => 'segundos',
        'expired' => '¡Oferta vencida!',
    ],
    
    // Statistics (if added)
    'stats' => [
        'total_deals' => 'Total de Ofertas',
        'active_deals' => 'Activas Ahora',
        'ending_soon' => 'Próximas a Vencer',
        'avg_discount' => 'Descuento Promedio',
    ],
    
    // Filter and sorting (if added)
    'filter' => [
        'title' => 'Filtrar Ofertas',
        'sort_by' => 'Ordenar Por',
        'newest' => 'Más Recientes',
        'ending_soon' => 'Próximas a Vencer',
        'most_popular' => 'Más Populares',
        'highest_discount' => 'Mayor Descuento',
        'category' => 'Categoría',
        'store' => 'Tienda',
    ],
    
    // Featured deals section (if added)
    'featured' => [
        'title' => 'Ofertas Destacadas de Hoy',
        'view_all' => 'Ver Todas las Ofertas',
    ],
    
    // Top stores with deals (if added)
    'top_stores' => [
        'title' => 'Tiendas con Ofertas Destacadas',
        'view_all_stores' => 'Ver Todas las Tiendas',
    ],
    
    // Seasonal/holiday deals (if added)
    'seasonal' => [
        'black_friday' => 'Ofertas de Black Friday',
        'cyber_monday' => 'Ofertas de Cyber Monday',
        'holiday_sales' => 'Ventas de Vacaciones',
        'summer_sales' => 'Ventas de Verano',
        'winter_sales' => 'Ventas de Invierno',
    ],
    
    // Newsletter signup (if added)
    'newsletter' => [
        'title' => 'Recibe Alertas de Ofertas Destacadas',
        'description' => 'Suscríbete para recibir notificaciones de ofertas relámpago directamente en tu bandeja de entrada',
        'subscribe' => 'Suscribirse',
        'success' => '¡Suscrito exitosamente! Recibirás alertas de ofertas destacadas.',
    ],
    
    // Social sharing (if added)
    'share' => [
        'title' => 'Compartir esta oferta',
        'facebook' => 'Compartir en Facebook',
        'twitter' => 'Compartir en Twitter',
        'pinterest' => 'Pinear en Pinterest',
        'whatsapp' => 'Compartir en WhatsApp',
        'email' => 'Compartir por Correo',
    ],
    
    // Success rate/savings
    'savings' => [
        'up_to' => 'Hasta :percent% de descuento',
        'save_amount' => 'Ahorra :amount',
        'free_shipping' => 'Envío Gratis',
        'bogo' => 'Compra Uno y Lleva Otro',
        'extra_off' => ':percent% extra de descuento',
    ],
    
    // Deal urgency indicators
    'urgency' => [
        'almost_gone' => '¡Casi se acaba!',
        'selling_fast' => '¡Vendiendo rápido!',
        'limited_stock' => '¡Stock limitado!',
        'last_chance' => '¡Última oportunidad!',
        'expiring_today' => '¡Vence hoy!',
    ],
    
    // User actions
    'actions' => [
        'view_deal' => 'Ver Oferta',
        'get_coupon' => 'Obtener Cupón',
        'shop_now' => 'Comprar Ahora',
        'save_deal' => 'Guardar Oferta',
        'set_reminder' => 'Recordatorio',
        'report_expired' => 'Reportar Vencida',
    ],
    
    // Verification status
    'verification' => [
        'verified' => 'Oferta Verificada',
        'exclusive' => 'Oferta Exclusiva',
        'tested' => 'Probada :time',
        'reported_working' => 'Reportada funcionando hace :time',
    ],
    
    // Accessibility
    'accessibility' => [
        'deal_card' => 'Tarjeta de oferta para :store',
        'view_deal_button' => 'Ver oferta para :store',
        'more_offers_button' => 'Ver más ofertas de :store',
        'expiration_info' => 'Vence el :date',
        'usage_info' => 'Usada :count veces',
    ],
    
    // Loading states
    'loading' => [
        'deals' => 'Cargando ofertas destacadas...',
        'please_wait' => 'Por favor espera mientras cargamos las últimas ofertas',
    ],
    
    // Time periods for deals
    'time_periods' => [
        'today' => 'Ofertas de Hoy',
        'this_week' => 'Esta Semana',
        'this_month' => 'Este Mes',
        'upcoming' => 'Próximas Ofertas',
        'expired' => 'Vencidas Recientemente',
    ],
];