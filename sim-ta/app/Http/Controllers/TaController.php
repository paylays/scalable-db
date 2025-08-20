<?php

namespace App\Http\Controllers;

use App\Services\CoreService;

class TaController extends Controller
{
    public function index(CoreService $core) {
        
        $mahasiswas = $core->getMahasiswas();
        
        return view('ta.index', compact('mahasiswas'));
    }
}
