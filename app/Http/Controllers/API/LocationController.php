<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class LocationController extends Controller
{
    public function kecamatan(Request $request)
    {
        return Kecamatan::all();
    }
    public function kelurhaan(Request $request)
    {
        return Kelurahan::all();
    }
}
