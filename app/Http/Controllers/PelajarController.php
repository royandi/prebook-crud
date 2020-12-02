<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajarController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pelajar = \App\pelajar::where('nama_depan','LIKE','%' .$request->cari. '%')->get();
        }else{
            $data_pelajar = \App\pelajar::all();
        }
        return view('pelajar.index',['data_pelajar' => $data_pelajar]);
    }

    public function create(Request $request)
    {
        \App\Pelajar::create($request->all());
        return redirect('pelajar')->with('sukses','data berhasil diinput');
    }
    public function edit($id)
    {
        $pelajar = \App\pelajar::find($id);
        return view('pelajar/edit',['pelajar' => $pelajar]);
    }

    public function update(Request $request,$id)
    {
        $pelajar = \App\pelajar::find($id);
        $pelajar->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $pelajar->avatar = $request->file('avatar')->getClientOriginalName();
            $pelajar->save();
        }
        return redirect('/pelajar')->with('sukses','data berhasil diupdate');
    }

    public function delete($id)
    {
        $pelajar = \App\pelajar::find($id);
        $pelajar->delete();
        return redirect('/pelajar')->with('sukses','data berhasil dihapus');
    }

    public function profile($id)
    {
        $pelajar = \App\Pelajar::find($id);
        return view('pelajar.profile',['pelajar' => $pelajar]);
    }
}
