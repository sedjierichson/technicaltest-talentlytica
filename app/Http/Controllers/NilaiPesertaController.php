<?php

namespace App\Http\Controllers;

use App\Models\NilaiPeserta;
use Illuminate\Http\Request;

class NilaiPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('nilai_peserta.index',[
            'title' => 'Nilai Peserta',
            'active' => '',
            'nilaipesertas' => NilaiPeserta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNilaiPesertaRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nilai_x' => 'required',
            'nilai_y' => 'required',
            'nilai_z' => 'required',
            'nilai_w' => 'required'
        ]);
        NilaiPeserta::create($validatedData);
        return redirect('/nilaipeserta')->with('success', 'Data peserta berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(NilaiPeserta $nilaiPeserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NilaiPeserta $nilaiPeserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        NilaiPeserta::where('id', $id)->update($request);
        return redirect('/nilaipeserta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiPeserta $nilai, $id)
    {
        if (NilaiPeserta::destroy($id)){
            return redirect('/nilaipeserta')->with('success', 'Data berhasil dihapus!');
        }
        return redirect('/nilaipeserta')->with('error', 'Coba lagi!');
    }
}
