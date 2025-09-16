<?php

namespace App\Livewire\Registro;

use Livewire\Component;
use Livewire\WithPagination;

class RegistroList extends Component
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
        $registro = RegistroList::where('nome', 'like', "{$this->search}%")
            ->orWhere('status', 'like', "{$this->search}%")
            ->paginate($this->perPage);
        return view('livewire.registro.registro-list');
    }
     public function delete($id){
        RegistroList::findOrFail($id)->delete();
        session()->flash('message', 'ambiente deletado com sucesso');
    }

    
}
