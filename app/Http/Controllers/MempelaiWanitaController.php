<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MempelaiWanita;

class MempelaiWanitaController extends Controller
{
    public function index()
    {
        $mempelai_wanita = MempelaiWanita::all();
        return view('admin.mempelai_wanita.index', compact('mempelai_wanita'));
    }

    public function create()
    {
        return view('admin.mempelai_wanita.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required|min:3',
            'nama_panggilan' => 'required|min:3',
            'putri' => 'required',
            'nama_bapak' => 'required|min:3',
            'nama_ibu' => 'required|min:3',
            'gambar' => 'required',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $mempelai_wanita = MempelaiWanita::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'putri' => $request->putri,
            'nama_bapak' => $request->nama_bapak,
            'nama_ibu' => $request->nama_ibu,
            'gambar' => 'uploads/mempelai_wanita/'.$new_gambar
        ]);

        $gambar->move('uploads/mempelai_wanita', $new_gambar);

        return redirect()->back()->with('success','Data berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $mempelai_wanita = MempelaiWanita::findorfail($id);
        return view('admin.mempelai_wanita.edit', compact('mempelai_wanita'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required|min:3',
            'nama_panggilan' => 'required|min:3',
            'putri' => 'required',
            'nama_bapak' => 'required|min:3',
            'nama_ibu' => 'required|min:3',
            // 'gambar' => 'max:5120', //5MB 
        ]);

        if($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/mempelai_wanita', $new_gambar);

            $mempelai_wanita_data = [
                'nama_lengkap' => $request->nama_lengkap,
                'nama_panggilan' => $request->nama_panggilan,
                'putri' => $request->putri,
                'nama_bapak' => $request->nama_bapak,
                'nama_ibu' => $request->nama_ibu,
                'gambar' => 'uploads/mempelai_wanita/'.$new_gambar
            ];
        } else {
            $mempelai_wanita_data = [
                'nama_lengkap' => $request->nama_lengkap,
                'nama_panggilan' => $request->nama_panggilan,
                'putri' => $request->putri,
                'nama_bapak' => $request->nama_bapak,
                'nama_ibu' => $request->nama_ibu,
            ]; 
        }

        MempelaiWanita::whereId($id)->update($mempelai_wanita_data);

        return redirect()->route('mempelai-wanita.index')->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $mempelai_wanita = MempelaiWanita::findorfail($id);
        $mempelai_wanita->delete();

        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
