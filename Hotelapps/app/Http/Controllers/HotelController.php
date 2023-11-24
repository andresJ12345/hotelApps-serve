<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        return $hoteles = Hotel::all();
    }

    public function create()
    {
        return view('hoteles.create');
    }

    public function store(Request $request)
    {
        $input = $request->input();
        $respuesta = Hotel::create($input);
        return response()->json([
            'data' => $respuesta,
            'mensaje' => 'No se creado Exitosamente.',
        ]);
    }

    public function show($id)
    {
        $existeHotel = Hotel::find($id);
        if (isset($existeHotel)) {
            return response()->json([
                'data' => $existeHotel,
                'mensaje' => 'se encontro  exitosamente.',
            ]);
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => 'No existe el hotel.',
            ]);
        }
    }

    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hoteles.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $existeHotel = Hotel::find($id);
        if (isset($existeHotel)) {

            $existeHotel->nombre = $request->nombre;
            $existeHotel->nit = $request->nit;
            $existeHotel->ciudad = $request->ciudad;
            $existeHotel->direccion = $request->direccion;
            $existeHotel->numHabitaciones = $request->numHabitaciones;
            if ($existeHotel->save()) {
                return response()->json([
                    'data' => $existeHotel,
                    'mensaje' => 'Se actualizo  exitosamente.',
                ]);
            } else {
                return response()->json([
                    'data' => $existeHotel,
                    'mensaje' => 'No se actualizo el hotel.',
                ]);
            }
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => 'No existe el hotel.',
            ]);
        }
    }

    public function destroy($id)
    {
        $existeHotel = Hotel::find($id);
        if (isset($existeHotel)) {
            $delete=Hotel::destroy($id);
            if($delete)
            {
                return response()->json([
                    'data' => [],
                    'mensaje' => 'El hotel fue eliminado.',
                ]);
            }
            
        } else {
            return response()->json([
                'error' => true,
                'mensaje' => 'No existe el hotel.',
            ]);
        }
    }
}
