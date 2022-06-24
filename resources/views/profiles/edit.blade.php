<x-app-layout>
<x-slot name="container">
    <div class="container">
    <form action="/profile/{{ Auth::user()->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="row items-center text-center py-5">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edytuj Profil</h1>
                </div>
                <div class="form-group row">
                    <x-label for="title" class="col-md-4 col-form-label">Tytuł</x-label>

                    <x-input id="title"
                           type="text"
                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           name="title"
                           value="{{ old('title') ?? $user->profile->title }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                    </x-input>
                </div>

                <div class="form-group row">
                    <x-label for="description" class="col-md-4 col-form-label">Opis</x-label>

                    <x-input id="description"
                           type="text"
                           class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                           name="description"
                           value="{{ old('description') ?? $user->profile->description }}"
                           autocomplete="description" autofocus>

                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                    </x-input>
                </div>

                <div class="row">
                    <x-label for="image" class="col-md-4 col-form-label">Zdjęcie profilu</x-label>

                    <x-input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                    </x-input>
                </div>

                <div class="row pt-4">
                    <x-button class="btn btn-primary">Zapisz</x-button>
                </div>

            </div>
        </div>
    </form>
</div>
</x-app-layout>
