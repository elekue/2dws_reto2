@extends('layouts.alumnos')
@section('title', 'Ikasle berria')

@section('content')

    <h1>IKASLE BERRIA </h1>

    <form method="post" action="{{ route('alumnos.store') }}" enctype="multipart/form-data">
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

        Argazkia: <input type="file" name="foto" id="foto" accept="image/*">
        @error('foto')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Bidali</button>
    </form>


@endsection
