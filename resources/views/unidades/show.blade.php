<x-layouts.app>
  <head>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <div>
    <h1>{{ $unidade->nome }}</h1>

    @if($unidade->descricao)
      <p>{{ $unidade->descricao }}</p>
    @endif

    <div>
      <a href="{{ route('unidades.create') }}">Nova Unidade</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>