<?php

namespace App\Livewire;

use App\Models\Sensor;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;

class SensorList extends Component
{


     use WithPagination;
    
    protected $paginationTheme = 'bootstrap';

    public $search = '';
    public $perPage = 10;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];
    
    

    public function render()
    {
        $sensores = Sensor::where('codigo', 'like', "{$this->search}%")
            ->orWhere('status', 'like', "{$this->search}%")
            ->paginate($this->perPage);


        return view('livewire.sensor-list', compact('sensores'));    
    }
    public function delete($id){
        Sensor::findOrFail($id)->delete();
        session()->flash('message', 'Sensor deletado com sucesso');
    }
      public function toggleStatus($id){

        $sensor = Sensor::findOrFail($id);
        $sensor->status = !$sensor->status;
        $sensor->save();
    }
}
