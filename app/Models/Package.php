<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_name',
        'description',
        'destination',
        'price',
        'available_seats',
        'start_date',
        'end_date',
        'created_by',
    ];
}
