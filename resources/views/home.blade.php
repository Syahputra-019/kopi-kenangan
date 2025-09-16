<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Kopi-Kenangan') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            {{-- navigasi --}}
            <nav>
                <a href="#" class="logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo">
                </a>
                <div class="nav-kanan">
                <ul class="navigasi">
                    <li><a href="home">Home</a></li>
                    <li><a href="VIP">VIP</a></li>
                    <li><a href="Order">Order</a></li>
                    <li><a href="About">About</a></li>
                    <li><a href="Career">Carrer</a></li>
                    <li><a href="Download-App">Download App</a></li>
                </ul>
                
                <a href="#" class="logok">
                    <img src="{{ asset('images/logo2.jpeg') }}" alt="Logo kanan">
                </a>
                </div>
            </nav>
        </header>
        <main>
            <section class="video-promo full-bleed">
            <iframe     width="100%" 
    height="500" 
    src="https://www.youtube.com/embed/rkfoS9exAkU?autoplay=1&mute=1&controls=0&showinfo=0&modestbranding=1&rel=0&loop=1&playlist=rkfoS9exAkU" 
    title="YouTube video player" 
    frameborder="0" 
    allow="autoplay; encrypted-media" 
    referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </section>
        </main>
    </body>
</html>
