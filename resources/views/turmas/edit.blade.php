<x-layouts.app :title="__('Editar turma')" :dark-mode="auth()->user()->pref_dark_mode">

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div>
        <h1>Editar turma</h1>

        <form action="{{ route('turmas.update', $turma) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $turma->nome) }}" required>
                <label for="dias_aula">Dias de aula</label><br>
                <input type="text" name="dias_aula" id="dias_aula" value="{{ old('dias_aula', $turma->dias_aula) }}"
                    required>
                <label for="horario">Horário</label><br>
                <input type="text" name="horario" id="horario" value="{{ old('horario', $turma->horario) }}" required>
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


            <div style="margin-top:1em;">
                <button type="submit">Atualizar</button>
                <a href="{{ route('turmas.show', $turma) }}">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>