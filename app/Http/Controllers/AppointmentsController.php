<?php

namespace App\Http\Controllers;

use App\Models\Andresses;
use App\Models\Appointment;
use App\Models\ServiceOptions;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'appointment_at' => ['required | date | date_format: Y-m-d H:i:s'],
            'description_appointment' => ['nullable | max:100 | string'],
        ]);

        // $address = Andresses::where('user_id', $request->user()->id)->firstOrFail();


        return view('agendamento');
        // // Appointment::create([
        // //     'appointment_at' => $request->appointment_at,
        // //     'description_appointment' => $request->description_appointment,
        // //     'user_id' => $request->user()->id,
        // //     'address_id' => $address->id,

        // // ]);

    }
}
