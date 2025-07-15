<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>We're Coming Soon</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                background-color: #FDFDFC;
                color: #1b1b18;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                padding: 2rem;
                text-align: center;
            }
            .dark body {
                background-color: #0a0a0a;
                color: #EDEDEC;
            }
            h1 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }
            p {
                font-size: 1rem;
                color: #706f6c;
            }
        </style>
    @endif
</head>
<body style="margin: 0; background-color: #faf7f3;">
    <div class="p-4" style="height: 100vh; display: flex; justify-content: center; align-items: center;">
        {{-- Optional logo --}}
        <img src="/images/YourDeveloper.png" alt="YourDeveloper.co.uk Logo"/>
    </div>
</body>
</html>