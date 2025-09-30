<?php

namespace App\Livewire;

use App\Models\Sensor;
use Livewire\Component;

class SensorEdit extends Component
{
   public $ambiente;
    public $sensorId;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;

    protected $rules = [
        'tipo' => 'max:255',
        'descricao' => 'max:255',
    ];

    protected $messages = [
        'descricao.max' => 'Limite de caracteres ultrapassado',
        'tipo.max' => 'Limite de caracteres ultrapassado.',


    ];

    public function mount($id)
    {

        $sensor = Sensor::find($id);
        if ($sensor == null) {
            session()->flash('error', 'Ambiente não encontrado');
            return redirect()->route('ambiente.list');
        }
        $this->sensorId = $sensor->id;
        $this->ambiente = $sensor->ambiente_id;
        $this->codigo = $sensor->Codigo;
        $this->tipo = $sensor->Tipo;
        $this->descricao = $sensor->descricao;
        $this->status = $sensor->Status;
    }


    public function update()
    {


        $sensor = Sensor::find($this->sensorId);

        $sensor->update([
            $sensor->ambiente_id = $this->ambiente,
            $sensor->descricao = $this->descricao,
            $sensor->tipo = $this->tipo,
            $sensor->codigo = $this->codigo,
            $sensor->status = $this->status
        ]);


        session()->flash('message', 'Sensor atualizado com sucesso.');
        return redirect()->route('sensor.list');
    }
    public function render()
    {
        return view('livewire.sensor-edit');
    }
}
