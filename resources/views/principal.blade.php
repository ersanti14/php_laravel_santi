@extends('layouts.app')

@section('titulo')
    Nuestros Usuarios
@endsection
@section('contenido')
    <div class="w-full flex items-center justify-center">
        <div class="w-3/4 bg-center">
            <div class=" w-auto mb-6">
                <a href="{{ route('export_user_pdf') }}"
                    class="bg-blue-500 text-white p-3 rounded mb-2 hover:bg-blue-300">Exportar Usuarios</a>
            </div>
            
            <div class="relative bg-slate-100 overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Telefono
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Direccion
                            </th>
                            <th scope="col" class=" px-6 py-3 text-center">
                                Opciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($users))
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}</th>
                                    <td class="px-6 py-4">{{ $user->username }}</td>
                                    <td class="px-6 py-4">{{ $user->email }}</td>
                                    <td class="px-6 py-4">{{ $user->telefono }}</td>
                                    <td class="px-6 py-4">{{ $user->direccion }}</td>
                                    <td class="px-6 py-4 flex-row flex items-center justify-center">
                                        <a href="{{ route('actualizar', $user->id) }}"
                                            class="bg-blue-500 text-white p-3 rounded hover:bg-blue-300">Actualizar</a>
                                        <form action="{{ route('eliminar', $user->id) }}" method="POST"
                                            class="bg-red-600 text-white p-3 w-3/2 ml-2 justify-center items-center rounded hover:bg-red-400">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-full">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <p>No hay usuarios disponibles.</p>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
