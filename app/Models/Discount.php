<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = ['discount','vaucher_id'];

    
    public function vauchers()
    {
        return $this->belongsTo(Vaucher::class);
    }
}
