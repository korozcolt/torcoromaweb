<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chatbot Editar') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-4">
                    <form method="POST" action="{{ route('chatbot.update', $chatbot) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-6">
                            <label for="ask"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pregunta</label>
                            <textarea id="ask" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="ask">{{ $chatbot->ask }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label for="answer"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respuesta</label>
                            <textarea id="answer" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="answer">{{ $chatbot->answer }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label for="is_active" class="flex items-center cursor-pointer relative mb-4">
                                <input type="checkbox" id="is_active" class="sr-only" value="{{ $chatbot->is_active }}"
                                    name="is_active" checked="{{ $chatbot->is_active }}">
                                <div class="toggle-bg bg-gray-200 border-2 border-gray-200 h-6 w-11 rounded-full"></div>
                                <span class="ml-3 text-gray-900 text-sm font-medium">Activar o desactivar</span>
                            </label>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
