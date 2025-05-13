<x-layouts.app>
  <div>
    <h1>{{ $unidade->nome }}</h1>

    <div>
      <a href="{{ route('unidades.create') }}">Nova Unidade</a>
      <a href="{{ url()->previous() }}">Voltar</a>
    </div>
  </div>
</x-layouts.app>