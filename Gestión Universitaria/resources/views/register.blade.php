@extends('layout.app')

@section('titulo')
<h1 class="text-center text-amber-400 text-3xl font-black">
Registrar Usuario
</h1>

@endsection

@section('contenido')
<div class="flex justify-center">
    <div class="w-96 ">
      <form method="post" class="w-96 flex flex-col p-3">
        @csrf
        <label class="p-3 text-left text-xl" for="name">Nombre:</label>
        <input type="text" id="name" name="name" class="border border-gray-400 p-1 rounded-md" required>
        @error('name')
                    <p class="bg-red-600 text-white rounded-lg">{{ $message }}</p>
        @enderror
        <label class="p-3 text-left text-xl" for="lastname">Apellido:</label>
        <input type="text" id="lastname" name="lastname" class="border border-gray-400 p-1 rounded-md" required>
        @error('lastname')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
        @enderror
        <label class="p-3 text-left text-xl" for="email">Email:</label>
        <input type="text" id="email" name="email" class="border border-gray-400 p-1 rounded-md" required>
        @error('email')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
        @enderror
        <label class="p-3 text-left text-xl" for="rol">Rol:
        <select value="">
            <option name="" id="">Seleccione una opción</option>
            <option name="" id="" value="admin">Administrador</option>
            <option name="" id="" value="teacher">Profesor</option>
            <option name="" id="" value="student">Estudiante</option>
        </select>
        </label>
        @error('rol')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
        @enderror
        <label class="p-3 text-left text-xl" for="identification">Identificación:</label>
        <input type="text" id="identification" name="identification" class="border border-gray-400 p-1 rounded-md" required>
        @error('identification')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror

        <label class="p-3 text-left text-xl" for="phone">Teléfono:</label>
        <input type="tel" id="phone" name="phone" class="border border-gray-400 p-1 rounded-md" required>
        @error('phone')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror

        <label class="p-3 text-left text-xl" for="address">Dirección:</label>
        <input type="text" id="address" name="address" class="border border-gray-400 p-1 rounded-md" required>
        @error('address')
                    <p class="bg-red-600 text-white text-center rounded-lg">{{ $message }}</p>
                @enderror

        <button type="submit" class="mt-10 p-3 bg-green-900 hover:bg-green-500 text-white rounded-md font-black ">Registrar</button>

      </form>
    </div>
  </div>


@endsection
