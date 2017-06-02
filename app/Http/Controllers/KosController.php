<?php

namespace App\Http\Controllers;

use App\daftar_kosan;
use App\Kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KosController extends Controller
{
    public function kosan()
    {
        $kos = DB::table('kos') ->get();
        return view('users.kosan',compact('kos'));
    }
    public function kosandetail(daftar_kosan $id)
    {
       
        return view('users.detail',compact('id'));
    }
    public function showsurabaya()
    {
        $surabaya = DB::table('daftar_kosan')->select('jenis_kos.id','jenis_kos.jenis_kos','daftar_kosan.id',
            'daftar_kosan.nama_kos','daftar_kosan.foto_kos_depan','daftar_kosan.foto_kos_kamar',
            'daftar_kosan.jenis_kos_id','daftar_kosan.harga_per_bulan','daftar_kosan.deskripsi','daftar_kosan.jumlah_kamar_total'
            ,'daftar_kosan.jumlah_kamar_terisi','daftar_kosan.pemilik_kos','daftar_kosan.nomor_pemilik_kos','daftar_kosan.alamat','daftar_kosan.kota')
            ->where('daftar_kosan.kota','=','Surabaya')
            ->leftjoin('jenis_kos','daftar_kosan.jenis_kos_id','=','jenis_kos.id')->get();
        return view('users.surabaya',compact('surabaya'));
    }
    public function showjakarta()
    {
        $jakarta = DB::table('daftar_kosan')->select('jenis_kos.id','jenis_kos.jenis_kos','daftar_kosan.id',
            'daftar_kosan.nama_kos','daftar_kosan.foto_kos_depan','daftar_kosan.foto_kos_kamar',
            'daftar_kosan.jenis_kos_id','daftar_kosan.harga_per_bulan','daftar_kosan.deskripsi','daftar_kosan.jumlah_kamar_total'
            ,'daftar_kosan.jumlah_kamar_terisi','daftar_kosan.pemilik_kos','daftar_kosan.nomor_pemilik_kos','daftar_kosan.alamat','daftar_kosan.kota')
            ->where('daftar_kosan.kota','=','Jakarta')
            ->leftjoin('jenis_kos','daftar_kosan.jenis_kos_id','=','jenis_kos.id')->get();
        return view('users.jakarta',compact('jakarta'));
    }
    public function showyogyakarta()
    {
        $jogja = DB::table('daftar_kosan')->select('jenis_kos.id','jenis_kos.jenis_kos','daftar_kosan.id',
            'daftar_kosan.nama_kos','daftar_kosan.foto_kos_depan','daftar_kosan.foto_kos_kamar',
            'daftar_kosan.jenis_kos_id','daftar_kosan.harga_per_bulan','daftar_kosan.deskripsi','daftar_kosan.jumlah_kamar_total'
            ,'daftar_kosan.jumlah_kamar_terisi','daftar_kosan.pemilik_kos','daftar_kosan.nomor_pemilik_kos','daftar_kosan.alamat','daftar_kosan.kota')
            ->where('daftar_kosan.kota','=','Jogja')
            ->leftjoin('jenis_kos','daftar_kosan.jenis_kos_id','=','jenis_kos.id')->get();
        return view('users.jogja',compact('jogja'));
    }
    public function kosanpesan(daftar_kosan $id)
    {
        $pesan = DB::table('kos') -> where('id',$id)->get();
        return view('users.pesan',compact('id','pesan'));
    }
}
