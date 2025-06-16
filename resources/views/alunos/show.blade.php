<x-layouts.app>

  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <div>
    <h1>{{ $aluno->nome }}</h1>
    <h1>{{ $aluno->telefone }}</h1>
    <h1>{{ $aluno->data_nasc }}</h1>
    <h1>{{  $aluno->turma->nome ?? 'Não atribuída' }}</h1>

    <div>
      <a href="{{ route('alunos.create') }}">Novo aluno</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>