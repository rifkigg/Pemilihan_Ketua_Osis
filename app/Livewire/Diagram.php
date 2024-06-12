<?php

namespace App\Livewire;
use App\Models\Ketos;
use Livewire\Component;

class Diagram extends Component
{
    public $ketua_osis;
    public $totalvote;
    public $labels;
    public $datas;
    public function mount($ketua_osis, $totalvote, $labels, $datas )
    {
        $this->ketua_osis = $ketua_osis;
        $this->labels = $labels;
        $this->datas = $datas;
        $this->totalvote = $totalvote;
    }
    public function render()
    {
        return view('livewire.diagram');
    }
}
