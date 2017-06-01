@extends('layouts.bibis')
@section('judul','About | Bibis-Room')
@section('content')





<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
            <h5>Our Team</h5>
            <h2>How we work for you?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae illum dolorem, rem officia, id explicabo sapiente</p>
        </div>
        <div class="row how-it-work text-center">
            <a href="">
            <div class="col-md-4">
                <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                    <img src="{{ asset('img/jakartabiru.png') }}"  alt="">
                    <h3>Restian Hanifia</h3>
                    <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                </div>
            </div>
            </a>
            <a href="">
            <div class="col-md-4">
                <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                    <img src="{{ asset('img/jogjabiru.png') }}" alt="">
                    <h3>Derry ajeng Saraswati</h3>
                    <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                </div>
            </div>
            </a>
            <a href="">
            <div class="col-md-4">
                <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                    <img src="{{ asset('img/Surabayabiru.png') }}" alt="">
                    <h3>Ilham Puji Saputra</h3>
                    <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                </div>
            </div>
            </a>
        </div>
    </div>
    <hr>





    <hr>


</div>

@endsection






