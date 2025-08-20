<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanKP extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_kp';

    protected $fillable = [
        'mahasiswa_id',
        'judul',
        'status',
    ];
}
