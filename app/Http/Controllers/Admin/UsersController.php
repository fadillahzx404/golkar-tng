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
        $kecamatan = Kecamatan::all();
        return view('author.admin.users.create', ['kecamatan' => $kecamatan]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        User::create($data);

        flash("Selamat Data User $request->name Ditambahkan !!");
        return redirect()
            ->route('users.index');
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
        $data = $request->all();
        $item = User::findOrFail($id);

        $item->update($data);

        flasher("User $request->name Berhasil Di Edit !!");
        return redirect()->route('users.index');
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
