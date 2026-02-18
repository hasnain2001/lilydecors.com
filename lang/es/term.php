<?php

return [
    // Page Meta
    'title' => 'Términos y Condiciones',
    'description' => 'Lee nuestros términos y condiciones para entender tus derechos y responsabilidades al utilizar nuestros servicios.',
    'keywords' => 'términos, condiciones, acuerdo de usuario',
    'author' => 'Juan Pérez',
    
    // Header Section
    'header' => [
        'title' => 'Términos y Condiciones',
        'subtitle' => 'Comprende tus derechos y responsabilidades al utilizar nuestros servicios',
        'last_updated' => 'Última actualización el',
    ],
    
    // Main Card
    'card' => [
        'title' => 'Acuerdo Legal y Términos de Usuario',
    ],
    
    // Alert Section
    'alert' => [
        'title' => 'Importante:',
        'message' => 'Al acceder o utilizar nuestros servicios, aceptas estar sujeto a estos términos. Por favor, léelos detenidamente antes de continuar.',
    ],
    
    // Section 1: Acceptance of Terms
    'section1' => [
        'title' => 'Aceptación de los Términos',
        'content' => 'Al acceder o utilizar nuestro sitio web, aplicación móvil o cualquier servicio proporcionado por :app_name (colectivamente, los "Servicios"), confirmas que has leído, entendido y aceptas estar sujeto a estos Términos y Condiciones.',
        'warning' => 'Si no estás de acuerdo con alguna parte de estos términos, debes suspender inmediatamente el uso de nuestros Servicios.',
    ],
    
    // Section 2: User Responsibilities
    'section2' => [
        'title' => 'Responsabilidades del Usuario',
        'intro' => 'Como usuario de nuestros Servicios, eres el único responsable de:',
        'points' => [
            'maintaining_account' => 'Mantener la confidencialidad y seguridad de las credenciales de tu cuenta',
            'account_activities' => 'Todas las actividades, transacciones y contenido asociados con tu cuenta',
            'accurate_information' => 'Proporcionar información precisa, actualizada y completa durante el registro',
            'complying_laws' => 'Cumplir con todas las leyes locales, estatales, nacionales e internacionales aplicables',
            'third_party_rights' => 'Asegurar que tu uso de nuestros Servicios no viole los derechos de terceros',
        ],
        'notification' => 'Aceptas notificarnos inmediatamente sobre cualquier acceso no autorizado o uso de tu cuenta en <strong>:email</strong>.',
    ],
    
    // Section 3: Prohibited Activities
    'section3' => [
        'title' => 'Actividades Prohibidas',
        'intro' => 'Al utilizar nuestros Servicios, no debes participar en ninguna de las siguientes actividades:',
        'activities' => [
            'illegal' => [
                'title' => 'Actividades Ilegales',
                'description' => 'Usar nuestros Servicios para cualquier propósito ilegal o en violación de leyes aplicables',
            ],
            'unauthorized_access' => [
                'title' => 'Acceso No Autorizado',
                'description' => 'Intentar obtener acceso no autorizado a sistemas, cuentas o redes',
            ],
            'harmful_content' => [
                'title' => 'Contenido Dañino',
                'description' => 'Publicar, transmitir o compartir contenido dañino, ofensivo o que infrinja derechos',
            ],
            'service_disruption' => [
                'title' => 'Interrupción del Servicio',
                'description' => 'Interrumpir, interferir o sobrecargar el rendimiento de los Servicios',
            ],
            'automated_access' => [
                'title' => 'Acceso Automatizado',
                'description' => 'Usar bots, scrapers u otros medios automatizados para acceder a nuestros Servicios',
            ],
            'commercial_use' => [
                'title' => 'Uso Comercial',
                'description' => 'Usar nuestros Servicios con fines comerciales sin autorización explícita',
            ],
        ],
        'warning' => 'La violación de estas prohibiciones puede resultar en la terminación inmediata de tu cuenta y acciones legales.',
    ],
    
    // Section 4: Intellectual Property
    'section4' => [
        'title' => 'Propiedad Intelectual',
        'content' => 'Todo el contenido, características y funcionalidad disponibles a través de nuestros Servicios, incluyendo pero no limitado a texto, gráficos, logotipos, iconos, imágenes, clips de audio, descargas digitales, compilaciones de datos y software, son propiedad exclusiva de :app_name y sus licenciantes.',
        'protected' => 'Estos materiales están protegidos por leyes internacionales de derechos de autor, marcas comerciales, patentes, secretos comerciales y otras leyes de propiedad intelectual o derechos de propiedad.',
        'restrictions' => 'No puedes:',
        'restriction_points' => [
            'reproduce' => 'Reproducir, distribuir o crear trabajos derivados',
            'modify' => 'Modificar, adaptar o realizar ingeniería inversa de cualquier parte de nuestros Servicios',
            'remove_notices' => 'Eliminar cualquier aviso de derechos de autor, marca comercial u otros avisos de propiedad',
            'unauthorized_use' => 'Usar nuestra propiedad intelectual sin permiso expreso por escrito',
        ],
    ],
    
    // Section 5: Disclaimer of Warranties
    'section5' => [
        'title' => 'Exención de Garantías',
        'content' => 'Nuestros Servicios se proporcionan "tal cual" y "según disponibilidad" sin garantías de ningún tipo, ya sean expresas o implícitas. En la máxima medida permitida por la ley, renunciamos a todas las garantías, incluyendo pero no limitado a garantías implícitas de comerciabilidad, idoneidad para un propósito particular y no infracción.',
        'guarantees_intro' => 'No garantizamos que:',
        'guarantees' => [
            'uninterrupted' => 'Nuestros Servicios serán ininterrumpidos, seguros o estarán disponibles en cualquier momento o lugar particular',
            'errors_corrected' => 'Cualquier error o defecto será corregido',
            'virus_free' => 'Nuestros Servicios estén libres de virus u otros componentes dañinos',
            'meet_requirements' => 'Los resultados del uso de nuestros Servicios cumplirán con tus requisitos',
        ],
        'risk' => 'El uso de nuestros Servicios es bajo tu propio riesgo.',
    ],
    
    // Section 6: Limitation of Liability
    'section6' => [
        'title' => 'Limitación de Responsabilidad',
        'content' => 'En la máxima medida permitida por la ley aplicable, :app_name no será responsable por daños indirectos, incidentales, especiales, consecuentes o punitivos, incluyendo sin limitación:',
        'damages' => [
            'loss_profits' => 'Pérdida de beneficios, ingresos o datos',
            'loss_use' => 'Pérdida de uso, buena voluntad u otras pérdidas intangibles',
            'unauthorized_access' => 'Daños resultantes del acceso no autorizado o alteración de tus transmisiones',
            'third_party_content' => 'Cualquier conducta o contenido de terceros en los Servicios',
        ],
        'liability_limit' => 'En ningún caso nuestra responsabilidad total excederá:',
        'liability_amount' => 'o la cantidad que nos pagaste en los últimos 12 meses, lo que sea mayor.',
    ],
    
    // Section 7: Governing Law
    'section7' => [
        'title' => 'Ley Aplicable y Jurisdicción',
        'content' => 'Estos Términos se regirán e interpretarán de acuerdo con las leyes de :country, sin considerar sus disposiciones sobre conflictos de leyes.',
        'jurisdiction_title' => 'Jurisdicción Exclusiva',
        'jurisdiction_content' => 'Cualquier acción legal, procedimiento o demanda que surja de o esté relacionada con estos Términos se presentará exclusivamente en los tribunales ubicados en :jurisdiction. Aceptas la jurisdicción personal de dichos tribunales.',
    ],
    
    // Section 8: Changes to Terms
    'section8' => [
        'title' => 'Cambios en los Términos',
        'content' => 'Nos reservamos el derecho de modificar estos Términos en cualquier momento.',
        'modification_notice' => 'Cuando lo hagamos, revisaremos la fecha de "última actualización" en la parte superior de esta página. También podemos proporcionar un aviso adicional (como agregar una declaración en nuestra página de inicio o enviarte una notificación). Tu uso continuado de nuestros Servicios después de dichas modificaciones constituye tu aceptación de los nuevos Términos.',
    ],
    
    // Section 9: Contact Information
    'section9' => [
        'title' => 'Información de Contacto',
        'intro' => 'Para preguntas, inquietudes o avisos sobre estos Términos y Condiciones, contáctanos a través de cualquiera de los siguientes métodos:',
        'buttons' => [
            'email' => 'Enviar Correo al Equipo Legal',
            'contact_form' => 'Formulario de Contacto',
            'visit_office' => 'Visitar Nuestra Oficina',
        ],
        'response_time' => 'Normalmente respondemos a consultas legales dentro de 2-3 días hábiles.',
    ],
    
    // Action Buttons
    'actions' => [
        'back_home' => 'Volver a la Página de Inicio',
        'print_terms' => 'Imprimir Términos',
    ],
];