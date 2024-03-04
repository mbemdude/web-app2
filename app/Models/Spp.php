<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable   = ['id','kode_tagihan', 'santri_nis', 'total_tagihan'];

    public function santri() {
        return $this->belongsTo(Santri::class, 'santri_nis', 'nis');
    }
}
