<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FincaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function habitaciones()
    {
        return view('habitaciones');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function reservaciones()
    {
        return view('reservaciones');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function enviarReserva(Request $request)
    {
        return back()->with('success', true);
    }

    public function enviarContacto(Request $request)
    {
        return back()->with('success', true);
    }
}
