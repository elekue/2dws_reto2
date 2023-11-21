@extends('layouts.alumnos')
@section('title', 'Ikastaroan zerrenda')

@section('content')

    <h2>IKASTARO ZERRENDA</h2>


    <table style="border:1px solid">
        <tr>
            <th>Izen abizena</th>
            <th>Maila</th>
            <th>Orduak</th>
            <th>Irakaslea</th>

        </tr>

    @foreach ($cursos as $curso)
        <tr>
            <td>{{ $curso->nombre }}&nbsp;&nbsp;</td>
            <td>{{ $curso->nivel }}&nbsp;&nbsp;</td>
            <td>{{ $curso->horasAcademicas }}&nbsp;&nbsp;</td>
            <td>{{ $curso->profesor->nombreApellido }}</td>
        </tr>

     @endforeach

    </table>

@endsection
