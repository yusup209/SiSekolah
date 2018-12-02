<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function kelas(){
    	return $this->belongsTo('App\Kelas', 'kelas_id');
    }

    public function sekolah(){
    	return $this->belongsTo('App\Sekolah', 'sekolah_id');
    }
}
