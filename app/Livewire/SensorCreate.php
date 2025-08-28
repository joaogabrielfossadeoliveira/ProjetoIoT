<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensorCreate extends Component
{
    public $ambiente;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

        public function store()
        {

            if($this->ambiente == null){
                session()->flash('error', 'Não foi possivel achar o id de ambiente');
            }

         Sensor::create([
            'ambiente_id' =>    $this->ambiente,
            'codigo'=>$this->codigo,
            'tipo'=>$this->tipo,
            'descricao'=>$this->descricao,
            'status'=>$this->status
         ]);

         
          session()->flash('message', 'Sensor criado com sucesso ');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor-create', compact('ambientes'));
    }

    
}
