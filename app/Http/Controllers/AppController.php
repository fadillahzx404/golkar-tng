<?php

namespace App\Http\Controllers;

use App\Exports\RekapExport;
use App\Imports\UsersImport;
use App\Models\Rekapitulasi;
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

    public function export(Request $request)
    {
        // $data = Rekapitulasi::where('jenis', 'pilkada')->with('kelRelation')->with('kecRelation')->get();
        // dd($data);

        $data = Rekapitulasi::with('kelRelation')->with('kecRelation')->with('userRelation');
        if ($request->kecamatan) {
            $data->where('kecamatan', '=', $request->kecamatan);
        }
        return Excel::download(new RekapExport($data->get()), 'rekap.xlsx');
        // return back()->with('success', 'Users imported successfully.');
    }
}
