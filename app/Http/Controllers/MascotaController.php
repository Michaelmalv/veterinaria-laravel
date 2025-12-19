<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::where('activo', true)->get();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotas.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nombre_mascota' => 'required|string|min:2|max:100',
                'especie' => 'required|string',
                'raza' => 'nullable|string|max:100',
                'edad' => 'required|integer|min:0',
                'nombre_dueno' => 'required|string|min:3|max:100',
                'telefono' => 'required|numeric|digits:10',
                'observaciones' => 'nullable|string'
            ],
            [
                'edad.min' => 'La edad no puede ser negativa.',
                'telefono.digits' => 'El teléfono debe tener exactamente 10 dígitos.',
                'telefono.numeric' => 'El teléfono solo debe contener números.'
            ]
        );

        Mascota::create($request->all());

        return redirect()->route('mascotas.index');
    }


    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', compact('mascota'));
    }

    public function update(Request $request, Mascota $mascota)
    {
        $request->validate(
            [
                'nombre_mascota' => 'required|regex:/^[\pL\s]+$/u',
                'especie' => 'required|string',
                'raza' => 'nullable|regex:/^[\pL\s]+$/u',
                'edad' => 'required|integer|min:0',
                'nombre_dueno' => 'required|regex:/^[\pL\s]+$/u',
                'telefono' => 'required|digits:10',
                'observaciones' => 'nullable|string'
            ],
            [
                'nombre_mascota.regex' => 'El nombre de la mascota solo debe contener letras.',
                'nombre_dueno.regex' => 'El nombre del dueño solo debe contener letras.',
                'raza.regex' => 'La raza solo debe contener letras.',
                'edad.min' => 'La edad no puede ser negativa.',
                'telefono.digits' => 'El teléfono debe tener exactamente 10 dígitos.'
            ]
        );


    }

    public function destroy(Mascota $mascota)
    {
        $mascota->activo = false;
        $mascota->save();
        return redirect()->route('mascotas.index');
    }
}

