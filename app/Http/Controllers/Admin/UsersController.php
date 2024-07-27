<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function data()
    {
        return DataTables::of(User::with(['kelRelation', 'kecRelation'])->get())->toJson();
    }
    public function index()
    {

        $user = User::all();
        return view('author.admin.users.index', ['userAll' => $user]);
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
        $kecamatan = Kecamatan::all();
        $data = User::findOrFail($id);
        return view('author.admin.users.edit', ['data' => $data, 'kecamatan' => $kecamatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = User::findOrFail($id);
        $name = $item->name;
        $item->delete();
        flash("user $name Berhasil Di Hapus");
        return redirect()->route('users.index');
    }
}
