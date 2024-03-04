<?php

namespace App\Http\Controllers;

use App\Models\UangSaku;
use Illuminate\Http\Request;

class UangSakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index.blade.php', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UangSaku $uangSaku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UangSaku $uangSaku)
    {
        //
    }
}
