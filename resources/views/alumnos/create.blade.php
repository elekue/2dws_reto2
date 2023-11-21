@extends('layouts.alumnos')
@section('title', 'Ikasle berria')

@section('content')

    <h1>IKASLE BERRIA </h1>

    <form method="post" action="{{ route('alumnos.store') }}">
        @csrf
        Izen Abizena <input type="text" name="nombre" value="{{ old('nombre') }}"><br>
        @error('nombre')
                <p>{{ $message }}</p>
        @enderror

        Adina <input type="text" name="edad" value="{{ old('edad') }}"><br>
        @error('edad')
            <p>{{ $message }}</p>
        @enderror
        Telefonoa <input type="text" name="telefono" value="{{ old('telefono') }}"><br>
        Helbidea<input type="text" name="direccion"  value="{{ old('direccion') }}"><br>
        <button type="submit">Bidali</button>
    </form>


@endsection
