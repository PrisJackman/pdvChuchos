<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use DB;
use Carbon\Carbon;
class ventasController extends Controller
{
    public function vista_registroventa(){
    	$fecha = Carbon::now();
    	echo $fecha->toDayDateTimeString(); 
    	return view('vista_regventa', compact('fecha'));
    }

}