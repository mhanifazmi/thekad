<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardInformation extends BaseModel
{
    protected $table = "card_informations";
    use HasFactory;

    protected $dates = [
        'wedding_at'
    ];

    protected $appends = [
        'wedding_at_formatted',
        'hours_minutes'
    ];

    public function getWeddingAtFormattedAttribute()
    {
        $days = [
            'Ahad',
            'Isnin',
            'Selasa',
            'Rabu',
            'Khamis',
            'Jumaat',
            'Sabtu',
        ];

        $day = $this->wedding_at->dayOfWeek;


        return $days[intval($day)] . ', ' . $this->wedding_at->format('d M Y');
    }

    public function getHoursMinutesAttribute()
    {
        return [
            'hours' => Carbon::parse($this->started_at)->format('H'),
            'minutes' => Carbon::parse($this->started_at)->format('i'),
        ];
    }
}
