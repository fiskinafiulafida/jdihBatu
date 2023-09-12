<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BantuanHukum extends Model
{
    use HasFactory;
    protected $table = 'bantuanhukum';

    protected $fillable = [
        'skp',
        'langkahlangkah',
        'uraian',
        'harapan',
        'tanggapan',
        'ktp',
        'permohonan',
        'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
