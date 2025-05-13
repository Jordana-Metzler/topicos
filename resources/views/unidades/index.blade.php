<x-layouts.app :title="__('Minhas Unidade')">
    <div>
        <div>
            <h1>Minhas Unidades</h1>
            <a href="{{ route('unidades.create') }}">Nova Unidade</a>
        </div>

        @if($unidades->isEmpty())
            <p>Nenhuma unidade cadastrada.</p>
        @else
            <table border="1" cellpadding="8" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($unidades as $unidade)
                        <tr>
                            <td>{{ $unidade->nome }}</td>
                            <a href="{{ route('unidades.show', $unidade) }}">Ver</a>
                            |
                            <a href="{{ route('unidades.edit', $unidade) }}">Editar</a>
                            |
                            <form action="{{ route('unidades.destroy', $unidade) }}" method="POST" style="display:inline"
                                onsubmit="return confirm('Tem certeza que deseja excluir esta unidade?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layouts.app>