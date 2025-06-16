<x-layouts.app :title="__('Dashboard')">
    <div class="p-6 space-y-6">
        <h1 class="text-2xl font-semibold text-gray-800">Home</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

            <!-- Turmas -->
            <a href="{{ route('turmas.index') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white rounded-xl p-6 flex flex-col items-center justify-center shadow-md hover:shadow-xl transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2h5M12 4v4m0 0l2-2m-2 2l-2-2" />
                </svg>
                <span class="font-bold text-lg">Turmas</span>
            </a>

            <!-- Professores -->
            <a href="{{ route('professores.index') }}" class="bg-green-500 hover:bg-green-600 text-white rounded-xl p-6 flex flex-col items-center justify-center shadow-md hover:shadow-xl transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                <span class="font-bold text-lg">Professores</span>
            </a>

            <!-- Unidades -->
            <a href="{{ route('unidades.index') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white rounded-xl p-6 flex flex-col items-center justify-center shadow-md hover:shadow-xl transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h4l3 10h8l3-10h4" />
                </svg>
                <span class="font-bold text-lg">Unidades</span>
            </a>

            <!-- Alunos -->
            <a href="{{ route('alunos.index') }}" class="bg-pink-500 hover:bg-pink-600 text-white rounded-xl p-6 flex flex-col items-center justify-center shadow-md hover:shadow-xl transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.083 12.083 0 0112 20.5a12.083 12.083 0 01-6.16-9.922L12 14z" />
                </svg>
                <span class="font-bold text-lg">Alunos</span>
            </a>

        </div>
    </div>
</x-layouts.app>
