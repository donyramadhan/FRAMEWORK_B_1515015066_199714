<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'Pengguna';// mendeklarasikan tabel pengguna
	
	public function dosen()// fungsi dengan nama dosen
	{
		return $this->hasOne(dosen::class);//memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan dosen dengan foreign key pengguna_id
	}
	public function mahasiswa()// fungsi dengan nama mahasiswa
	{
		return $this->hasOne(mahasiswa::class);;// memberikan nilai return dari fungsi hasOne yang merelasikan pengguna dengan mahasiswa dengan foreign ket pengguna_id
	}
	//public function Peran();{
		//return this->belongsToMany(Peran::class);}
}