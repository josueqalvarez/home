<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/proyectos', function () {
    return view('proyectos');
})->name('proyectos');

Route::get('/sobre-mi', function () {
    return view('sobre-mi');
})->name('sobre-mi');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', function (Request $request) {
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'empresa' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'whatsapp' => 'nullable|string|max:50',
        'necesidad' => 'nullable|string|max:100',
        'mensaje' => 'required|string|max:2000',
    ]);

    // Here you can send email, store in database, or trigger a webhook.
    return redirect()->route('contacto')->with('success', '¡Gracias por contactarme! He recibido tu mensaje y te responderé a la brevedad.');
})->name('contacto.enviar');

