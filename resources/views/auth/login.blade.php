@extends('layouts.app')

@section('titulo')
Inicio de Sesión en DevStagram
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-10 md:items-center ">
    <div class="md:w-6/12 p-5">
        <img class="rounded-lg" src="{{ asset('img/login.jpg') }}" alt="Imagen login de usuarios">
    </div>

    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{route('login')}}" method="POST">
            @csrf
            @if(session('mensaje'))
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                {{ session('mensaje') }}
            </p>
            @endif

            <div class="mb-5">
                <label for="email" class="mb-2 block  text-gray-500 font-bold">
                    Email
                </label>
                <input id="email" name="email" type="email" placeholder="Tu Email de Registro"
                    class="border p-2 w-full rounded-lg @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}" />
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="mb-2 block  text-gray-500 font-bold">
                    Password
                </label>
                <input id="password" name="password" type="password" placeholder="Password de Registro"
                    class="border p-2 w-full rounded-lg @error('password') border-red-500 @enderror" />
                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }} </p>
                @enderror
            </div>

            <div class="mb-5">
                <input type="checkbox" name="remenber"/> <label class="text-gray-500">Mantener la sesión abierta</label>
            </div>
            <input type="submit" value="Inicio de Sesión"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer  font-bold w-full p-3 text-white rounded-lg" />

        </form>
    </div>
</div>

@endsection