<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNilaiPesertaRequest;
use App\Http\Requests\UpdateNilaiPesertaRequest;
use App\Models\NilaiPeserta;

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
        //
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
    public function update(UpdateNilaiPesertaRequest $request, NilaiPeserta $nilaiPeserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NilaiPeserta $nilaiPeserta)
    {
        //
    }
}
