<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function all(){
    	$data['kelas'] = \App\Kelas::all();

    	return view('kelas.all')->with($data);
    }

    public function add(){
    	return view('kelas.add');
    }

    public function save(Request $r){
    	$kelas = new \App\Kelas;

    	$kelas->nama_kelas = $r->nama;
    	$kelas->save();

    	return redirect()->route('semua_kelas');
    }

    public function edit($id){
    	$data['kelas'] = \App\Kelas::find($id);

    	return view('kelas.edit')->with($data);
    }

    public function update(Request $r){
    	$kelas = \App\Kelas::find($r->id);

    	$kelas->nama_kelas = $r->nama;
    	$kelas->save();

    	return redirect()->route('semua_kelas');
    }

    public function delete($id){
    	\App\Kelas::find($id)->delete();

    	return redirect()->route('semua_kelas');
    }
}
