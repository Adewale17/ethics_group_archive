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
    public function igboShow($id)
    {
        $archive = Archive::findOrFail($id);
        return view('ethics.igbo-show', compact('archive'));
    }

    public function hausa()
    {
        $archives = Archive::where('ethic_group', 'Hausa')->get();
        return view('ethics.hausa', compact('archives'));
    }
    public function hausaShow($id)
    {
        $archive = Archive::findOrFail($id);
        return view('ethics.hausa-show', compact('archive'));
    }
    public function yoruba()
    {
        $archives = Archive::where('ethic_group', 'Yoruba')->get();
        return view('ethics.yoruba', compact('archives'));
    }
    public function yorubaShow($id)
    {
        $archive = Archive::findOrFail($id);
        return view('ethics.yoruba-show', compact('archive'));
    }


}
