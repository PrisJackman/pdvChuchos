<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use DB;
class matprimaController extends Controller
{
    

    public function vista_matprima(){
    	$matprima = DB:: Table ('materias_prima')
        ->select('materias_prima.*')
        ->get();
    	return view('vista_matprima', compact('matprima'));
    }
}