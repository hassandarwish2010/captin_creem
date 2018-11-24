	<style type="text/css">
		header{
			font-family: 'Cairo', sans-serif;
		}
	</style>
      <div id="fh5co-wrapper">
		<div id="fh5co-page">
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					 
					<h1 id="fh5co-logo"><a href="#"><img class="img-responsive img-rounded" src="{{ asset('public/images/emirates.jpg') }}" /></a></h1>

					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-logo-primary-menu">
							
							<li style="font-family:Cairo"><a href="{{ route('contact') }}">{{ trans('lang.contact_us') }}</a></li>
							<li style="font-family:Cairo"><a href="{{ route('information') }}">{{ trans('lang.articles') }}</a></li>
							
							<li style="font-family:Cairo"><a href="{{ route('about') }}">{{ trans('lang.about') }}</a></li>
							<li style="font-family:Cairo"><a href="{{ url('advantages/مزايا_التسجيل') }}">مزايا التسجيل</a></li>
							<li style="font-family:Cairo"><a href="{{ url('login/تسجيل') }}">{{ trans('lang.Login') }}</a></li>
							<li class="" style="font-family:Cairo"><a href="{{ route('index') }}">{{ trans('lang.home') }}</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

   