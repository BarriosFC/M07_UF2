<?php

namespace App\Http\Controllers\Admin;

use App\Models\Professorat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessoratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // es un display all
        $profes = Professorat::all();
        return view("Professorat.list_professorat")->with("profes", $profes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // redireccion a la view de creacion
        $profe = ['name' => '', 'surname' => '', 'email' => ''];
        return view('Professorat.create_professorat')
            ->with(['profe' => $profe]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // guarda lo del formulario
        $professorat = new Professorat;
        $professorat->name = $request->input('name');
        $professorat->surname = $request->input('surname');
        $professorat->email = $request->input('email');

        $professorat->save();

        return redirect()->route("professorat");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // mostrar o seleccionar? un solo resultado
        $profe = Professorat::find($request['id']);
        
        return view('Professorat.show_professorat')
            ->with(['profe' => $profe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // redireccion a formulario + datos
        $profe = Professorat::find($id);
        return view('Professorat.edit_professorat')
            ->with(['profe' => $profe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // guardar el formulario
        $profe = Professorat::find($id);
        $profe->name = $request->input('name');
        $profe->surname = $request->input('surname');
        $profe->email = $request->input('email');
        $profe->update($request->all());

        return redirect()->route("professorat");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // eliminar
        $profe = Professorat::find($id);
        $profe->delete();

        return redirect()->route("professorat");
    }
}
