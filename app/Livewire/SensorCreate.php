<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    public function render()
    {
        return view('livewire.sensor-create');
    }

    public function store(){
         Sensor::create([
            'ambiente_id' =>$this->ambiente->id,
            'codigo'=>$this->codigo,
            'tipo'=>$this->tipo,
            'descricao'=>$this->descricao,
            'status'=>$this->status
         ]);
          session()->flash('message', 'Sensor criado com sucesso ');
        return redirect()->route('sensor.create');
    }
}
