<?php

namespace App\Http\Controllers;

use App\daftar_kosan;
use App\jenis_kos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        return view('admin.dashboard');
    }
    public function table()
    {
        $dataList = DB::table('daftar_kosan')->select('jenis_kos.id','jenis_kos.jenis_kos','daftar_kosan.id',
            'daftar_kosan.nama_kos','daftar_kosan.foto_kos_depan','daftar_kosan.foto_kos_kamar',
            'daftar_kosan.jenis_kos_id','daftar_kosan.harga_per_bulan','daftar_kosan.deskripsi','daftar_kosan.jumlah_kamar_total'
            ,'daftar_kosan.jumlah_kamar_terisi','daftar_kosan.pemilik_kos','daftar_kosan.nomor_pemilik_kos','daftar_kosan.alamat','daftar_kosan.kota')
            ->leftjoin('jenis_kos','daftar_kosan.jenis_kos_id','=','jenis_kos.id')->get();
        return view('admin.table', compact('dataList'));
    }
    public function showCreateTable()
    {
        $sql = jenis_kos::all();
        return view('admin.input',compact('sql'));
    }
    public function storeTable(Request $request)
    {
        daftar_kosan::create($request->all());
        Session::flash('insert','Data berhasil ditambahkan!');
        return redirect('admin/table');
    }
    public function showEditTable(daftar_kosan $daftar_kosan)
    {
        $sql = jenis_kos::all();
        return view('admin.edit_bibis',compact('daftar_kosan','sql'));
    }
    public function updateTable(daftar_kosan $daftar_kosan, Request $request)
    {
        $daftar_kosan->update($request->all());
        Session::flash('update','Data berhasil diupdate!');
        return redirect('admin/table');
    }
    public function deleteTable(daftar_kosan $daftar_kosan)
    {
        $hapus = $daftar_kosan->delete();
        if($hapus){
            Session::flash('hapus','Data berhasil dihapus!');
            return back();
        }
        return back();
    }
    public function tableadmin()
    {
        $dataList = DB::table('admins') -> get();
        return view('admin.tableadmin', compact('dataList'));
    }
    public function tableuser()
    {
        $dataList = DB::table('users') -> get();
        return view('admin.tableuser', compact('dataList'));
    }
    


    
}
