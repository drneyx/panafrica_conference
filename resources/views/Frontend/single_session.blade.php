@extends('Frontend.layouts.main')
@section('contents')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-inner text-center">
                    <h1 class="page-title">Conference sessions</h1>
                        {{-- <ul>
                            <li><a class="active" href="index.html">Home</a></li>
                            <li>Session</li>
                        </ul> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    {{-- <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">{{$sessions->title}}</h2> --}}
                       
                </div>
            </div>
        </div>
        <div class="row">
           
            <div class="col-lg-12 col-md-12 col-xs-12 mt-5">
                
                <div class="blog-session">
                    {{-- <div class="blog-image">
                        <a href="#"><img class="img-fluid" src="{{asset('img/blog/img-1.jpg' )}}" alt=""></a>
                    </div> --}}
                    {{-- <div class="descr ml-3">
                        <div class="icon ml-3"><i class="lni-image"></i>
                    </div> --}}
                
                    <p class="title"><strong>Title of the session</strong></p>
                    <p>{{$sessions->title}}</p>

                    <p class="title mt-4"><strong>Session Organizer(s)</strong></p>
                    <p>{!!$sessions->organizer!!}</p>


                    <p class="title mt-4"><strong>Delivery format</strong></p>
                    <p>{{$sessions->delivery}}</p>


                    <p class="title mt-4"><strong>Nature of a session</strong></p>
                    <p>{{$sessions->nature}}</p>

                    <p class="title mt-4"><strong>Session abstract </strong></p>
                    <p>{!!$sessions->abstract!!}</p>
                </div>
                {{-- <div class="meta-tags">
                    <span class="date"><i class="lni-calendar"></i> Click to see more details...</span>
                       
                    </div> --}}
                </div>
            </a>
            </div>
           
                    
        </div>  
    </div>
</div>
</section>
<section id="cta" class="section-padding">
    <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-xs-12 wow fadeInDown animated" data-wow-delay="0.3s">
                    <div class="cta-text text-center">
                        <h3>Wellcome to the Conference</h3>
                        <p>To attend this conference as a presenter or otherwise, please follow the link below to open the online registration form. Please provide all the required details and fill the form correctly to avoid unnecessary inconveniences.</p>
                        <a href="/online_registration" class="btn btn-common">Register now</a>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection