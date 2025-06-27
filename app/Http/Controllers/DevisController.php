<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    //
    public function devis()
    {
        return view('formulairedevis');
    }
}
