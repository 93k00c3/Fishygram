<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Klub Wędkarski') }}
        </h2>
    </x-slot>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <div class="container">
            <form action="/fish" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col-8 ring-offset-2">
                        <div class="row">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label pl-4">Nazwa Ryby</label>
                            <br>
                        <input id="name" type="text" autocomplete="name" autofocus>
                        <label for="weight" class="col-md-4 col-form-label pl-4">Waga</label>
                            <br>
                        <input id="weight" type="float" autocomplete="name" autofocus>
                        <label for="length" class="col-md-4 col-form-label pl-4">Długość</label>
                            <br>
                        <input id="length" type="float" autocomplete="name" autofocus>
                        <label for="description" class="col-md-4 col-form-label pl-4">Opis</label>
                            <br>
                        <input id="description" type="text" autocomplete="name" autofocus>
                        <br>
                        <div class="row py-4 pl-4">
                            <label for="image" class="col-md4 col-form-label">Zdjęcie</label>
                            <input type="file" class="form-control-file" id="image_path" name="image"></input>
                            <br>
                        </div>
                            <button class="btn btn-primary" action="POST">Wyślij</button>
                        </div> 
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
        </div>
</x-app-layout>