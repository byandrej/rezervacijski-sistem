<?php

namespace App\Http\Controllers;
use App\Room;
use App\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $reservations = Reservation::latest()->paginate(10);
        return view('admin.dashboard', compact('rooms', 'reservations'));
    }
}
