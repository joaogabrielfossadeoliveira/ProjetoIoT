<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
    public $ambiente_id;
    public $Codigo;
    public $Tipo;
    public $descricao;
    public $status;

    public function mount($id)
    {

        $sensores = Sensor::find($id);
        if ($sensores == null) {
            session()->flash('error', 'Ambiente não encontrado');
            return redirect()->route('ambiente.list');
        }
        $this->ambiente_id = $sensores->id;
        $this->Codigo = $sensores->Codigo;
        $this->Tipo = $sensores->Tipo;
        $this->descricao = $sensores->descricao;
        $this->status = $sensores->Status;
    }


    public function update()
    {


        $sensores = Sensor::find($this->ambiente_id);

        $sensores->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);


        session()->flash('message', 'sensor atualizado com sucesso.');
        return redirect()->route('sensor.list');
    }
    public function render()
    {
        return view('livewire.sensor-edit');
    }
}
