<?php

namespace App\Http\Controllers;

use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $nik = Auth::user()->nik;
        $userRekap = Rekapitulasi::where('user', $nik)->get();
        $adminRekap = Rekapitulasi::where('status', 'not yet verified')->orderBy('Id', 'ASC')->take(5)->get();


        return view('author.dashboard',  ['userRekap' => $userRekap, 'adminRekap' => $adminRekap]);
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

        return view('author.saksi.show-data-input',  ['data' => $data]);
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
