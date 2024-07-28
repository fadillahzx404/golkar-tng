<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rekapitulasi;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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
