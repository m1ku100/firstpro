@extends('layouts.bibis')
@section('judul','Home | Bibis-Room')
@section('content')




<div class="content-area">

    <div class="container">
        <div class="col-md-12">
            <div id="map" style="position: relative; overflow: hidden"></div>
            <script>
                var customIcons = {
                    /*nasi: {
                     icon: 'http://www.google.com/mapfiles/markerN.png',
                     shadow: 'http://www.google.com/mapfiles/shadow50.png'
                     },
                     steak: {
                     icon: 'http://www.google.com/mapfiles/markerS.png',
                     shadow: 'http://www.google.com/mapfiles/shadow50.png'
                     },
                     sate: {
                     icon: 'http://www.google.com/mapfiles/markerA.png',
                     shadow: 'http://www.google.com/mapfiles/shadow50.png'
                     },
                     mie: {
                     icon: 'http://www.google.com/mapfiles/markerM.png',
                     shadow: 'http://www.google.com/mapfiles/shadow50.png'
                     },
                     seafood: {
                     icon: 'http://www.google.com/mapfiles/markerK.png',
                     shadow: 'http://www.google.com/mapfiles/shadow50.png'
                     },*/
                };

                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: new google.maps.LatLng(-7.3820311,106.8073609),
                        zoom: 12
                    });
                    var infoWindow = new google.maps.InfoWindow;
                    var dest;
                    var autocomplete = new google.maps.places.Autocomplete((document.getElementById('dest')),
                            { types: ['geocode'] });

                    // Change this depending on the name of your PHP or XML file
                    downloadUrl('conn_xml.php', function(data) {
                        var xml = data.responseXML;
                        var markers = xml.documentElement.getElementsByTagName('marker');
                        Array.prototype.forEach.call(markers, function(markerElem) {
                            var name = markerElem.getAttribute('name');
                            var address = markerElem.getAttribute('address');
                            var type = markerElem.getAttribute('type');
                            var rating = markerElem.getAttribute('rating')
                            var point = new google.maps.LatLng(
                                    parseFloat(markerElem.getAttribute('lat')),
                                    parseFloat(markerElem.getAttribute('lng')));

                            var infowincontent = document.createElement('div');
                            var strong = document.createElement('strong');
                            strong.textContent = name
                            infowincontent.appendChild(strong);
                            infowincontent.appendChild(document.createElement('br'));

                            var text = document.createElement('text');
                            text.textContent = address
                            infowincontent.appendChild(text);
                            infowincontent.appendChild(document.createElement('br'));

                            var txtrating = document.createElement('txtrating');
                            txtrating.textContent = 'Rating: ' + rating

                            // infowincontent.appendChild(txtrating);
                            var icon = customIcons[type] || {};
                            var marker = new google.maps.Marker({
                                map: map,
                                position: point,
                                icon: 'houseicon.ico',
                                shadow: icon.shadow
                            });
                            marker.addListener('click', function() {
                                infoWindow.setContent(infowincontent);
                                infoWindow.open(map, marker);
                            });
                        });
                    });

                }

                function downloadUrl(url, callback) {
                    var request = window.ActiveXObject ?
                            new ActiveXObject('Microsoft.XMLHTTP') :
                            new XMLHttpRequest;

                    request.onreadystatechange = function() {
                        if (request.readyState == 4) {
                            request.onreadystatechange = doNothing;
                            callback(request, request.status);
                        }
                    };

                    request.open('GET', url, true);
                    request.send(null);
                }

                function doNothing() {}
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjeAFQrj1wF_2L6uwNjuh6Nat6gYE7Gxw&v=3.exp&sensor=false&libraries=places&language=id&callback=initMap"
                    async defer></script>

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjeAFQrj1wF_2L6uwNjuh6Nat6gYE7Gxw&v=3.exp&sensor=false&libraries=places&language=id&callback=initMap"
        async defer></script>

@endsection






