<x-app-layout>
<title>Klub wędkarski</title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klub Wędkarski') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                <div class="p-6 bg-white border-b border-gray-200">
                    Twój profil 
                    {{ Auth::user()->name}}:
                    {{ Auth::user()->profile->title }}
                    {{ Auth::user()->profile->description}}
                    
                    <div class="py-4">
                    <x-button><a href="{{ route('dodaj') }}">
                        {{ __('Dodaj rybę') }}
                    </a>
                    </x-button>
                        <x-slot></x-slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
