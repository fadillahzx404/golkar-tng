<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AppController extends Controller
{

    public function districts(Request $request)
    {
        $kelurahan = DB::table('t_kelurahan')->where('kec_id', '=', $request->id)->get();
        return $kelurahan;
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,csv',
        ]);

        Excel::import(new UsersImport, request()->file('file'));

        return back()->with('success', 'Users imported successfully.');
    }
}
