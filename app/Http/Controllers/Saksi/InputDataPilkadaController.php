<?php

namespace App\Http\Controllers\Saksi;

use App\Http\Controllers\Controller;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class InputDataPilkadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kecamatan = DB::table('t_kecamatan')->where('kode', Auth::user()->kecamatan)->get();
        $kelurahan = DB::table('t_kelurahan')->where('kode', Auth::user()->kelurahan)->get();
        return view('author.saksi.input-data-pilkada.index', ['kecamatan' => $kecamatan, 'kelurahan' => $kelurahan, 'tps' => AUTH::user()->tps]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rekap = Rekapitulasi::where('user', Auth::user()->nik)->get();
        if ($rekap) {
            return redirect('author/dashboard')->with('error', 'Access Denied')->withInput();
        }
        $validator = Validator::make($request->all(), [
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'tps' => 'required',
            'paslon1' => 'required|numeric',
            'paslon2' => 'required|numeric',
            'file' => 'required|mimes:png,jpg,jpeg',
            'dpt' => 'required|numeric',
            'sah' => 'required|numeric',
            'tidak_sah' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->with('error', 'Periksa kembali data anda!')->withInput();
            // return redirect('/author/input-data-pilkada')->with('status', 'Error');
        }

        $file = $request->file('file');

        $file_name = $file->hashName();
        $path = 'public/images/pilkada/';
        $file->move($path, $file_name);

        Rekapitulasi::create([
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'tps' => $request->tps,
            'paslon1' => $request->paslon1,
            'paslon2' => $request->paslon2,
            'dokumen' => $path . $file_name,
            'dpt' => $request->dpt,
            'sah' => $request->sah,
            'tidak_sah' => $request->tidak_sah,
            'jenis' => 'pilkada',
            'user' => Auth::user()->nik
        ]);

        flash('Input Data Pilkada Berhasil Ditambahkan !');
        return  redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Rekapitulasi::findOrFail($id);
        return view('author.saksi.input-data-pilkada.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kecamatan = DB::table('t_kecamatan')->where('kode', Auth::user()->kecamatan)->get();
        $kelurahan = DB::table('t_kelurahan')->where('kode', Auth::user()->kelurahan)->get();
        $data = Rekapitulasi::findOrFail($id);
        if ($data->user != Auth::user()->nik or $data->status == 'Verif') {
            return redirect('author/dashboard')->with('error', 'Access Denied')->withInput();
        }
        return view('author.saksi.input-data-pilkada.ubah', ['data' => $data, 'kecamatan' => $kecamatan, 'kelurahan' => $kelurahan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Rekapitulasi::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'tps' => 'required',
            'paslon1' => 'required|numeric',
            'paslon2' => 'required|numeric',
            'file' => 'mimes:png,jpg,jpeg',
            'dpt' => 'required|numeric',
            'sah' => 'required|numeric',
            'tidak_sah' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->with('error', 'Periksa kembali data anda!')->withInput();
            // return redirect('/author/input-data-pilkada')->with('status', 'Error');
        }

        if ($request->hasFile('file')) {
            // delete image
            // Storage::delete('public/' . $data->dokumen);

            if (file_exists($data->dokumen)) {
                @unlink($data->dokumen);
            }

            $file = $request->file('file');

            $file_name = $file->hashName();
            $path = 'public/images/pilkada/';
            $file->move($path, $file_name);
            Rekapitulasi::where("Id", $id)->update(['dokumen' => $path . $file_name]);
        }

        Rekapitulasi::where('Id', $id)->update([
            'paslon1' => $request->paslon1,
            'paslon2' => $request->paslon2,
            'status' => 'not yet verified',
            'dpt' => $request->dpt,
            'sah' => $request->sah,
            'tidak_sah' => $request->tidak_sah,
        ]);

        flash('Input Data Pilkada Berhasil Diubah !');
        return  redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
