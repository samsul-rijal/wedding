<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maps;
use Illuminate\Support\Facades\Validator;

class MapsController extends Controller
{
    public function index()
    {
        $maps = Maps::all();
        return view('admin.maps.index', compact('maps'));
    }

    public function create()
    {
        return view('admin.maps.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required',
            'embed' => 'required|max:1000',
        ]);

        $maps = Maps::create([
            'url' => $request->url,
            'embed' => $request->embed,
        ]);

        return redirect()->route('maps.index')->with('success','Maps berhasil disimpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $maps = Maps::findorfail($id);
        return view('admin.maps.edit', compact('maps'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'url' => 'required',
            'embed' => 'required',
        ]);

        $maps = Maps::findorfail($id);

        $maps_data = [
            'url' => $request->url,
            'embed' => $request->embed,
        ];

        Maps::whereId($id)->update($maps_data);
        return redirect()->route('maps.index')->with('success','Maps berhasil diubah');
    }

    public function destroy($id)
    {
        //
    }
}
