@extends('layouts.alumnos')
@section('title', 'Irakasleen zerrenda')

@section('content')

    <h2>IRAKASLEEN ZERRENDA</h2>


    <table style="border:1px solid">
        <tr>
            <th>Izen abizena</th>
            <th>Lanbidea</th>
            <th>Grado akademikoa</th>
            <th>Telefonoa</th>

        </tr>

    @foreach ($profesores as $profesor)
        <tr style="background-color: burlywood">
            <td>{{ $profesor->nombreApellido }}&nbsp;&nbsp;</td>
            <td>{{ $profesor->profesion }}&nbsp;&nbsp;</td>
            <td>{{ $profesor->gradoAcademico }}&nbsp;&nbsp;</td>
            <td>{{ $profesor->telefono }}</td>
        </tr>

        @if($profesor->cursos->isNotEmpty())
                <tr><td colspan="4">IKASTAROAK</td></tr>

                @foreach ($profesor->cursos as $curso_profe)
                    <tr>
                        <td>&nbsp;&nbsp;</td>
                        <td>{{ $curso_profe->nombre }}&nbsp;&nbsp;</td>
                        <td>{{ $curso_profe->nivel }}&nbsp;&nbsp;</td>
                        <td>{{ $curso_profe->horasAcademicas }}</td>
                    </tr>

                 @endforeach
        @endif
     @endforeach

    </table>

@endsection
