<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;

class EthicsController extends Controller
{
    public function igbo()
    {
        $archives = Archive::where('ethic_group', 'Igbo')->get();
        return view('ethics.igbo', compact('archives'));
    }

    public function hausa()
    {
        return view('ethics.hausa');
    }

    public function yoruba()
    {
        $archives = Archive::where('ethic_group', 'Yoruba')->get();
        return view('ethics.yoruba', compact('archives'));
    }

}
