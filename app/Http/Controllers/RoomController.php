<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'short_description' => 'required|string',
            'long_description' => 'nullable|string',
        ]);
        Room::create([
            'ime' => $request->input('name'),
            'cena' => $request->input('price'),
            'kratek_opis' => $request->input('short_description'),
            'dolg_opis' => $request->input('long_description'),
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'Soba uspešno dodana.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  object $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
        ]);
        $data = [];
        if ($request->input('name') !== $room->ime) {
            $data['ime'] = $request->input('name');
        }
        if ($request->input('price') !== $room->cena) {
            $data['cena'] = $request->input('price');
        }
        if ($request->input('short_description') !== $room->kratek_opis) {
            $data['kratek_opis'] = $request->input('short_description');
        }
        if ($request->input('long_description') !== $room->dolg_opis) {
            $data['dolg_opis'] = $request->input('long_description');
        }
        if (!empty($data)) {
            $room->update($data);
        }
        return redirect()->route('admin.dashboard')->with('success', 'Soba '.$room->ime.' usepešno posodobljena.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Soba izbrisana');
    }
}
