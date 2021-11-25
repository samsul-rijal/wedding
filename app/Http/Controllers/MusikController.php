<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musik;
use Illuminate\Support\Facades\Validator;

class MusikController extends Controller
{
    public function index()
    {
        $musik = Musik::all();
        return view('admin.musik.index', compact('musik'));
    }

    public function create()
    {
        return view('admin.musik.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:3',
            'audio' => 'required',
        ]);

        $audio = $request->audio;
        $new_audio = time().$audio->getClientOriginalName();

        $musik = Musik::create([
            'judul' => $request->judul,
            'audio' => 'uploads/musik/'.$new_audio
        ]);

        $audio->move('uploads/musik', $new_audio);

        return redirect()->route('musik.index')->with('success','Data berhasil disimpan');
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
