<?php

namespace App\Http\Controllers;

use App\Models\NilaiPeserta;
use App\Http\Requests\StoreNilaiPesertaRequest;
use App\Http\Requests\UpdateNilaiPesertaRequest;
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
            'nilaipesertas' => NilaiPeserta::latest()->paginate(10)
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
    public function edit($id)
    {
        $data = NilaiPeserta::where('id', $id)->first();
        return \response()->json(['result'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        // return $id;
        $data = [
            'nama'=> $request->nama,
            'email'=> $request->email,
            'nilai_x'=> $request->nilai_x,
            'nilai_y'=> $request->nilai_y,
            'nilai_z'=> $request->nilai_z,
            'nilai_w'=> $request->nilai_w,
        ];
        NilaiPeserta::where('id', $id)->update($data);
        return response()->json(['success'=>'Berhasil update data']);
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
