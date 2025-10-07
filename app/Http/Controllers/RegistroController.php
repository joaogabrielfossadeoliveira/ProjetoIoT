<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\Registro;
use App\Models\Sensor;
use Illuminate\Http\Request;                                        

class RegistroController extends Controller
{
   
 
    public function store(RegistroRequest $request){

 $sensor = Sensor::where('codigo', '=',  $request->cod_sensor)->first();
if($sensor == null){
    return response()->json([
        'status' =>false,
        'message' => 'nao foi possivel'
    ]);
}

        $registro = Registro::create([
            'sensor_id' => $sensor->id,
            'valor' => $request->valor,
            'unidade' => $request->unidade,
            'data_hora' => now()
        ]);

       
   
        return response()->json([
            'status' => true,
            'success' => 'registro salvo com sucesso',
            'data' => $registro
        ],201);
    }
}
