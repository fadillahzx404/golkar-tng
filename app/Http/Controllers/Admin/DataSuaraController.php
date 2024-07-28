<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataSuaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $data = new Rekapitulasi();
            $data = Rekapitulasi::where('status', 'Verif')->with(['kelRelation', 'kecRelation', 'userRelation'])->latest();
            return DataTables::of($data)
                ->addColumn('nama', function ($data) {
                    return $data->userRelation->name;
                })
                ->addColumn('tps', function ($data) {
                    return $data->tps;
                })
                ->addColumn('kelurahan', function ($data) {
                    return $data->kelRelation->nama;
                })
                ->addColumn('kecamatan', function ($data) {
                    return $data->kecRelation->nama;
                })
                ->addColumn('id', function ($data) {
                    return [$data->Id, asset($data->dokumen)];
                })
                ->addColumn('status', function ($data) {
                    return '<div class="badge bg-accent p-3">' . strtoupper($data->status) . '</div>';
                })
                ->addColumn('action', function ($data) {
                    return '<a href="' . route('data-suara.show', $data->Id) . '"
                                        class="bg-white hover:bg-primary shadow-lg py-2 px-4 rounded-md shadow-primary border-2 text-lg"
                                        data-tip="Edit"> Detail<span></a>';
                })->rawColumns(['status', 'action'])->make(true);
        }
        return view('author.admin.data-suara.index', compact('request'));
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
        $data = Rekapitulasi::findOrFail($id);
        return view('author.admin.data-suara.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
