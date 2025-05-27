<x-layouts.app :title="__('Minhas Unidade')">

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class ="container">
        <div class="header">
            <h1>Minhas Unidades</h1>
            <a href="{{ route('unidades.create') }}" class="btn">Nova Unidade</a>
        </div>

        @if($unidades->isEmpty())
            <p>Nenhuma unidade cadastrada.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unidades as $unidade)
                        <tr>
                            <td>{{ $unidade->nome }}</td>
                            <td>
                            <a href="{{ route('unidades.show', $unidade) }}" class="link blue">Ver</a>
                            |
                            <a href="{{ route('unidades.edit', $unidade) }}" class="link yellow">Editar</a>
                            |
                            <form action="{{ route('unidades.destroy', $unidade) }}" method="POST" class="inline"
                                onsubmit="return confirm('Tem certeza que deseja excluir esta unidade?')">
                                @csrf
                                @method('DELETE')
                                <button
                                        type="button"
                                        class="btn-excluir link red"
                                        data-nome="{{ $unidade->nome }}">
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