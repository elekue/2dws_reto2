@extends('layouts.alumnos')
@section('title', 'Ikasle bat ikusi')

@section('content')

        <h2>IKASLE </h2>
        <label><strong>Izen abizenak:</strong> {{ $alumno->nombre }}</label><br>
        <label><strong>Adina:</strong> {{ $alumno->edad }}</label><br>
        <label><strong>Telefonoa:</strong> {{ $alumno->telefono }}</label><br>
        <label><strong>Helbidea:</strong> {{ $alumno->direccion }}</label><br>
        <br>

         <a href="{{ route('alumnos.edit', $alumno->id) }}">Ikaslearen datuak aldatu</a>
         <br>
         <a href="{{ route('alumnos.confirm', $alumno->id) }}">Ikaslea EZABATU</a>
@endsection
