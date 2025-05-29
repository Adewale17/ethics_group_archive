<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EthicsController extends Controller
{
    public function igbo()
    {
        return view('ethics.igbo');
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
