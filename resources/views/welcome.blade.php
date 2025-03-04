<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ELOS Language</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
        <div class="landing">
            <div class="landing__body">

                <div class="landing__logo">
                    <img src="logo.png" alt="ELOS Language" />
                </div>

                <h2 class="title">Build HTML emails, but without the torture.</h2>

                <p>
                    Crafting HTML emails has always been a pain—inline styles, inconsistent rendering across email
                    clients, and a sea of outdated quirks to navigate. ELOS changes that.
                </p>

                <p>
                    ELOS is a declarative, developer-friendly language designed specifically for building responsive,
                    accessible, and beautifully branded HTML emails. Forget about manually wrestling with tables and
                    obscure CSS hacks—ELOS abstracts the complexities, letting you focus on design and content while
                    ensuring rock-solid email compatibility.
                </p>

                <div class="landing__footer">
                    <a href="docs" target="_blank" class="button">Documentation</a>
                    <a href="https://github.com/elos-lang/" target="_blank" class="button button--secondary">Github</a>
                </div>
            </div>
        </div>
    </body>
</html>
