<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        $data_resep= \App\kumpulanresep::all();
        return view('resep.index',['data_resep' => $data_resep]);
    }

    public function add()
    {
        return view ('resep.addresep');
    }
    public function create(Request $request)
    {
        \App\kumpulanresep::create([
        'namamakanan' => $request->namamakanan,
        'deskripsi' => $request->deskripsi,
        'bahandancara' => $request->bahandancara
        ]);
        return redirect('/resep');
    }
    public function edit($id)
    {
    $data_resep = \App\kumpulanresep::find($id);
    return view('resep.editresep',['resep'=>$data_resep]);
    }

    public function update($id, Request $request)
    {
    $data_resep = \App\kumpulanresep::find($id);
    $data_resep->namamakanan = $request->namamakanan;
    $data_resep->deskripsi = $request->deskripsi;
    $data_resep->bahandancara = $request->bahandancara;
    $data_resep->save();
    return redirect('/resep');
    }

    public function delete($id)
    {
        $data_resep = \App\kumpulanresep::find($id);
        $data_resep->delete();
        return redirect('/resep');
    }

}
