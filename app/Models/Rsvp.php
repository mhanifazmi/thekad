<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'email',
        'contact',
        'is_present',
    ];

    public function family()
    {
        return $this->hasMany(Rsvp::class, 'parent_id', 'id');
    }
}
