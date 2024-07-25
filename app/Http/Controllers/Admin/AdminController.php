<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {


        $data = Rekapitulasi::where('nik', Auth::user()->nik);
        return view('author.dashboard',  ['data' => $data]);
    }
}
