<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        @if (Route::has('login'))
            @auth
        <form action="{{ route('dodaj') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Zdjęcie -->
            <div>
                <x-label for="image_path" :value="__('Zdjęcie')" />

                <x-input id="image_path" class="block mt-1 w-full" type="file" name="image_path" :value="old('image_path')" required autofocus />
            </div>

            <!-- Nazwa ryby -->
            <div>
                <x-label for="Name" :value="__('Nazwa ryby')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Waga -->
            <div>
                <x-label for="weight" :value="__('Grubość')" />

                <x-input id="weight" class="block mt-1 w-full" type="weight" name="weight" :value="old('weight')" required />
            </div>
            <!-- Waga -->
            <div>
                <x-label for="length" :value="__('Wysokość/Długość')" />

                <x-input id="length" class="block mt-1 w-full" type="length" name="length" :value="old('length')" required />
            </div>
            <!-- Opis -->
            <div>
                <x-label for="description" :value="__('Opis')" />

                <x-input id="description" class="block mt-2 w-full" type="description" name="description" :value="old('description')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Dodaj') }}
                </x-button>
            </div>
        </form>
            @endif
    </x-auth-card>
    @endauth

</x-guest-layout>
