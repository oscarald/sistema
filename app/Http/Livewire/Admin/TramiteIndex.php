<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Tramite;
use App\Models\Consultor;
use Livewire\WithPagination;


class TramiteIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $consultor = Consultor::where('user_id', auth()->user()->id)->first();
        $tramites = Tramite::where('consultor_id' , $consultor->id)
                            ->where('nombre', 'LIKE', '%' . $this->search . '%')
                            ->latest('id')
                            ->paginate();

        return view('livewire.admin.tramite-index', compact('tramites'));
    }
}
