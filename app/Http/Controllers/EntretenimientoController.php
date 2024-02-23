<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Raw;
use App\Models\Entretenimiento;

class EntretenimientoController extends Controller
{
    public function index(Request $request) {
        $entretenimientos = Entretenimiento::all();
        return view('entretenimiento', compact('entretenimientos'));
    }
}
