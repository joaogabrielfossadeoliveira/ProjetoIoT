<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\Registro;
use App\Models\Sensor;
use Illuminate\Http\Request;                                        

class RegistroController extends Controller
{
    //informar o código do sensor na request
    //pesquisar o sensor por código (utilizar first ao invés de get)
    //pegar o sensor->id e informar no create
    //pegar data e hora do sistema
    //na request enviar codigo do sensor, valor, unidade'

    public function store(RegistroRequest $request){

 $sensor = Sensor::where('codigo', '='. $request->codigo)->first();
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
            'data_hora' => date('Y/m/d H:i:s')
        ]);

        return $registro;
    }
}
