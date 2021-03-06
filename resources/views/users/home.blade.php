@extends('layouts.bibis')
@section('judul','Home | Bibis-Room')
@section('content')



<div class="slider-area">
    <div class="slider">
        <div id="bg-slider" class="owl-carousel owl-theme">

            <div class="item"><img src="/users/img/BG.jpg" alt="Mirror Edge"></div>
            <div class="item"><img src="/users/img/gray.jpg" alt="The Last of us"></div>
        </div>
    </div>
    <div class="container slider-content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                <h2>Mencari Penginapan Sekarang Lebih Mudah</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p>

            </div>
        </div>
    </div>
</div>

<div class="content-area">
    <div class="container">
        <div class="row page-title text-center wow zoomInDown" data-wow-delay="1s">
            <h5>Our Process</h5>
            <h2>How we work for you?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae illum dolorem, rem officia, id explicabo sapiente</p>
        </div>
        <div class="row how-it-work text-center">
            <a href="{{route('Jakarta')}}">
            <div class="col-md-4">
                <div class="single-work wow fadeInUp" data-wow-delay="0.8s">
                    <img src="{{ asset('img/jakartabiru.png') }}"  alt="">
                    <h3>Penginapan Sekitar Jakarta</h3>
                    <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                </div>
            </div>
            </a>
            <a href="{{route('Jogja')}}">
            <div class="col-md-4">
                <div class="single-work  wow fadeInUp"  data-wow-delay="0.9s">
                    <img src="{{ asset('img/jogjabiru.png') }}" alt="">
                    <h3>Penginapan Sekitar Yogyakarta</h3>
                    <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                </div>
            </div>
            </a>
            <a href="{{route('Surabaya')}}">
            <div class="col-md-4">
                <div class="single-work wow fadeInUp"  data-wow-delay="1s">
                    <img src="{{ asset('img/Surabayabiru.png') }}" alt="">
                    <h3>Penginapan Sekitar Surabaya</h3>
                    <p>Using the outcomes from the job, we will put together a plan for the most effective marketing strategy to get the best results.</p>
                </div>
            </div>
            </a>
        </div>
    </div>
    <hr>




    <div class="container">
        <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
            <h5>Recent Jobs</h5>
            <h2><span>54716</span> Available Flat for you</h2>
        </div>
        <div class="row jobs">
            <div class="col-md-12">
                <div class="job-posts table-responsive">
                    <table class="table">
                        <tr class="odd wow fadeInUp" data-wow-delay="1s">
                            <td class="tbl-logo"><img src="/users/img/job-logo1.png" alt=""></td>
                            <td class="tbl-title"><h4>Web Designer <br><span class="job-type">full time</span></h4></td>
                            <td><p>dribbble community</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                        <tr class="even wow fadeInUp" data-wow-delay="1.1s">
                            <td class="tbl-logo"><img src="/users/img/job-logo2.png" alt=""></td>
                            <td class="tbl-title"><h4>Front End Developer <br><span class="job-type">full time</span></h4></td>
                            <td><p>Jolil corporation</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                        <tr class="odd wow fadeInUp" data-wow-delay="1.2s">
                            <td class="tbl-logo"><img src="/users/img/job-logo3.png" alt=""></td>
                            <td class="tbl-title"><h4>HR Manager <br><span class="job-type">full time</span></h4></td>
                            <td><p>Fanta bevarage</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                        <tr class="even wow fadeInUp" data-wow-delay="1.3s">
                            <td class="tbl-logo"><img src="/users/img/job-logo4.png" alt=""></td>
                            <td class="tbl-title"><h4>Internship Designer <br><span class="job-type">full time</span></h4></td>
                            <td><p>Google</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                        <tr class="odd wow fadeInUp" data-wow-delay="1.4s">
                            <td class="tbl-logo"><img src="/users/img/job-logo5.png" alt=""></td>
                            <td class="tbl-title"><h4>Software Designer <br><span class="job-type">full time</span></h4></td>
                            <td><p>Microsoft</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                        <tr class="even hide-jobs">
                            <td class="tbl-logo"><img src="/users/img/job-logo4.png" alt=""></td>
                            <td class="tbl-title"><h4>Internship Designer <br><span class="job-type">full time</span></h4></td>
                            <td><p>Google</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                        <tr class="odd hide-jobs">
                            <td class="tbl-logo"><img src="/users/img/job-logo5.png" alt=""></td>
                            <td class="tbl-title"><h4>Software Designer <br><span class="job-type">full time</span></h4></td>
                            <td><p>Microsoft</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                        <tr class="even hide-jobs">
                            <td class="tbl-logo"><img src="/users/img/job-logo4.png" alt=""></td>
                            <td class="tbl-title"><h4>Internship Designer <br><span class="job-type">full time</span></h4></td>
                            <td><p>Google</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                        <tr class="odd hide-jobs">
                            <td class="tbl-logo"><img src="/users/img/job-logo5.png" alt=""></td>
                            <td class="tbl-title"><h4>Software Designer <br><span class="job-type">full time</span></h4></td>
                            <td><p>Microsoft</p></td>
                            <td><p><i class="icon-location"></i>San Franciso, USA</p></td>
                            <td><p>&dollar; 14000</p></td>
                            <td class="tbl-apply"><a href="#">Apply now</a></td>
                        </tr>
                    </table>
                </div>
                <div class="more-jobs">
                    <a href=""> <i class="fa fa-refresh"></i>View more jobs</a>
                </div>
            </div>

        </div>
    </div>
    <hr>

    <div class="container">
        <div class="row page-title text-center  wow bounce"  data-wow-delay=".7s">
            <h5>TESTIMONIALS</h5>
            <h2>WHAT PEOPLES ARE SAYING</h2>
        </div>
        <div class="row testimonial">
            <div class="col-md-12">
                <div id="testimonial-slider">
                    <div class="item">
                        <div class="client-text">
                            <p>Jobify offer an amazing service and I couldn’t be happier! They
                                are dedicated to helping recruiters find great candidates, wonderful service!</p>
                            <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                        </div>
                        <div class="client-face wow fadeInRight" data-wow-delay=".9s">
                            <img src="/users/img/client-face1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-text">
                            <p>Jobify offer an amazing service and I couldn’t be happier! They
                                are dedicated to helping recruiters find great candidates, wonderful service!</p>
                            <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                        </div>
                        <div class="client-face">
                            <img src="/users/img/client-face2.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-text">
                            <p>Jobify offer an amazing service and I couldn’t be happier! They
                                are dedicated to helping recruiters find great candidates, wonderful service!</p>
                            <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                        </div>
                        <div class="client-face">
                            <img src="/users/img/client-face1.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-text">
                            <p>Jobify offer an amazing service and I couldn’t be happier! They
                                are dedicated to helping recruiters find great candidates, wonderful service!</p>
                            <h4><strong>Ohidul Islam, </strong><i>Web Designer</i></h4>
                        </div>
                        <div class="client-face">
                            <img src="/users/img/client-face2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection






