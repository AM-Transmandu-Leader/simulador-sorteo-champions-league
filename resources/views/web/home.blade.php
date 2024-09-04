<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="pt-6 pb-3">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900">
                    <p>
                        <h1 class="">{{ __('Welcome') }} , <b>{{ Auth::user()->fullname }}</h1></b>
                    </p>
                    <p>
                        <h3 class="">Simulador del Sorteo de los Encuentros para la Champions League 2024/2025 </h3>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-6 pb-3">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="bg-blue-500 h-32">Columna 1</div>
                <div class="bg-green-500 h-32">Columna 2</div>
                <div class="bg-yellow-500 h-32">Columna 3</div>
            </div>
        </div>
    </div>
</x-app-layout>
