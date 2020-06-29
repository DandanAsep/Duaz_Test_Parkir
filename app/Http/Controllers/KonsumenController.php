<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_konsumen = \App\konsumen::all();
        return view('konsumen',['data_konsumen'=>$data_konsumen]);
    }

    public function add(Request $request)
    {
        \App\konsumen::create($request->all());
        return redirect('/konsumen')->with('sukses','Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $konsumen = \App\konsumen::find($id);
        return view('edit_konsumen',['konsumen'=>$konsumen]);
    }

    public function update(Request $request, $id)
    {
        $konsumen = \App\konsumen::find($id);
        $konsumen->update($request->all());
        return redirect('/konsumen')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $konsumen = \App\konsumen::find($id);
        $konsumen->delete($konsumen);
        return redirect('/konsumen')->with('sukses','Data berhasil dihapus!');
    }
}
