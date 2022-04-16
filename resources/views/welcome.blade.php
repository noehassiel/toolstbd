<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tbd.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
        </style>
    </head>
    <body>
<!-- Canvas -->
        <canvas class="orb-canvas"></canvas>

<!-- hero -->
        <div class="hero">
            <h1>Tools to be <button class="overlay__btn overlay__btn--colors"><span class="text-gradient">different</span></button></h1>
            <div class="scroll-downs">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            </div>
        </div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
<script>
        new kursor({
            type: 4,
            removeDefaultCursor: true,
        })
    </script>
    </body>
</html>
