<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriFoto;
use Illuminate\Support\Facades\Validator;

class GaleriFotoController extends Controller
{
    public function index()
    {
        $galeri_foto = GaleriFoto::all();
        return view('admin.galeri_foto.index', compact('galeri_foto'));
    }

    public function create()
    {
        return view('admin.galeri_foto.create');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'keterangan' => '',
        //     'gambar' => 'required|max_size:500000',
        // ]);

        $validator = Validator::make($request->all(), [
            'keterangan' => '',
            'gambar' => 'required|max_size:10240',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $galeri_foto = GaleriFoto::create([
            'keterangan' => $request->keterangan,
            'gambar' => 'uploads/galeri_foto/'.$new_gambar
        ]);

        $gambar->move('uploads/galeri_foto', $new_gambar);
        return redirect()->route('galeri-foto.index')->with('success','Data berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $galeri_foto = GaleriFoto::findorfail($id);
        return view('admin.galeri_foto.edit', compact('galeri_foto'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'keterangan' => '',
        ]);

        if($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/galeri_foto', $new_gambar);

            $galeri_foto_data = [
                'keterangan' => $request->keterangan,
                'gambar' => 'uploads/galeri_foto/'.$new_gambar
            ];
        } else {
            $galeri_foto_data = [
                'keterangan' => $request->keterangan,
            ]; 
        }

        GaleriFoto::whereId($id)->update($galeri_foto_data);

        return redirect()->route('galeri-foto.index')->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
    {
        //
    }
}
