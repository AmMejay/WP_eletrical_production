<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show(Request $request) {

    $agendamentos = Appointment::where('user_id', $request->user()->id)->get();

    return view('dashboard', compact('agendamentos'));

    }
}

