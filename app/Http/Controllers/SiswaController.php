<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{	
    public function all(){
    	$data['siswa'] = \App\Siswa::all();

    	return view('siswa.all')->with($data);
    }

    public function add(){
        $data['kelas'] = \App\Kelas::all();
        $data['sekolah'] = \App\Sekolah::all();

    	return view('siswa.add')->with($data);
    }

    public function save(Request $r){
        $siswa = new \App\Siswa;

        $siswa->nama_siswa = $r->input('nama');
        $siswa->kelas_id = $r->input('kelas_id');
        $siswa->sekolah_id = $r->input('sekolah_id');
        $siswa->jenis_kelamin = $r->input('jenis_kelamin');
        $siswa->alamat = $r->input('alamat');
        $siswa->save();

        return redirect()->route('semua_siswa');
    }

    public function edit($id){
    	$data['siswa'] = \App\Siswa::find($id);
        $data['kelas'] = \App\Kelas::all();
        $data['sekolah'] = \App\Sekolah::all();

    	return view('siswa.edit')->with($data);
    }

    public function update(Request $r){
    	$siswa = \App\Siswa::find($r->input('id'));

    	$siswa->nama_siswa = $r->input('nama');
    	$siswa->kelas_id = $r->input('kelas_id');
    	$siswa->sekolah_id = $r->input('sekolah_id');
    	$siswa->jenis_kelamin = $r->input('jenis_kelamin');
    	$siswa->alamat = $r->input('alamat');
        $siswa->save();

        return redirect()->route('semua_siswa');
    }

    public function delete($id){
        \App\Siswa::find($id)->delete();

        return redirect()->route('semua_siswa');
    }
}
