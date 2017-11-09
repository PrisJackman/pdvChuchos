<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use DB;
class productosController extends Controller
{
    public function vista_registro(){
    	return view('vista_regprod');
    }

    public function vista_productos(){
    	$productos = DB:: Table('productos')
    	->join ('categorias','productos.id_categoria','categorias.id')
    	->select('productos.*','categorias.descripcion as nom_categoria')
    	->get();

    	return view('vista_prod', compact('productos'));
    }
}
