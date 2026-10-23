<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceOptions;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug) {

    $services = Service::where('slug', $slug)->firstOrFail();

    $services_options = ServiceOptions::where('service_id', $services->id)->get();

    return view('service_options', compact('services', 'services_options'));

    }
}
