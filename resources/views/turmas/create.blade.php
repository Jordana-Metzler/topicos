<x-layouts.app>

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <div class="container">
            <h1>Nova Turma</h1>
            <form action="{{ route('turmas.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                    <label for="dias_aula">Dias de aula:</label>
                    <input type="text" name="dias_aula">
                    <label for="horario">Horário:</label>
                    <input type="text" name="horario">
                    <label for="unidades_id">Unidade:</label>
                    <select name="unidades_id" id="unidades_id" required>
                        <option value="">Selecione...</option>
                        @foreach($unidades as $unidade)
                            <option value="{{ $unidade->id }}" {{ old('unidades_id') == $unidade->id ? 'selected' : '' }}>
                                {{ $unidade->nome }}
                            </option>
                        @endforeach
                    </select>
                    <label for="professores_id">Professor:</label>
                    <select name="professores_id" id="professores_id" required>
                        <option value="">Selecione...</option>
                        @foreach($professores as $professor)
                            <option value="{{ $professor->id }}" {{ old('professores_id') == $professor->id ? 'selected' : '' }}>
                                {{ $professor->nome }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('turmas.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </body>
</x-layouts.app>