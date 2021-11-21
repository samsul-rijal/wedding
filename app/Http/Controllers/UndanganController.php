<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MempelaiPria;
use App\Models\MempelaiWanita;
use App\Models\AkadNikah;
use App\Models\Resepsi;
use App\Models\GaleriFoto;
use App\Models\BackgroundFoto;

class UndanganController extends Controller
{
    public function index()
    {
        $mempelai_pria = MempelaiPria::find(1);
        $mempelai_wanita = MempelaiWanita::find(1);
        $akad_nikah = AkadNikah::find(1);
        $resepsi = Resepsi::find(1);
        $galeri_foto = GaleriFoto::all();
        $background_foto = BackgroundFoto::find(1);
        $background_foto2 = BackgroundFoto::find(2);
        return view('undangan', compact('mempelai_pria', 'mempelai_wanita','akad_nikah','resepsi','galeri_foto','background_foto','background_foto2'));
    }


}
