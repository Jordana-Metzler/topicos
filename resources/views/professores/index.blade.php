<x-layouts.app :title="__('Meus professores')">

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class ="container">
        <div class="header">
            <h1>Professores</h1>
            <a href="{{ route('professores.create') }}" class="btn">Novo professor</a>
        </div>

        @if($professores->isEmpty())
            <p>Nenhum professor cadastrado</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($professores as $professor)
                        <tr>
                            <td>{{ $professor->nome }}</td>
                            <td>{{ $professor->telefone }}</td>
                            <td>{{ $professor->email }}</td>
                            <td>
                            <a href="{{ route('professores.show', $professor) }}" class="link blue">Ver</a>
                            |
                            <a href="{{ route('professores.edit', $professor) }}" class="link yellow">Editar</a>
                            |
                            <form action="{{ route('professores.destroy', $professor) }}" method="POST" class="inline"
                                onsubmit="return confirm('Tem certeza que deseja excluir este professor?')">
                                @csrf
                                @method('DELETE')
                                <button
                                        type="button"
                                        class="btn-excluir link red"
                                        data-nome ="{{ $professor->nome }}">
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