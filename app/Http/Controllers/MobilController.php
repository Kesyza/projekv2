<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::all();
        return view('mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            ['nama_mobil' => 'required',
             'transmisi' => 'required',
             'status_mobil' => 'required',
             'tarif_mobil' => 'required',
             'tarif_sopir' => 'required',
            ]);

        $mobil = new Mobil;
        $mobil->nama_mobil= $request->nama_mobil;
        $mobil->transmisi = $request->transmisi;
        $mobil->status_mobil = $request->status_mobil;
        $mobil->tarif_mobil = $request->tarif_mobil;
        $mobil->tarif_sopir = $request->tarif_sopir;




        $mobil->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merek  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $sopir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            ['nama_mobil' => 'required',
             'transmisi' => 'required',
             'status_mobil' => 'required',
             'tarif_mobil' => 'required',
             'tarif_sopir' => 'required',
            ]);

        $mobil = Mobil::findOrFail($id);
        $mobil->nama_mobil= $request->nama_mobil;
        $mobil->transmisi = $request->transmisi;
        $mobil->status_mobil = $request->status_mobil;
        $mobil->tarif_mobil = $request->tarif_mobil;
        $mobil->tarif_sopir = $request->tarif_sopir;

        $mobil->save();
        return redirect()->route('mobil.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobil.index');
    }
}
