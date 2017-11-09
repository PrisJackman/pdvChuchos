<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function vista_registroc(){
    	return view('vista_registrar_categoria');
    }
}
