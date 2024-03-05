<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UangSaku extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable   = ['santri_nis', 'saldo'];

    public function santri() {
        return $this->belongsTo(Santri::class, 'santri_nis', 'nis');
    }
}
