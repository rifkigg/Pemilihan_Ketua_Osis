<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ketos;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        $ketua_osis = Ketos::all();
        
    }
}
