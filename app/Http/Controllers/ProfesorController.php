<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $profesores = Profesor::all();

         return view('profesores.index', compact('profesores'));
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profesor = new Profesor();
        $profesor->nombreApellido = $request->nombreApellido;
        $profesor->profesion = $request->profesion;
        $profesor->gradoAcademico = $request->gradoAcademico;
        $profesor->telefono = $request->telefono;
        $profesor->save();

        return redirect()->route('profesores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor){
        return view('profesores.edit', compact('profesor'));
    }

    public function update(Request $request, Profesor $profesor){
        $profesor->nombreApellido = $request->nombreApellido;
        $profesor->profesion = $request->profesion;
        $profesor->gradoAcademico = $request->gradoAcademico;
        $profesor->telefono = $request->telefono;
        $profesor->save();

        return redirect()->route('profesores.index');
    }


    public function destroy(Profesor $profesor){

        $cursosDelProfesor = $profesor->cursos;

        if ($cursosDelProfesor->isNotEmpty()) {
            return redirect()->route('profesores.index')
                ->with('error', 'El profesor tiene cursos asociados y no se puede eliminar.');
        }

        // Si no hay cursos asociados, se puede proceder con la eliminación del profesor
        $profesor->delete();

        return redirect()->route('profesores.index')
            ->with('success', 'Profesor eliminado correctamente');


    }






}
