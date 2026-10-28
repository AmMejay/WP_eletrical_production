<?php

namespace App\Http\Controllers;

use App\Models\Andresses;
use App\Models\Appointment;
use App\Models\ServiceOptions;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function store(Request $request, $id) {

        $request->validate([
            'appointment_at' => 'required|date',
            'description_appointment' => 'nullable|string|max:100',
        ]);

        $address = Andresses::where('user_id', $request->user()->id)->firstOrFail();

        $service_option = ServiceOptions::findOrFail($id);

        Appointment::create([
            'appointment_at' => $request->appointment_at,
            'description_appointment' => $request->description_appointment,
            'user_id' => $request->user()->id,
            'address_id' => $address->id,
            'service_option_id' => $service_option->id
        ]);

        return view('dashboard');
    }

    public function create($id) {

        $service_option = ServiceOptions::findOrFail($id);

         return view('agendamento', compact('service_option'));
    }

}
