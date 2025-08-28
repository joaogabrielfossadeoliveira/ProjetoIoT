<?php

namespace App\Livewire;

use App\Models\Sensor;
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
}
