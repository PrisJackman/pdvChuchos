<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use DB;
use Carbon\Carbon;
use DateTime;
use strtotime;
class ventasController extends Controller
{
    public function vista_registroventa(){
    	$fecha1 = new DateTime();
    	$fecha = $fecha1->format('d-m-Y H:i:s');

    	$prod = Productos :: all();

    	return view('vista_regventa', compact('fecha', 'prod'));
    }

    public function agregando_productos(Request $datos){
    	
    	return redirect('/carrodecompras/'.$id);
    }
}