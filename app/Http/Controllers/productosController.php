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

    public function guardar_productos( Request $datos){
        $producto= new Productos();
        $producto->descripcion=$datos->input('nombre');
        $producto->id_categoria=$datos->input('categorias'); 
        $producto->precio_unitario=$datos->input('precio');
        
        $producto->save();
        return view('vista_prod');
    }

    public function vista_productos(){
        $productos = Productos :: all();
        return view('vista_prod', compact('productos'));
    }
}
