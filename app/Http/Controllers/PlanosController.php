<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class PlanosController extends Controller
{
    public function index()
    {
        return Plano::all();
    }
}
