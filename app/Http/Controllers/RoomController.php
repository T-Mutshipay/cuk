<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }
    public function create()
    {
        return view('rooms.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'capacite' => 'required|integer|min:1',
            'disponibilite' => 'required|boolean',
        ]);

        Room::create($request->all());
        return redirect()->route('rooms.index')->with('success', 'Chambre ajoutée avec succès.');
    }
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }
    public function update(Request $request, Room $room)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'capacite' => 'required|integer|min:1',
            'disponibilite' => 'required|boolean',
        ]);

        $room->update($request->all());
        return redirect()->route('rooms.index')->with('success', 'Chambre mise à jour avec succès.');
    }
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Chambre supprimée avec succès.');
    }
}
