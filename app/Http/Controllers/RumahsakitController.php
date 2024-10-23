<?php

namespace App\Http\Controllers;

use App\Models\Rumahsakit;
use Illuminate\Http\Request;

class RumahsakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['rumahsakits'] = Rumahsakit::latest()->paginate(5);
        return view('rumahsakit.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rumahsakit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nama' => 'required|min:3',
            'alamat' => 'required|min:5',
            'email' => 'required|min:3',
            'telepon' => 'required|min:3'
        ]);
    $rumahsakit = new Rumahsakit();
    $rumahsakit->fill($requestData);
    $rumahsakit->save();
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
        $data['rumahsakit'] = Rumahsakit::findOrFail($id);
        return view('rumahsakit.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([
            'nama' => 'required|min:3',
            'alamat' => 'required|min:5',
            'email' => 'required|min:3',
            'telepon' => 'required|min:3'
        ]);
    $rumahsakit = RumahSakit::findOrFail($id);
    $rumahsakit->fill($requestData);
    $rumahsakit->save();
    flash('Data berhasil diubah')->success();
    return redirect('/rumahsakit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Rumahsakit::find($id);

        if ($item) {
            $item->delete();
            return response()->json(['success' => 'Item deleted successfully!']);
        } else {
            return response()->json(['error' => 'Item not found!'], 404);
        }
    }
}
