<x-layouts.app>

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Novo Professor</h1>
            <form action="{{ route('professores.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone">
                    <label for="email">Email:</label>
                    <input type="text" name="email">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('professores.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-layouts.app>