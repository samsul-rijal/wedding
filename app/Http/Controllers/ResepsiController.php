<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resepsi;

class ResepsiController extends Controller
{
    public function index()
    {
        $resepsi = Resepsi::all();
        return view('admin.resepsi.index', compact('resepsi'));
    }

    public function create()
    {
        return view('admin.resepsi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'jam_mulai' => 'required|min:5',
            'jam_selesai' => 'min:2',
            'tempat' => 'required|min:3',
        ]);

        $resepsi = Resepsi::create([
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'tempat' => $request->tempat,
        ]);

        return redirect()->route('resepsi.index')->with('success','Resepsi berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $resepsi = Resepsi::findorfail($id);
        return view('admin.resepsi.edit', compact('resepsi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'jam_mulai' => 'required|min:5',
            'jam_selesai' => 'required|min:5',
            'tempat' => 'required|min:3',
        ]);

        $resepsi = Resepsi::findorfail($id);

        $resepsi_data = [
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'tempat' => $request->tempat,
        ];

        Resepsi::whereId($id)->update($resepsi_data);
        return redirect()->route('resepsi.index')->with('success','Resepsi berhasil diubah');
    
    }

    public function destroy($id)
    {
        //
    }
}
