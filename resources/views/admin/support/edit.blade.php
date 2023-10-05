<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Support') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-4">
                    <form method="POST" action="{{ route('support.update', $support) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-6">
                            <label for="email-address-icon"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                        </path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                </div>
                                <input type="text" id="email-address-icon"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="email" value="{{ $support->email ?? '' }}">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                </div>
                                <input type="text" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="name" value="{{ $support->name ?? '' }}">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asunto</label>
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <i class='bx bx-user'></i>
                                </div>
                                <input type="text" id="subject"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="subject" value="{{ $support->subject ?? '' }}">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mensaje</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="message">{{ $support->message }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label for="status"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                            <select id="status" name="status"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="pending" {{ $support->status == 'pending' ? 'selected' : '' }}>PENDIENTE
                                </option>
                                <option value="in_progress" {{ $support->status == 'in_progress' ? 'selected' : '' }}>
                                    EN PROGRESO - REVISION
                                </option>
                                <option value="resolved" {{ $support->status == 'resolved' ? 'selected' : '' }}>RESUELTO
                                </option>
                                <option value="closed" {{ $support->status == 'closed' ? 'selected' : '' }}>CERRADO
                                </option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="reply"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respuesta</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="reply">{{ $support->reply }}</textarea>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
