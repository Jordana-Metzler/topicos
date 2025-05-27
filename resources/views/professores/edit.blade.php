<x-layouts.app :title="__('Editar professor')" :dark-mode="auth()->user()->pref_dark_mode">

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div>
        <h1>Editar professor</h1>

        <form action="{{ route('professores.update', $professor) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $professor->nome) }}" required>
                <label for="telefone">Telefone</label><br>
                <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $professor->telefone) }}" required>
                <label for="emil">Email</label><br>
                <input type="text" name="email" id="email" value="{{ old('email', $professor->email) }}" required>
            </div>


            <div style="margin-top:1em;">
                <button type="submit">Atualizar</button>
                <a href="{{ route('professores.show', $professor) }}">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>