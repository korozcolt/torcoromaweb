<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <section class=" py-1 bg-blueGray-50">
                        <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
                            <div
                                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                                <div class="rounded-t bg-white mb-0 px-6 py-6">
                                    <div class="text-center flex justify-between">
                                        <h6 class="text-blueGray-700 text-xl font-bold">
                                            INFORMACIÓN IMPORTANTE DE LA WEB
                                        </h6>
                                    </div>
                                </div>
                                @if (empty($page))
                                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                        <form action="{{ route('settings.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                                Información de WEB
                                            </h6>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <strong>Cuidado!</strong> Hay un error es una de las
                                                    entradas.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="flex flex-wrap">
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            Titulo
                                                        </label>
                                                        <input type="text" name="title"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Titulo">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            DESCRIPCIÓN
                                                        </label>
                                                        <input type="text" name="description"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Descripcion">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            EMAIL 1
                                                        </label>
                                                        <input type="email" name="email"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            EMAIL 2
                                                        </label>
                                                        <input type="email" name="email2"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="email2">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="mt-6 border-b-1 border-blueGray-300">

                                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                                INFORMACIÓN DE CONTACTO
                                            </h6>
                                            <div class="flex flex-wrap">
                                                <div class="w-full lg:w-12/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            DIRECCIÓN
                                                        </label>
                                                        <input type="text" name="address"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Direccion">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            TELÉFONO
                                                        </label>
                                                        <input type="text" name="phone"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Telefono">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            TELÉFONO 2
                                                        </label>
                                                        <input type="text" name="phone2"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Telefono 2">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            HORARIOS
                                                        </label>
                                                        <input type="text" name="schedules"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Horarios">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            facebook
                                                        </label>
                                                        <input type="text" name="facebook"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Facebook">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            twitter
                                                        </label>
                                                        <input type="text" name="twitter"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Twitter">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            instagram
                                                        </label>
                                                        <input type="text" name="instagram"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="Instagram">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            linkedin
                                                        </label>
                                                        <input type="text" name="linkeid"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="linkedin">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            youtube
                                                        </label>
                                                        <input type="text" name="youtube"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            placeholder="youtube">
                                                    </div>
                                                </div>

                                            </div>
                                            <button
                                                class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                                type="submit">
                                                GUARDAR
                                            </button>
                                        </form>
                                    </div>
                                @else
                                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                        <form action="{{ route('settings.update', $page) }}" method="post">
                                            @method('put')
                                            @csrf
                                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                                Información de WEB
                                            </h6>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <strong>Cuidado!</strong> Hay un error es una de las
                                                    entradas.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="flex flex-wrap">
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            Titulo
                                                        </label>
                                                        <input type="text" name="title"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->title ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            DESCRIPCIÓN
                                                        </label>
                                                        <input type="text" name="description"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->description ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            EMAIL 1
                                                        </label>
                                                        <input type="email" name="email"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->email ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-6/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            EMAIL 2
                                                        </label>
                                                        <input type="email" name="email2"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->email2 ?? '' }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="mt-6 border-b-1 border-blueGray-300">

                                            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                                                INFORMACIÓN DE CONTACTO
                                            </h6>
                                            <div class="flex flex-wrap">
                                                <div class="w-full lg:w-12/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            DIRECCIÓN
                                                        </label>
                                                        <input type="text" name="address"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->address ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            TELÉFONO
                                                        </label>
                                                        <input type="text" name="phone"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->phone ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            TELÉFONO 2
                                                        </label>
                                                        <input type="text" name="phone2"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->phone2 ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            HORARIOS
                                                        </label>
                                                        <input type="text" name="schedules"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->schedules ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            facebook
                                                        </label>
                                                        <input type="text" name="facebook"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->facebook ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            twitter
                                                        </label>
                                                        <input type="text" name="twitter"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->twitter ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            instagram
                                                        </label>
                                                        <input type="text" name="instagram"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->instagram ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            linkedin
                                                        </label>
                                                        <input type="text" name="linkeid"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->linkeid ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="w-full lg:w-4/12 px-4">
                                                    <div class="relative w-full mb-3">
                                                        <label
                                                            class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                                            htmlfor="grid-password">
                                                            youtube
                                                        </label>
                                                        <input type="text" name="youtube"
                                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                                            value="{{ $page->youtube ?? '' }}">
                                                    </div>
                                                </div>

                                            </div>
                                            <button
                                                class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                                type="submit">
                                                GUARDAR
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
