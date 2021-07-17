<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Softnio">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Fav Icon -->
	
<link rel="shortcut icon" href="{{asset('images-current/favicons.png')}}">
	<!-- Site Title  -->
	<title>Miraweb - Exchange Giftcards and Bitcoin for Cash</title>
    <!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets/css/vendor.bundle49f7.css?ver=104')}}">
	<!-- Custom styles for this template -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" id="layoutstyle">
<link href="{{asset('css/notiflix.css')}}" rel="stylesheet" type="text/css">
	</head>
	<body class="page-user">
		<div class="topbar-wrap">
            @php
              $userwallet = Auth::user();
              $userwallet->getWallet('main');
            @endphp
			<div class="topbar is-sticky">
				<div class="container">
					<div class="d-flex justify-content-between align-items-center">
						<ul class="topbar-nav d-lg-none">
							<li class="topbar-nav-item relative">
							<a class="toggle-nav" href="#">
								<div class="toggle-icon">
								<span class="toggle-line"></span>
								<span class="toggle-line"></span>
								<span class="toggle-line"></span>
								<span class="toggle-line"></span>
							</div></a>
							</li>
						<!-- .topbar-nav-item -->
						</ul>
					<!-- .topbar-nav -->
					<div style="display:flex;">
					    <a class="topbar-logo vb" href="{{url('dashboard')}}" style=" margin:10px;">
                    <img src="{{asset('images-current/logo-light.svg')}}" srcset="{{asset('images-current/logo-light.svg')}} 2x" alt="logo">
					</a>
					
					 <h4 style="color:#fff; margin:30px 30px;">BTC / NGN @include('includes.btc_price')</h4>
					</div>
					
					<ul class="topbar-nav">
                    {{-- ############## USER DROP-DOWN  ############--}}

                        @include('dashboard.partials.drop_down')
							<!-- .topbar-nav-item -->
						</ul>
						<!-- .topbar-nav -->
					</div>
				</div>
				<!-- .container -->
			</div>
			<!-- .topbar -->
			<div class="navbar">
				<div class="container">
					<div class="navbar-innr">
						<ul class="navbar-menu">
                            <li><a href="{{url('/')}}"><em class="ikon ikon-dashboard"></em> Home</a></li>

							<li><a href="{{url('dashboard')}}"><em class="ikon ikon-dashboard"></em> Dashboard</a></li>

							<li><a href="{{url('dashboard/withdraw')}}"><em class="ikon ikon-distribution"></em> Withdraw Now</a></li>
                        <li><a href="{{url('dashboard/transactions')}}"><em class="ikon ikon-transactions"></em> Transactions</a></li>
							<li><a href="{{route('dashboard.account')}}"><em class="ikon ikon-user"></em>My Account</a></li>
                            {{-- <li><a href="{{url('dashboard/recharge_airtime')}}"><em class="ikon ikon-transactions"></em>Airtime Recharge</a></li>
                            <li><a href="{{url('dashboard/data_recharge')}}"><em class="ikon ikon-transactions"></em>Data Recharge</a></li> --}}
                        <li><a href="{{route('dashboard.wallets')}}"><em class="ikon ikon-distribution"></em>Wallet</a></li>
                        <li><a href="{{route('dashboard.cards')}}"><em class="ikon ikon-distribution"></em>Cards</a></li>



                       <li class="has-dropdown page-links-all">
                                    <a class="drop-toggle" href="#"><em class="ikon ikon-distribution"></em> Top Up</a>
                                  <ul class="navbar-dropdown">
                                                <li><a href="{{route('dashboard.recharge_airtime')}}"><i class="ti ti-infinite"></i>Airtime</a></li>
                                        <li><a href="{{route('dashboard.data_recharge')}}"><i class="ti ti-id-badge"></i>Data</a></li>
                                        <li><a href="{{route('dashboard.airtime-to-cash')}}"><i class="ti ti-id-infinite"></i>Airtime to Cash</a></li>
                                                </ul></li>
                    
                          <!--  <li class="topbar-nav-item relative">
                                <a href="#" class="toggle-tigger"><em class="ikon ikon-distribution"></em>Top Up</a>

                                <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right">
                                        <ul class="user-links">
                                        <li><a href="{{route('dashboard.recharge_airtime')}}"><i class="ti ti-infinite"></i>Airtime</a></li>
                                        <li><a href="{{route('dashboard.data_recharge')}}"><i class="ti ti-id-badge"></i>Data</a></li>
                                        <li><a href="{{route('dashboard.airtime-to-cash')}}"><i class="ti ti-id-infinite"></i>Airtime to Cash</a></li>

                                        </ul>
                                    </div>
                                </li>-->
                                <!-- .topbar-nav-item -->
                                
                                
                                <li class="has-dropdown page-links-all">
                                    <a class="drop-toggle" href="#"><em class="ikon ikon-transactions"></em> Pay Bills</a>
                                  <ul class="navbar-dropdown">
                                                 {{-- <li><a href=""><i class="ti ti-id-badge"></i>Internet</a></li> --}}
                                                <li><a href="{{route('dashboard.television')}}"><i class="ti ti-infinite"></i>Television</a></li>
                                                <li><a href="{{route('dashboard.electricity')}}"><i class="ti ti-eye"></i>Electricity</a></li>
                                                <li><a href="{{route('dashboard.educational')}}"><i class="ti ti-id-badge"></i>Educational</a></li>
                                                </ul></li>
                     
                           
                                <!--<li class="topbar-nav-item relative">
                                    <a class="toggle-tigger" href="#"><em class="ikon ikon-transactions"></em>Pay Bills</a>
                                    <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                                            <ul class="user-links">
                                            {{-- <li><a href=""><i class="ti ti-id-badge"></i>Internet</a></li> --}}
                                                <li><a href="{{route('dashboard.television')}}"><i class="ti ti-infinite"></i>Television</a></li>
                                                <li><a href="{{route('dashboard.electricity')}}"><i class="ti ti-eye"></i>Electricity</a></li>
                                                <li><a href="{{route('dashboard.educational')}}"><i class="ti ti-id-badge"></i>Educational</a></li>
                                            </ul>
                                        </div>
                                    </li>-->
                                    <!-- .topbar-nav-item -->
                            
                                <li><a href="{{route('dashboard.rates')}}"><em class="ikon ikon-distribution"></em>Rates</a></li>

                            </ul>

						</div>
						<!-- .navbar-innr -->
					</div>
					<!-- .container -->
				</div>
				<!-- .navbar -->
			</div>
			<!-- .topbar-wrap -->
@yield('content')
			<!-- .container -->
		</div>
		
		
		<style>
		
		@media screen and (max-width: 760px) {
  .vb{
    margin:20px !important;
  }
}
		
		
		  .btn-primary {
  background: #253992;
    border-color: #253992;
}

.btn-outline.btn-info {
    color: #253992;
}

.btn-dark {
    background: #253992;
    border-color: #253992;
}

.topbar {
    background: #253992;
    position: relative;
    z-index: 3;
}
		</style>
		
		
		
		<!-- .page-content -->
		<div class="footer-bar">
			<div class="container">
				<div class="row align-items-center justify-content-center">
			
					<!-- .col -->
					<div class="col-md-12 mt-2 mt-sm-0">
						<div class="d-flex justify-content-between justify-content-md-end align-items-center  pdt-0-5x pdb-0-5x">
							<div class="copyright-text">&copy; 2021 Miraweb</div>
						
						</div>
					</div>
					<!-- .col -->
				</div>
				<!-- .row -->
			</div>
			<!-- .container -->
		</div>
		<!-- .footer-bar -->
        <!-- JavaScript (include all script here) -->
        <script src="{{asset('js/notiflix.js')}}"></script>
    <script src="{{asset('dist/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.bundle49f7.js')}}"></script>
    <script src="{{asset('assets/js/script49f7.js?ver=104')}}"></script>
    <script src="{{asset('js/axios.min.js')}}"></script>
      @yield('script')

	</body>
</html>
