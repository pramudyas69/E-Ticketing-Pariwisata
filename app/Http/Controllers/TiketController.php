<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    public function index()
    {
        $tikets = Tiket::all();
        return view('tiket.index',['tikets' => $tikets]);
    }

    public function create()
    {
        $tikets = Tiket::all()->first();
        return view('form-pendaftaran',['tikets' => $tikets]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'           => 'required',
            'nik'          => 'required',
            'no_hp' => 'required',
            'tempat_wisata'       => 'required',
            'tanggal'        => '',
            'p_dewasa'        => '',
            'p_anak'        => '',
        ]);

        $tiket = new Tiket();
        $tiket->nama = $validateData['nama'];
        $tiket->nik = $validateData['nik'];
        $tiket->no_hp = $validateData['no_hp'];
        $tiket->tempat_wisata = $validateData['tempat_wisata'];
        $tiket->tanggal = $validateData['tanggal'];
        $tiket->p_dewasa = $validateData['p_dewasa'];
        $tiket->p_anak = $validateData['p_anak'];
        $tiket->harga = 10000;
        $tiket->tot_bayar = 10000*$validateData['p_dewasa']+5000*$validateData['p_anak'];
        $tiket->save();
        return "Data berhasil diinput ke database";
    }
}
