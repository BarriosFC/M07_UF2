<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminView(){
        return view('Admin/admin');
    }

	public function login(Request $request){
		$email = $request->input('email');
        $password = $request->input('password');
        if ($email == 'email' && $password == 'password') {
            return view('Admin/admin');
        } else {
            return view('signin')->with(['error' => 'Credenciales incorrectas']);
        }
	}
	
    public function alumnat(){
        $alumnos = [
            ['id' => '1', 'name' => 'Adrià', 'surname' => 'García',
                'rol' => 'Alumne', 'email' => 'agarcia@itic.com'],
            ['id' => '2', 'name' => 'Neus', 'surname' => 'Bravo',
                'rol' => 'Alumne', 'email' => 'nbravo@itic.com'],
            ['id' => '3', 'name' => 'Andres', 'surname' => 'Zambrano',
                'rol' => 'Alumne', 'email' => 'azambrano@itic.com'],
            ['id' => '7', 'name' => 'Facundo', 'surname' => 'Barrios',
                'rol' => 'Guía', 'email' => 'rulo@itic.com']
        ];
        return view('alumnat')->with(['alumnos' => $alumnos]);
    }

    public function professorat(){
        $profes = [
        ['id' => '1', 'name' => 'Roger', 'surname' => 'Sobrino',
                'rol' => 'Professor', 'email' => 'roger@itic.com'],
        ['id' => '2', 'name' => 'Juanma', 'surname' => 'Sanchez',
            'rol' => 'Professor', 'email' => 'juanma@itic.com'],
        ['id' => '3', 'name' => 'Xavi', 'surname' => 'Quesada',
            'rol' => 'Professor', 'email' => 'xavi@itic.com'],
        ['id' => '4', 'name' => 'Oriol', 'surname' => 'Roca',
            'rol' => 'Professor', 'email' => 'oriol@itic.com']
        ];
        return view('professorat')->with(['profes' => $profes]);
    }

    public function centres(){
        $centros = [
            ['id' => '1', 'name' => 'Institut TIC de Barcelona', 
                'address' => 'C/ Sancho de Ávila, 130', 
                'cp' => '08018', 'city' => 'Barcelona'],
            ['id' => '2', 'name' => 'Jaume Balmes', 
                'address' => 'C/ de la Diputació, 150', 
                'cp' => '08013', 'city' => 'Barcelona'],
        ];
        return view('centres')->with(['centros' => $centros]);
    }
}
