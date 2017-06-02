<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar_kosan extends Model
{
    protected $table = 'daftar_kosan';
    public $fillable = ['nama_kos', 'foto_kos_depan', 'foto_kos_kamar', 'jenis_kos_id', 'harga_per_bulan', 'deskripsi',
        'jumlah_kamar_kos', 'jumlah_kamar_terisi', 'pemilik_kos', 'nomor_pemilik_kos','alamat', 'kota'];
}
