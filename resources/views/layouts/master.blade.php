<!DOCTYPE html>
<html lang="en">
<head>
    <title>Firefly Tech</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" href="/images/fav.png" type="image/x-icon"/>

    <!-- Scripts -->
    @vite([
                'resources/sass/app.scss',
                'resources/css/aos.css',
                'resources/css/hover.css',
                'resources/css/magnific-popup.css',
               'resources/css/owl.carousel.min.css',
                'resources/css/owl.theme.default.min.css',
                'resources/css/style.css',
                'resources/js/app.js'
                ])
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css"/>
</head>
<body>
<main>
    @include('./layouts/navigation')
    {{ $slot }}
</main>
@include('./layouts/footer')
</body>
</html>
