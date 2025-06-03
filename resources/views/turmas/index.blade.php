<x-layouts.app :title="__('Minhas turmas')">

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <div class="header">
            <h1>Turmas</h1>
            <a href="{{ route('turmas.create') }}" class="btn">Nova turma</a>
        </div>

        @if($turmas->isEmpty())
            <p>Nenhuma turma cadastrada</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Dias de aula</th>
                        <th>Horário</th>
                        <th>Unidade</th>
                        <th>Professor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($turmas as $turma)
                        <tr>
                            <td>{{ $turma->nome }}</td>
                            <td>{{ $turma->dias_aula }}</td>
                            <td>{{ $turma->horario }}</td>
                            <td>{{ $turma->unidade->nome ?? '-' }}</td>
                            <td>{{ $turma->professor->nome ?? '-' }}</td>
                            <td>
                                <a href="{{ route('turmas.show', $turma) }}" class="link blue">Ver</a>
                                |
                                <a href="{{ route('turmas.edit', $turma) }}" class="link yellow">Editar</a>
                                |
                                <form action="{{ route('turmas.destroy', $turma) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Tem certeza que deseja excluir este turma?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn-excluir link red" data-nome="{{ $turma->nome }}">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layouts.app>