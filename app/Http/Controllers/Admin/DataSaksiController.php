<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class DataSaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Rekapitulasi::where('status', 'not yet verified')->with('kelRelation')->with('kecRelation')->get();
        return view('author.admin.data-saksi.index', ['datas' => $datas]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datas = Rekapitulasi::with(['kelRelation', 'kecRelation', 'userRelation'])->findOrFail($id);
        return view('author.admin.data-saksi.edit', ['datas' => $datas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        Rekapitulasi::where('Id', $id)
            ->update([
                'status' =>  $request->status,
                'user_verif' =>  $request->user_verif,
            ]);


        flash('Data Saksi Telah Ubah Verifikasinya !!');
        return redirect()
            ->route('data-saksi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
