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
    <div class="row">
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Zdjęcie</td>
        </tr>
    </thead>
    <tbody>
        @foreach($fishes as $fish)
        <tr>
            <td>{{$fish->id}}</td>
            <td>{{$fish->image_path}} </td>
            <td>
            </td>
            <td>
                <form action="{{ url('fish/delete', $fish->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>