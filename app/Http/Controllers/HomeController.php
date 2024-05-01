<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\CardContact;
use App\Models\CardInformation;
use App\Models\Doa;
use App\Models\GuessBook;
use App\Models\Rsvp;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportRsvp;

class HomeController extends Controller
{
    public function index()
    {
        return view('website');
    }

    public function card(Card $card)
    {
        return view($card->type, compact('card'));
    }

    public function doa(Card $card)
    {
        $doa = Doa::where('card_id', $card->id)
            ->first();

        if (!is_null($doa)) {
            $doa->count = $doa->count + 1;
            $doa->save();
        } else {
            $doa = new Doa();
            $doa->count = 1;
            $doa->card_id = $card->id;
            $doa->save();
        }

        return json_decode($doa);
    }

    public function wish(Request $request, Card $card)
    {
        $wish = new GuessBook();
        $wish->name = $request->name;
        $wish->wish = $request->wish;
        $wish->card_id = $card->id;
        $wish->save();

        return redirect()->route('card.index', $card);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $card = new Card();
        $card->name = strtolower($request->name_1) . '-x-' . strtolower($request->name_2);
        $card->save();

        $information = new CardInformation();
        $information->father_name = $request->father_name;
        $information->mother_name = $request->mother_name;
        $information->bride = $request->bride;
        $information->bride_partner = $request->bride_partner;
        $information->started_at = $request->started_at;
        $information->ended_at = $request->ended_at;
        $information->venue = $request->venue;
        $information->venue_url = $request->venue_url;
        $information->latitude = $request->latitude;
        $information->song = $request->song;
        $information->longitude = $request->longitude;
        $information->wedding_at = Carbon::parse($request->wedding_at)->timestamp;
        $information->hijri_wedding_at = $request->hijri_wedding_at;
        $information->card_id = $card->id;
        $information->save();

        $contacts = $request->input('contact_name', []);

        foreach ($contacts as $key => $row) {
            $contact = new CardContact();
            $contact->name = $row;
            $contact->contact = $request->contact_contact[$key];
            $contact->card_id = $card->id;
            $contact->save();
        }

        return redirect()->route('card.index', $card->name);
    }

    public function rsvpStore(Card $card, Request $request)
    {
        $names = $request->name;
        $email = $request->email;
        $contact = $request->contact;
        $parent_id = null;

        foreach ($names as $key => $name) {
            if (is_null($parent_id)) {
                $rsvp = new Rsvp();
                $rsvp->parent_id = null;
                $rsvp->name = $name;
                $rsvp->email = $email;
                $rsvp->contact = $contact;
                $rsvp->card_id = $card->id;
                $rsvp->save();
                $parent_id = $rsvp->id;
            } else {
                if ($name == '') {
                    $name = $names[0];
                }
                $rsvp = new Rsvp();
                $rsvp->parent_id = $parent_id;
                $rsvp->name = $name;
                $rsvp->email = $email;
                $rsvp->contact = $contact;
                $rsvp->card_id = $card->id;
                $rsvp->save();
            }
        }

        return redirect()->route('card.index', $card->name);
    }

    public function rsvpExport(Card $card)
    {
        $rsvps = Rsvp::with('family')
            ->where('card_id', $card->id)
            ->whereNull('parent_id')
            ->get();
        $array = [];

        foreach ($rsvps as $key => $rsvp) {
            $array[] = [
                'number' => $key + 1,
                'name' => $rsvp->name,
                'email' => $rsvp->email,
                'contact' => $rsvp->contact,
            ];

            foreach ($rsvp->family as $family) {
                $array[] = [
                    'number' => $key + 1,
                    'name' => $family->name,
                    'email' => $family->email,
                    'contact' => $family->contact,
                ];
            }
        }


        return Excel::download(new ExportRsvp($array), 'rsvp.xlsx');
    }
}
