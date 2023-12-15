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
        return view("professorat")->with("profes", $profes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // redireccion a la view de creacion
        $profe = ['name' => '', 'surname' => '', 'email' => ''];
        return view('form_professorat')->with(['metodo' => 'Añadir', 'profe' => $profe]);
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

        return view("professorat");
    }

    /**
     * Display the specified resource.
     */
    public function show(Professorat $professorat)
    {
        // mostrar o seleccionar? un solo resultado
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professorat $professorat)
    {
        // redireccion a formulario + datos
        $profe = User::find($professorat['id']);
        return view('form_professorat')->with(['metodo' => 'Editar', 'profe' => $profe]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professorat $professorat)
    {
        // guardar el formulario
        $profe = User::find($professorat['id']);
        $profe->name = $request->input('name');
        $profe->surname = $request->input('surname');
        $profe->email = $request->input('email');

        $professorat->save();
        return view("professorat");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professorat $professorat)
    {
        // eliminar
    }
}
