<?php

namespace App\Livewire;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class AmbienteList extends Component
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
        $ambientes = Ambiente::where('nome', 'like', "{$this->search}%")
            ->orWhere('status', 'like', "{$this->search}%")
            ->paginate($this->perPage);
        return view('livewire.ambiente-list', compact('ambientes'));
    }
    public function delete($id){
        Ambiente::findOrFail($id)->delete();
        session()->flash('message', 'ambiente deletado com sucesso');
    }
}
