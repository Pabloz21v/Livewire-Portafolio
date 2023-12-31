<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaucher extends Model
{
    use HasFactory;

    protected $fillable = ['vaucher'];


    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }
}
