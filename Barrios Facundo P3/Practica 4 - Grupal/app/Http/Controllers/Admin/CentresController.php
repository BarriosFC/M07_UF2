<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Centre;
use Illuminate\Http\Request;

class CentresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        // Accedemos a todos los registros de la base de datos y los mostramos en la vista de Centros de la carpeta Centres
        $centros = Centre::all();
        return view('Centres.centres')->with('centros', $centros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        // Muestra el formulario para crear un nuevo centro
        return view('Centres.createCentre');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Añade el nuevo centro a la base de datos
        $centre = new Centre;
        $centre->name = $request->input('name');
        $centre->address = $request->input('address');
        $centre->cp = $request->input('cp');
        $centre->city = $request->input('city');

        $centro->save();
        return redirect()->route("indexCentres");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // Muestra el centro añadido
        $centre = Centre::find($request['id']);
        return view('Centres.showCentre')->with('centro', $centre);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Redirige a formulario para editar un centro
        $centre = Centre::find($id);
        return view('Centres.editCentre')->with('centro', $centre);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Actualiza los datos del centro despues de editarlo
        $centre = Centre::find($id);
        $centre->name = $request->input('name');
        $centre->address = $request->input('address');
        $centre->cp = $request->input('cp');
        $centre->city = $request->input('city');

        $centre->update($request->all());

        return redirect()->route("indexCentre");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centre $centre)
    {
        // Elimina el centro pasado por parametro
        $centre->delete();// 
        return redirect()->route('indexCentre'); 

    }
}
