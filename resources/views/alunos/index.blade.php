<x-layouts.app :title="__('Meus alunos')">

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class ="container">
        <div class="header">
            <h1>Alunos</h1>
            <a href="{{ route('alunos.create') }}" class="btn">Novo aluno</a>
        </div>

        @if($alunos->isEmpty())
            <p>Nenhum aluno cadastrado</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Data de nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->telefone }}</td>
                            <td>{{ $aluno->data_nasc }}</td>
                            <td>{{ $aluno->turmas_id }}</td>
                            <td>
                            <a href="{{ route('alunos.show', $aluno) }}" class="link blue">Ver</a>
                            |
                            <a href="{{ route('alunos.edit', $aluno) }}" class="link yellow">Editar</a>
                            |
                            <form action="{{ route('aluno.destroy', $aluno) }}" method="POST" class="inline"
                                onsubmit="return confirm('Tem certeza que deseja excluir este aluno?')">
                                @csrf
                                @method('DELETE')
                                <button
                                        type="button"
                                        class="btn-excluir link red"
                                        data-nome ="{{ $aluno->nome }}">
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
<!-- erro na criação do aluno -->