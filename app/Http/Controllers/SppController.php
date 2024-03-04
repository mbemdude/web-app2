<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Spp;
use Illuminate\Http\Request;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bendahara.spp.index', [
            'title'     => 'Pengelolaan SPP',
            'active'    => 'data-spp',
            'spps'      => Spp::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $santris = Santri::all();
        return view('bendahara.spp.create', [
            'santris' => $santris,
            'title' => 'Tambah Data SPP',
        ]);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode_tagihan'      => 'required|unique:spps,kode_tagihan',
            'santri_nis'        => 'required|exists:santris,nis',
            'total_tagihan'     => 'required|numeric|min:0',
        ]);

        Spp::create($validateData);

        return redirect('/bendahara/spp')->with('success', 'Data tagihan SPP berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Spp $spp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spp $spp)
    {
        return view('bendahara.spp.edit', [
            'title'     => 'Edit Tagihan SPP',
            'santris'    => Santri::all(),
            'spp'       => $spp
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spp $spp)
    {
        $validateData = $request->validate([
            'kode_tagihan'  => 'required|unique:spps,kode_tagihan,'.$spp->id,
            'santri_nis'    => 'required|exists:santris,nis',
            'total_tagihan' => 'required|numeric|min:0',
        ]);
    
        $spp->update($validateData);
    
        return redirect('/bendahara/spp')->with('success', 'Data tagihan SPP berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spp $spp)
    {
        $spp->delete();
        return redirect('/bendahara/spp')->with('success', 'Data tagihan SPP berhasil dihapus');
    }
}
