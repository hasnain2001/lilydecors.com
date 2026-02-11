<?php

return [
    // Meta tags
    'meta' => [
        'title' => 'Contact Us | ' . config('app.name'),
        'description' => 'Get in touch with us for any inquiries or support.',
        'keywords' => 'contact, support, inquiries, help, customer service',
        'author' => config('app.name'),
    ],
    
    // Header section
    'header' => [
        'title' => 'Contact Us',
        'subtitle' => 'Get in touch with us. We\'re here to help with any questions or concerns you may have.',
    ],
    
    // Form section
    'form' => [
        'description' => 'Fill out the form below and we\'ll get back to you as soon as possible.',
        'fields' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Your full name',
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'your.email@example.com',
            ],
            'subject' => [
                'label' => 'Subject',
                'placeholder' => 'What is this regarding?',
            ],
            'message' => [
                'label' => 'Message',
                'placeholder' => 'Your message here...',
            ],
        ],
        'submit' => 'Send Message',
        'sending' => 'Sending...',
        'required_fields' => 'Fields marked with * are required',
    ],
    
    // Contact information
    'info' => [
        'location' => [
            'title' => 'Our Location',
            'address_line1' => '123 Main Street',
            'address_line2' => 'Suite 100',
            'city_state' => 'City, State',
            'zip_code' => '12345',
            'country' => 'United States',
        ],
        'phone' => [
            'title' => 'Call Us',
            'primary' => '+1 (123) 456-7890',
            'secondary' => '+1 (987) 654-3210',
            'hours' => 'Mon-Fri: 9AM-6PM EST',
        ],
        'email' => [
            'title' => 'Email Us',
            'contact' => 'contact@' . config('app.domain', 'example.com'),
            'support' => 'support@' . config('app.domain', 'example.com'),
            'response_time' => 'We typically respond within 24 hours',
        ],
    ],
    
    // Messages and alerts
    'messages' => [
        'success' => 'Thank you! Your message has been sent successfully.',
        'error_title' => 'Please fix the following errors:',
        'validation_error' => 'There were some errors with your submission.',
        'captcha_error' => 'Please complete the security check.',
        'server_error' => 'Something went wrong. Please try again later.',
    ],
    
    // Additional sections (if added)
    'faq' => [
        'title' => 'Frequently Asked Questions',
        'question1' => 'How long does it take to get a response?',
        'answer1' => 'We typically respond within 24 hours during business days.',
        'question2' => 'What information should I include?',
        'answer2' => 'Please include your contact information and detailed description of your inquiry.',
        'question3' => 'Do you offer phone support?',
        'answer3' => 'Yes, you can reach us at the phone number listed above.',
    ],
    
    // Business hours
    'business_hours' => [
        'title' => 'Business Hours',
        'weekdays' => 'Monday - Friday: 9:00 AM - 6:00 PM EST',
        'weekends' => 'Saturday: 10:00 AM - 4:00 PM EST',
        'closed' => 'Sunday: Closed',
        'holidays' => 'Holidays: Closed',
    ],
    
    // Support types
    'support_types' => [
        'general' => 'General Inquiries',
        'technical' => 'Technical Support',
        'billing' => 'Billing Questions',
        'partnership' => 'Partnership Opportunities',
        'feedback' => 'Feedback & Suggestions',
    ],
    
    // Social media (if you add social links)
    'social' => [
        'title' => 'Connect With Us',
        'follow_us' => 'Follow us on social media',
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'instagram' => 'Instagram',
        'linkedin' => 'LinkedIn',
    ],
    
    // Map/address details
    'map' => [
        'title' => 'Find Us',
        'directions' => 'Get Directions',
        'open_in_maps' => 'Open in Google Maps',
        'parking' => 'Parking Information',
        'public_transport' => 'Public Transport',
    ],
    
    // Privacy and data
    'privacy' => [
        'title' => 'Privacy & Data',
        'description' => 'Your information is secure and will only be used to respond to your inquiry.',
        'gdpr_compliant' => 'GDPR Compliant',
        'no_spam' => 'We don\'t spam or share your information',
    ],
    
    // Response time
    'response_time' => [
        'title' => 'Expected Response Time',
        'instant' => 'Immediate for urgent matters',
        'within_24h' => 'Within 24 hours for general inquiries',
        'within_48h' => 'Within 48 hours for complex issues',
        'emergency' => 'For emergencies, call the number above',
    ],
    
    // Form validation messages
    'validation' => [
        'name_required' => 'Please enter your name',
        'email_required' => 'Please enter your email address',
        'email_invalid' => 'Please enter a valid email address',
        'message_required' => 'Please enter your message',
        'message_min' => 'Message must be at least 10 characters',
        'message_max' => 'Message cannot exceed 2000 characters',
    ],
    
    // Accessibility
    'accessibility' => [
        'form_label' => 'Contact Form',
        'required_indicator' => 'Required field',
        'success_announcement' => 'Your message has been sent successfully',
        'error_announcement' => 'There were errors in your submission',
    ],
];