<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CoreService {
    protected $baseUrl;
    public function __construct() {
        $this->baseUrl = config('services.core.url');
    }
    public function getMahasiswas() {
        return Http::get("{$this->baseUrl}/mahasiswa")->json();
    }
}
