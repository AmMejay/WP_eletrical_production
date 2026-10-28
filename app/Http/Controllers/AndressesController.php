<?php

namespace App\Http\Controllers;

use App\Models\Andresses;
use App\Models\Appointment;
use App\Models\ServiceOptions;
use Illuminate\Http\Request;

class AndressesController extends Controller
{
    public function store(Request $request, $id) {
        $request->validate([
            'cep' => ['nullable', 'string', 'regex:/^[0-9]{5}-[0-9]{3}$/'],
            'street' => ['string', 'max:100', 'required'],
            'city' => ['string', 'max:100', 'required'],
            'reference' => ['string', 'nullable', 'max:100'],
            'number' => ['string', 'nullable', 'max:50'],
            'user_id' => ['integer'],
        ]);

        $service_option = ServiceOptions::findOrFail($id);

        Andresses::create([
            'cep' => $request->cep,
            'street' => $request->street,
            'city' => $request->city,
            'reference' => $request->reference,
            'number' => $request->number,
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('agendamento', compact('service_option'));
    }
}
