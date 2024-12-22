<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Room;
use App\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ObvestiAdmina;
use App\Mail\Zahvala;

class ReservationController extends Controller
{
    public function index()
    {
        $title = "Stran z rezervacijami";
        $rooms = Room::all();
        return view('welcome', compact('title', 'rooms'));
    }
    public function store(ReservationRequest $request)
    {
        // Validacija je že obdelana preko ReservationRequest

        $data = $request->validated();
        if (!$data) {
            return response()->json(['error' => $request->messages()], 422);
        }
        $room = Room::find($data['room_id']);
        $nights = \Carbon\Carbon::parse($data['prihod'])->diffInDays(\Carbon\Carbon::parse($data['odhod']));
        $totalPrice = $nights * $room->cena;

        $reservation = Reservation::create(array_merge($data, ['skupna_cena' => $totalPrice]));

        // Pošlji email uporabniku
        $mail_to=config('app.admin_email');
        Mail::to($data['email'])->send(new Zahvala($reservation));
        Mail::to($mail_to)->send(new ObvestiAdmina($reservation));

        return response()->json(['message' => 'Vaša rezervacija je bila uspešno oddana. Skupna cena je: ' . $totalPrice . ' €.'], 201);
    }
}
