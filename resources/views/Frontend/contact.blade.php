@extends('Frontend.layouts.main')
@section('contents')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-inner text-center">
                    <h1 class="page-title">Contact Us</h1>
                        <ul>
                            <li><a class="active" href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="map">
    <div class="container-fluid">
        <div class="row">
            <div id="map_canvas"></div>
        </div>
    </div>
</section>


<section id="contact-map" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Phone Number: 093939389</p>
                        <p class="wow fadeInDown" data-wow-delay="0.2s">Email address: panaf2022@gmail.com</p>
                </div>
            </div>
        </div>
       
    </div>
</section>



<section id="contact-text">
    <div class="container">
        <div class="row contact-wrapper">
            <div class="col-lg-4 col-md-5 col-xs-12">
                <ul>
                    <li><i class="lni-home"></i></li>
                    <li><span>Conference Organising Committee</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-12">
                <ul>
                    <li><i class="lni-phone"></i></li>
                    <li><span>+789 123 456 79</span></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-3 col-xs-12">
                <ul>
                    <li><i class="lni-envelope"></i></li>
                    <li><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b684e4b4b54494f7b5e435a564b575e15585456">panaf2022@gmail.com</a></span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection