<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviewer extends Model
{
    public $table = "reviewer";

    protected $fillable = ['nama', 'tanggalAwalLuang', 'tanggalAkhirLuang'];

    public function deleteWithPeneliti()
    {
        // Hapus semua peneliti yang terkait
        $this->peneliti()->delete();

        // Hapus reviewer
        return $this->delete();
    }

    public function peneliti()
    {
        return $this->hasMany(peneliti::class, 'reviewer_id');
    }
}
