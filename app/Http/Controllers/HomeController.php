<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Ketos;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $ketua_osis = Ketos::all();
        $judul = "Voting Ketua Osis";
        $totalvote = $ketua_osis->sum('vote');
        $labels = array();
        $datas = array();
        foreach ($ketua_osis as $ketos)
        {
            $labels[] = $ketos->name;
            $datas[] = $ketos->vote;
        }
        return view("admin.dashboard", compact('users', 'ketua_osis', 'labels', 'datas', 'totalvote'));
    }

    public function test()
    {
        $users = User::all();
        return view("dashboard", compact('users'));
    }

    public function pengguna()
    {
        $users = User::all();
        return view("admin.user", compact('users'));
    }

    public function ketos()
    {
        $ketua_osis = Ketos::all();
        $users = User::all();
        return view("admin.ketos", compact('ketua_osis', 'users'));
    }
}
