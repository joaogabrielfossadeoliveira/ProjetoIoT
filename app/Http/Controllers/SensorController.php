<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
   public function find(Request $request)
    {

           $sensor = Sensor::where('codigo', '=', $request->codigo)->first();
           if ($sensor == null) { // Verifica se um sensor foi encontrado.
            return response()->json([
                'status' => false,
                'message'=>'status não encontrado'
            ]);
        }
        return response()->json([
                'status' => true,
                'message'=>'status encontrado',
                'data'=> $sensor->status
            ]);
    }

    public function update(Request $request){
        $sensor = Sensor::where('codigo', '=',$request->codigo)->first();
        if($sensor == null){
            return response()->json([
                'status' => false,
                'message'=> 'nao foi possivel'

            ]);
        }

        $sensor->update(['status'=> $request->status]);
        return response()->json([
            'message' => 'codigo do sensor atualizado com sucesso',
            'status' => true
        ]);
    }
}
