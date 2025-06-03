<x-layouts.app>
  <head>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <div>
    <h1>{{ $turma->nome }}</h1>
    <h1>{{ $turma->dias_aula }}</h1>
    <h1>{{ $turma->horario }}</h1>
    <h1>{{ $turma->unidades_id }}</h1>
    <h1>{{ $turma->professores_id }}</h1>

    <div>
      <a href="{{ route('turmas.create') }}">Nova turma</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>