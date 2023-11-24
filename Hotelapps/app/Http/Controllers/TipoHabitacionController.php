<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoHabitacionController extends Controller
{
    public function index()
    {
        $hoteles = Hotel::all();
        return view('hoteles.index', compact('hoteles'));
    }

    public function create()
    {
        return view('hoteles.create');
    }

    public function store(Request $request)
    {
        // Valida y almacena el nuevo hotel en la base de datos
    }

    public function show($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hoteles.show', compact('hotel'));
    }

    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hoteles.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        // Valida y actualiza el hotel en la base de datos
    }

    public function destroy($id)
    {
        // Elimina el hotel de la base de datos
    }
}
