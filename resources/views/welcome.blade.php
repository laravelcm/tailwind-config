<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tailwind Configuration</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased font-sans">
    <div class="p-10">
        <h1 class="text-4xl font-bold">
            Bienvenu sur <span class="text-sky-600">Tailwindcss v3.0</span>!
        </h1>
    </div>
</body>
</html>
