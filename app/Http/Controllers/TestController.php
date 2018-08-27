<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {

    	return view('welcome');

    	/*================================
		PRIMER EJEMPLO DE RUTA CONTROLADOR
    	==================================
    	$a = 5;
    	$b = 6;
    	$c = $a+$b;
    	return "la suma es $c"; //comilla simple cadena comilla doble toma en cuenta las variables
    	*/
    }
}
