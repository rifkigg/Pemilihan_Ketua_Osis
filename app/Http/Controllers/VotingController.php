<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Ketos;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VotingController extends Controller
{
    public function index()
    {
        $ketua_osis = Ketos::all();
        $users = User::all();
        $judul = "Voting Ketua Osis";
        $totalvote = $ketua_osis->sum('vote');
        $labels = array();
        $datas = array();
        foreach ($ketua_osis as $ketos)
        {
            $labels[] = $ketos->name;
            $datas[] = $ketos->vote;
        }
        return view('voting.index', compact('ketua_osis', 'judul', 'totalvote', 'labels', 'datas', 'users'));
    }

    public function show(string $id): View
    {
        //get product by ID
        $ketua_osis = Ketos::findOrFail($id);

        //render view with product
        return view('voting.show', compact('ketua_osis'));
    }

    public function vote(Request $request)
    {
        $vote = new Vote();
        $vote->ketos_id = $request->ketos_id;
        $vote->user_id = auth()->id(); // asumsikan sistem memiliki autentikasi
        $vote->save();
    
        // Tambahkan logika penambahan nilai hasil_voting
        $ketua_osis = Ketos::find($request->ketos_id);
        $ketua_osis->increment('hasil_voting');
    
        return redirect()->back()->with('success', 'Terima kasih telah memberikan suara!');
    }

    public function results()
    {
        $results = Ketos::withCount('votes')->get();
        return view('voting.results', compact('results'));
    }
}
