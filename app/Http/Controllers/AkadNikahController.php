<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AkadNikah;

class AkadNikahController extends Controller
{
    public function index()
    {
        $akad_nikah = AkadNikah::all();
        return view('admin.akad_nikah.index', compact('akad_nikah'));
    }

    public function create()
    {
        return view('admin.akad_nikah.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'jam_mulai' => 'required|min:5',
            'jam_selesai' => 'required|min:5',
            'tempat' => 'required|min:3',
        ]);

        $akad_nikah = AkadNikah::create([
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'tempat' => $request->tempat,
        ]);

        return redirect()->route('akad-nikah.index')->with('success','Data berhasil diupdate');
        // return redirect()->back()->with('success','Data berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $akad_nikah = AkadNikah::findorfail($id);
        return view('admin.akad_nikah.edit', compact('akad_nikah'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'jam_mulai' => 'required|min:5',
            'jam_selesai' => 'required|min:5',
            'tempat' => 'required|min:3',
        ]);

        $akad_nikah = AkadNikah::findorfail($id);

        $akad_nikah_data = [
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'tempat' => $request->tempat,
        ];

        AkadNikah::whereId($id)->update($akad_nikah_data);

        return redirect()->route('akad-nikah.index')->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
    {
        //
    }
}
