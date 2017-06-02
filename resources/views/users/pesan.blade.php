@extends('layouts.bibis')
@section('judul','Kosan | Bibis-Room')
@section('content')




    <div class="content-area">
        <div class="container">

            <div class="row how-it-work text-center">

                <h3>Form Pemesanan {{$id->nama_kos}}</h3>
                <form class="form-horizontal">
                    <div class="form-group form-inline col-md-12">
                        <label class="control-label col-sm-3" for="destination">Nama Kos</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="destination" placeholder="Destinasi"
                                   value="{{$id->nama_kos}}" readonly>
                        </div>
                        <label class="control-label col-sm-2" for="harga">Harga (Rp)</label>
                        <div class="col-sm-1">
                            <input type="text" class="form-control" name="total" value="{{$id->harga_per_bulan}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="name">Nama Lengkap</label>
                        <div class="col-sm-6">
                            @if(Auth::guest())
                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap"
                                       required autofocus>
                            @else
                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap"
                                       value="{{Auth::user()->name}}" required>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="name">Nama Lengkap</label>
                        <div class="col-sm-6">
                            @if(Auth::guest())
                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap"
                                       required autofocus>
                            @else
                                <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap"
                                       value="{{Auth::user()->name}}" required>
                            @endif
                        </div>
                    </div>


                </form>
            </div>
        </div>
        <hr>



        <hr>



    </div>

@endsection






