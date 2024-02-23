<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Raw;
use App\Models\Ropa;

class RopaController extends Controller
{
    public function index(Request $request) {
        $ropas =Ropa::all();
        return view('Ropa', compact('ropas'));
    }
}
