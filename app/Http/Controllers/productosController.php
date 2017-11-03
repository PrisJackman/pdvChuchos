<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productosController extends Controller
{
    public function vista_registro(){
    	return view('vista_regprod');
    }
}
