<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\UangSaku;
use Illuminate\Http\Request;

class UangSakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bendahara.uangsaku.index', [
            'title'         => 'Data Uang Saku',
            'active'        => 'data-uang-saku',
            'uangsakus'     => UangSaku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $santri = Santri::all();
        return view('bendahara.uangsaku.create', [
            'title'     => 'Tambah Data Uang Saku',
            'active'    => 'tambah-uang-saku',
            'santris'   => $santri,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'santri_nis'        => 'required|exists:santris,nis|unique:uang_sakus,santri_nis',
            'saldo'             => 'required|numeric|min:0',
        ]);

        try {
            UangSaku::create($validateData);
            return redirect('/bendahara/uang-saku')->with('success', 'Data saldo uang saku berhasil ditambahkan');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Gagal menyimpan data: ' . $exception->getMessage())->withInput();
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(UangSaku $uangSaku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UangSaku $uangSaku)
    {
        return view('bendahara.uangsaku.edit', [
            'title'         => "Edit Data Uang Saku",
            'uangsaku'     => $uangSaku,
            'santris'       => Santri::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UangSaku $uangSaku)
    {
        $validateData = $request->validate([
            'santri_nis'    => 'required|exists:santris,nis|unique:uang_sakus,santri_nis',
            'saldo'         => 'required|numeric|min:0',
        ]);
    
        $uangSaku->update($validateData);
    
        return redirect('/bendahara/uang-saku')->with('success', 'Data saldo uang saku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UangSaku $uangSaku)
    {
        $uangSaku->delete();
        return redirect('/bendahara/uang-saku')->with('success', 'Data saldo uang saku berhasil dihapus');
    }
}
