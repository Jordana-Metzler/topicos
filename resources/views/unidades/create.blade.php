<x-layouts.app>

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Nova Unidade</h1>
            <form action="{{ route('unidades.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('unidades.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-layouts.app>