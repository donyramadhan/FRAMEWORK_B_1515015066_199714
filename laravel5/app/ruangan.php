<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
	public function jadwal_matakuliah(){// fungsi dengan nama jadwal_matakuliah
		return $this->hasMany(jadwal_matakuliah::class);// memberikan nilai return dari fungsi hasMany dengan merelasikan ruangan dengan banyak jadwal_matakuliah dengan foreign key ruangan_id
	}
    protected $table = 'Ruangan';// mendeklarasikan tabel ruangan
    //protected $fillable = ['title'];
}

