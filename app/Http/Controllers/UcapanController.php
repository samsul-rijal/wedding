<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ucapan;

class UcapanController extends Controller
{
    public function index()
    {
        $ucapan = Ucapan::all();
        return view('undangan', compact('ucapan'));
    }

    public function create()
    {
        return view('undangan');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3',
            'alamat' => '',
            'ucapan' => 'required',
            'gambar' => '',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $ucapan = Ucapan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'ucapan' => $request->ucapan,
            'gambar' => 'uploads/ucapan/'.$new_gambar
        ]);

        $gambar->move('uploads/ucapan', $new_gambar);

        return redirect()->back()->with('success','Data berhasil disimpan');
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
