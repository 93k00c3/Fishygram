<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<form action="" method="post" action="{{ route('contact.store') }}">
    @csrf
    <div class="form-group">
        <label>Imie</label>
        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
        <!-- Error -->
        @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : 'Email jest wymagany' }}" name="email" id="email">
        @if ($errors->has('email'))
            <div class="error">
                {{ $errors->first('email') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label>Telefon</label>
        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
        @if ($errors->has('phone'))
            <div class="error">
                {{ $errors->first('phone') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label>Temat</label>
        <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
               id="subject">
        @if ($errors->has('subject'))
            <div class="error">
                {{ $errors->first('subject') }}
            </div>
        @endif
    </div>
    <div class="form-group">
        <label>Wiadomość</label>
        <textarea class="form-control {{ $errors->has('msg') ? 'error' : '' }}" name="msg" id="msg"
                  rows="4"></textarea>
        @if ($errors->has('msg'))
            <div class="error">
                {{ $errors->first('msg') }}
            </div>
        @endif
    </div>
    <input type="submit" name="send" value="Wyślij" class="btn btn-dark btn-block">
</form>
</body>
</html>
