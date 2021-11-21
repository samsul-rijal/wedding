<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BackgroundFoto;
use Illuminate\Support\Facades\Validator;

class BackgroundFotoController extends Controller
{
    public function index()
    {
        $background_foto = BackgroundFoto::all();
        return view('admin.background_foto.index', compact('background_foto'));
    }

    public function create()
    {
        return view('admin.background_foto.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|max_size:10240',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $background_foto = BackgroundFoto::create([
            'gambar' => 'uploads/background_foto/'.$new_gambar
        ]);

        $gambar->move('uploads/background_foto', $new_gambar);
        return redirect()->route('background-foto.index')->with('success','Data berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
