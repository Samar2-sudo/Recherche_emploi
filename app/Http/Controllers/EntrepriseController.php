<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('entreprise.index', compact('entreprises'));
    }
}
