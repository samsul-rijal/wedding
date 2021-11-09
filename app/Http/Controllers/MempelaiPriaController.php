<?php

namespace App\Http\Controllers;

use App\Models\MempelaiPria;
use Illuminate\Http\Request;

class MempelaiPriaController extends Controller
{
    public function index()
    {
        $mempelai_pria = MempelaiPria::all();
        return view('admin.mempelai_pria.index', compact('mempelai_pria'));
    }

    public function create()
    {
        return view('admin.mempelai_pria.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_lengkap' => 'required|min:3',
            'nama_panggilan' => 'required|min:3',
            'putra' => 'required',
            'nama_bapak' => 'required|min:3',
            'nama_ibu' => 'required|min:3',
            'gambar' => 'required',
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        // $mempelai_pria = MempelaiPria::create($request->all());
        $mempelai_pria = MempelaiPria::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nama_panggilan' => $request->nama_panggilan,
            'putra' => $request->putra,
            'nama_bapak' => $request->nama_bapak,
            'nama_ibu' => $request->nama_ibu,
            'gambar' => 'uploads/mempelai_pria/'.$new_gambar
        ]);

        $gambar->move('uploads/mempelai_pria', $new_gambar);

        return redirect()->back()->with('success','Data berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $mempelai_pria = MempelaiPria::findorfail($id);
        return view('admin.mempelai_pria.edit', compact('mempelai_pria'));
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'nama_lengkap' => 'required|min:3',
        //     'nama_panggilan' => 'required|min:3',
        //     'nama_bapak' => 'required|min:3',
        //     'nama_ibu' => 'required|min:3',
        // ]);

        // $mempelai_pria_data = [
        //     'nama_lengkap' => $request->nama_lengkap,
        //     'nama_panggilan' => $request->nama_panggilan,
        //     'nama_bapak' => $request->nama_bapak,
        //     'nama_ibu' => $request->nama_ibu,
        // ];

        // MempelaiPria::whereId($id)->update($mempelai_pria_data);

        // return redirect()->route('mempelai-pria.index')->with('success','Data berhasil diupdate');
    
        $this->validate($request, [
            'nama_lengkap' => 'required|min:3',
            'nama_panggilan' => 'required|min:3',
            'putra' => 'required',
            'nama_bapak' => 'required|min:3',
            'nama_ibu' => 'required|min:3',
            // 'gambar' => 'max:5120', //5MB 
        ]);

        // $mempelai_pria = MempelaiPria::findorfail($id);

        if($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('uploads/mempelai_pria', $new_gambar);

            $mempelai_pria_data = [
                'nama_lengkap' => $request->nama_lengkap,
                'nama_panggilan' => $request->nama_panggilan,
                'putra' => $request->putra,
                'nama_bapak' => $request->nama_bapak,
                'nama_ibu' => $request->nama_ibu,
                'gambar' => 'uploads/mempelai_pria/'.$new_gambar
            ];
        } else {
            $mempelai_pria_data = [
                'nama_lengkap' => $request->nama_lengkap,
                'nama_panggilan' => $request->nama_panggilan,
                'putra' => $request->putra,
                'nama_bapak' => $request->nama_bapak,
                'nama_ibu' => $request->nama_ibu,
            ]; 
        }

        MempelaiPria::whereId($id)->update($mempelai_pria_data);

        return redirect()->route('mempelai-pria.index')->with('success','Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $mempelai_pria = MempelaiPria::findorfail($id);
        $mempelai_pria->delete();

        return redirect()->back()->with('success','Data berhasil dihapus');
    }
}
