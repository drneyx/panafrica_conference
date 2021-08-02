@extends('Frontend.layouts.main')
@section('contents')
<div id="hero-area" class="hero-area-bg">
    <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-12">
                   <div class="contents text-center">
                       <div class="icon">
                           {{-- <i class="lni-mic"></i> --}}
                                 </div>
                      
                        <h2 class="head-title">16th CONGRESS OF THE PAN AFRICAN ARCHAEOLOGICAL ASSOCIATION FOR PREHISTORY AND THE RELATED STUDIES</h2>
                          <p class="banner-desc">
                              LEARNING FROM AFRICAN PASTS TO MANAGE LOCAL AND GLOBAL DISASTERS</p>
                           <p class="banner-info">THE STATE UNIVERSITY OF ZANZIBAR (SUZA) - TANZANIA<br>
                          7TH - 12TH AUGUST 2022</p>
                           <div class="banner-btn">
                       <a href="#" class="btn btn-common">Welcome</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
      </div>
 </header>
 
 
 <section id="count">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-10">
            <div class="count-wrapper text-center">
                <div class="time-countdown wow fadeInUp" data-wow-delay="0.2s">
                   <div id="clock" class="time-count"></div>
                   </div>
                </div>
             </div>
         </div>
     </div>
 </section>
 
 
  <section id="about" class="section-padding">
     <div class="container">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-xs-12">
                 <div class="img-thumb">
                     <img class="img-fluid" src="{{asset('img/moroco.jpg' )}}" alt="">
                 </div>
             </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                 <div class="about-content">
                  <div>
                      <div class="about-text">
                         <h2>From Morocco to Tanzania, the Land of Zanzibar and Kilimanjaro</h2>
                             <p>In 1331/1332, a Moroccan famous traveler Ibn Battuta, visited and spent a night at Kilwa Kisiwani in what today southeastern Tanzania is. In his remark after the trip, he reports that “...the city of Kilwa is among the most beautiful cities and most elegantly built...” Nearly 690 after Ibn Battuta remarks, the Pan African Archaeological Association (PAA) and Tanzania’s Local Organizing Committee (LOC) invite you to Tanzania for the 16th Congress. Indeed, it is with great pleasure we announce that the 16th Pan African Archaeological Association (PAA) Congress will take place in Zanzibar, United Republic of Tanzania, from 7 to 12 August 2022.</p>
                      </div>
                     <ul class="stylish-list mb-3">
                         <li><i class="lni-check-mark-circle"></i>Tanzania</li>
                         <li><i class="lni-check-mark-circle"></i>Zanzibar</li>
                         <!--<li><i class="lni-check-mark-circle"></i>Profitability is the primary goal of all business</li>
                         <li><i class="lni-check-mark-circle"></i>Learn how to grow your Business </li>
                         <li><i class="lni-check-mark-circle"></i>Professional solutions for your business</li>-->
                     </ul>
                      <!--<a class="btn btn-common" href="#">Read More</a>-->
                     </div>
                 </div>
             </div>
         </div>
      </div>
 </section>


 <section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Keynote Speakers</h2>
                        {{-- <p class="wow fadeInDown" data-wow-delay="0.2s">Shortdescription of the latest news if any</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($speakers as $speakers)
            <div class="col-lg-3 col-md-3 col-xs-12">
                
                <div class="blog-item">
                    <div class="blog-image">
                       <a href="single_speaker/{{$speakers ->id}}"><img class="img-fluid" src="/storage/img/{{$speakers->image}}" alt=""></a>
                    </div>
                    <div class="descr">
                        <div class="icon"><i class="lni-image"></i>
                    </div>
                
                    <p class="title2">{{$speakers->name}}</p>
                    <p>{!! substr($speakers->bio , 0, 100) !!} {{ strlen(strip_tags($speakers->bio)) > 100 ? '...' : '' }}</p>
                </div>
                <a href="single_speaker/ {{$speakers ->id}}">
                <div class="meta-tags">
                    <span class="date"><i class="lni-calendar"></i> Click to see more details...</span>
                       
                    </div>
                </a>
                </div>
            
            </div>
            @endforeach
                    
        </div>  
    </div>
</div>
</section>
 
 
 <div class="ready-to-play">
       <video id="bgvid" class="stop" loop>
         <source src="{{asset('video/event.webm')}}" type="video/mp4">
        </video>
        <div id="polina" class="video-text">
            <div class="tb-t">
                <div class="tb-c">
                   <div class="polina"><button><i class='lni-play'></i></button></div>
                   </div>
                 </div>
             </div>
         </div>
 
 
  <section id="information-bar">
     <div class="container">
         <div class="row inforation-wrapper">
           <div class="col-lg-2 col-md-6 col-xs-12">
                 <ul>
                       <li><i class="lni-calendar"></i></li>
                       <li><span><b>Submissions of abstracts </b> 15 November 2021</span></li>
                 </ul>
             </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                 <ul>
                       <li><i class="lni-calendar"></i></li>
                       <li><span><b>Session’s proposals submission</b> 20th July 2021</span></li>
                 </ul>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-12">
                 <ul>
                      <li><i class="lni-calendar"></i></li>
                      <li><span><b>Registration opens</b> 1st January 2022</span></li>
                 </ul>
             </div>
             <div class="col-lg-2 col-md-6 col-xs-12">
                 <ul>
                      <li><i class="lni-calendar"></i></li>
                      <li><span><b>Abstract decisions announced </b> 1st December 2021</span></li>
                 </ul>
             </div>
             
            <div class="col-lg-3 col-md-6 col-xs-12">
                 <ul>
                      <li><i class="lni-calendar"></i></li>
                      <li><span><b>Early bid registration payment </b> 30th April 2022</span></li>
                 </ul>
             </div>
         </div>
     </div>
 </section>
 
 
 <section id="intro" class="intro section-padding">
      <div class="container">
         <div class="row">
              <div class="col-12">
                  <div class="section-title-header text-center">
                       <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Important Information to Participants</h2>
                             {{-- <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p> --}}
                 </div>
              </div>
          </div>
         <div class="row intro-wrapper">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="single-intro-text mb-70">
                    <i class="lni-microphone"></i>
                        <h3>Call for Sessions</h3>
                        <p>As PAA will be celebrating its 75th anniversary since its first congress in Nairobi, Kenya in 1947, the 16th Congress wishes to announce and solicit session proposals that explore how past humans’ coping and resilience strategies can contribute in understanding and managing current local and global threats.
                        </p><br>

                        <p>We seek to explore answers for major three questions: 1) How did African communities in ancient times cope with natural phenomena and disasters such as landslides, climate change, droughts, famine, and insects like locusts as well as human-induced disasters such as oppressive colonial rule brutalities, slavery and racialization which resulted in forced migration, massacres, genocide, etc.? 2) What forms of cultural resiliency or responses did these African communities develop to accommodate these phenomena? and, 3) What lessons can present African communities learn to manage current and future local and regional threats such as locusts attacking African countries as well as global pandemics such as the bubonic plague and Covid-19? As part of the celebrations to mark the 75th anniversary of PAA, and under the theme ‘Learning from the African Pasts to Manage Local and Global Disasters’ we invite sessions that aim to explore how past African societies managed and responded to diverse traumas, including pandemics, natural disasters, famine, and the brutalities of colonization.</p>
                    <span class="count-number">01</span>
                </div>
            </div>

             <div class="col-lg-12 col-md-12 col-xs-12">
                 <div class="single-intro-text mb-70">
                     <i class="lni-microphone"></i>
                         <h3>Students day</h3>
                         <p>PAA Congress 2022 Student Day will take place at the State University of Zanzibar (SUZA) on Sunday of 6th August 2022. Student members of PAA and those planning to join before the congress should contact the organizing committee through panaf2022@gmail.com.</p>
                     <span class="count-number">01</span>
                 </div>
             </div>


             <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="single-intro-text mb-70">
                    <i class="lni-microphone"></i>
                        <h3>Workshops before and after the main conference</h3>
                        <p>Anyone wishing to arrange small workshops on specific themes should notify the Organizing Committee before 1st July 2022 to help facilitate meeting room arrangements. Although a free meeting room may be available, workshops’ organizers and participants will have to bear costs for meals and other refreshments.</p>
                    <span class="count-number">01</span>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="single-intro-text mb-70">
                    <i class="lni-microphone"></i>
                        <h3>Post conference activities</h3>
                        <p>Anyone wishing to arrange small workshops on specific themes should notify the Organizing Committee before 1st July 2022 to help facilitate meeting room arrangements. Although a free meeting room may be available, workshops’ organizers and participants will have to bear costs for meals and other refreshments.</p>
                    <span class="count-number">01</span>
                </div>
            </div>
             {{-- <div class="col-lg-4 col-md-6 col-xs-12">
                 <div class="single-intro-text">
                     <i class="lni-users"></i>
                         <h3 class="ts-title">New People</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi. </p>
                     <span class="count-number">02</span>
                 </div>
                 <div class="border-shap left"></div>
             </div>
             <div class="col-lg-4 col-md-6 col-xs-12">
                 <div class="single-intro-text mb-70">
                     <i class="lni-bullhorn"></i>
                        <h3>Global Event</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus mollitia, excepturi.</p>
                     <span class="count-number">03</span>
                 </div>
             </div> --}}
         </div>
     </div>
 </section>


 <section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Hotel Accommodations</h2>
                        {{-- <p class="wow fadeInDown" data-wow-delay="0.2s">Shortdescription of the latest news if any</p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($hotels as $hotels)
            <div class="col-lg-3 col-md-3 col-xs-12">
                
                <div class="blog-item">
                    <div class="blog-image">
                        <a href="single_hotel/{{$hotels ->id}}"><img class="img-fluid" src="/storage/img/{{$hotels->image}}" alt=""></a>
                    </div>
                    <div class="descr">
                        <div class="icon"><i class="lni-image"></i>
                    </div>
                
                    <p class="title">{{$hotels->name}}</p>
                    <p>{!! substr($hotels->bio , 0, 100) !!} {{ strlen(strip_tags($speakers->bio)) > 100 ? '...' : '' }}</p>
                </div>
                <a href="single_hotel/{{$hotels ->id}}">
                <div class="meta-tags">
                    <span class="date"><i class="lni-calendar"></i> Click to see more details...</span>
                       
                    </div>
                </a>
                </div>
            
            </div>
            @endforeach
                    
        </div>  
    </div>
</div>
</section>
 
 
 <section class="counter-section section-padding">
     <div class="container">
        <div class="row">
             <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
                <div class="counter">
                     <div class="icon">
                         <i class="lni-mic"></i>
                     </div>
                 <div class="counter-content">
                     <div class="counterUp">43</div>
                          <p>Spekers</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
                 <div class="counter">
                     <div class="icon">
                         <i class="lni-bulb"></i>
                     </div>
                     <div class="counter-content">
                         <div class="counterUp">800</div>
                         <p>Participate</p>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
                 <div class="counter">
                     <div class="icon">
                        <i class="lni-briefcase"></i>
                     </div>
                 <div class="counter-content">
                     <div class="counterUp">24</div>
                         <p>Sponsors</p>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
             <div class="counter">
                 <div class="icon">
                    <i class="lni-coffee-cup"></i>
                 </div>
             <div class="counter-content">
                 <div class="counterUp">34</div>
                 <p>Sessions</p>
                 </div>
             </div>
         </div>
      </div>
   </div>
 </section>
 
 
 <section id="schedules" class="schedule section-padding">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section-title-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Schedules</h2>
                     <p class="wow fadeInDown" data-wow-delay="0.2s">Description of the schedules of the event<br> cule dicta iriure at phaedrum.</p>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12 mb-5 text-center">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-expanded="true">
                        <div class="item-text"><h4>Day 01</h4><h5>14 February 2020</h5></div>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday">
                            <div class="item-text">
                                 <h4>Day 02</h4><h5>15 February 2020</h5>
                             </div>
                         </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday">
                            <div class="item-text">
                                <h4>Day 03</h4><h5>16 February 2020</h5>
                             </div>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday">
                           <div class="item-text">
                               <h4>Day 04</h4><h5>17 February 2020</h5></div>
                         </a>
                     </li>
                 </ul>
             </div>
             
         </div>
     </div>
 </div>
 </div>
 </div>
 </section>
 
 
 <section id="pricing" class="section-padding">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section-title-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Registration</h2>
                     <p class="wow fadeInDown" data-wow-delay="0.2s">Conference Short description <br> discription cont ...</p>
                 </div>
             </div>
         </div>
         <div class="row">
           
             <div class="col-lg-6 col-md-6 col-xa-12 mb-3">
                 <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
                     <div class="colmun-title">
                         <h5>Early Registration Price</h5>
                     </div>
                 <div class="price">
                     <h2>Deadline 29 december</h2>
                 </div>
                 <div class="pricing-list">
                     <ul>
                         <li><i class="lni-check-mark-circle"></i><span class="text align-start">Pan Africa Archaeological Association Members</span> <span class="text-p">$100</span></li>
                         <li><i class="lni-check-mark-circle"></i><span class="text align-start">Non-member</span><span class="text-p">$150</span></li>
                         <li><i class="lni-check-mark-circle"></i><span class="text">Pan Africa Archaeological Association Registered Student</span><span class="text-p">$30</span></li>
                         <li><i class="lni-check-mark-circle"></i><span class="text">Non-registered students </span><span class="text-p">$50</span></li>
                     </ul>
                 </div>
                 <a href="/online_registration" class="btn btn-common">Online registration</a>
                 </div>
             </div>

             <div class="col-lg-6 col-md-6 col-xa-12 mb-3">
                <div class="price-block-wrapper wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="colmun-title">
                        <h5>Late Registration Price</h5>
                    </div>
                <div class="price">
                    <h2>Deadline 29 december</h2>
                </div>
                <div class="pricing-list">
                    <ul>
                        <li><i class="lni-check-mark-circle"></i><span class="text">Pan Africa Archaeological Association Members</span> <span class="text-p">$125</span></li>
                        <li><i class="lni-check-mark-circle"></i><span class="text">Non-member</span><span class="text-p">$187.5</span></li>
                        <li><i class="lni-check-mark-circle"></i><span class="text">Pan Africa Archaeological Association Registered Student</span><span class="text-p">$37.5</span></li>
                        <li><i class="lni-check-mark-circle"></i><span class="text">Non-registered students </span><span class="text-p">$62.5</span></li>
                    </ul>
                </div>
                <a href="/online_registration" class="btn btn-common">Online registration</a>
                </div>
            </div>
          
    </div>
 </div>
 </section>
 
 
 <section id="blog" class="section-padding">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="section-title-header text-center">
                     <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsers</h2>
                         <p class="wow fadeInDown" data-wow-delay="0.2s">Shortdescription of the latest news if any</p>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-3 col-md-6 col-xs-12">
                 <div class="bl,og-item">
                     <div class="b.log-image">
                         <a href="#"><img class="log" src="{{asset('img/Udsm.png')}}" alt=""></a>
                         {{-- <a href="#"><img class="log" src="{{asset('img/Udsm.png')}}" alt=""></a> --}}
                     </div>
                     
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="bl,og-item">
                    <div class="b.log-image">
                        <a href="#"><img class="log" src="{{asset('img/Udsm.png')}}" alt=""></a>
                    </div>
                    
                </div>
            </div>
    
             </div>
         {{-- <div class="col-12 text-center">
             <a href="news.html" class="btn btn-common">View all Blog</a>
         </div> --}}
     </div>
 </div>
 </section>
 
 <section id="google-map-area">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 
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