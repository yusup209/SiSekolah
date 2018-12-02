<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function all(){
    	$data['sekolah'] = \App\Sekolah::all();

    	return view('sekolah.all')->with($data);
    }

    public function add(){
    	return view('sekolah.add');
    }

    public function save(Request $r){
    	$sekolah = new \App\Sekolah;

        $sekolah->nama_sekolah = $r->input('nama');
        $sekolah->no_telp = $r->input('nomor');
        $sekolah->alamat = $r->input('alamat');
        $sekolah->save();

        return redirect()->route('semua_sekolah');
    }

    public function edit($id){
        $data['sekolah'] = \App\Sekolah::find($id);

        return view('sekolah.edit')->with($data);
    }

    public function update(Request $r){
        $sekolah = \App\Sekolah::find($r->id);
        $sekolah->nama_sekolah = $r->input('nama');
        $sekolah->no_telp = $r->input('nomor');
        $sekolah->alamat = $r->input('alamat');
        $sekolah->save();

        return redirect()->route('semua_sekolah');
    }

    public function delete($id){
        \App\Sekolah::find($id)->delete();

        return redirect()->route('semua_sekolah');
    }
}
