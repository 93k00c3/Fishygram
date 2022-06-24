<x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
    </x-slot>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Klub wędkarski</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <div class="header flex justify-between  px-6">
        <a href="/" class="font-family: 'Nunito', sans-serif; text-lg font-bold py-4 pr-4"><x-application-logo class="block h-5 w-auto fill-current text-gray-600" />
        Klub Wędkarski
        </a>
        <div class="relative items-top justify-center bg-white-100 dark:bg-white-900 sm:items-center py-2 sm:pt-0">
            @if (Route::has('login'))
                <div class="flex right-0 px-4 py-6 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500">Twój profil</a>
                    @else
                    <div class="mr-8">
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500" style=" border-right: 1px solid #3333; padding-right:16px">Zaloguj się</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">Zarejestruj się</a>
                            @endif
                        @endauth
                        @endif
                    </div>
                </div>
        </div>
  </div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $fish->user->id }}">
                    <img src="/storage/{{$fish->image_path}}" class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div>
                    <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $fish->user->id }}">
                            <span class="text-dark">{{ $fish->user->username }}</span>
                        </a>
                    </span> {{ $fish->caption }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
            </div>
        </div>
</div>
