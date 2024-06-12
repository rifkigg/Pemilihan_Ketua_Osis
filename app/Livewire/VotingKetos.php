<?php

namespace App\Livewire;
use App\Models\Ketos;
use App\Models\User;
use Livewire\Component;

class VotingKetos extends Component
{
    public $ketua_osis;
    public $totalvote;
    public $labels;
    public $datas;
    protected $listeners = [
        'nowTotalvote' => 'checkTotalvote'
    ];
    public function mount($ketua_osis, $totalvote, $labels, $datas )
    {
        $this->ketua_osis = $ketua_osis;
        $this->labels = $labels;
        $this->datas = $datas;
        $this->totalvote = $totalvote;
    }
    public function render()
    {   
        return view('livewire.voting-ketos');
    }

    public function nowTotalvote()
    {
        // Logika untuk menghitung total vote
        $this->checkTotalvote(); // Panggil method checkTotalvote setelah event dipancarkan
    }

    public function clickVoting($id)
    {
        Ketos::find($id)->increment('vote',1);
        $users = User::find(auth()->id());
        $users->status = 'Sudah Voting';
        $users->save();

        return redirect()->route('voting')->with(['success' => 'Kamu telah voting!']);
        // $this->emit('nowTotalvote');
    }

    public function checkTotalvote()
    {
        $ketua_osis = Ketos::all();
        $this->totalvote = $ketua_osis->sum('vote');
        return true;
    }
}
