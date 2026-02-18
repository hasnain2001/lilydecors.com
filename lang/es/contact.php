<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Contáctenos | ' . config('app.name'),
        'description' => 'Póngase en contacto con nosotros para cualquier consulta o soporte.',
        'keywords' => 'contacto, soporte, consultas, ayuda, servicio al cliente',
        'author' => config('app.name'),
    ],
    
    // Header section
    'header' => [
        'title' => 'Contáctenos',
        'subtitle' => 'Póngase en contacto con nosotros. Estamos aquí para ayudar con cualquier pregunta o inquietud que pueda tener.',
    ],
    
    // Form section
    'form' => [
        'description' => 'Complete el formulario a continuación y le responderemos lo antes posible.',
        'fields' => [
            'name' => [
                'label' => 'Nombre',
                'placeholder' => 'Su nombre completo',
            ],
            'email' => [
                'label' => 'Correo Electrónico',
                'placeholder' => 'su.correo@ejemplo.com',
            ],
            'subject' => [
                'label' => 'Asunto',
                'placeholder' => '¿Sobre qué trata?',
            ],
            'message' => [
                'label' => 'Mensaje',
                'placeholder' => 'Su mensaje aquí...',
            ],
        ],
        'submit' => 'Enviar Mensaje',
        'sending' => 'Enviando...',
        'required_fields' => 'Los campos marcados con * son obligatorios',
    ],
    
    // Contact information
    'info' => [
        'location' => [
            'title' => 'Nuestra Ubicación',
            'address_line1' => 'Calle Principal 123',
            'address_line2' => 'Suite 100',
            'city_state' => 'Ciudad, Estado',
            'zip_code' => '12345',
            'country' => 'Estados Unidos',
        ],
        'phone' => [
            'title' => 'Llámenos',
            'primary' => '+1 (123) 456-7890',
            'secondary' => '+1 (987) 654-3210',
            'hours' => 'Lun-Vie: 9AM-6PM (hora del este)',
        ],
        'email' => [
            'title' => 'Escríbanos',
            'contact' => 'contacto@' . config('app.domain', 'ejemplo.com'),
            'support' => 'soporte@' . config('app.domain', 'ejemplo.com'),
            'response_time' => 'Normalmente respondemos dentro de las 24 horas',
        ],
    ],
    
    // Messages and alerts
    'messages' => [
        'success' => '¡Gracias! Su mensaje ha sido enviado exitosamente.',
        'error_title' => 'Por favor corrija los siguientes errores:',
        'validation_error' => 'Hubo algunos errores con su envío.',
        'captcha_error' => 'Por favor complete la verificación de seguridad.',
        'server_error' => 'Algo salió mal. Por favor intente nuevamente más tarde.',
    ],
    
    // Additional sections (if added)
    'faq' => [
        'title' => 'Preguntas Frecuentes',
        'question1' => '¿Cuánto tiempo se tarda en obtener una respuesta?',
        'answer1' => 'Normalmente respondemos dentro de las 24 horas durante días hábiles.',
        'question2' => '¿Qué información debo incluir?',
        'answer2' => 'Por favor incluya su información de contacto y una descripción detallada de su consulta.',
        'question3' => '¿Ofrecen soporte telefónico?',
        'answer3' => 'Sí, puede contactarnos al número de teléfono indicado arriba.',
    ],
    
    // Business hours
    'business_hours' => [
        'title' => 'Horario de Atención',
        'weekdays' => 'Lunes - Viernes: 9:00 AM - 6:00 PM (hora del este)',
        'weekends' => 'Sábado: 10:00 AM - 4:00 PM (hora del este)',
        'closed' => 'Domingo: Cerrado',
        'holidays' => 'Festivos: Cerrado',
    ],
    
    // Support types
    'support_types' => [
        'general' => 'Consultas Generales',
        'technical' => 'Soporte Técnico',
        'billing' => 'Preguntas sobre Facturación',
        'partnership' => 'Oportunidades de Colaboración',
        'feedback' => 'Comentarios y Sugerencias',
    ],
    
    // Social media (if you add social links)
    'social' => [
        'title' => 'Conéctese con Nosotros',
        'follow_us' => 'Síganos en redes sociales',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],
    
    // Map/address details
    'map' => [
        'title' => 'Encuéntrenos',
        'directions' => 'Obtener Indicaciones',
        'open_in_maps' => 'Abrir en Google Maps',
        'parking' => 'Información de Estacionamiento',
        'public_transport' => 'Transporte Público',
    ],
    
    // Privacy and data
    'privacy' => [
        'title' => 'Privacidad y Datos',
        'description' => 'Su información está segura y solo se utilizará para responder a su consulta.',
        'gdpr_compliant' => 'Cumple con el RGPD',
        'no_spam' => 'No enviamos spam ni compartimos su información',
    ],
    
    // Response time
    'response_time' => [
        'title' => 'Tiempo de Respuesta Estimado',
        'instant' => 'Inmediato para asuntos urgentes',
        'within_24h' => 'Dentro de 24 horas para consultas generales',
        'within_48h' => 'Dentro de 48 horas para problemas complejos',
        'emergency' => 'Para emergencias, llame al número indicado arriba',
    ],
    
    // Form validation messages
    'validation' => [
        'name_required' => 'Por favor ingrese su nombre',
        'email_required' => 'Por favor ingrese su correo electrónico',
        'email_invalid' => 'Por favor ingrese un correo electrónico válido',
        'message_required' => 'Por favor ingrese su mensaje',
        'message_min' => 'El mensaje debe tener al menos 10 caracteres',
        'message_max' => 'El mensaje no puede exceder los 2000 caracteres',
    ],
    
    // Accessibility
    'accessibility' => [
        'form_label' => 'Formulario de Contacto',
        'required_indicator' => 'Campo obligatorio',
        'success_announcement' => 'Su mensaje ha sido enviado exitosamente',
        'error_announcement' => 'Hubo errores en su envío',
    ],
];