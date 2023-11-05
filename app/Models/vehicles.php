<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'typeId',
        'license',
        'dailyPrice',
        'status'
    ];
}
// MUHAMMAD RAIHAN FAHRIFI - 6706223009