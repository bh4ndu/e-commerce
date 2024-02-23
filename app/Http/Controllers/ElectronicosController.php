<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Raw;
use App\Models\Electronicos;

class ElectronicosController extends Controller
{
    public function index(Request $request) {

        $electronicos = Electronicos::all();
        return view('electronicos', compact('electronicos'));
    }

    
}
