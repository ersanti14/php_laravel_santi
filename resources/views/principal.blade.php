@extends('layouts.app')

@section('titulo')
    Bienvenidos
@endsection
@section('contenido')
<div class="w-full flex items-center justify-center">
  <div class="w-3/4 bg-center">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                      <th scope="col" class="px-6 py-3">
                          Opciones
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($users as $user )
                  <tr>
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"></th>
                      <td class="px-6 py-4">{{ $user ->name }}</td>
                      <td class="px-6 py-4">{{ $user ->username}}</td>
                      <td class="px-6 py-4">{{ $user ->email }}</td>
                      <td class="px-6 py-4">{{ $user ->telefono }}</td>
                      <td class="px-6 py-4">{{ $user ->direccion }}</td>
                      <td class="px-6 py-4">
                          <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                      </td>
                  </tr>
                @endforeach
                  
              </tbody>
          </table>
      </div>
  </div>
</div>

@endsection
