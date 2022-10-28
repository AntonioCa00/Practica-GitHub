<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidadorGit;

class controladorVistas extends Controller
{

    public function enviaForm(ValidadorGit $req){
        return redirect('tab')->with('Si','Se proceso bien');;
    }

    public function vistaWelcome(){
        return view('Welcome');
    }

    public function vistaFormulario(){
        return view('Formulario');
    }

    public function vistaTabla(){
        return view('Tabla');
    }
    //
}
