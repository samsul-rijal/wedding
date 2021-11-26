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
        $musik = Musik::findorfail($id);
        return view('admin.musik.edit', compact('musik'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => '',
        ]);

        if($request->has('audio')) {
            $audio = $request->audio;
            $new_audio = time().$audio->getClientOriginalName();
            $audio->move('uploads/musik', $new_audio);

            $musik_data = [
                'judul' => $request->judul,
                'audio' => 'uploads/musik/'.$new_audio
            ];
        } else {
            $musik_data = [
                'judul' => $request->judul,
            ]; 
        }

        Musik::whereId($id)->update($musik_data);

        return redirect()->route('musik.index')->with('success','Musik berhasil diupdate');
    }

    public function destroy($id)
    {
        //
    }
}
