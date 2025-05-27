<x-layouts.app>

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Novo Aluno</h1>
            <form action="{{ route('alunos.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone">
                    <label for="data_nasc">Data de nascimento:</label>
                    <input type="text" name="data_nasc">
                    <label for="turmas_id">Número turma:</label>
                    <input type="text" name="turmas_id">
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-layouts.app>