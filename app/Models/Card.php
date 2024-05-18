<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $with = [
        'doa',
        'contacts',
        'info',
        'itineraries',
        'guest_images'
    ];

    protected $appends = [
        'customs',
        'bride_name',
        'partner_name',
        'google_calendar',
        'card_name'
    ];

    public function doa() {
        return $this->hasOne(Doa::class);
    }

    public function contacts() {
        return $this->hasMany(CardContact::class);
    }

    public function wishes() {
        return $this->hasMany(GuessBook::class);
    }

    public function card_customs() {
        return $this->hasMany(CardCustom::class);
    }

    public function guest_images() {
        return $this->hasMany(GuestImage::class);
    }

    public function info() {
        return $this->hasOne(CardInformation::class);
    }

    public function walimatul() {
        return $this->belongsTo(Walimatul::class);
    }

    public function bismillah() {
        return $this->belongsTo(Bismillah::class);
    }

    public function itineraries() {
        return $this->hasMany(Itinerary::class);
    }

    public function getCardNameAttribute(){
        if ($this->type == 'index' || $this->type == 'full') {
            $names = explode('-x-', $this->name);
            return ucfirst($names[0]) . " & " . ucfirst($names[1]);
        }
    }

    public function getCustomsAttribute(){
        if($this->card_customs){
            return $this->card_customs()->pluck('value', 'name');
        }
    }

    public function getBrideNameAttribute(){
        if($this->type == 'index' || $this->type == 'full') {
            $names = explode('-x-', $this->name);
            return $names[0];
        }
    }

    public function getPartnerNameAttribute(){
        if ($this->type == 'index' || $this->type == 'full') {
            $names = explode('-x-', $this->name);
            return $names[1];
        }
    }

    public function getGoogleCalendarAttribute(){
        if ($this->type == 'index' || $this->type == 'full') {
            $name = $this->card_name . ' wedding day!';

            $from_date= Carbon::parse($this->info->wedding_at)->format('d M Y');
            $from_time = Carbon::parse($this->info->started_at)->format('H:i:s');
            $from= Carbon::parse($from_date . ' ' .$from_time)->timestamp;

            $to_date= Carbon::parse($this->info->wedding_at)->format('d M Y');
            $to_time = Carbon::parse($this->info->ended_at)->format('H:i:s');
            $to= Carbon::parse($to_date . ' ' .$to_time)->timestamp;

            $address = $this->info->venue;
            $description = $this->card_name . ' wedding day!';
            $timezone = 'Asia/Kuala_Lumpur';

            $params = array('&dates=', '/', '&details=', '&location=', '&sf=true&output=xml', '&ctz=');
            $url = 'https://www.google.com/calendar/render?action=TEMPLATE&text=';
            $arg_list = array($name, $from, $to, $description, $address, $timezone);
            for ($i = 0; $i < count($arg_list); $i++) {
                $current = $arg_list[$i];
                if(is_int($current)) {
                    $t = Carbon::createFromTimestamp($current)->toDateTimeString();
                    $current = Carbon::parse($t)->format('Ymd\THis');
                    unset($t);
                }
                else {
                    $current = urlencode($current);
                }
                $url .= (string) $current . $params[$i];
            }
            return $url;
        }
    }
}
