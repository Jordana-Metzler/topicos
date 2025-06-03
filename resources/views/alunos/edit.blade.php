<x-layouts.app :title="__('Editar aluno')" :dark-mode="auth()->user()->pref_dark_mode">

    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div>
        <h1>Editar aluno</h1>

        <form action="{{ route('alunos.update', $aluno) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome" value="{{ old('nome', $aluno->nome) }}" required>
                <label for="telefone">Telefone</label><br>
                <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $aluno->telefone) }}"
                    required>
                <label for="data_nasc">Data de nascimento</label><br>
                <input type="text" name="data_nasc" id="data_nasc" value="{{ old('data_nasc', $aluno->data_nasc) }}"
                    required>
                <label for="turmas_id">Turma:</label>
                <select name="turmas_id" id="turmas_id" required>
                    <option value="">Selecione...</option>
                    @foreach($turmas as $turma)
                        <option value="{{ $turma->id }}" {{ old('turmas_id', $aluno->turma_id ?? '') == $turma->id ? 'selected' : '' }}>
                            {{ $turma->nome }}
                        </option>
                    @endforeach
                </select> 
            </div>
            <div style="margin-top:1em;">
                <button type="submit">Atualizar</button>
                <a href="{{ route('alunos.show', $aluno) }}">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>