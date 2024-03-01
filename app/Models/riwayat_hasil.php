<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayat_hasil extends Model
{
    public $table = "riwayat_hasil";

    public $fillable = ['nama_reviewer', 'nama_peneliti', 'jadwalMonev'];

    public function punya_form()
    {
        return $this->belongsTo(form::class, 'form_id');
    }
}
