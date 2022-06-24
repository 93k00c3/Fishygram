<x-app-layout>
    <x-slot name="header">
    <title>Klub wędkarski</title>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-5 w-auto fill-current text-gray-600" />
                    
                </div>
        {{ __('Klub Wędkarski') }}
        </a>
        </h2>
    </x-slot>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-10 h-10 pl-4">
                    Kolekcja ryb {{ $user->username ?? 'N/A' }}:
                    <div class="container">
    <div class="row">
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center pb-3">
                </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->fishes as $fish)
            <div class="col-4 pb-4 justify-content-between">
                    <img src="/storage/{{ $fish->image_path }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
