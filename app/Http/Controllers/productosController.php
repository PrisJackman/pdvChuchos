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
    	return view('vista_regprod',compact('categorias'));
    }

    public function vista_productos(){
    	$productos = DB:: Table('productos')
    	->join ('categorias','productos.id_categoria','categorias.id')
    	->select('productos.*','categorias.descripcion as nom_categoria')
    	->get();
        
    	return view('vista_prod', compact('productos'));
    }
    public function guardar_productos(){
        $producto= new Productos();
        $producto->nombre=$datos->input('nombre');
        $producto->precio=$datos->input('precio_unitario');

    }
}
