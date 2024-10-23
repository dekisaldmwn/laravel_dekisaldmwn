<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Rumahsakit;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pasiens'] = Pasien::latest()->paginate(5);
        return view('pasien.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['listRumahsakit'] = Rumahsakit::get();
        return view('pasien.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['listRumahsakit'] = Rumahsakit::get();
        return view('pasien.edit', $data);
        $requestData = $request->validate([
            'rumahsakit_id' => 'required',
            'nama' => 'required|min:3',
            'alamat' => 'required|min:5',
            'telepon' => 'required|min:3'
        ]);
    $pasien = new Pasien();
    $pasien->fill($requestData);
    $pasien->save();
    flash('Data berhasil disimpan')->success();
    return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        $listRumahsakit = Rumahsakit::get(['id', 'nama']);
        return view('pasien.edit', compact(['pasien', 'listRumahsakit']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'rumahsakit_id' => 'required',
            'nama' => 'required|min:3',
            'alamat' => 'required|min:5',
            'telepon' => 'required|min:3'
        ]);
    $pasien = Pasien::findOrFail($id);
    $pasien->fill($requestData);
    $pasien->save();
    flash('Data berhasil diubah')->success();
    return redirect('/pasien');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
