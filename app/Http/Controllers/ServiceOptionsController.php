<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceOptions;
use Illuminate\Http\Request;

class ServiceOptionsController extends Controller
{
    public function redirect($id) {

        $services = Service::findOrFail($id);

        // $services_options = ServiceOptions::where('slug', $slug)->firstOrFail();

        // $services = Service::where('id', $services_options->id)->get();

        return view('cadastro_endereco', compact('services'));
    }
}
