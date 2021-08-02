@extends('Frontend.layouts.main')
@section('contents')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-inner text-center">
                    <h1 class="page-title">Online Registration</h1>
                        <ul>
                            <li><a class="active" href="index.html">Home</a></li>
                            <li>Registration</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section id="contact-map" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Registration  form</h2>
                       
                </div>
            </div>
        </div>

        @include('auth.messages')
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="form-wrapper">
                        <form method="POST"  action="{{ url('registrations') }}">
                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="salutations">Title/Salutaion</label>
                                    <select name="salutations" id="salutations" class="form-control">
                                        <option value="" selected> --select--</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option> 
                                        <option value="Ms">Ms</option>  
                                        <option value="Dr">Dr</option>    
                                        <option value="Prof">Prof</option>    
                                        <option value="Hon">Hon</option> 


                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" >
                                    <span class="text-danger" id="fullname"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="" selected> --select--</option>
                                        <option value="Pan Africa Archaeological Association Member">Pan Africa Archaeological Association Member</option>
                                        <option value="Non-member">Non-member</option> 
                                        <option value="Pan Africa Archaeological Association Registered Student">Pan Africa Archaeological Association Registered Student</option>  
                                        <option value="Non-registered students">Non-registered students</option>      

                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="affliation">Institutional affiliation</label>
                                    <input type="text" class="form-control" id="affliation" name="affliation"  >
                                    <span class="text-danger" id="affliation"></span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="affliation">Preffered session to attend</label>
                                    <select name="sessions" id="sessions" class="form-control" >
                                        <option value="" selected> --select--</option>
                                        @foreach($sessions as $sessions)
                                        <option value="{{$sessions->title}}">{{$sessions->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="address">Full address</label>
                                    <input type="text" class="form-control" id="address" name="address"  >
                                    <span class="text-danger" id="address"></span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="conference">Post conference activities</label>
                                    <select name="conference" id="conference" class="form-control" >
                                        <option value="" selected> --select--</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <span class="text-danger" id="category"></span>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="presentation">Are you submitting for presentation?</label>
                                <select name="presentation" id="presentation" class="form-control"  onchange="showDiv(this)">
                                       <option value="" selected> --select--</option>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <span class="text-danger" id="category"></span>
                                </div>
                            </div>  
                            <div class="form-row" id="hidden_div" style="display:none;">
                                     <div class="form-group col-md-12">
                                        <label for="reg_sessions">Registered sessions</label>
                                            <select name="reg_sessions" id="reg_sessions" class="form-control" >
                                                <option value="" selected>Registered Session</option>
                                                @foreach($sess as $sess)
                                                <option value="{{$sess->title}}">{{$sess->title}}</option>
                                                @endforeach
                                               
                                            </select>                                           
                                      </div>
                                
                                       <div class="form-group col-md-12">
                                        <label for="mode">Presentation mode</label>
                                            <select name="mode" id="mode" class="form-control"  onchange="showDiv1(this)">
                                                <option value="" selected>--select-- </option>
                                                <option value="Podium">Podium</option>
                                                <option value="Poster">Poster</option>
                                                <option value="Perfomance">Perfomance</option>
                                                <option value="Other">Other</option>
                                            </select>
                                           </div>

                                           <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"  >                              
                                          </div>


                                          <div class="form-group col-md-12">
                                            <label for="abstract">Abstract</label>
                                                <input type="textarea" class="form-control" id="abstract" name="abstract"  > 
                                               </div>

                                       </div>
       
                                        <div class="col-md-6">                
                                            <div class="form-submit">
                                                <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit application</button>
                                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            </div>
                                        </div>
                            </div>
                        </form>
                    </div>
                    </div>
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
<script type="text/javascript">
    function showDiv(select){
       if(select.value==1){
        document.getElementById('hidden_div').style.display = "block";
       } else{
        document.getElementById('hidden_div').style.display = "none";
        document.getElementById('hidde_div1').style.display = "none";
        document.getElementById('hidde_div2').style.display = "none";
       }
    } 


    function showDiv1(select){
       if(select.value=="Podium"){
        document.getElementById('hidde_div2').style.display = "none";
        document.getElementById('hidde_div1').style.display = "block";
       }else if(select.value=="Perfomance"){
        document.getElementById('hidde_div1').style.display = "none";
        document.getElementById('hidde_div2').style.display = "block";
       }
        else{
        document.getElementById('hidde_div1').style.display = "none";
        document.getElementById('hidde_div2').style.display = "none";
       }
    } 
    </script>
@endsection