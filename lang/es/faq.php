<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Preguntas Frecuentes - ' . config('app.name') . ' Cupones y Ofertas',
        'description' => 'Encuentra respuestas sobre cómo usar cupones, ganar reembolsos, marketing de afiliados y más en ' . config('app.name') . '. ¡Tu destino ideal para ahorrar en decoración del hogar!',
        'keywords' => 'FAQ, preguntas frecuentes, cupones, ofertas, reembolso, cashback, marketing de afiliados, códigos de descuento, ahorros en decoración del hogar',
    ],
    
    // Hero section
    'hero' => [
        'title' => 'Preguntas Frecuentes',
        'description' => 'Todo lo que necesitas saber para encontrar los mejores cupones, ganar reembolsos y maximizar tus ahorros en decoración del hogar con ' . config('app.name') . '!',
        'badge' => 'Ahorra hasta un 70% con nuestros cupones exclusivos',
    ],
    
    // Statistics banner
    'stats' => [
        'active_coupons' => '10,000+',
        'active_coupons_label' => 'Cupones Activos',
        'partner_brands' => '500+',
        'partner_brands_label' => 'Marcas Asociadas',
        'saved_amount' => '$2M+',
        'saved_amount_label' => 'Ahorrados por Nuestros Usuarios',
        'happy_members' => '100K+',
        'happy_members_label' => 'Miembros Felices',
    ],
    
    // Search bar
    'search' => [
        'placeholder' => 'Busca respuestas... Prueba con \'reembolso\', \'cupón vencido\', \'afiliado\', \'cómo usar\'...',
        'no_results' => [
            'title' => 'No se encontraron resultados para ":term"',
            'description' => 'Intenta con diferentes palabras clave o explora nuestras categorías.',
            'show_all' => 'Mostrar Todas las FAQs',
        ],
    ],
    
    // Categories
    'categories' => [
        'all' => 'Todas las Preguntas',
        'coupons' => 'Cupones y Ofertas',
        'cashback' => 'Reembolsos y Recompensas',
        'affiliate' => 'Programa de Afiliados',
        'account' => 'Cuenta y Soporte Técnico',
        'earning' => 'Ganar Dinero',
    ],
    
    // Questions and answers - Coupons & Deals
    'questions' => [
        'coupons' => [
            'how_to_use' => [
                'title' => '¿Cómo uso los cupones de ' . config('app.name') . '?',
                'description' => '¡Usar nuestros cupones es fácil! Sigue estos pasos:',
                'steps' => [
                    'Encuentra un cupón para tu tienda de decoración favorita',
                    'Haz clic en el botón "Obtener Código" u "Obtener Oferta"',
                    'Serás redirigido al sitio web de la tienda',
                    'Añade artículos a tu carrito',
                    'Al finalizar la compra, ingresa el código de cupón en el campo de código promocional',
                    '¡Completa tu compra y disfruta los ahorros!',
                ],
                'pro_tip' => [
                    'title' => 'Consejo Profesional',
                    'description' => '¡Algunas ofertas son automáticas - solo haz clic en nuestro enlace y el descuento se aplicará automáticamente al finalizar la compra!',
                ],
            ],
            'code_not_working' => [
                'title' => '¿Por qué no funcionó mi código de cupón?',
                'description' => 'Si un cupón no funciona, estas son las razones más comunes:',
                'reasons' => [
                    'Código Expirado' => 'Los cupones tienen fechas de vencimiento',
                    'Compra Mínima' => 'Algunos requieren un gasto mínimo (ej. $50+)',
                    'Artículos Excluidos' => 'Artículos en oferta o ciertas marcas pueden estar excluidos',
                    'Uso Único' => 'Los códigos de un solo uso no pueden reutilizarse',
                    'Restricción Regional' => 'Algunos códigos solo funcionan en países específicos',
                    'Ya Aplicado' => 'No se pueden apilar múltiples códigos de porcentaje',
                ],
                'solution' => [
                    'title' => 'Solución',
                    'description' => 'Revisa nuestro sitio web para los códigos más recientes. Si uno no funciona, ¡generalmente tenemos alternativas disponibles!',
                ],
            ],
            'update_frequency' => [
                'title' => '¿Con qué frecuencia actualizan sus cupones?',
                'description' => '¡Actualizamos nuestros cupones múltiples veces al día! Aquí está nuestro horario de actualización:',
                'schedule' => [
                    'Monitoreo en Tiempo Real' => 'Nuevas ofertas añadidas tan pronto como se descubren',
                    'Códigos Expirados' => 'Eliminados dentro de 1 hora de su vencimiento',
                    'Resúmenes Semanales' => 'Mejores ofertas de la semana cada lunes',
                    'Especiales de Temporada' => 'Actualizaciones por hora para Black Friday, Cyber Monday',
                ],
                'get_notified' => [
                    'title' => 'Recibe Notificaciones',
                    'description' => '¡Suscríbete a nuestro boletín o activa notificaciones del navegador para recibir actualizaciones instantáneas sobre nuevos cupones para tus tiendas favoritas!',
                ],
            ],
            'multiple_coupons' => [
                'title' => '¿Puedo apilar múltiples cupones?',
                'description' => 'Depende de la política de la tienda, pero esto es lo que necesitas saber:',
                'policies' => [
                    'La Mayoria de Tiendas' => 'Permiten un código de porcentaje + envío gratis',
                    'Algunas Tiendas' => 'Permiten apilar con ofertas de reembolso',
                    'Raramente Permitido' => 'Múltiples cupones de porcentaje',
                    'Siempre Revisa' => 'La página de política de cupones de la tienda',
                ],
                'best_strategy' => [
                    'title' => 'Mejor Estrategia',
                    'description' => 'Usa nuestro filtro de :code para encontrar el mejor cupón único que te dé el máximo ahorro sin necesidad de apilar.',
                ],
            ],
        ],
        
        'cashback' => [
            'how_it_works' => [
                'title' => '¿Cómo funciona el reembolso?',
                'description' => 'El reembolso es dinero que ganas de vuelta en compras realizadas a través de nuestros enlaces:',
                'steps' => [
                    'Regístrate para una cuenta gratuita en ' . config('app.name'),
                    'Encuentra una tienda que ofrezca reembolso',
                    'Haz clic en el botón "Activar Reembolso"',
                    'Compra normalmente en el sitio web de la tienda',
                    'Tu compra se rastrea automáticamente',
                    'El reembolso aparece en tu cuenta dentro de 24-48 horas',
                    'Retira cuando alcances un mínimo de $10',
                ],
                'example' => [
                    'title' => 'Ejemplo',
                    'description' => 'Compra una lámpara de $200 con 5% de reembolso = ¡$10 de vuelta en tu bolsillo!',
                ],
            ],
            'timeline' => [
                'title' => '¿Cuánto tiempo tarda en aparecer el reembolso?',
                'description' => 'Este es el cronograma típico del reembolso:',
                'stages' => [
                    'Pendiente' => 'Aparece en 24-48 horas después de la compra',
                    'Confirmado' => '30-90 días (después del período de devolución de la tienda)',
                    'Pagadero' => 'Disponible para retiro una vez confirmado',
                    'Retiro' => 'Procesado dentro de 3-5 días hábiles',
                ],
                'note' => [
                    'title' => 'Nota',
                    'description' => 'Algunas tiendas tienen períodos de confirmación más largos, especialmente para muebles y artículos grandes con ventanas de devolución más extensas.',
                ],
            ],
            'combine_with_coupons' => [
                'title' => '¿Puedo combinar reembolso con cupones?',
                'answer' => '¡Sí! Aquí es donde maximizas tus ahorros:',
                'tips' => [
                    'Siempre usa un código de cupón al finalizar la compra',
                    'Asegúrate de que el reembolso esté activado antes de hacer clic',
                    'Ahorras de inmediato con el cupón Y ganas reembolso',
                    'Algunas tiendas ofrecen reembolso adicional con cupones específicos',
                ],
                'double_dip' => [
                    'title' => 'Estrategia Doble Beneficio',
                    'description' => 'Usa el cupón :code para 20% de descuento + 5% de reembolso = ¡25% de ahorro total!',
                ],
            ],
        ],
        
        'affiliate' => [
            'become_affiliate' => [
                'title' => '¿Cómo me convierto en afiliado de ' . config('app.name') . '?',
                'description' => 'Únete a nuestro programa de afiliados y gana comisiones:',
                'steps' => [
                    'Regístrate en nuestro Portal de Afiliados',
                    'Obtén aprobación (generalmente dentro de 24 horas)',
                    'Accede a tus enlaces de afiliado únicos',
                    'Comparte enlaces en tu blog, redes sociales o sitio web',
                    'Gana comisiones por ventas referidas',
                    'Recibe pagos mensuales vía PayPal o transferencia bancaria',
                ],
                'commission_rates' => [
                    'title' => 'Tasas de Comisión',
                    'description' => 'Gana 5-15% en ventas dependiendo de la tienda y tu nivel de rendimiento.',
                ],
            ],
            'requirements' => [
                'title' => '¿Cuáles son los requisitos para unirse?',
                'description' => 'Requisitos básicos para nuestro programa de afiliados:',
                'list' => [
                    'Sitio web activo, blog o redes sociales con contenido de decoración del hogar/muebles',
                    'Mínimo 1,000 visitantes mensuales (o 5,000 seguidores en redes sociales)',
                    'El contenido debe ser familiar y relevante',
                    'Sin spam ni contenido prohibido',
                    'Cumplimiento con requisitos de divulgación FTC',
                ],
                'bonus' => [
                    'title' => 'Bonificación',
                    'description' => '¡Influencers de decoración del hogar, bloggers de diseño de interiores y creadores de contenido DIY obtienen aprobación prioritaria!',
                ],
            ],
            'earnings_potential' => [
                'title' => '¿Cuánto puedo ganar como afiliado?',
                'description' => 'Las ganancias varían según tu tráfico y estrategia de promoción:',
                'types' => [
                    'Comisión Estándar' => '5% en todas las ventas referidas',
                    'Bonificaciones por Rendimiento' => 'Hasta 15% para los mejores',
                    'Comisiones Recurrentes' => '2% en renovaciones de suscripciones',
                    'Pagos Adicionales' => 'Promociones especiales y concursos',
                ],
                'top_earners' => [
                    'title' => 'Mayores Ganadores',
                    'description' => '¡Nuestros afiliados con mayores ingresos ganan $5,000+ al mes promocionando ofertas de decoración del hogar!',
                ],
            ],
        ],
        
        'account' => [
            'free_account' => [
                'title' => '¿Crear una cuenta es gratuito?',
                'answer' => '¡Absolutamente! 100% gratis para siempre.',
                'description' => 'Esto es lo que obtienes con una cuenta gratuita:',
                'benefits' => [
                    'Seguimiento de tus ganancias por reembolso',
                    'Guardar cupones y tiendas favoritas',
                    'Recibir alertas de ofertas personalizadas',
                    'Unirte a nuestro programa de recompensas',
                    'Acceso a ofertas exclusivas para miembros',
                    'Ganar bonificaciones por referidos',
                ],
                'conclusion' => 'No se requiere tarjeta de crédito. Sin cargos ocultos. ¡Solo ahorros puros!',
            ],
            'tracking_issues' => [
                'title' => '¿Por qué no se está rastreando mi compra?',
                'description' => 'Si tu compra no se está rastreando, prueba estas soluciones:',
                'solutions' => [
                    'Borrar Cookies' => 'Siempre haz clic en nuestro enlace - no escribas las URLs directamente',
                    'Desactivar Bloqueadores de Anuncios' => 'Algunos bloquean scripts de seguimiento',
                    'Completar Compra' => 'Debes finalizar la compra en la misma sesión del navegador',
                    'Verificar Elegibilidad' => 'Algunos artículos están excluidos del reembolso',
                    'Esperar 48 Horas' => 'El seguimiento puede tardar hasta 2 días en aparecer',
                ],
                'need_help' => [
                    'title' => '¿Necesitas Ayuda?',
                    'description' => '¡Contacta a soporte con los detalles de tu pedido y lo rastrearemos manualmente por ti!',
                ],
            ],
        ],
        
        'earning' => [
            'ways_to_earn' => [
                'title' => '¿Cómo puedo ganar dinero con ' . config('app.name') . '?',
                'description' => 'Hay múltiples formas de ganar con nosotros:',
                'methods' => [
                    'Reembolso' => 'Gana en tus propias compras',
                    'Programa de Afiliados' => 'Gana comisiones promocionando ofertas',
                    'Programa de Referidos' => 'Gana $5 por cada amigo que se registre y realice una compra',
                    'Creador de Contenido' => 'Envía consejos de ofertas y gana bonificaciones',
                    'Embajador de Tienda' => 'Programas especiales para las mejores tiendas',
                ],
                'pro_tip' => [
                    'title' => 'Consejo Profesional',
                    'description' => '¡Únete a todos los programas simultáneamente para maximizar tu potencial de ganancias!',
                ],
            ],
            'payment_details' => [
                'title' => '¿Cuándo y cómo me pagan?',
                'description' => 'Nuestro cronograma y métodos de pago:',
                'details' => [
                    'Cronograma de Pago' => 'Mensual, alrededor del día 15',
                    'Pago Mínimo' => '$10 para reembolso, $50 para afiliados',
                    'Métodos de Pago' => 'PayPal, Depósito Directo, Tarjetas de Regalo',
                    'Tiempo de Procesamiento' => '3-5 días hábiles después de la solicitud',
                    'Formularios de Impuestos' => 'Se emite 1099 para ganancias superiores a $600/año',
                ],
                'conclusion' => 'Todos los pagos son seguros y están respaldados por nuestra garantía de pago.',
            ],
        ],
    ],
    
    // How it works section
    'how_it_works' => [
        'title' => 'Cómo Funciona ' . config('app.name'),
        'description' => 'Tu guía para maximizar ahorros en compras de decoración del hogar',
        'steps' => [
            [
                'title' => 'Encuentra Ofertas',
                'description' => 'Explora miles de cupones y ofertas de reembolso de las mejores marcas de decoración del hogar.',
            ],
            [
                'title' => 'Haz Clic y Compra',
                'description' => 'Haz clic en nuestros enlaces para activar ahorros y compra directamente en sitios web de marcas.',
            ],
            [
                'title' => 'Ahorra Dinero',
                'description' => 'Usa códigos de cupón al finalizar la compra y gana reembolso en compras elegibles.',
            ],
            [
                'title' => 'Gana Recompensas',
                'description' => 'Únete a nuestro programa de afiliados o programa de referidos para ganar aún más.',
            ],
        ],
    ],
    
    // Call to action
    'cta' => [
        'title' => '¿Listo para Comenzar a Ahorrar?',
        'description' => 'Únete a miles de compradores inteligentes que ahorran en decoración del hogar cada día. Ya sea que compres muebles, decoración o suministros de bricolaje, ' . config('app.name') . ' te ayuda a obtener las mejores ofertas.',
        'join_button' => 'Únete Gratis y Comienza a Ahorrar',
        'browse_button' => 'Explorar Últimos Cupones',
        'security_note' => '100% Seguro • Sin Spam • Cancela en Cualquier Momento',
    ],
    
    // Additional sections (if needed)
    'popular_questions' => [
        'title' => 'Preguntas Populares',
        'most_viewed' => 'Más Vistas',
        'recently_added' => 'Añadidas Recientemente',
    ],
    
    'help_center' => [
        'title' => '¿Aún Necesitas Ayuda?',
        'contact_us' => 'Contáctanos',
        'live_chat' => 'Chat en Vivo',
        'email_support' => 'Soporte por Correo',
        'response_time' => 'Tiempo de Respuesta Promedio: 2 horas',
    ],
    
    'related_topics' => [
        'title' => 'Temas Relacionados',
        'privacy_policy' => 'Política de Privacidad',
        'terms_of_service' => 'Términos de Servicio',
        'affiliate_disclosure' => 'Divulgación de Afiliados',
        'cookie_policy' => 'Política de Cookies',
    ],
    
    'accessibility' => [
        'keyboard_navigation' => 'Usa la tecla Tab para navegar FAQs, Enter para expandir, Esc para cerrar',
        'screen_reader' => 'Amigable con lectores de pantalla',
        'high_contrast' => 'Modo de alto contraste disponible',
    ],
];