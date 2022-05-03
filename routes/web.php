<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta de paises 
Route::get('paises', function(){
    $paises=[
        "Colombia" => [
            "capital"=>" Bogota",
            "moneda"=>"peso",
            "poblacion"=> 51.6,
            "ciudades"=>[
                "Medellin",
                "Cali",
                "Barranquilla",
                "Tolima"
            ]
        ],
        

        "Peru" => [
            "capital"=> "Lima",
            "moneda"=> "sol",
            "poblacion"=> 32.97,
            "ciudades"=>[
                "Cusco",
                "Arequipa",
                "Huancayo",
                "Cuasco"

            ]
        ],
        "Paraguay" =>[
            "capital"=> "Asuncion",
            "moneda"=> "guarani",
            "poblacion"=> 7.133,
            "ciudades"=>[
                "Ciudad del este",
                "Encarnacion",
                "Fuerte olimpo"
            ]
        ]
        
    ];
    //mostrar la vista de paises 
    return view('paises')
           ->with("paises" , $paises);

} );