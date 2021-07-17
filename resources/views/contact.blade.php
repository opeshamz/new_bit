@extends('layouts.sub-front')
@section('content')

<div class="gradient-bg title-wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 whitecolor">
            <h3 class="float-left">Help Center</h3>
            <ul class="breadcrumb top10 bottom10 float-right">
                <li class="breadcrumb-item hover-light"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item hover-light">Contact</li>
            </ul>
        </div>
    </div>
</div>
</div>
</section>
<!--Page Header ends -->
<!-- Contact US -->
<section id="stayconnect1" class="bglight position-relative padding noshadow">
<div class="container whitebox">
<div class="widget py-5">
    <div class="row">
        <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span class="font-normal">Contact</span> Us
                <span class="divider-center"></span>
            </h2>
        </div>

        <div class="col-md-8 col-sm-8" style="margin:auto;">
            @if(Session::has('success'))
              <div class="alert alert-success">
        	    {{ Session::get('success') }}
               </div>
           @endif
            <div class="heading-title  wow fadeInUp" data-wow-delay="300ms">
            <form action="contact" method="POST" >
                @csrf
                    <div class="row px-2">
                        <div class="col-md-12 col-sm-12" id="result1"></div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="name1" class="d-none"></label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name:" name="name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="email1" class="d-none"></label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email"  placeholder="Email:" name="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="email1" class="d-none"></label>
                                <input class="form-control @error('subject') is-invalid @enderror" type="text" placeholder="Subject:" name="subject">
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="message1" class="d-none"></label>
                                <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Message:" name="message"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <button type="submit" class="button btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</section>
<!-- Contact US ends -->
<!-- Start of LiveChat (www.livechatinc.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 12533859;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechatinc.com/chat-with/12533859/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

@endsection
