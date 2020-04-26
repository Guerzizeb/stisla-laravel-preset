@extends('layouts.skeleton')

@section('app')

<section class="section">
	<div class="d-flex flex-wrap align-items-stretch">
		<div class="col-lg-4 col-md-6 col-sm-12 order-lg-1 min-vh-100 order-2 bg-white">
			<div class="p-4 m-3 ">

				<img src="{{ asset('assets/img/stisla-fill.svg') }}" alt="logo" width="80"
					class="shadow-light rounded-circle mb-5 mt-2 auth-logo">
				<h4 class="text-dark font-weight-normal">@yield('title')</span></h4>
				
				@if ($errors->any())
				<div class="alert alert-danger alert-dismissible show fade">
					<div class="alert-title">{{ __('Sorry !') }}</div>
					
					<div class="alert-body">
						<button class="close" data-dismiss="alert">
							<span>×</span>
						</button>						
						Please correct this error before continue:
					</div>
					
				</div>
				@else
				<p class="text-muted">@yield('sub-title')</p>
				@endif

				@yield('content')

				<div class="text-center mt-5 text-small">
					Copyright &copy; Your Company. Made with 💙 by Stisla
					<div class="mt-2">
						<a href="#">Privacy Policy</a>
						<div class="bullet"></div>
						<a href="#">Terms of Service</a>
					</div>
				</div>
			</div>
		</div>
		<div class="d-sm-none d-md-block col-lg-8 col-md-6 col-sm-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
			data-background="{{ asset('assets/img/unsplash/login-bg.jpg') }}">
			<div class="absolute-bottom-left index-2">
				<div class="text-light p-5 pb-2">
					<div class="mb-5 pb-3">
						<h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
						<h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
					</div>
					Photo by <a class="text-light bb" target="_blank"
						href="https://unsplash.com/photos/a8lTjWJJgLA">Justin
						Kauffman</a> on <a class="text-light bb" target="_blank"
						href="https://unsplash.com">Unsplash</a>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection