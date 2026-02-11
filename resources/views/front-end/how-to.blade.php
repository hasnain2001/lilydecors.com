@extends('layouts.master')
@section('title', 'How To Guides - LilyDecors')
@section('description', 'Find helpful how-to guides for using LilyDecors coupons, deals, and cashback offers. Learn how to save on home decor with our step-by-step instructions and tips.')
@section('keywords', 'how to use coupons, how to redeem deals, how to earn cashback, saving tips, home decor discounts, LilyDecors guides')

@push('styles')
<style>
    :root {
    /* Backgrounds */
    --bg-main: #fefefe;
    --bg-footer: #f9f7f3;
    --bg-accent: #d4a574;
    --bg-dark: #2a2a2a;

    /* Base Colors */
    --white: #ffffff;
    --black: #000000;

    /* Primary (Elegant Dark Charcoal) */
    --primary: #2a2a2a;
    --primary-light: #444444;
    --primary-lighter: #666666;
    --primary-dark: #1c1c1c;

    /* Secondary (Warm Gold Accent) */
    --secondary: #d4a574;
    --secondary-light: #e2bf97;
    --secondary-lighter: #f0dbc3;
    --secondary-dark: #b8915f;

    /* Accent (Muted Warm Neutrals) */
    --accent-navy: #3b3b3b;
    --accent-navy-light: #555555;
    --accent-navy-dark: #1f1f1f;

    /* Neutrals */
    --light-gray: #f4f4f4;
    --medium-gray: #eeeeee;
    --dark-gray: #777777;

    /* Text */
    --text-primary: #2a2a2a;
    --text-secondary: #777777;
    --text-light: #999999;
    --text-on-primary: #ffffff;

    /* Borders */
    --border-light: #eeeeee;
    --border-accent: #e8e0d4;

    /* Typography */
    --font-heading: 'Cormorant Garamond', serif;
    --font-body: 'Inter', sans-serif;

    /* Spacing */
    --space-xl: 80px;
    --space-lg: 60px;
    --space-md: 40px;
    --space-sm: 20px;
    --space-xs: 10px;

    /* Radius */
    --radius-sm: 8px;
    --radius-md: 12px;

    /* Gradients */
    --primary-gradient: linear-gradient(135deg, #1c1c1c 0%, #2a2a2a 100%);
    --secondary-gradient: linear-gradient(135deg, #d4a574 0%, #e2bf97 100%);
    --accent-gradient: linear-gradient(135deg, #2a2a2a 0%, #444444 100%);

    /* Logo Gradient */
    --logo-gradient: linear-gradient(
        90deg,
        #2a2a2a 0%,
        #2a2a2a 55%,
        #d4a574 55%,
        #d4a574 100%
    );

    /* Glow Effects (Soft Luxury) */
    --primary-glow: 0 0 20px rgba(42, 42, 42, 0.35);
    --secondary-glow: 0 0 25px rgba(212, 165, 116, 0.45);
    --accent-glow: 0 0 18px rgba(0, 0, 0, 0.25);

    /* Shadows */
    --shadow-light: 0 4px 20px rgba(0, 0, 0, 0.06);
    --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.1);
    --shadow-heavy: 0 15px 40px rgba(0, 0, 0, 0.18);
}
</style>
@endpush

@section('content')

@endsection