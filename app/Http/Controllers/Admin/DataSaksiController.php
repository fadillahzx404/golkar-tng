<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Yajra\DataTables\Facades\DataTables;

class DataSaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $datas = Rekapitulasi::with('kelRelation')->with('kecRelation')->with('userRelation');
        $datas->where('status', 'not yet verified');
        if (Auth::user()->roles == "ADMIN") {
            $datas->where('kecamatan', Auth::user()->kecamatan);
        }

        if ($request->ajax()) {
            // $data = new Rekapitulasi();
            return DataTables::of($datas->latest())
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
                    return '<div class="badge bg-orange-400 p-3">' . strtoupper($data->status) . '</div>';
                })
                ->addColumn('action', function ($data) {
                    return '<a href="' . route('data-saksi.edit', $data->Id) . '"
                                        class="bg-white hover:bg-primary shadow-lg py-2 px-4 rounded-md shadow-primary border-2 text-lg"
                                        data-tip="Edit"> Detail<span></a>';
                })->rawColumns(['status', 'action'])->make(true);
        }

        return view('author.admin.data-saksi.index', compact('request'));
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
        if (($datas->kecamatan != Auth::user()->kecamatan and Auth::user()->roles != "MASTER ADMIN") or $datas->status != 'not yet verified') {
            return redirect('author/dashboard')->with('error', 'Access Denied')->withInput();
        }
        return view('author.admin.data-saksi.edit', ['datas' => $datas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Rekapitulasi::find($id)->with('kelRelation')->with('kecRelation')->with('userRelation')->first();

        Rekapitulasi::where('Id', $id)
            ->update([
                'status' =>  $request->status,
                'user_verif' =>  $request->user_verif,
            ]);



        if ($request->status != "Verif") {
            $text = "*Admin Golkar*\n\nHallo *" . $data->userRelation->name . "* sebagai *" . $data->userRelation->roles . "*, Data anda tidak sinkron dengan foto, silakan di cek dan di update pada halaman dashboard setelah itu klik action dan update. Terima kasih.";

            $url = "https://wa.me/" . $this->gantiformat($data->userRelation->phone_number) . "?text=" . urlencode($text);

            return redirect()->to($url);
        } else {
            flash('Data Saksi Telah Ubah Verifikasinya !!');
            $url = null;
        }

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

    function gantiformat($nomorhp)
    {
        //Terlebih dahulu kita trim dl
        $nomorhp = trim($nomorhp);
        //bersihkan dari karakter yang tidak perlu
        $nomorhp = strip_tags($nomorhp);
        // Berishkan dari spasi
        $nomorhp = str_replace(" ", "", $nomorhp);
        // bersihkan dari bentuk seperti  (022) 66677788
        $nomorhp = str_replace("(", "", $nomorhp);
        // bersihkan dari format yang ada titik seperti 0811.222.333.4
        $nomorhp = str_replace(".", "", $nomorhp);

        //cek apakah mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($nomorhp))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($nomorhp), 0, 3) == '62') {
                $nomorhp = trim($nomorhp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr($nomorhp, 0, 1) == '0') {
                $nomorhp = '62' . substr($nomorhp, 1);
            }
        }
        return $nomorhp;
    }
}
