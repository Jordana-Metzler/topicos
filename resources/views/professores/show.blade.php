<x-layouts.app>
  <head>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <div>
    <h1>{{ $professor->nome }}</h1>
    <h1>{{ $professor->telefone }}</h1>
    <h1>{{ $professor->email }}</h1>

    <div>
      <a href="{{ route('professores.create') }}">Novo professor</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>