<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peneliti extends Model
{
    public $table = "peneliti";

    protected $fillable = ['nama', 'reviewer_id'];

    public function punya_reviewer()
    {
        return $this->belongsTo(reviewer::class, 'reviewer_id');
    }
}
