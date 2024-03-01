<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    public $table = "form";

    protected $fillable = ['judul', 'rentangWaktu', 'status'];

    public function deleteWithRiwayat()
    {
        // Hapus semua riwayat yang terkait
        $this->riwayatHasil()->delete();

        // Hapus form
        return $this->delete();
    }

    public function riwayatHasil()
    {

        return $this->hasMany(riwayat_hasil::class, 'form_id');

    }

}
