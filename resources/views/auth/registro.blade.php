@extends('layouts.app')

@section('titulo')
    Registro de Usuario
@endsection
@section('contenido')
    <div class="flex items-center justify-center">
        <div class="md:flex p-10 md:w-8/12 rounded-lg shadow-xl bg-slate-100">
            <div class="md:w-6/12 mb-8 md:mb-0">
                <img src="{{ asset('img/user.png') }}" alt="User Image" class="w-full h-auto">
            </div>
            <div
                class="md:w-6/12 p-6  dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:shadow-sm-light rounded-lg">
                <form method="POST" action="/registro">
                    @csrf
                    <div class="mb-5">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                        <input type="text" name="name" id="nombre"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Nombre...">
                        @error('name')
                            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" name="username" id="username"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Ingrese su Username">
                        @error('username')
                            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="telefono"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                        <input type="text" name="telefono" id="telefono"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Ingrese su telefono">
                        @error('telefono')
                            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="direccion"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion</label>
                        <input type="text" name="direccion" id="direccion"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="Ingrese su Direccion">
                        @error('direccion')
                            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="name@email.com">
                        @error('email')
                            <p class="bg-red-500 text-white rounded-lg my-2 text-sm text-center">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="submit" value="Crear Cuenta"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                </form>
            </div>
        </div>
    </div>
@endsection
