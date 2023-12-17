<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumnat;
use Illuminate\Http\Request;

class AlumnatController extends Controller
{
    /**
     * Mostrar lista de los recursos recurso
     */
    public function index()
    {
        $alumnos = Alumnat::all();
        return view('Alumnat.indexAlumnat')->with('alumnos', $alumnos);//redirige al a view de indexAlumnat donde esta la lista completa
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Alumnat.createAlumnat');//redirige a la vista donde se encuentra el formulario
    }

    /**
     * Store a newly created resource in storage.
     * Almacena un nuevo recurso en el almacenamiento.
     */
    public function store(Request $request)
    {
        $alumnat = new Alumnat;// Crea una nueva instancia del modelo Alumnat
        // Asigna valores desde la solicitud a las propiedades del modelo
        $alumnat->name = $request->input('name');
        $alumnat->surname = $request->input('surname');
        $alumnat->email = $request->input('email');
        $alumnat->save();    // Guarda el nuevo recurso en la base de datos
        return redirect()->route('indexAlumnat');// Redirige a la vista de la lista de alumnos
    }


    /**
     * Muestra los detalles de un recurso específico
     */
    public function show(Request $request)
    {
        // Busca al Alumnat por su ID en la base de datos
        $alumnat = Alumnat::find($request['id']);
        // Retorna a la vista de detalles con los datos del recurso
        return view('Alumnat.showAlumnat')->with(['alumnat' => $alumnat]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //Busca al Alumnat por su ID en la base de datos, para editarla con los datos que ya posee
        $alumnat = Alumnat::find($id);
        //Retorna la vista de edición con los datos del recurso
        return view('Alumnat.editAlumnat')->with(['alumnat' => $alumnat]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $alumnat = Alumnat::find($id);// Busca al Alumnat por su ID en la base de datos
        // Actualiza los campos del alumnat  con los datos del formulario
        $alumnat->name = $request->input('name');
        $alumnat->surname = $request->input('surname');
        $alumnat->email = $request->input('email');
        $alumnat->update($request->all());//actualiza los datos de la BBDD
        return redirect()->route("indexAlumnat");// Redirige a la vista de la lista de alumnos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumnat $alumnat)
    {
        $alumnat->delete();// Elimina al Alumnat de la base de datos
        return redirect()->route('indexAlumnat');// Redirigir a la vista de la lista de alumnos 
    }
}
