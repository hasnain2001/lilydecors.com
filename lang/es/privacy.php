<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Política de Privacidad | ' . config('app.name'),
        'description' => 'Lee nuestra política de privacidad para entender cómo manejamos tus datos y protegemos tu privacidad.',
        'keywords' => 'privacidad, política, protección de datos, seguridad de datos, RGPD, cookies',
        'author' => config('app.name'),
    ],
    
    // Header section
    'header' => [
        'title' => 'Política de Privacidad',
        'subtitle' => 'Tu privacidad es importante para nosotros. Conoce cómo protegemos y manejamos tus datos.',
        'last_updated' => 'Última actualización el',
    ],
    
    // Main card
    'card' => [
        'title' => 'Tu Protección de Datos y Privacidad',
    ],
    
    // Alert section
    'alert' => [
        'title' => 'La Transparencia Importa',
        'description' => 'Esta política explica cómo recopilamos, usamos y protegemos tu información en términos claros y simples.',
    ],
    
    // Policy sections
    'sections' => [
        'collection' => [
            'title' => 'Información que Recopilamos',
            'intro' => 'Recopilamos información que nos ayuda a ofrecer mejores servicios y mejorar tu experiencia. Esto incluye:',
            'types' => [
                'Información Personal' => 'Nombre, dirección de correo electrónico y datos de contacto cuando te registras o nos contactas',
                'Datos de Uso' => 'Cómo interactúas con nuestro sitio web, páginas visitadas y funciones utilizadas',
                'Información Técnica' => 'Tipo de navegador, información del dispositivo y dirección IP por motivos de seguridad',
                'Datos de Comunicación' => 'Mensajes, comentarios y consultas que nos envías',
            ],
            'conclusion' => 'Solo recopilamos la información necesaria para proporcionar nuestros servicios y mejorar tu experiencia.',
        ],
        
        'usage' => [
            'title' => 'Cómo Usamos Tu Información',
            'intro' => 'Tu información nos ayuda a ofrecer un excelente servicio y mejorar nuestra plataforma. La usamos para:',
            'purposes' => [
                'Responder a tus consultas y proporcionar atención al cliente personalizada',
                'Procesar transacciones y entregar los servicios que solicitas',
                'Mejorar la funcionalidad de nuestro sitio web y la experiencia del usuario',
                'Enviar actualizaciones importantes sobre nuestros servicios (puedes darte de baja en cualquier momento)',
                'Proteger contra fraudes y garantizar la seguridad de la plataforma',
                'Analizar patrones de uso para mejorar nuestras ofertas',
            ],
            'important_note' => 'No vendemos ni venderemos nunca tu información personal a terceros.',
        ],
        
        'security' => [
            'title' => 'Seguridad y Protección de Datos',
            'intro' => 'Tomamos en serio la seguridad de tus datos e implementamos medidas robustas para protegerlos:',
            'measures' => [
                'Cifrado' => 'Todos los datos sensibles se cifran durante la transmisión y el almacenamiento',
                'Servidores Seguros' => 'Tu información se almacena en servidores protegidos con acceso limitado',
                'Controles de Acceso' => 'Políticas internas estrictas controlan quién puede acceder a tus datos',
                'Auditorías Regulares' => 'Realizamos evaluaciones de seguridad para mantener los estándares de protección',
                'Capacitación del Personal' => 'Nuestro equipo está capacitado en las mejores prácticas de protección de datos',
            ],
            'disclaimer' => 'Si bien implementamos medidas de seguridad estándar de la industria, ningún método de transmisión por internet es 100% seguro. Recomendamos usar contraseñas seguras y mantener tu información de inicio de sesión confidencial.',
        ],
        
        'cookies' => [
            'title' => 'Cookies y Tecnologías de Seguimiento',
            'intro' => 'Utilizamos cookies y tecnologías similares para mejorar tu experiencia de navegación:',
            'types' => [
                'Cookies Esenciales' => 'Necesarias para que el sitio web funcione correctamente',
                'Cookies de Rendimiento' => 'Nos ayudan a entender cómo los visitantes usan nuestro sitio',
                'Cookies Funcionales' => 'Recuerdan tus preferencias y configuraciones',
                'Cookies Analíticas' => 'Proporcionan información para mejorar nuestros servicios',
            ],
            'management' => 'Puedes gestionar las preferencias de cookies a través de la configuración de tu navegador. Sin embargo, deshabilitar las cookies esenciales puede afectar la funcionalidad del sitio web.',
        ],
        
        'third_party' => [
            'title' => 'Enlaces y Servicios de Terceros',
            'intro' => 'Nuestro sitio web puede contener enlaces a sitios y servicios externos. Notas importantes:',
            'notes' => [
                'Seleccionamos cuidadosamente a nuestros socios pero no podemos controlar sus prácticas de privacidad',
                'Los sitios externos tienen sus propias políticas de privacidad que no controlamos',
                'No somos responsables del contenido o prácticas de los sitios enlazados',
                'Recomendamos revisar las políticas de privacidad de terceros antes de compartir información',
            ],
            'disclaimer' => 'Cuando abandonas nuestro sitio a través de estos enlaces, nuestra política de privacidad ya no se aplica a tus actividades en esos sitios externos.',
        ],
        
        'updates' => [
            'title' => 'Actualizaciones y Cambios de la Política',
            'intro' => 'Podemos actualizar esta política de privacidad para reflejar cambios en nuestras prácticas o requisitos legales:',
            'procedures' => [
                'Los cambios significativos se notificarán por correo electrónico o mediante un aviso destacado en el sitio web',
                'El uso continuado de nuestros servicios después de los cambios constituye la aceptación',
                'Mantenemos un historial de versiones de todas las actualizaciones de la política',
                'La fecha de "Última actualización" en la parte superior indica la revisión más reciente',
            ],
            'recommendation' => 'Te animamos a revisar esta política periódicamente para mantenerte informado sobre cómo protegemos tu información.',
        ],
        
        'contact' => [
            'title' => 'Preguntas e Información de Contacto',
            'intro' => 'Estamos comprometidos con la transparencia sobre nuestras prácticas de privacidad. Si tienes preguntas o inquietudes:',
            'details' => [
                'Correo Electrónico' => '<a href="mailto:contacto@lilydecors.com" class="contact-email">contacto@lilydecors.com</a>',
                'Oficial de Protección de Datos' => 'Juan Pérez',
                'Correo Postal' => '123 Calle de la Privacidad, Ciudad Datos, DC 12345',
                'Tiempo de Respuesta' => 'Nuestro objetivo es responder dentro de las 48 horas',
            ],
            'rights' => 'Tienes derecho a acceder, corregir o eliminar tu información personal. Contáctanos para ejercer estos derechos.',
        ],
    ],
    
    // Back button
    'back_button' => 'Volver a la Página de Inicio',
    
    // Additional terms for cookie consent banner (if needed)
    'cookie_consent' => [
        'title' => 'Preferencias de Cookies',
        'message' => 'Utilizamos cookies para mejorar tu experiencia de navegación y analizar nuestro tráfico.',
        'accept_all' => 'Aceptar Todas',
        'reject_all' => 'Rechazar Todas',
        'manage' => 'Gestionar Preferencias',
        'necessary' => 'Necesarias',
        'analytics' => 'Analíticas',
        'marketing' => 'Marketing',
        'preferences' => 'Preferencias',
        'save' => 'Guardar Preferencias',
    ],
    
    // Data rights (GDPR specific)
    'data_rights' => [
        'title' => 'Tus Derechos de Datos',
        'access' => 'Derecho de Acceso',
        'rectification' => 'Derecho de Rectificación',
        'erasure' => 'Derecho de Supresión (Derecho al Olvido)',
        'restriction' => 'Derecho a Limitar el Procesamiento',
        'portability' => 'Derecho a la Portabilidad de Datos',
        'object' => 'Derecho de Oposición',
        'description' => 'Bajo el RGPD y otras leyes de protección de datos, tienes derechos específicos con respecto a tus datos personales.',
    ],
    
    // Data retention
    'retention' => [
        'title' => 'Retención de Datos',
        'description' => 'Conservamos tus datos personales solo durante el tiempo necesario para cumplir con los fines para los que fueron recopilados.',
        'periods' => [
            'account_data' => 'Datos de cuenta: Mientras tu cuenta esté activa',
            'transaction_data' => 'Datos de transacciones: 7 años por motivos fiscales',
            'communication_data' => 'Datos de comunicación: 3 años',
            'analytics_data' => 'Datos analíticos: 26 meses',
        ],
    ],
    
    // International data transfers
    'international_transfers' => [
        'title' => 'Transferencias Internacionales de Datos',
        'description' => 'Tu información puede ser transferida y procesada en países distintos al tuyo.',
        'safeguards' => 'Implementamos salvaguardas apropiadas para las transferencias internacionales de datos.',
    ],
    
    // Children's privacy
    'children' => [
        'title' => 'Privacidad de Menores',
        'description' => 'Nuestros servicios no están dirigidos a menores de 16 años. No recopilamos conscientemente información personal de menores.',
        'contact' => 'Si crees que hemos recopilado información de un menor, por favor contáctanos inmediatamente.',
    ],
    
    // Automated decision making
    'automated_decisions' => [
        'title' => 'Toma de Decisiones Automatizada',
        'description' => 'No utilizamos toma de decisiones automatizada ni elaboración de perfiles que produzcan efectos legales.',
    ],
    
    // Data breach notification
    'data_breach' => [
        'title' => 'Notificación de Violación de Datos',
        'description' => 'En caso de una violación de datos, notificaremos a los usuarios afectados y a las autoridades según lo requiera la ley.',
    ],
    
    // Do Not Track signals
    'do_not_track' => [
        'title' => 'Señales de No Rastrear',
        'description' => 'Nuestro sitio web no responde a las señales de No Rastrear de los navegadores.',
    ],
    
    // California privacy rights (CCPA)
    'ccpa' => [
        'title' => 'Derechos de Privacidad de California',
        'description' => 'Los residentes de California tienen derechos adicionales bajo la Ley de Privacidad del Consumidor de California (CCPA).',
        'right_to_know' => 'Derecho a Saber',
        'right_to_delete' => 'Derecho a Eliminar',
        'right_to_opt_out' => 'Derecho a Excluirse de la Venta',
        'non_discrimination' => 'Derecho a la No Discriminación',
    ],
];