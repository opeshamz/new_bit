@extends('layouts.sub-front')
@section('content')

<div class="gradient-bg title-wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 whitecolor">
            <h3 class="float-left">About Our Company</h3>
            <ul class="breadcrumb top10 bottom10 float-right">
            <li class="breadcrumb-item hover-light"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item hover-light">About</li>
            </ul>
        </div>
    </div>
</div>
</div>
</section>

<section id="aboutus" class="padding_top padding_bottom">
    <div class="container aboutus">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 padding_bottom_half">
                
            <div class="image">
                <br><br><img alt="SEO" src="{{asset('images-current/aboutus.png')}}"></div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">Who We <span class="defaultcolor">Are</span> & What We <span class="defaultcolor">Do</span></h2>
                <p class="bottom35 ps"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br>
 </p>

            </div>
        </div>
        <div class="row  align-items-center">
            <div class="col-lg-5  col-md-6 padding_top_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">The Best Exchange Platform  </h2>
                <p class="bottom35 ps">Lorem Ipsum is simply dummy text of the printing and typesetting
</p>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 padding_top_half">
                <div class="progress-bars">
                    <div class="progress">
                        <p>Transparency</p>
                        <div class="progress-bar gradient-bg" data-value="100">
                            <span class="gradient-bg whitecolor">100%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <p>Best Rates</p>
                        <div class="progress-bar gradient-bg" data-value="100">
                            <span class="gradient-bg whitecolor">100%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <p>User Friendly</p>
                        <div class="progress-bar gradient-bg" data-value="100">
                            <span class="gradient-bg whitecolor">100%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About us ends -->




<!-- Our Team ends-->
@endsection
