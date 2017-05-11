<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bibis-Room | Home</title>

    <!-- Fonts -->

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/iconFD.png') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: white;
            color: white;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            background-image: url("{{ asset('img/') }}");
            background-size: cover;;
        }

        #fluidblue {
            background-color: #3498DB;
            color: white;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            background-image: url("{{ asset('img/') }}");
            background-size: cover;;

        }

        #fluid {
            background-color: white;
            color: Black;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height:;
            margin: 0;
            background-image: url("{{ asset('img/') }}");
            background-size: cover;;

        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #000000;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 8px 20px;
            border: 2px solid #ddd;
            color: #ddd;
            text-decoration: none;
            margin: 0px 10px 10px 0;
            transition: all .6s;
            min-width: 100px;
            text-align: center;
            border-radius: 30px;
        }

        .btn:hover {
            background: #ddd;
            color: #fff;
        }

        .btn.md {
            padding: 20px 40px
        }

        .btn.color-2 {
            background: #3498DB;
            color: white;
            border-color: white
        }

        .btn.color-2:hover {
            background: white;
            color: #3498DB;
            border-color: #3498DB
        }

        .a:hover {
            background: #27AE60;
            color: #fff;
        }

        .bigcity-box {
            border: 1px solid #c1c1c1;
            padding: 0px;
            cursor: pointer;
            height: 200px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        }

        .bigcity-box:hover {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height " id="fluidblue">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}" class="" style="font-family: 'Century Gothic';color: white;">Home</a>
            @else
                <a href="{{ url('auth/login') }}" style="font-family: 'Century Gothic';color: white;">Login</a>
                <a href="{{ url('/register') }}" style="font-family: 'Century Gothic';color: white;">Register</a>
            @endif
        </div>
    @endif

    <div class="">
        <div class="title m-b-md " style="font-family: 'Lobster 1.4'">
            <b>Bibis-Room</b>
        </div>

        <center>
            <div class="link">
                <a href="" class="btn color-2 " style="font-size: 14pt"><b> Cari Basecamp mu Disini !!</b></a>
            </div>
        </center>
    </div>
</div>

<div class="" id="fluid">
    <div class="container">
        <div class="row">
            <center>
                <h2 style="font-family: 'Century Gothic';color: #3498DB;;"><b>Rekomendasi Penginapan</b></h2>
            </center>
        </div>
    </div>
</div>


<div class="" id="fluid">
    <div class="container">
        <div class="row">
            <center>
                <p>
                <h2 style="font-family: 'Century Gothic';color: #3498DB;;"><b>Kota Besar</b></h2></p>
                <h4 style="font-family: 'Century Gothic'">Temukan Penginapan Di Kota Favorit mu</h4>
            </center>
            <div class="col-xs-12" style="text-align: center;background: #ffffff;padding:0px;">
                <div class="col-sm-10 col-sm-offset-1 col-xs-12" style="padding:0px;">
                    <a href="/kost/kost-jogja-murah" target="_self">
                        <div class="col-lg-4 col-xs-6 col-md-4 bigcity">
                            <div class="col-xs-12 bigcity-box">
                                <img src="{{ asset('img/jakartabiru.png') }}" alt="Cari Kost Jogja Mamikos.com"
                                     class="img-bigcity" style="width: 80px; height: 170px;padding-top: 20px"><br>
                                <span class="text-bigcity">JAKARTA</span>
                            </div>
                        </div>
                    </a>
                    <a href="/kost/kost-jakarta-murah" target="_self">
                        <div class="col-lg-4 col-xs-6 col-md-4 bigcity">
                            <div class="col-xs-12 bigcity-box">
                                <img src="{{ asset('img/jogjabiru.png') }}" alt="Cari Kost Jabodetabek Mamikos.com"
                                     class="img-bigcity" style="width: 80px; height: 170px;padding-top: 20px"><br>
                                <span class="text-bigcity">YOGYAKARTA</span>
                            </div>
                        </div>
                    </a>
                    <a href="/kost/kost-surabaya-murah" target="_self">
                        <div class="col-lg-4 col-xs-6 col-md-4 bigcity">
                            <div class="col-xs-12 bigcity-box">
                                <img src="{{ asset('img/Surabayabiru.png') }}" alt="Cari Kost Surabaya Mamikos.com"
                                     class="img-bigcity" style="width: 80px; height: 170px;padding-top: 20px"><br>
                                <span class="text-bigcity">SURABAYA</span>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
  </div>

<div class="" id="fluid">
    <div class="container">
        <div class="row">
            <center>
                <h2 style="font-family: 'Century Gothic';color: #3498DB;;"><b>Rekomendasi Penginapan</b></h2>
            </center>
        </div>
    </div>
</div>

</body>
</html>
