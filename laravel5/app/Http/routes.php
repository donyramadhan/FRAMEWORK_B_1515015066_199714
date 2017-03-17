<?php
Route::get('pengguna','penggunaController@awal'); 
Route::get('pengguna/tambah','penggunaController@tambah');

Route::get('dosen','dosenController@awal'); 
Route::get('dosen/tambah','dosenController@tambah');

Route::get('dosenmatakuliah','dosen_matakuliahController@awal'); 
Route::get('dosenmatakuliah/tambah','dosen_matakuliahController@tambah');

Route::get('jadwalmatakuliah','jadwal_matakuliahController@awal'); 
Route::get('jadwalmatakuliah/tambah','jadwal_matakuliahController@tambah');

Route::get('mahasiswa','mahasiswaController@awal'); 
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('ruangan','ruanganController@awal'); 
Route::get('ruangan/tambah','ruanganController@tambah');

