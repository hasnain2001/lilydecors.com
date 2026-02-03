<?php
header("X-Robots-Tag:index, follow");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Dynamic Title & Meta -->
    <title>@yield('title', config('app.name'))</title>
    <!-- Primary Meta Description -->
    <meta name="description" content="@yield('description', 'Find verified coupon codes, promo deals, and discounts updated daily only on ' . config('app.name'))">
    <!-- Meta Keywords (optional, not used by Google) -->
    <meta name="keywords" content="@yield('keywords', 'coupon codes, discount coupons, promo codes, deals, vouchers, ' . config('app.name'))">
    <!-- Crawling & Indexing -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Prevent Google from auto-translating -->
    <meta name="google" content="notranslate">

    <!-- Author / Publisher -->
    <meta name="author" content="lilydecors">
    <meta name="publisher" content="lilydecors">

    <!-- Canonical URL (Correct Placement) -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph (Facebook / WhatsApp / LinkedIn) -->
    <meta property="og:title" content="@yield('title', config('app.name'))">
    <meta property="og:description" content="@yield('description', 'Find verified coupon codes and exclusive discounts on ' . config('app.name'))">
    <meta property="og:image" content="@yield('og-image')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', config('app.name'))">
    <meta name="twitter:description" content="@yield('description', 'Best online coupon codes and offers from top stores.')">
    <meta name="twitter:image" content="@yield('twitter-image')">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
   



    @stack('styles')
</head>

<body>

        <x-navbar />


    <main>
        @yield('content')
    </main>

    <footer>
        <x-footer />
    </footer>



    @stack('scripts')



    <script src="{{ asset('assets/js/navbar.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  

</body>
</html>
