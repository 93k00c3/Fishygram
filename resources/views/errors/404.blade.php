<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Nie znaleziono rybki!</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <a>
        <img src="/storage/app/public/koi.svg">
    </a>
    <div class="container mt-5 pt-5">
        <div class="alert alert-danger text-center">
        <object type="image/svg+xml" data="/storage/koi.svg" class="logo" width="50" height="50">
            Logo
        </object>
            <h2 class="display-3">404</h2>
            <p class="display-5">Oops! Something is wrong.</p>
        </div>
    </div>
    
</body>
</html>