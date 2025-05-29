<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class EthicsController extends Controller
{
    public function igbo()
    {
        $archives = Archive::where('ethnic_group', 'yoruba')->get();
        return view('ethics.igbo', compact('archives'));
    }

    public function hausa()
    {
        return view('ethics.hausa');
    }

    public function yoruba()
    {
        return view('ethics.yoruba');
    }

}
