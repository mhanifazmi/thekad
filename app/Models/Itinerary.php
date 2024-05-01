<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'time',
        'title',
    ];
}
