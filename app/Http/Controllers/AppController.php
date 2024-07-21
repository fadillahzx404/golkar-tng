<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{

    public function districts(Request $request)
    {
        $kelurahan = DB::table('t_kelurahan')->where('kec_id', '=', $request->id)->get();
        return $kelurahan;
    }
}
