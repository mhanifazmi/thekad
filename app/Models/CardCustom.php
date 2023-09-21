<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardCustom extends BaseModel
{
    use HasFactory;

    protected $dates = [
        'wedding_at'
    ];
}