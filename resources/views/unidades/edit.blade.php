<x-layouts.app :title="__('Editar unidade')" :dark-mode="auth()->user()->pref_dark_mode">

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div>
        <h1>Editar Unidade</h1>

        <form action="{{ route('unidades.update', $unidade) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $unidade->nome) }}" required>
            </div>


            <div style="margin-top:1em;">
                <button type="submit">Atualizar</button>
                <a href="{{ route('unidades.show', $unidade) }}">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>