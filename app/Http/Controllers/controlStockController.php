<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Raw;
use App\Models\Electronicos;
use App\Models\Entretenimiento;
use App\Models\Ropa;

class controlStockController extends Controller
{
    public function index(Request $request) {
        return view('controlStock');
    }
}
