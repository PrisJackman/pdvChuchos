<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use DB;
class productosController extends Controller
{
    public function vista_registro(){
        $categorias=Categorias::all();
        $productos=Productos::all();
    	return view('vista_regprod',compact('categorias','productos'));
    }

    public function guardar_productos(){
        $producto= new Productos();
        $producto->nombre=$datos->input('nombre');
        $producto->precio=$datos->input('precio_unitario');

    }
}
