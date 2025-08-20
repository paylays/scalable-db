<?php

namespace App\Http\Controllers;

use App\Services\CoreService;

class KpController extends Controller {
    public function index(CoreService $core) {
        
        $mahasiswas = $core->getMahasiswas();
        
        return view('kp.index', compact('mahasiswas'));
    }
}
