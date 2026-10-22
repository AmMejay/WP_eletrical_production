<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug) {

    $services = Service::where('slug', $slug)->get();

    return view('cadastro_endereco', compact('services'));

    }
}
