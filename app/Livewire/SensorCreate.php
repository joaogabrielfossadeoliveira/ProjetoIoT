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

    
    protected $rules = [
        'descricao' => 'required|max:255',
        'status' => 'required',
        'ambiente' => 'requireds',
        'codigo' => 'unique:sensors,codigo',
        'tipo' => 'required:sensors,tipo',
        
    ];

    protected $messages = [
        'codigo.unique' => 'O campo codigo é único.',
        'descricao.required' => 'O campo é obrigatório.',
        'descricao.max' => 'Limite de caracteres foi ultrapassado.',
        'tipo.required' => 'O campo é obrigatório.',
        'tipo.max' => 'Limite de caracteres excedido.',
        'status.required' => 'O campo é obrigatório',
        'ambiente.required' => 'O campo é obrigatório.',


    ];

    public function store()
    {

        if ($this->ambiente == null) {
            session()->flash('error', 'Não foi possivel achar o id de ambiente');
        }

        Sensor::create([
            'ambiente_id' =>    $this->ambiente,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status
        ]);


        session()->flash('message', 'Sensor criado com sucesso ');
    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensor-create', compact('ambientes'));
    }
}
